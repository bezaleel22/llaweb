import { mdsvex } from "mdsvex";
import adapter from "@sveltejs/adapter-static";
import { vitePreprocess } from '@sveltejs/vite-plugin-svelte';

/** @type {import('@sveltejs/kit').Config} */
const config = {
    // Consult https://kit.svelte.dev/docs/integrations#preprocessors
    // for more information about preprocessors
    preprocess: [vitePreprocess(),
    mdsvex({
        extensions: ['.md', '.svx'],
        //layout: './src/routes/article/layout.svelte'
    })],

    kit: {
        // adapter-static for static site generation
        adapter: adapter({
            // default options are shown. On some platforms
            // these options are set automatically — see below
            pages: 'build',
            assets: 'build',
            fallback: 'index.html', // SPA fallback for dynamic routes
            precompress: false,
            strict: false // Allow dynamic routes
        }),
        prerender: {
            handleHttpError: 'warn',
            handleMissingId: 'warn',
            entries: ['*'] // Prerender all discoverable pages
        }
    },

    extensions: [".svelte", ".svx"]
};

export default config;
