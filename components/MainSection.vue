<template>
  <section class="main-section">
    <div class="container mx-auto">
      <div class="services-cards grid grid-cols-1 my-5 md:grid-cols-2">
        <div class="main-card">
          <div class="w-3/6 h-full flex justify-center items-center">
           <img-loader class="main-img" name="check"></img-loader>
          </div>
          <div>
            <p class="pl-5 text-xs md:text-lg">Если Вы ищете готовые решения для себя или своего бизнеса, мы готовы предложить проверенные,
              успешные модели и разработать уникальное предложение именно для Вас.</p>
          </div>
        </div>
        <div class="main-card">
          <div class="w-3/6 h-full flex justify-center items-center">
            <img-loader class="main-img" name="child"></img-loader>
          </div>
          <div>
            <p class="pl-5 text-xs md:text-lg">За нашими плечами 8 лет успешной работы и поступательного развития. Мы развиваемся как в плане расширения
              самой компании и диапазона предоставляемых услуг, так и в плане повышения сервиса и качества.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-white container mx-auto text-center py-8">
      <div>
        <h2 class="text-lg md:text-2xl font-medium text-black mt-2">
          Наши услуги получают наилучшие отзывы и обладают <br>
          многочисленными конкурентными преимуществами
        </h2>
      </div>
    </div>
  </section>
</template>

<script>
import ImgLoader from '~/components/ImgLoader';

export default {
  components: {
    ImgLoader
  }
};
</script>

<style>

.main-card {
  @apply flex justify-center items-center p-5;
  & p {
    @apply pr-5 text-black;
  }
}

.main-img {
  @apply h-auto w-12;
}

</style>
