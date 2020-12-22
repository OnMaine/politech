<template>
  <div class="grid grid-cols-2 sm:grid-cols-6 gap-0 p-5">
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
