<template>
  <section class="actives-card">
    <div class="container mx-auto mb-5">
      <div class="services-cards grid grid-cols-1 my-10 md:grid-cols-2">
        <div class="actives-cards-container">
          <div>
            <img-loader class="actives-cards-img" name="book-solid"></img-loader>
          </div>
          <card>
            <p>Мы предоставляем 100% защиту капитала инвестора, благодаря юридическим гарантиям возврата инвестиций.</p>
          </card>
        </div>
        <div class="actives-cards-container">
          <div>
            <img-loader class="actives-cards-img" name="chart"></img-loader>
          </div>
          <card>
            <p>Капитал размещается в широкий ассортимент высоколиквидных активов.</p>
          </card>
        </div>
        <div class="actives-cards-container">
          <div>
            <img-loader class="actives-cards-img" name="briefcase"></img-loader>
          </div>
          <card>
            <p>Многолетний накопленный опыт позволяет нам инвестировать с максимальной эффективностью.</p>
          </card>
        </div>
        <div class="actives-cards-container">
          <div>
            <img-loader class="pb-5 w-24 h-auto " name="handshake-solid"></img-loader>
          </div>
          <card>
            <p>Нам доверяют свой капитал управляющие банков, владельцы малого и среднего бизнеса, простые граждане и пенсионеры.</p>
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
    @apply pt-2 px-10 text-black text-base text-center;
  }
}

.actives-cards-img {
  @apply pb-5 w-16 h-auto;
}
</style>
