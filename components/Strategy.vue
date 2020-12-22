<template>
  <section class="strategy">
    <div class="container mx-auto">
      <div class="text-center bg-white container mx-auto">
        <p class="text-2xl text-black pb-3">Стратегия управления активами</p>
      </div>
    </div>
    <div class="container mx-auto mb-5 flex flex-row">
      <div class="text-black flex flex-col w-2/4 p-5">
        <div>
          <img src="@/assets/img/strategy-bg.jpg" alt="handshake">
        </div>
        <h3 class="text-left text-2xl py-6 text-gray-700">ОСНОВНОЙ ПРИНЦИП</h3>
        <p class="whitespace-pre-wrap leading-5">Мы не делим риски со своими Клиентами

Мы берем все риски на себя и получаем вознаграждение только от прибыли!
        </p>
      </div>
      <div class="grid grid-cols-1 m-10">
        <div class="garants-cards-container pb-10">
          <div class="garants-title-box">
            <img-loader class="garants-cards-img" name="coins-solid"></img-loader>
            <h4>СОХРАНИТЬ</h4>
          </div>
          <card>
            <p class="whitespace-pre-wrap">Прежде всего необходимо обеспечить защиту и сохранность капитала

Мы работаем только с проверенными партнерами, широко диверсифицируем инвестиционный портфель и вкладываем только в надежные финансовые инструменты.</p>
          </card>
        </div>
        <div class="garants-cards-container">
          <div class="garants-title-box">
            <img-loader class="garants-cards-img" name="sort-amount-up-solid"></img-loader>
            <h4>ПРИУМНОЖИТЬ</h4>
          </div>
          <card>
            <p class="whitespace-pre-wrap">Мы понимаем, что только движение капитала приносит прибыль, поэтому мы постоянно работаем над увеличением скорости оборачиваемости капитала

Наш многолетний накопленный опыт инвестиций помогает принимать только взвешенные и обдуманные решения направленные на получение максимальной прибыли</p>
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
/*
.garants-cards-container {
  @apply flex flex-col;
  & h4 {
    @apply font-medium text-gray-700 text-lg px-3;
  }
  & p {
    @apply pt-2  text-black text-base text-left;
  }
}

.garants-cards-img {
  @apply  w-6 h-auto;
}

.garants-title-box {
  @apply flex flex-row border-b-2 pb-3 border-blue-500;
} */
</style>
