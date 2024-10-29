<script>
  import { browser } from "$app/environment";
  import { page } from "$app/stores";
  import "$lib/assets";
  import Footer from "$lib/components/Footer.svelte";
  import Header from "$lib/components/Header.svelte";
  import PageHeader from "$lib/components/PageHeader.svelte";

  import { loading } from "$lib/stores";
  import { onMount } from "svelte";
  import { fade } from "svelte/transition";

  onMount(() => {
    $loading = document.readyState === "loading";
    if ($loading) {
      document.addEventListener("DOMContentLoaded", () => ($loading = false));
    }
  });

 // $: if (browser) console.log({ $loading });
</script>

<svelte:head>
  <title>Lighthouse Academy</title>
</svelte:head>

<!-- <ScriptLoader /> -->
{#if $loading}
  <div class="preloader clock text-center" out:fade={{ duration: 800 }}>
    <div class="queraLoader" out:fade={{ duration: 500 }}>
      <div class="loaderO">
        <span>L</span>
        <span>I</span>
        <span>G</span>
        <span>H</span>
        <span>T</span>
        <span>H</span>
        <span>O</span>
        <span>U</span>
        <span>S</span>
        <span>E</span>
      </div>
    </div>
  </div>
{/if}

{#if $page.url.pathname === '/'}
  <Header />
{:else}
  <PageHeader />
{/if}

<main class="app">
  <slot />
</main>

<Footer />
