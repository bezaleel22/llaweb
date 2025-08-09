#!/usr/bin/env node

/**
 * SvelteKit Link Checker Script
 * 
 * This script tests for:
 * - Broken internal links
 * - 404 errors on routes
 * - Inaccessible pages
 * - External link validation
 * - Asset availability
 * 
 * Usage: node scripts/test-links.js [--base-url=http://localhost:5173]
 */

import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);
const projectRoot = path.join(__dirname, '..');

// Configuration
const DEFAULT_BASE_URL = 'http://localhost:5173';
const baseUrl = process.argv.find(arg => arg.startsWith('--base-url='))?.split('=')[1] || DEFAULT_BASE_URL;

// Test results
const results = {
  routes: [],
  links: [],
  assets: [],
  errors: [],
  summary: {
    totalRoutes: 0,
    accessibleRoutes: 0,
    totalLinks: 0,
    brokenLinks: 0,
    totalAssets: 0,
    brokenAssets: 0
  }
};

// Color codes for console output
const colors = {
  green: '\x1b[32m',
  red: '\x1b[31m',
  yellow: '\x1b[33m',
  blue: '\x1b[34m',
  reset: '\x1b[0m',
  bold: '\x1b[1m'
};

/**
 * Log with colors
 */
function log(message, color = 'reset') {
  console.log(`${colors[color]}${message}${colors.reset}`);
}

/**
 * Make HTTP request with timeout
 */
async function makeRequest(url, timeout = 10000) {
  try {
    const controller = new AbortController();
    const timeoutId = setTimeout(() => controller.abort(), timeout);
    
    const response = await fetch(url, {
      signal: controller.signal,
      headers: {
        'User-Agent': 'SvelteKit-Link-Checker/1.0'
      }
    });
    
    clearTimeout(timeoutId);
    return {
      url,
      status: response.status,
      ok: response.ok,
      statusText: response.statusText,
      headers: Object.fromEntries(response.headers.entries())
    };
  } catch (error) {
    return {
      url,
      status: null,
      ok: false,
      error: error.message,
      timeout: error.name === 'AbortError'
    };
  }
}

/**
 * Discover all routes from the SvelteKit file structure using Node.js built-ins
 */
function discoverRoutes() {
  const routes = new Set();
  
  try {
    // Recursively find all +page.svelte files
    function findPageFiles(dir, basePath = '') {
      const entries = fs.readdirSync(dir, { withFileTypes: true });
      
      for (const entry of entries) {
        const fullPath = path.join(dir, entry.name);
        const relativePath = path.join(basePath, entry.name);
        
        if (entry.isDirectory()) {
          // Skip route group directories completely
          if (entry.name.startsWith('(') && entry.name.endsWith(')')) {
            return;
          }
          findPageFiles(fullPath, relativePath);
        } else if (entry.name === '+page.svelte') {
          let route = basePath
            .replace(/\\/g, '/') // Convert Windows paths
            .replace(/\/\(.*?\)/g, ''); // Remove route groups like (home)
          
          // Skip dynamic routes like [id] - we'll add specific ones manually
          if (route.includes('[') && route.includes(']')) {
            return;
          }
          
          if (route === '') route = '/';
          if (!route.startsWith('/')) route = '/' + route;
          
          // Skip duplicate root routes (route groups create duplicates)
          if (route === '/' && routes.has('/')) {
            return;
          }
          
          routes.add(route);
        }
      }
    }
    
    const routesDir = path.join(projectRoot, 'src', 'routes');
    if (fs.existsSync(routesDir)) {
      findPageFiles(routesDir);
    }
    
    // Add known dynamic routes
    routes.add('/blog/1');
    routes.add('/blog/2');
    routes.add('/blog/3');
    routes.add('/blog/4');
    
  } catch (error) {
    log(`Error discovering routes: ${error.message}`, 'red');
  }
  
  return Array.from(routes).sort();
}

/**
 * Extract links from HTML content
 */
