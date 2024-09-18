<script>
  import Slide from "$lib/components/Slide.svelte";

  const slidesData = [
    {
      dataIndex: "rs-3051",
      title: "Light House<br>Leading Academy",
      description:
        "A uniquely designed educational facility exquisitely furnished and equipped to support.",
      src: "/images/slider/3.jpg",
    },
    {
      dataIndex: "rs-3050",
      title: "Crèche <br> Preparatory",
      description: "nurture and care to Infants, Toddlers and Pre-Schoolers.",
      src: "/images/slider/3_1.jpg",
    },
    {
      dataIndex: "rs-3052",
      title: "Building the <br>next generation.",
      description:
        "Nurturing and training the next generation by means of world class education.",
      src: "/images/slider/3_2.jpg",
    },
    {
      dataIndex: "rs-3053",
      title: "Daycare, Crèche <br> Preparatory",
      description:
        "Early learning (Daycare, Crèche Preparatory) which provides nurture and care to Infants, Toddlers and Pre-Schoolers.",
      src: "/images/slider/3.jpg",
    },
  ];
</script>

<div class="rev_slider_wrapper">
  <div
    id="rev_slider_3"
    class="rev_slider fullwidthabanner"
    style="display:none;"
    data-version="5.4.1"
  >
    {#each slidesData as slide}
      <Slide
        dataIndex={slide.dataIndex}
        title={slide.title}
        description={slide.description}
        src={slide.src}
      />
    {/each}

    <!-- <ul>
                    <li data-index="rs-3050" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <img src="/images/slider/3.jpg" alt="Quera" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina>

                        <div class="tp-caption headFont ws_nowrap" data-x="['left']" data-hoffset="['0']" data-y="['middle']" data-voffset="['8','8','-10','-20']" data-fontsize="['90','80','60','36']" data-fontweight="['700']" data-lineheight="['100','90','74','46']" data-letterspacing="0" data-width="['100%']" data-height="['auto']" data-whitesapce="['normal']" data-color="['#fff']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":1800,"speed":400,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]' data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,20]">
                          LightHouse<br>Leading Academy
                        </div>
                        <div class="tp-caption ws_nowrap" data-x="['left']" data-hoffset="['0']" data-y="['middle']" data-voffset="['158','158','120','100']" data-fontsize="['18','18','18','18']" data-fontweight="['400']" data-lineheight="['30','30','30','30']" data-letterspacing="0" data-width="['750','750','600','100%']" data-height="['auto']" data-whitesapce="['normal']" data-color="['#d7d7d7']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":2100,"speed":500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,20]">
                          <strong>A uniquely designed educational facility exquisitely furnished and equipped to support.</strong>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="['left']" data-hoffset="['0']" data-y="['middle']" data-voffset="['266','266','230','230']" data-fontsize="['16']" data-fontweight="700" data-lineheight="60" data-width="['auto']" data-height="['auto']" data-whitesapce="['normal']" data-color="['#fff']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":2400,"speed":600,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]' data-textAlign="['center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,20]">
                          <a href="about.php" class="qu_btn">Learn More</a>
                        </div>
                        <div class="tp-caption tp-resizeme anLayer" data-frames='[{"delay":3000,"speed":800,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-type="image" data-x="right" data-y="bottom" data-hoffset="['-250','0','0','0']" data-voffset="['-300','0','0','0']" data-width="['auto']" data-height="['auto']"><img src="/images/slider/s7.png" alt="layer" width="844" height="731">
                        </div>
                        <div class="tp-caption tp-resizeme anLayer" data-frames='[{"delay":3300,"speed":900,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-type="image" data-x="right" data-y="bottom" data-hoffset="['-400','0','0','0']" data-voffset="['-310','0','0','0']" data-width="['auto']" data-height="['auto']"><img src="/images/slider/s8.png" alt="layer" width="564" height="560">
                        </div>
                    </li>






                    <li data-index="rs-3051" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <img src="/images/slider/3_1.jpg" alt="Quera" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina>

                        <div class="tp-caption headFont ws_nowrap" data-x="['left']" data-hoffset="['0']" data-y="['middle']" data-voffset="['8','8','-10','-20']" data-fontsize="['90','80','60','36']" data-fontweight="['700']" data-lineheight="['100','90','74','46']" data-letterspacing="0" data-width="['100%']" data-height="['auto']" data-whitesapce="['normal']" data-color="['#fff']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":1800,"speed":400,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]' data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,20]">
                        Crèche <br> Preparatory
                        </div>
                        <div class="tp-caption ws_nowrap" data-x="['left']" data-hoffset="['0']" data-y="['middle']" data-voffset="['158','158','120','100']" data-fontsize="['18','18','18','18']" data-fontweight="['400']" data-lineheight="['30','30','30','30']" data-letterspacing="0" data-width="['750','750','600','100%']" data-height="['auto']" data-whitesapce="['normal']" data-color="['#d7d7d7']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":2100,"speed":500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,20]"> <strong>Early learning (Crèche Preparatory) which provides
                                nurture and care to Infants, Toddlers and Pre-Schoolers.</strong>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="['left']" data-hoffset="['0']" data-y="['middle']" data-voffset="['266','266','230','230']" data-fontsize="['16']" data-fontweight="700" data-lineheight="60" data-width="['auto']" data-height="['auto']" data-whitesapce="['normal']" data-color="['#fff']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":2400,"speed":600,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]' data-textAlign="['center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,20]"><a href="about.php" class="qu_btn">learn More</a>
                        </div>
                        <div class="tp-caption tp-resizeme anLayer" data-frames='[{"delay":3000,"speed":800,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-type="image" data-x="right" data-y="bottom" data-hoffset="['-250','0','0','0']" data-voffset="['-300','0','0','0']" data-width="['auto']" data-height="['auto']"><img src="/images/slider/s7.png" alt="layer" width="844" height="731">
                        </div>
                        <div class="tp-caption tp-resizeme anLayer" data-frames='[{"delay":3300,"speed":900,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-type="image" data-x="right" data-y="bottom" data-hoffset="['-400','0','0','0']" data-voffset="['-310','0','0','0']" data-width="['auto']" data-height="['auto']"><img src="/images/slider/s8.png" alt="layer" width="564" height="560">
                        </div>
                    </li>
                    <li data-index="rs-3052" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <img src="/images/slider/3_2.jpg" alt="Quera" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina>

                        <div class="tp-caption headFont ws_nowrap" data-x="['left']" data-hoffset="['0']" data-y="['middle']" data-voffset="['8','8','-10','-20']" data-fontsize="['90','80','60','36']" data-fontweight="['700']" data-lineheight="['100','90','74','46']" data-letterspacing="0" data-width="['100%']" data-height="['auto']" data-whitesapce="['normal']" data-color="['#fff']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":1800,"speed":400,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]' data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,20]">
                        Building the <br>next generation.
                        </div>
                        <div class="tp-caption ws_nowrap" data-x="['left']" data-hoffset="['0']" data-y="['middle']" data-voffset="['158','158','120','100']" data-fontsize="['18','18','18','18']" data-fontweight="['400']" data-lineheight="['30','30','30','30']" data-letterspacing="0" data-width="['750','750','600','100%']" data-height="['auto']" data-whitesapce="['normal']" data-color="['#d7d7d7']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":2100,"speed":500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,20]">
                        <strong>Nurturing and training the next generation by means of world class education.</strong>

                        </div>
                        <div class="tp-caption tp-resizeme" data-x="['left']" data-hoffset="['0']" data-y="['middle']" data-voffset="['266','266','230','230']" data-fontsize="['16']" data-fontweight="700" data-lineheight="60" data-width="['auto']" data-height="['auto']" data-whitesapce="['normal']" data-color="['#fff']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":2400,"speed":600,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]' data-textAlign="['center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,20]"><a href="about.php" class="qu_btn">Learn More</a>
                        </div>
                        <div class="tp-caption tp-resizeme anLayer" data-frames='[{"delay":3000,"speed":800,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-type="image" data-x="right" data-y="bottom" data-hoffset="['-250','0','0','0']" data-voffset="['-300','0','0','0']" data-width="['auto']" data-height="['auto']"><img src="/images/slider/s7.png" alt="layer" width="844" height="731">
                        </div>
                        <div class="tp-caption tp-resizeme anLayer" data-frames='[{"delay":3300,"speed":900,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-type="image" data-x="right" data-y="bottom" data-hoffset="['-400','0','0','0']" data-voffset="['-310','0','0','0']" data-width="['auto']" data-height="['auto']"><img src="/images/slider/s8.png" alt="layer" width="564" height="560">
                        </div>
                    </li>



                    <li data-index="rs-3054" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <img src="/images/slider/4.jpg" alt="Quera" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina>

                        <div class="tp-caption headFont ws_nowrap" data-x="['left']" data-hoffset="['0']" data-y="['middle']" data-voffset="['8','8','-10','-20']" data-fontsize="['90','80','60','36']" data-fontweight="['700']" data-lineheight="['100','90','74','46']" data-letterspacing="0" data-width="['100%']" data-height="['auto']" data-whitesapce="['normal']" data-color="['#fff']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":1800,"speed":400,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]' data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,20]">Daycare, Crèche <br> Preparatory
                        </div>
                        <div class="tp-caption ws_nowrap" data-x="['left']" data-hoffset="['0']" data-y="['middle']" data-voffset="['158','158','120','100']" data-fontsize="['18','18','18','18']" data-fontweight="['400']" data-lineheight="['30','30','30','30']" data-letterspacing="0" data-width="['750','750','600','100%']" data-height="['auto']" data-whitesapce="['normal']" data-color="['#d7d7d7']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":2100,"speed":500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,20]"> <strong>Early learning (Daycare, Crèche Preparatory) which provides
                                nurture and care to Infants, Toddlers and Pre-Schoolers.</strong>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="['left']" data-hoffset="['0']" data-y="['middle']" data-voffset="['266','266','230','230']" data-fontsize="['16']" data-fontweight="700" data-lineheight="60" data-width="['auto']" data-height="['auto']" data-whitesapce="['normal']" data-color="['#fff']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":2400,"speed":600,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]' data-textAlign="['center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,20]"><a href="about.php" class="qu_btn">learn More</a>
                        </div>
                        <div class="tp-caption tp-resizeme anLayer" data-frames='[{"delay":3000,"speed":800,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-type="image" data-x="right" data-y="bottom" data-hoffset="['-250','0','0','0']" data-voffset="['-300','0','0','0']" data-width="['auto']" data-height="['auto']"><img src="/images/slider/s7.png" alt="layer" width="844" height="731">
                        </div>
                        <div class="tp-caption tp-resizeme anLayer" data-frames='[{"delay":3300,"speed":900,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-type="image" data-x="right" data-y="bottom" data-hoffset="['-400','0','0','0']" data-voffset="['-310','0','0','0']" data-width="['auto']" data-height="['auto']"><img src="/images/slider/s8.png" alt="layer" width="564" height="560">
                        </div>
                    </li>

                    <li data-index="rs-3053" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1000" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <img src="/images/slider/5.jpg" alt="Quera" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="0" class="rev-slidebg" data-no-retina>

                        <div class="tp-caption headFont ws_nowrap" data-x="['left']" data-hoffset="['0']" data-y="['middle']" data-voffset="['8','8','-10','-20']" data-fontsize="['90','80','60','36']" data-fontweight="['700']" data-lineheight="['100','90','74','46']" data-letterspacing="0" data-width="['100%']" data-height="['auto']" data-whitesapce="['normal']" data-color="['#fff']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":1800,"speed":400,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]' data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,20]">
                        <strong>Daycare, Crèche <br> Preparatory</strong>
                        </div>
                        <div class="tp-caption ws_nowrap" data-x="['left']" data-hoffset="['0']" data-y="['middle']" data-voffset="['158','158','120','100']" data-fontsize="['18','18','18','18']" data-fontweight="['400']" data-lineheight="['30','30','30','30']" data-letterspacing="0" data-width="['750','750','600','100%']" data-height="['auto']" data-whitesapce="['normal']" data-color="['#d7d7d7']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":2100,"speed":500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,20]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,20]">
                        <strong> Early learning (Daycare, Crèche Preparatory) which provides
                                nurture and care to Infants, Toddlers and Pre-Schoolers.</strong>
                        </div>
                        <div class="tp-caption tp-resizeme" data-x="['left']" data-hoffset="['0']" data-y="['middle']" data-voffset="['266','266','230','230']" data-fontsize="['16']" data-fontweight="700" data-lineheight="60" data-width="['auto']" data-height="['auto']" data-whitesapce="['normal']" data-color="['#fff']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":2400,"speed":600,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"power3.inOut"}]' data-textAlign="['center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,20]"><a href="about.php" class="qu_btn">learn More</a>
                        </div>
                        <div class="tp-caption tp-resizeme anLayer" data-frames='[{"delay":3000,"speed":800,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-type="image" data-x="right" data-y="bottom" data-hoffset="['-250','0','0','0']" data-voffset="['-300','0','0','0']" data-width="['auto']" data-height="['auto']"><img src="/images/slider/s7.png" alt="layer" width="844" height="731">
                        </div>
                        <div class="tp-caption tp-resizeme anLayer" data-frames='[{"delay":3300,"speed":900,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-type="image" data-x="right" data-y="bottom" data-hoffset="['-400','0','0','0']" data-voffset="['-310','0','0','0']" data-width="['auto']" data-height="['auto']"><img src="/images/slider/s8.png" alt="layer" width="564" height="560">
                        </div>
                    </li>


                </ul> -->
  </div>
</div>
