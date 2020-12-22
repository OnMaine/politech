<template>
  <section class="analysys-how">
    <div class="container mx-auto">
      <div class="text-center bg-white">
        <h3 class="text-3xl my-10 font-medium">Как мы работаем</h3>
      </div>
    </div>
    <div class="container mx-auto mb-5">
      <div class="grid grid-cols-1 my-10 md:grid-cols-4">
        <div class="analysis-cards-container">
          <div class="flex justify-center">
            <img-loader class="consult-cards-img" name="phone-square-alt-solid"></img-loader>
          </div>
          <card>
            <p>Вы оставляете заявку или звоните</p>
          </card>
        </div>
        <div class="analysis-cards-container">
          <div class="flex justify-center">
            <img-loader class="pb-5 h-auto w-10" name="file-word-regular"></img-loader>
          </div>
          <card>
            <p>Заключаем индивидуальный договор</p>
          </card>
        </div>
        <div class="analysis-cards-container">
          <div class="flex justify-center">
            <img-loader class="pb-5 h-auto w-16 " name="cogs"></img-loader>
          </div>
          <card>
            <p class="">Наш специалист приступает к работе</p>
          </card>
        </div>
        <div class="analysis-cards-container">
          <div class="flex justify-center">
            <img-loader class="pb-5 h-auto w-16" name="money-bill-alt-solid"></img-loader>
          </div>
          <card>
            <p>Вы производите оплату и получаете готовый отчет</p>
          </card>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import ImgLoader from '~/components/ImgLoader';
import Card from '~/components/Card';

export default {
  components: {
    ImgLoader,
    Card
  }
};
</script>

<style>

.analysis-cards-container {
  @apply flex flex-col text-center p-5;
  & p {
    @apply text-black text-lg pt-5;
  }
}

.consult-cards-img {
  @apply pb-5 h-auto w-12;
}
</style>
