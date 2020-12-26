<template>
  <section class="actives-card">
    <div class="container mx-auto mb-5">
      <div class="md:my-10 grid grid-cols-1  md:grid-cols-2">
        <div class="actives-cards-container">
          <div>
            <img-loader class="actives-cards-img pt-6 md:pt-0" name="book-solid"></img-loader>
          </div>
          <card>
            <p class=" px-2 md:px-10">Мы предоставляем 100% защиту капитала инвестора, благодаря юридическим гарантиям возврата инвестиций.</p>
          </card>
        </div>
        <div class="actives-cards-container">
          <div>
            <img-loader class="actives-cards-img pt-6 md:pt-0" name="chart"></img-loader>
          </div>
          <card>
            <p class=" px-2 md:px-10">Капитал размещается в широкий ассортимент высоколиквидных активов.</p>
          </card>
        </div>
        <div class="actives-cards-container">
          <div>
            <img-loader class="actives-cards-img pt-6 md:pt-0" name="briefcase"></img-loader>
          </div>
          <card>
            <p class=" px-2 md:px-10">Многолетний накопленный опыт позволяет нам инвестировать с максимальной эффективностью.</p>
          </card>
        </div>
        <div class="actives-cards-container">
          <div>
            <img-loader class="pb-5 w-24 pt-6 md:pt-0" name="handshake-solid"></img-loader>
          </div>
          <card>
            <p class=" px-2 md:px-10">Нам доверяют свой капитал управляющие банков, владельцы малого и среднего бизнеса, простые граждане и пенсионеры.</p>
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

.actives-cards-container {
  @apply flex flex-row p-5;
  & p {
    @apply pt-2 text-black text-base text-center;
  }
}

.actives-cards-img {
  @apply pb-5 h-auto w-16;
}
</style>
