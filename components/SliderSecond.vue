<template>
  <div class="container mx-auto">
    <carousel :autoplay="true" :nav="false" :items="5" :loop="true" :dots="false" :autoplaySpeed="7000">
      <company-card>
        <img-loader class="image-full" name="GMKN"></img-loader>
      </company-card>
      <company-card>
        <img-loader class="image-full" name="Enel_Russia"></img-loader>
      </company-card>
      <company-card>
        <img-loader class="image-full" name="MOEX"></img-loader>
      </company-card>
      <company-card>
        <img-loader class="image-full" name="LKOH" ></img-loader>
      </company-card>
      <company-card>
        <img-loader class="image-full" name="Mosenergo"></img-loader>
      </company-card>
      <company-card>
        <img-loader class="image-full" name="MTS"></img-loader>
      </company-card>
    </carousel>
  </div>
</template>

<script>
import ImgLoader from '~/components/ImgLoader';
import CompanyCard from '~/components/CompanyCard';
import carousel from 'vue-owl-carousel'

export default {
  components: {
    ImgLoader,
    CompanyCard,
    carousel
  }
};
</script>

<style>

</style>
