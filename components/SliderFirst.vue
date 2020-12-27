<template>
  <div class="container mx-auto">
    <carousel :autoplay="true" :nav="false" :items="5" :loop="true" :dots="false" :autoplaySpeed="7000">
      <company-card>
        <img-loader class="image-full" name="Mechel"></img-loader>
      </company-card>
      <company-card>
        <img-loader class="image-full" name="GAZP"></img-loader>
      </company-card>
      <company-card>
        <img-loader class="image-full" name="CHMF"></img-loader>
      </company-card>
      <company-card>
        <img-loader class="image-full" name="ALRS"></img-loader>
      </company-card>
      <company-card>
        <img-loader class="image-full" name="FSK_EES"></img-loader>
      </company-card>
      <company-card>
        <img-loader class="image-full" name="FosAgro" ></img-loader>
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
