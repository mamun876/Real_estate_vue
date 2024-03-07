<script setup>
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";
import Banner from "@/Components/Banner.vue";
import Feature from "@/Components/Feature.vue";
import Video from "@/Components/Video.vue";
import Deals from "@/Components/Deals.vue";
import Choose from "@/Components/Choose.vue";
import Place from "@/Components/Place.vue";
import Team from "@/Components/Team.vue";
import Cta from "@/Components/Cta.vue";
import News from "@/Components/News.vue";
import Download from "@/Components/Download.vue";
</script>


<template>
  <div class="boxed_wrapper">
    <Header />

    <Banner />

    <!-- category-section -->
  <Category/>
    <!-- category-section end -->

    <!-- feature-section -->
  <Feature></Feature>
    <!-- feature-section end -->

    <!-- video-section -->
<Video></Video>
    <!-- video-section end -->

    <!-- deals-section -->
  <Deals></Deals>
    <!-- deals-section end -->

    <!-- chooseus-section -->
   <Choose></Choose>
    <!-- chooseus-section end -->

    <!-- place-section -->
   <Place></Place>
    <!-- place-section end -->

    <!-- team-section -->
   <Team></Team>
    <!-- team-section end -->

    <!-- cta-section -->
   <Cta></Cta>
    <!-- cta-section end -->

    <!-- news-section -->
  <News></News>
    <!-- news-section end -->

    <!-- download-section -->
   <Download></Download>
    <!-- download-section end -->

    <Footer/>

    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
      <span class="fal fa-angle-up"></span>
    </button>
  </div>
</template>
