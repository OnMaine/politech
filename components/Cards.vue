<template>
  <section class="cards">
    <div class="container mx-auto mb-5">
      <div class="grid grid-cols-1 my-10 md:grid-cols-4">
        <div class="cards-container">
          <div class="flex justify-center">
            <img-loader class="cards-img" name="cogs"></img-loader>
          </div>
          <card>
            <h4>Технологичность</h4>
            <p>Мы успешно применяем самые новые технологии в отрасли, чтобы Ваш бизнес всегда был на шаг впереди.</p>
          </card>
        </div>
        <div class="cards-container">
          <div class="flex justify-center">
            <img-loader class="cards-img" name="signa"></img-loader>
          </div>
          <card>
            <h4>Высокое качество</h4>
            <p>Мы гарантируем эффективность любого нашего продукта или услуги и всегда достигаем нужного результата.</p>
          </card>
        </div>
        <div class="cards-container">
          <div class="flex justify-center">
            <img-loader class="cards-img" name="user"></img-loader>
          </div>
          <card>
            <h4>Клиентоориентированность</h4>
            <p>Мы всегда обеспечиваем индивидуальный подход и во всем ориентируемся на цели и потребности Клиента.</p>
          </card>
        </div>
        <div class="cards-container">
          <div class="flex justify-center">
            <img-loader class="cards-img" name="trophy"></img-loader>
          </div>
          <card>
            <h4>Профессионализм</h4>
            <p>Опыт нашей команды поможет решить любые задачи и вывести Вас на новый уровень развития.</p>
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

.cards-container {
  @apply flex flex-col text-center p-5;
  & h4 {
    @apply font-bold text-gray-700 text-lg;
  }
  & p {
    @apply pt-2 text-black text-base;
  }
}

.cards-img {
  @apply pb-5 h-auto w-16;
}
</style>