function extractLinks(html, baseUrl) {
  const links = new Set();
  
  // Extract href attributes
  const hrefMatches = html.match(/href=["']([^"']+)["']/g) || [];
  hrefMatches.forEach(match => {
    const href = match.match(/href=["']([^"']+)["']/)[1];
    if (href && !href.startsWith('#') && !href.startsWith('javascript:')) {
      links.add(href);
    }
  });
  
  // Extract src attributes for assets
  const srcMatches = html.match(/src=["']([^"']+)["']/g) || [];
  srcMatches.forEach(match => {
    const src = match.match(/src=["']([^"']+)["']/)[1];
    if (src && !src.startsWith('data:')) {
      links.add(src);
    }
  });
  
  return Array.from(links);
}

/**
 * Test a single route
 */
async function testRoute(route) {
  const url = `${baseUrl}${route}`;
  log(`Testing route: ${route}`, 'blue');
  
  const result = await makeRequest(url);
  
  if (result.ok) {
    log(`  ✓ ${route} (${result.status})`, 'green');
    results.summary.accessibleRoutes++;
    
    // If it's an HTML page, extract and test links
    if (result.headers['content-type']?.includes('text/html')) {
      try {
        const response = await fetch(url);
        const html = await response.text();
        const links = extractLinks(html, baseUrl);
        
        for (const link of links) {
          await testLink(link, route);
        }
      } catch (error) {
        log(`  Warning: Could not extract links from ${route}: ${error.message}`, 'yellow');
      }
    }
  } else {
    log(`  ✗ ${route} (${result.status || 'FAILED'}) - ${result.error || result.statusText}`, 'red');
    results.errors.push({
      type: 'route',
      url: route,
      status: result.status,
      error: result.error || result.statusText
    });
  }
  
  results.routes.push({
    route,
    url,
    status: result.status,
    ok: result.ok,
    error: result.error
  });
  
  results.summary.totalRoutes++;
}

/**
 * Test a single link
 */
async function testLink(link, fromRoute) {
  // Skip if already tested
  if (results.links.find(l => l.link === link)) {
    return;
  }
  
  let fullUrl = link;
  
  // Handle relative URLs
  if (link.startsWith('/')) {
    fullUrl = `${baseUrl}${link}`;
  } else if (!link.startsWith('http')) {
    // Skip relative links without leading slash for now
    return;
  }
  
  const result = await makeRequest(fullUrl);
  
  if (result.ok) {
    log(`    ✓ Link: ${link}`, 'green');
  } else {
    log(`    ✗ Link: ${link} (${result.status || 'FAILED'})`, 'red');
    results.summary.brokenLinks++;
    results.errors.push({
      type: 'link',
      url: link,
      fullUrl,
      fromRoute,
      status: result.status,
      error: result.error || result.statusText
    });
  }
  
  results.links.push({
    link,
    fullUrl,
    fromRoute,
    status: result.status,
    ok: result.ok,
    error: result.error
  });
  
  results.summary.totalLinks++;
}

/**
 * Test static assets using Node.js built-ins
 */
async function testAssets() {
  log('\nTesting static assets...', 'bold');
  
  try {
    function findStaticFiles(dir, basePath = '') {
      const files = [];
      const entries = fs.readdirSync(dir, { withFileTypes: true });
      
      for (const entry of entries) {
        const fullPath = path.join(dir, entry.name);
        const relativePath = path.join(basePath, entry.name);
        
        if (entry.isDirectory()) {
          files.push(...findStaticFiles(fullPath, relativePath));
        } else {
          files.push(relativePath);
        }
      }
      
      return files;
    }
    
    const staticDir = path.join(projectRoot, 'static');
    if (!fs.existsSync(staticDir)) {
      log('No static directory found, skipping asset tests', 'yellow');
      return;
    }
    
    const staticFiles = findStaticFiles(staticDir);
    
    for (const file of staticFiles) {
      const assetPath = '/' + file.replace(/\\/g, '/');
      const url = `${baseUrl}${assetPath}`;
      
      const result = await makeRequest(url);
      
      if (result.ok) {
        log(`  ✓ Asset: ${assetPath}`, 'green');
      } else {
        log(`  ✗ Asset: ${assetPath} (${result.status || 'FAILED'})`, 'red');
        results.summary.brokenAssets++;
        results.errors.push({
          type: 'asset',
          url: assetPath,
          status: result.status,
          error: result.error || result.statusText
        });
      }
      
      results.assets.push({
        path: assetPath,
        url,
        status: result.status,
        ok: result.ok,
        error: result.error
      });
      
      results.summary.totalAssets++;
    }
  } catch (error) {
    log(`Error testing assets: ${error.message}`, 'red');
  }
}

