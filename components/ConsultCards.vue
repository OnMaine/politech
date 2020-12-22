<template>
  <section class="consult-cards">
    <div class="container mx-auto pt-5">
      <div class="text-center bg-white">
        <h3 class="text-3xl my-10">Кому будет полезна консультация</h3>
      </div>
    </div>
    <div class="container mx-auto mb-5">
      <div class="grid grid-cols-1 my-10 md:grid-cols-3">
        <div class="consult-cards-container">
          <div class="flex justify-center">
            <img-loader class=" pb-2 h-auto w-10" name="child"></img-loader>
          </div>
          <card>
            <h4>НАЧИНАЮЩИЙ ИНВЕСТОР</h4>
            <p class="pt-6">Мы успешно применяем самые новые технологии в отрасли, чтобы Ваш бизнес всегда был на шаг впереди.</p>
          </card>
        </div>
        <div class="consult-cards-container">
          <div class="flex justify-center">
            <img-loader class="consult-cards-img" name="star-solid"></img-loader>
          </div>
          <card>
            <h4>ОПЫТНЫЙ ИНВЕСТОР</h4>
            <p class="pt-6">Мы гарантируем эффективность любого нашего продукта или услуги и всегда достигаем нужного результата.</p>
          </card>
        </div>
        <div class="consult-cards-container">
          <div class="flex justify-center">
            <img-loader class="consult-cards-img" name="trophy"></img-loader>
          </div>
          <card>
            <h4>ПРЕДПРИНИМАТЕЛЬ, ВЛАДЕЛЕЦ БИЗНЕСА</h4>
            <p>Мы всегда обеспечиваем индивидуальный подход и во всем ориентируемся на цели и потребности Клиента.</p>
          </card>
        </div>
      </div>
    </div>

    <div class="container mx-auto">
      <div class="text-center bg-white">
        <h3 class="text-3xl my-10">Как проходит консультация</h3>
      </div>
    </div>
    <div class="container mx-auto mb-5">
      <div class="grid grid-cols-1 my-10 md:grid-cols-4">
        <div class="consult-cards-container">
          <div class="flex justify-center">
            <img-loader class="consult-cards-img" name="bullhorn-solid"></img-loader>
          </div>
          <card>
            <h4>ОСТАВЬТЕ ЗАЯВКУ НА САЙТЕ</h4>
            <p class="pt-6">Представитель компании свяжется с вами и ответит на вопросы</p>
          </card>
        </div>
        <div class="consult-cards-container">
          <div class="flex justify-center">
            <img-loader class="consult-cards-img" name="list-alt-regular"></img-loader>
          </div>
          <card>
            <h4>СОСТАВЬТЕ СПИСОК ВОПРОСОВ</h4>
            <p class="">Мы изучим ваши вопросы и подготовимся ко встрече</p>
          </card>
        </div>
        <div class="consult-cards-container">
          <div class="flex justify-center">
            <img-loader class="consult-cards-img" name="calendar-check-regular"></img-loader>
          </div>
          <card>
            <h4>СОГЛАСУЙТЕ ДАТУ И ВРЕМЯ</h4>
            <p class="pt-6">Выберите удобное для вас время</p>
          </card>
        </div>
        <div class="consult-cards-container">
          <div class="flex justify-center">
            <img-loader class="pb-5 h-auto w-16" name="comments-dollar-solid"></img-loader>
          </div>
          <card>
            <h4>ПРОВОДИМ КОНСУЛЬТАЦИЮ</h4>
            <p class="pt-6">Длительность консультации до 2-х часов</p>
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

.consult-cards-container {
  @apply flex flex-col text-center p-5;
  & h4 {
    @apply uppercase font-bold text-gray-700 text-lg;
  }
  & p {
    @apply text-black text-base;
  }
}

.consult-cards-img {
  @apply pb-5 h-auto w-12;
}
</style>
