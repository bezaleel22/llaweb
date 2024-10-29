<script lang="ts">
    import { articles } from '$lib/data/article';
    import { goto } from '$app/navigation';
  
    function viewArticle(id: number) {
      goto(`/article/${id}`);
    }
  </script>
  
  <h1>All Articles</h1>
  <ul>
    {#each articles as article}
      <li>
        <h2>{article.title}</h2>
        <button on:click={() => viewArticle(article.id)}>Read More</button>
      </li>
    {/each}
  </ul>
  