/**
 * Generate detailed report
 */
function generateReport() {
  const timestamp = new Date().toISOString();
  const reportPath = `link-check-report-${Date.now()}.json`;
  
  const report = {
    timestamp,
    baseUrl,
    summary: results.summary,
    routes: results.routes,
    links: results.links,
    assets: results.assets,
    errors: results.errors
  };
  
  fs.writeFileSync(reportPath, JSON.stringify(report, null, 2));
  
  return reportPath;
}

/**
 * Print summary
 */
function printSummary() {
  log('\n' + '='.repeat(60), 'bold');
  log('LINK CHECK SUMMARY', 'bold');
  log('='.repeat(60), 'bold');
  
  log(`Base URL: ${baseUrl}`, 'blue');
  log(`Total Routes Tested: ${results.summary.totalRoutes}`, 'blue');
  log(`Accessible Routes: ${results.summary.accessibleRoutes}`, 'green');
  log(`Failed Routes: ${results.summary.totalRoutes - results.summary.accessibleRoutes}`, 'red');
  
  log(`\nTotal Links Tested: ${results.summary.totalLinks}`, 'blue');
  log(`Working Links: ${results.summary.totalLinks - results.summary.brokenLinks}`, 'green');
  log(`Broken Links: ${results.summary.brokenLinks}`, 'red');
  
  log(`\nTotal Assets Tested: ${results.summary.totalAssets}`, 'blue');
  log(`Working Assets: ${results.summary.totalAssets - results.summary.brokenAssets}`, 'green');
  log(`Broken Assets: ${results.summary.brokenAssets}`, 'red');
  
  if (results.errors.length > 0) {
    log('\nERRORS FOUND:', 'red');
    results.errors.forEach((error, index) => {
      log(`${index + 1}. [${error.type.toUpperCase()}] ${error.url}`, 'red');
      log(`   Status: ${error.status || 'FAILED'}`, 'red');
      log(`   Error: ${error.error}`, 'red');
      if (error.fromRoute) {
        log(`   Found on: ${error.fromRoute}`, 'yellow');
      }
      log('');
    });
  }
  
  const reportPath = generateReport();
  log(`Detailed report saved to: ${reportPath}`, 'blue');
  
  // Exit with error code if issues found
  const totalErrors = results.errors.length;
  if (totalErrors > 0) {
    log(`\nTest completed with ${totalErrors} error(s)`, 'red');
    process.exit(1);
  } else {
    log('\nAll tests passed! ✓', 'green');
    process.exit(0);
  }
}

/**
 * Main execution
 */
async function main() {
  log('SvelteKit Link Checker Starting...', 'bold');
  log(`Testing against: ${baseUrl}`, 'blue');
  
  // Check if server is running
  log('\nChecking if server is running...', 'blue');
  const serverCheck = await makeRequest(baseUrl);
  if (!serverCheck.ok) {
    log(`Server not accessible at ${baseUrl}`, 'red');
    log('Please start your SvelteKit development server first:', 'yellow');
    log('  npm run dev', 'yellow');
    process.exit(1);
  }
  log('Server is running ✓', 'green');
  
  // Discover and test routes
  log('\nDiscovering routes...', 'blue');
  const routes = discoverRoutes();
  log(`Found ${routes.length} routes`, 'blue');
  
  log('\nTesting routes...', 'bold');
  for (const route of routes) {
    await testRoute(route);
  }
  
  // Test static assets
  await testAssets();
  
  // Print summary
  printSummary();
}

// Add package.json check for dependencies
if (!fs.existsSync(path.join(projectRoot, 'package.json'))) {
  log('Error: package.json not found. Run this script from the project root.', 'red');
  process.exit(1);
}

// Run the main function
main().catch(error => {
  log(`Fatal error: ${error.message}`, 'red');
  console.error(error);
  process.exit(1);
});