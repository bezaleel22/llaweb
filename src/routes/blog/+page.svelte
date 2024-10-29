<script>
  import { blogs } from "$lib/data/blog";

</script>

<section class="page_banner blog_page_banner" style="">
  <div class="boverlay" style=""></div>
  <div class="container largeContainer">
    <div class="row">
      <div class="col-md-7">
        <h2 class="banner-title">Blog &amp; News</h2>
      </div>
      <div class="col-md-5 text-right">
        <p class="breadcrumbs">
          <a href="https://themewar.com/wp/quera/" rel="v:url"
            ><i class="twi-home-alt1"></i>Home</a
          ><span>/</span>List Right Sidebar
        </p>
      </div>
    </div>
  </div>
</section>

<section class="blogPage">
  <div class="container largeContainer">
    <div class="row">
      <div class="col-lg-8">
        {#each blogs as post}
          <div class="bloglistItem">
            <div class="blThumb">
              <img src={post.image} alt={post.title.substring(0, 10)} />
            </div>
            <div class="blogContent02">
              <div class="bmeta">
                <a href={post.link}><i class="twi-eye2"></i>{post.views}</a>
                <a href={post.link}
                  ><i class="twi-comments2"></i>{post.comments}</a
                >
                <a href={post.link}
                  ><i class="twi-calendar-alt2"></i>{post.date}</a
                >
              </div>
              <h3>
                <a href={post.link}>{post.title.substring(0, 70)}</a>
              </h3>
              <p>
                {post.description}
              </p>
              <a href={post.link} class="rm_more">
                Read More
                <i class="twi-long-arrow-right1"> </i>
              </a>
            </div>
          </div>
        {/each}
        <div class="row">
          <div class="col-lg-12">
            <div class="que_pagination text-center">
              <nav class="navigation pagination" aria-label="Posts">
                <h2 class="screen-reader-text">Posts navigation</h2>
                <div class="nav-links">
                  <span aria-current="page" class="page-numbers current">1</span
                  >
                  <a
                    class="page-numbers"
                    href="https://themewar.com/wp/quera/list-right-sidebar/page/2/"
                    >2</a
                  >
                  <a
                    class="next page-numbers"
                    href="https://themewar.com/wp/quera/list-right-sidebar/page/2/"
                    ><i class="twi-angle-double-right1"></i></a
                  >
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="sidebar">
          <aside id="block-7" class="widget widget_block widget_search">
            <form
              role="search"
              method="get"
              action="https://themewar.com/wp/quera/"
              class="wp-block-search__button-outside wp-block-search__icon-button wp-block-search"
            >
              <label
                class="wp-block-search__label"
                for="wp-block-search__input-1">Search</label
              >
              <div class="wp-block-search__inside-wrapper" style="width: 666px">
                <input
                  class="wp-block-search__input"
                  id="wp-block-search__input-1"
                  placeholder=""
                  value=""
                  type="search"
                  name="s"
                  required=""
                /><button
                  aria-label="Search"
                  class="wp-block-search__button has-icon wp-element-button"
                  type="submit"
                  ><svg
                    class="search-icon"
                    viewBox="0 0 24 24"
                    width="24"
                    height="24"
                  >
                    <path
                      d="M13 5c-3.3 0-6 2.7-6 6 0 1.4.5 2.7 1.3 3.7l-3.8 3.8 1.1 1.1 3.8-3.8c1 .8 2.3 1.3 3.7 1.3 3.3 0 6-2.7 6-6S16.3 5 13 5zm0 10.5c-2.5 0-4.5-2-4.5-4.5s2-4.5 4.5-4.5 4.5 2 4.5 4.5-2 4.5-4.5 4.5z"
                    ></path>
                  </svg></button
                >
              </div>
            </form>
          </aside>
          <aside id="quera-categories-2" class="widget custome_categories">
            <h3 class="widget_title">Categories</h3>
            <ul class="clearfix">
              <li class="clearfix">
                <a
                  href="https://themewar.com/wp/quera/category/business-growth/"
                  >Business Growth</a
                >
                <span>2</span>
              </li>
              <li class="clearfix">
                <a href="https://themewar.com/wp/quera/category/financial-work/"
                  >Financial Work</a
                >
                <span>2</span>
              </li>
              <li class="clearfix">
                <a
                  href="https://themewar.com/wp/quera/category/market-strategy/"
                  >Market Strategy</a
                >
                <span>2</span>
              </li>
              <li class="clearfix">
                <a href="https://themewar.com/wp/quera/category/seo-marketing/"
                  >SEO Marketing</a
                >
                <span>2</span>
              </li>
            </ul>
          </aside>
          <aside id="mak-rppwt-2" class="widget qeura_rp_widget">
            <h3 class="widget_title">Popular Posts</h3>
            <div class="pp_post_item clearfix">
              <a
                href="https://themewar.com/wp/quera/2022/01/25/efficiently-monetize-models-transparent-sources-redefine-distributed/"
                ><img
                  src="https://themewar.com/wp/quera/wp-content/uploads/2022/01/b1-90x80.jpg"
                  alt="Efficiently monetize models transparent sources redefine distributed"
                /></a
              >
              <a
                class="pptitle"
                href="https://themewar.com/wp/quera/2022/01/25/efficiently-monetize-models-transparent-sources-redefine-distributed/"
                >Efficiently monetize models transparent
              </a>
              <span><i class="twi-calendar-alt2"></i>Jan 25, 2022</span>
            </div>
            <div class="pp_post_item clearfix">
              <a
                href="https://themewar.com/wp/quera/2022/01/25/how-to-optimize-your-seo-marketing-strategy-search-engine-optimization/"
                ><img
                  src="https://themewar.com/wp/quera/wp-content/uploads/2022/01/b4-90x80.jpg"
                  alt="How to Optimize Your SEO Marketing Strategy Search Engine Optimization"
                /></a
              >
              <a
                class="pptitle"
                href="https://themewar.com/wp/quera/2022/01/25/how-to-optimize-your-seo-marketing-strategy-search-engine-optimization/"
                >How to Optimize Your SEO Marketing Strat</a
              >
              <span><i class="twi-calendar-alt2"></i>Jan 25, 2022</span>
            </div>
            <div class="pp_post_item clearfix">
              <a
                href="https://themewar.com/wp/quera/2022/01/25/are-pinterest-stories-right-for-your-marketing-strategy/"
                ><img
                  src="https://themewar.com/wp/quera/wp-content/uploads/2022/01/b3-90x80.jpg"
                  alt="Are Pinterest Stories Right for Your Marketing Strategy?"
                /></a
              >
              <a
                class="pptitle"
                href="https://themewar.com/wp/quera/2022/01/25/are-pinterest-stories-right-for-your-marketing-strategy/"
                >Are Pinterest Stories Right for Your Mar</a
              >
              <span><i class="twi-calendar-alt2"></i>Jan 25, 2022</span>
            </div>
          </aside>
          <aside id="block-8" class="widget widget_block widget_tag_cloud">
            <p class="wp-block-tag-cloud">
              <a
                href="https://themewar.com/wp/quera/tag/business/"
                class="tag-cloud-link tag-link-6 tag-link-position-1"
                style="font-size: 8pt;"
                aria-label="Business (4 items)">Business</a
              >
              <a
                href="https://themewar.com/wp/quera/tag/focus/"
                class="tag-cloud-link tag-link-8 tag-link-position-2"
                style="font-size: 8pt;"
                aria-label="Focus (4 items)">Focus</a
              >
              <a
                href="https://themewar.com/wp/quera/tag/growth/"
                class="tag-cloud-link tag-link-7 tag-link-position-3"
                style="font-size: 8pt;"
                aria-label="Growth (4 items)">Growth</a
              >
              <a
                href="https://themewar.com/wp/quera/tag/service/"
                class="tag-cloud-link tag-link-9 tag-link-position-4"
                style="font-size: 8pt;"
                aria-label="Service (4 items)">Service</a
              >
              <a
                href="https://themewar.com/wp/quera/tag/tools/"
                class="tag-cloud-link tag-link-10 tag-link-position-5"
                style="font-size: 8pt;"
                aria-label="Tools (4 items)">Tools</a
              >
              <a
                href="https://themewar.com/wp/quera/tag/ui-ux/"
                class="tag-cloud-link tag-link-11 tag-link-position-6"
                style="font-size: 8pt;"
                aria-label="UI/UX (4 items)">UI/UX</a
              >
            </p>
          </aside>
        </div>
      </div>
    </div>
  </div>
</section>
