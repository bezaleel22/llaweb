<script lang="ts">
  import Slide from "$lib/components/Slide.svelte";
  import { onMount } from "svelte";
  let el: any;
  const slidesData = [
    {
      dataIndex: "rs-3051",
      title: "Lighthouse Leading Academy",
      description:
        "A uniquely designed educational facility exquisitely furnished and equipped to support.",
      src: "/images/slider/9.webp",
    },
    {
      dataIndex: "rs-3050",
      title: "Crèche Preparatory",
      description:
        " Early learning (Crèche Preparatory) which provides nurture and care to Infants, Toddlers and Pre-Schoolers.",
      src: "/images/slider/4.webp",
    },
    {
      dataIndex: "rs-3052",
      title: "Building the Next Generation.",
      description:
        "Nurturing and training the next generation by means of world class education.",
      src: "/images/slider/5.webp",
    },
    {
      dataIndex: "rs-3053",
      title: "Daycare, Crèche Preparatory",
      description:
        "Early learning (Daycare, Crèche Preparatory) which provides nurture and care to Infants, Toddlers and Pre-Schoolers.",
      src: "/images/slider/6.webp",
    },
  ];

  onMount(() => console.log(el));
</script>

<div class="rev_slider_wrapper">
  <div
    id="rev_slider_3"
    class="rev_slider fullwidthabanner"
    style="display:none;"
    data-version="5.4.1"
  >
    <ul>
      {#each slidesData as slide}
        <Slide
          dataIndex={slide.dataIndex}
          title={slide.title}
          description={slide.description}
          src={slide.src}
        />
      {/each}
    </ul>
  </div>
</div>

<svelte:head>
  <script src="js/extensions/revolution.extension.actions.min.js"></script>
  <script src="js/extensions/revolution.extension.carousel.min.js"></script>
  <script src="js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="js/extensions/revolution.extension.migration.min.js"></script>
  <script src="js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="js/extensions/revolution.extension.parallax.min.js"></script>
  <script src="js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="js/extensions/revolution.extension.video.min.js"></script>
  <script src="js/theme.js"></script>
  <script src="js/extensions/revolution.extension.layeranimation.min.js">
  </script>
</svelte:head>
