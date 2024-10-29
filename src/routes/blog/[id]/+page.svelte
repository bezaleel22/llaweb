<script lang="ts">
  import type { PageData } from "./$types";

  export let data: PageData;
</script>

{#if data}
  <section class="page_banner blog_details_banner" style="">
    <div class="boverlay" style=""></div>
    <div class="container largeContainer">
      <div class="row">
        <div class="col-md-7">
          <h2 class="banner-title">
            {data.title}
          </h2>
        </div>
        <div class="col-md-5 text-right">
          <p class="breadcrumbs">
            <a href="https://themewar.com/wp/quera/" rel="v:url"
              ><i class="twi-home-alt1"></i>Home</a
            ><span>/</span>
            {data.title?.substring(0, 40)}
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="singleBlog">
    <div class="container largeContainer">
      <div class="row">
        <div class="col-lg-8">
          <div class="sic_details clearfix">
            <div class="postThumb">
              <img src={data.image} alt={data.title} />
            </div>
            <div class="bmeta">
              <p><i class="twi-eye2"></i>{data.views}</p>
              <p><i class="twi-comments2"></i>{data.comments}</p>
              <p><i class="twi-calendar-alt2"></i>{data.date}</p>
            </div>
            <div class="sic_the_content clearfix">
              <p>
                {data.description}
              </p>
              <p>
                {data.description}
              </p>
              <h2 class="bshead wp-block-heading">
                {data.title}
              </h2>
              <figure class="wp-block-image size-full">
                <img
                  fetchpriority="high"
                  decoding="async"
                  width="724"
                  height="450"
                  src={data.image}
                  alt={data.title}
                  class="wp-image-14"
                  srcset={data.image}
                  sizes="(max-width: 724px) 100vw, 724px"
                />
              </figure>
              <p>
                {data.description}
              </p>
              <blockquote
                class="wp-block-quote is-layout-flow wp-block-quote-is-layout-flow"
              >
                {#each data.quotes as quote}
                  <p>
                    {quote}
                  </p>
                {/each}

                <cite>by {data.author} <strong>Writer</strong></cite>
              </blockquote>
              <p></p>
              <p>
                Dramatically reconceptualize out-of-the-box scenarios for
                flexible applications. Interactively formulate mission-critical
                technologies via turnkey channels. Distinctively transform
                progressive methodologies before cost effective total linkage.
              </p>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="spMeta clearfix">
              <div class="row">
                <div class="col-md-7">
                  <div class="tags clearfix">
                    <h5>Tags:</h5>
                    {#each data.tags as tag}
                      <a href={`/tag/${tag}`} rel="tag">{tag}</a>
                    {/each}
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="socialShare">
                    <h5>Share Now:</h5>
                    <a
                      class="fac"
                      target="_blank"
                      href="https://www.facebook.com/sharer.php?u=https://themewar.com/wp/quera/2022/01/25/how-to-optimize-your-seo-marketing-strategy-search-engine-optimization/&amp;title=http://How%20to%20Optimize%20Your%20SEO%20Marketing%20Strategy%20Search%20Engine%20Optimization"
                      ><i class="twi-facebook-f"></i></a
                    ><a
                      class="twi"
                      target="_blank"
                      href="https://twitter.com/intent/tweet?url=https://themewar.com/wp/quera/2022/01/25/how-to-optimize-your-seo-marketing-strategy-search-engine-optimization/&amp;text=http://How%20to%20Optimize%20Your%20SEO%20Marketing%20Strategy%20Search%20Engine%20Optimization"
                      ><i class="twi-twitter"></i></a
                    ><a
                      class="lin"
                      target="_blank"
                      href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://themewar.com/wp/quera/2022/01/25/how-to-optimize-your-seo-marketing-strategy-search-engine-optimization/&amp;title=http://How%20to%20Optimize%20Your%20SEO%20Marketing%20Strategy%20Search%20Engine%20Optimization"
                      ><i class="twi-linkedin-in"></i></a
                    ><a
                      class="pin"
                      target="_blank"
                      href="https://pinterest.com/pin/create/bookmarklet/?media=https://themewar.com/wp/quera/wp-content/uploads/2022/01/b4.jpg&amp;url=https://themewar.com/wp/quera/2022/01/25/how-to-optimize-your-seo-marketing-strategy-search-engine-optimization/&amp;is_video=false&amp;description=http://How%20to%20Optimize%20Your%20SEO%20Marketing%20Strategy%20Search%20Engine%20Optimization"
                      ><i class="twi-pinterest-p"></i></a
                    >
                  </div>
                </div>
              </div>
            </div>
            <div class="post_author clearfix">
              <img
                src="https://themewar.com/wp/quera/wp-content/uploads/2022/01/author-150x150.jpg"
                alt="David Yulk"
              />
              <span>Written by</span>
              <h5>
                <a href="https://themewar.com/wp/quera/author/admin/"
                  >David Yulk</a
                >
              </h5>
              <p>
                Monotonectally procrastinate transparent architectures before
                robust opportunities. Progressively parallel task 24/365
                mindshare and multimedia based e-markets.
              </p>
            </div>
            <div class="comment_area">
              <div id="comments">
                <div class="sic_comments">
                  <h3 class="sicc_title">3 Comments</h3>
                  <ol class="sicc_list">
                    <li
                      id="comment-5"
                      class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent"
                    >
                      <article
                        id="div-comment-5"
                        class="comment-body single_comment clearfix"
                      >
                        <img
                          src={data.image}
                          alt={data.author}
                        />
                        <span class="cm_date">{data.date}</span>
                        <h4 class="cm_author">
                          <a href="javascript:void(0);">{data.author}</a>
                        </h4>
                        <div class="sc_content">
                          <p>
                            Monotonectally procrastinate transparent
                            architectures before robust oppo Progressively
                            parallel task 24/365 mindshare and multimedia
                          </p>
                        </div>
                        <a
                          rel="nofollow"
                          class="comment-reply-link"
                          href={data.image}
                          data-commentid={data.comments}
                          data-postid="30"
                          data-belowelement="div-comment-5"
                          data-respondelement="respond"
                          data-replyto="Reply to Jasmine Yulk"
                          aria-label="Reply to Jasmine Yulk"
                          ><i class="twi-reply"></i>Reply</a
                        >
                      </article>
                      <ol class="children">
                        <li
                          id="comment-21"
                          class="comment byuser comment-author-admin bypostauthor odd alt depth-2"
                        >
                          <article
                            id="div-comment-21"
                            class="comment-body single_comment clearfix"
                          >
                            <img
                              src="https://themewar.com/wp/quera/wp-content/uploads/2022/01/author-100x100.jpg"
                              alt="Jasmine Yulk"
                            />
                            <span class="cm_date">January 25, 2022</span>
                            <h4 class="cm_author">
                              <a href="javascript:void(0);">Jasmine Yulk</a>
                            </h4>
                            <div class="sc_content">
                              <p>
                                Monotonectally procrastinate transparent
                                architectures before robust opportunities.
                              </p>
                            </div>
                            <a
                              rel="nofollow"
                              class="comment-reply-link"
                              href="https://themewar.com/wp/quera/2022/01/25/how-to-optimize-your-seo-marketing-strategy-search-engine-optimization/?replytocom=21#respond"
                              data-commentid="21"
                              data-postid="30"
                              data-belowelement="div-comment-21"
                              data-respondelement="respond"
                              data-replyto="Reply to Jasmine Yulk"
                              aria-label="Reply to Jasmine Yulk"
                              ><i class="twi-reply"></i>Reply</a
                            >
                          </article>
                        </li>
                      </ol>
                    </li>
                    <li
                      id="comment-13"
                      class="comment byuser comment-author-admin bypostauthor even thread-odd thread-alt depth-1"
                    >
                      <article
                        id="div-comment-13"
                        class="comment-body single_comment clearfix"
                      >
                        <img
                          src="https://themewar.com/wp/quera/wp-content/uploads/2022/01/author-100x100.jpg"
                          alt="Jasmine Yulk"
                        />
                        <span class="cm_date">January 25, 2022</span>
                        <h4 class="cm_author">
                          <a href="javascript:void(0);">Jasmine Yulk</a>
                        </h4>
                        <div class="sc_content">
                          <p>
                            Monotonectally procrastinate transparent
                            architectures before robust oppo Progressively
                            parallel task 24/365 mindshare…
                          </p>
                        </div>
                        <a
                          rel="nofollow"
                          class="comment-reply-link"
                          href="https://themewar.com/wp/quera/2022/01/25/how-to-optimize-your-seo-marketing-strategy-search-engine-optimization/?replytocom=13#respond"
                          data-commentid="13"
                          data-postid="30"
                          data-belowelement="div-comment-13"
                          data-respondelement="respond"
                          data-replyto="Reply to Jasmine Yulk"
                          aria-label="Reply to Jasmine Yulk"
                          ><i class="twi-reply"></i>Reply</a
                        >
                      </article>
                    </li>
                  </ol>
                  <div
                    class="quera_pagination comentPaginations text-right"
                  ></div>
                </div>
                <div class="commentFormWrp">
                  <div id="respond" class="comment-respond">
                    <h3 class="sicc_title mb30">
                      Leave a comment<small class="cancel_reply_btn"
                        ><a
                          rel="nofollow"
                          id="cancel-comment-reply-link"
                          href="/wp/quera/2022/01/25/how-to-optimize-your-seo-marketing-strategy-search-engine-optimization/#respond"
                          style="display:none;">Cancel Reply</a
                        ></small
                      >
                    </h3>
                    <form
                      action="https://themewar.com/wp/quera/wp-comments-post.php"
                      method="post"
                      id="comment_form"
                      class="commentForm row"
                      novalidate=""
                    >
                      <div class="col-md-12">
                        <i class="twi-pen2"></i><textarea
                          id="comment"
                          class=""
                          name="comment"
                          placeholder="Write a Comment"
                          aria-required="true"
                          required="required"
                        ></textarea>
                      </div>
                      <div class="col-md-6 clearfix">
                        <i class="twi-user2"></i><input
                          id="author"
                          placeholder="Your Name"
                          name="author"
                          type="text"
                          value=""
                          size="30"
                        />
                      </div>
                      <div class="col-md-6 clearfix">
                        <i class="twi-envelope2"></i><input
                          id="email"
                          placeholder="Your Email"
                          name="email"
                          type="text"
                          value=""
                          size="30"
                        />
                      </div>
                      <div class="col-md-12 clearfix">
                        <i class="twi-browser2"></i><input
                          id="url"
                          name="url"
                          type="url"
                          value=""
                          placeholder="Website"
                          maxlength="200"
                        />
                      </div>
                      <div class="col-md-12">
                        <button
                          type="submit"
                          name="submit"
                          id="submit"
                          class="qu_btn"
                          value="Submit Comment"
                          ><i class="twi-paper-plane2"></i>Submit Comment</button
                        >
                      </div>
                      <input
                        type="hidden"
                        name="comment_post_ID"
                        value="30"
                        id="comment_post_ID"
                      />
                      <input
                        type="hidden"
                        name="comment_parent"
                        id="comment_parent"
                        value="0"
                      />
                    </form>
                  </div>
                </div>
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
                <div
                  class="wp-block-search__inside-wrapper"
                  style="width: 666px"
                >
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
                  <a
                    href="https://themewar.com/wp/quera/category/financial-work/"
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
                  <a
                    href="https://themewar.com/wp/quera/category/seo-marketing/"
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
{/if}
