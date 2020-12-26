<template>
  <section class="garants-card">
    <div class="container mx-auto mb-5 flex flex-col md:flex-row">
      <div class="text-black flex flex-col md:w-2/5 p-5">
        <div>
          <img src="@/assets/img/handshake-bg.jpg" alt="handshake">
        </div>
        <h3 class="text-center md:text-left text-2xl py-6 text-gray-700">ИНДИВИДУАЛЬНЫЙ ПОДХОД</h3>
        <p class="text-center md:text-left">
          Мы работаем для того, чтобы наши клиенты жили лучше и богаче, благодаря грамотному управлению своим капиталом.
          Мы анализируем, познаём и затем действуем.  Помогаем клиентам развивать компетенции позволяющие добиваться поставленных целей.
          Формируем будущее вместе.
        </p>
      </div>
      <div class="grid grid-cols-1 m-10">
        <div class="garants-cards-container">
          <div class="garants-title-box pt-5 md:pt-0">
            <img-loader class="garants-cards-img" name="clipboard-list-solid"></img-loader>
            <h4>ГАРАНТИИ</h4>
          </div>
          <card>
            <p>Каждый заключенный договор обеспечен ценными бумагами, которые находятся в собственности компании.</p>
          </card>
        </div>
        <div class="garants-cards-container pt-10 md:pt-0">
          <div class="garants-title-box">
            <img-loader class="garants-cards-img" name="search-solid"></img-loader>
            <h4>ПРОЗРАЧНОСТЬ</h4>
          </div>
          <card>
            <p>У каждого инвестора есть возможность по необходимости запросить отчет о состоянии своих инвестиций.</p>
          </card>
        </div>
        <div class="garants-cards-container pt-10 md:pt-0">
          <div class="garants-title-box">
            <img-loader class="garants-cards-img" name="unlock-alt-solid"></img-loader>
            <h4>БЕЗОПАСНОСТЬ</h4>
          </div>
          <card>
            <p>Надежность и безопасность наш главный аргумент! Потому что мы предоставляем гарантии по возврату вложенных средств.</p>
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
  @apply h-auto w-6;
}

.garants-title-box {
  @apply flex flex-row border-b-2 pb-3 border-blue-500;
}
</style>
