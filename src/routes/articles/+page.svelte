<script context="module" lang="ts">
  // Dynamically import all articles in the content folder
  export async function load() {
    const modules = import.meta.glob("./content/*.svx"); // This gets all .svx files
    const articles = [];

    for (const path in modules) {
      const module = await modules[path]();
      const slug = path.split("/").pop().replace(".svx", ""); // Extract slug from filename
      articles.push({ ...module.metadata, slug }); // Include frontmatter metadata
    }

    // Sort articles by date (if available in frontmatter)
    articles.sort((a, b) => new Date(b.date) - new Date(a.date));

    return { articles };
  }
</script>

<script>
  export let data;
  let { articles } = data;
</script>

<h1>All Articles</h1>
<ul>
  {#each articles as article}
    <li>
      <a href={`/articles/${article.slug}`}>
        <h2>{article.title}</h2>
        <p>Published: {article.date}</p>
      </a>
    </li>
  {/each}
</ul>
