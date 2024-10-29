import { blogs } from "$lib/data/blog";
import type { PageLoad } from "./$types";

export const load: PageLoad = ({ params }) => {
  const post = blogs.find((blog) => blog.id === Number(params.id));

  return { ...post};
};
