# LLA Web

A SvelteKit application with dual deployment strategies - Docker containers and static sites.

## Creating a project

If you're seeing this, you've probably already done this step. Congrats!

```bash
# create a new project in the current directory
npm create svelte@latest

# create a new project in my-app
npm create svelte@latest my-app
```

## Developing

Once you've created a project and installed dependencies with `npm install` (or `pnpm install` or `yarn`), start a development server:

```bash
npm run dev

# or start the server and open the app in a new browser tab
npm run dev -- --open
```

## Building

This project supports two build modes:

### 1. Node.js Build (for Docker deployment)

```bash
bun run build
```

### 2. Static Build (for Cloudflare Pages)

```bash
bun run build:static
```

You can preview builds with `bun run preview`.

## Deployment

### Docker Deployment (GitHub Package Registry)

The project automatically builds and publishes Docker images to GitHub Package Registry when you push to main or create version tags.

**Available images:**

- `ghcr.io/[username]/llaweb:main` (latest main branch)
- `ghcr.io/[username]/llaweb:v1.0.0` (version tags)

**To run locally:**

```bash
docker run -p 3000:3000 ghcr.io/[username]/llaweb:main
```

### Static Site Deployment (Cloudflare Pages)

The project automatically deploys to Cloudflare Pages when you push to main.

**Setup required:**

1. Create a Cloudflare Pages project
2. Add these secrets to your GitHub repository:
   - `CLOUDFLARE_API_TOKEN`: Your Cloudflare API token
   - `CLOUDFLARE_ACCOUNT_ID`: Your Cloudflare account ID

**Manual deployment:**

```bash
bun run build:static
# Upload the 'build' directory to your static hosting provider
```

## Technology Stack

- **Runtime**: Bun (latest)
- **Framework**: SvelteKit
- **Adapters**:
  - `@sveltejs/adapter-node` (Docker)
  - `@sveltejs/adapter-static` (Static sites)
- **Deployment**:
  - GitHub Actions
  - Docker (GitHub Package Registry)
  - Cloudflare Pages
