<template>
  <div class="grid grid-cols-2 sm:grid-cols-6 gap-0 p-5">
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
  </div>
</template>

<script>
import ImgLoader from '~/components/ImgLoader';
import CompanyCard from '~/components/CompanyCard';

export default {
  components: {
    ImgLoader,
    CompanyCard
  }
};
</script>

<style>

</style>
