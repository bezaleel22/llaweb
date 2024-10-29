<script lang="ts">
    import { articles } from '$lib/data/article';
    import { page } from '$app/stores';
    import { marked } from 'marked'; // Import the Markdown parser

  
    let article: { id: number; title: string; content: string; link: string; } | undefined;
  
    // Get the article ID from the URL
    $: {
      const { id } = $page.params;
      article = articles.find(a => a.id == Number(id));
    }
  </script>
  
  {#if article}
    <article>
      <h1>{article.title}</h1>
      <div>
        {@html marked(article.content)}
      </div>
    </article>
  {:else}
    <p>Article not found.</p>
  {/if}
  