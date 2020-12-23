<template>
  <section class="consultation-text-section">

    <div class="container mx-auto text-center py-10">
      <div>
        <h3 class="uppercase text-xl md:text-2xl font-medium">ЧТО ПРЕДСТАВЛЯЕТ СОБОЙ АНАЛИЗ ФИНАНСОВОЙ ОТЧЕТНОСТИ ПРЕДПРИЯТИЯ?</h3>
      </div>
      <div class="header__line border-b-8 w-20 mx-auto mt-10 mb-2 border-blue-300"></div>
    </div>
    <div class="bg-white container mx-auto">
      <p class="whitespace-pre-wrap mx-5 md:mx-10 mb-5 text-base md:text-lg">Управление недвижимостью – специфическая деятельность, представляющая собой поддержание или улучшение состояния объекта недвижимости, анализ его развития.

Основные цели управления: отличное функционирование объекта, сокращение затрат на его содержание и увеличение прибыли от его использования. </p>
    </div>

    <div class="container mx-auto flex flex-row pt-5">
      <div class="text-black flex flex-col flex-col-reverse md:flex-row mx-5 md:mx-10">
        <div>
          <h4 class="uppercase text-xl md:text-2xl mt-5 md:mt-0 text-center md:text-left">КАКИЕ УСЛУГИ ВХОДЯТ В СТОИМОСТЬ:</h4>
          <ol type="1" start="1" class="my-5">
            <li class="number-list">Оптимизация и управление финансами</li>
            <li class="number-list">Бизнес-обучение собственников бизнеса, топ менеджеров компаний в финансовой и коммерческой сфере</li>
            <li class="number-list">Бизнес планирование, анализ, оценка бизнеса</li>
            <li class="number-list">Управление инвестициями в краткосрочной, среднесрочной и долгосрочной перспективе</li>
            <li class="number-list">Разработка и внедрение системы стимулирования, основаyной на грейдировании KPI</li>
          </ol>
        </div>
        <div class="md:w-3/4 md:p-2">
          <img src="@/assets/img/nedvizhimost.jpg" alt="handshake">
        </div>
      </div>
    </div>

    <div class="container mx-auto">
      <div class="text-center bg-white">
        <h3 class="text-3xl md:my-10 font-medium">Как мы работаем</h3>
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
            <img-loader class="pb-5 h-auto w-10 " name="child"></img-loader>
          </div>
          <card>
            <p class="">Наш специалист выезжает на объект</p>
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
            <img-loader class="pb-5 h-auto w-16" name="money-bill-alt-solid"></img-loader>
          </div>
          <card>
            <p>Вы получаете прибыль и отдыхаете</p>
          </card>
        </div>
      </div>
    </div>

    <div class="bg-white container mx-auto">
      <p class="whitespace-pre-wrap mx-5 md:mx-10 mb-5 text-base md:text-lg">Доверительное управление квартирой или офисным помещением позволяет клиенту получать хороший доход в течение долгого периода времени, а все издержки и заботы возьмут на себя специалисты.

Право за отслеживанием качества исполнения договора и принятия важных решений остается за собственником. Данное распределение обязанностей помогает увеличить доход от аренды любого объекта, а также повышает уровень их ликвидности.
      </p>
    </div>

    <div class="container mx-auto flex flex-row pt-5">
      <div class="text-black flex flex-col flex-col-reverse md:flex-row mx-5 md:mx-10">
        <div>
          <h4 class="uppercase text-xl md:text-2xl mt-5 md:mt-0 text-center md:text-left">СОБСТВЕННИК ПОЛУЧАЕТ СЛЕДУЮЩИЕ ПРЕИМУЩЕСТВА:</h4>
          <ol type="1" start="1" class="my-5">
            <li class="number-list">Прибыль в максимальном размере от сдачи недвижимости</li>
            <li class="number-list">Отсутствие риска попасть в аферу с недобросовестными арендаторами или мошенниками</li>
            <li class="number-list">Отсутствие простоев вашей недвижимости</li>
            <li class="number-list">Оптимизация налогообложения</li>
            <li class="number-list">Получение собственником арендных платежей любым удобным для него способом</li>
            <li class="number-list">Возможность получить консультацию по любым вопросам у руководителя отдела доверительного управления доступного для связи 24/7.</li>
          </ol>
        </div>
        <div class="md:w-3/4 md:p-2">
          <img src="@/assets/img/nedvizhimost-house.jpeg" alt="handshake">
        </div>
      </div>
    </div>

    <div class="bg-white container mx-auto md:pt-10 pb-5">
      <p class="whitespace-pre-wrap mx-5 md:mx-10 mb-5 text-base md:text-lg">Вы можете доверить нам управление своей недвижимостью, как на постоянной основе, так и на время Вашего отсутствия в городе.

Если Вы действительно заинтересованы в максимальной доходности своих недвижимых активов при минимальных затратах времени и сил, то мы с радостью поможем Вам.</p>
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
.number-list {
  @apply py-1;
}

</style>
