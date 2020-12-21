<template>
  <section class="work-section">
    <div class="bg-white container mx-auto text-center py-10">
      <div>
        <h3 class="uppercase text-2xl font-medium">ОСНОВНЫЕ НАПРАВЛЕНИЯ ДЕЯТЕЛЬНОСТИ</h3>
      </div>
      <div class="header__line border-b-8 w-20 mx-auto mt-10 mb-2 border-blue-300"></div>
    </div>
    <div class="bg-white container mx-auto">
      <ul class="mx-10 mb-10">
        <li class="works-list-item">Оптимизация и управление финансами</li>
        <li class="works-list-item">Бизнес-обучение собственников бизнеса, топ менеджеров компаний в финансовой и коммерческой сфере</li>
        <li class="works-list-item">Бизнес планирование, анализ, оценка бизнеса</li>
        <li class="works-list-item">Управление инвестициями в краткосрочной, среднесрочной и долгосрочной перспективе</li>
        <li class="works-list-item">Разработка и внедрение системы стимулирования, основаyной на грейдировании KPI</li>
      </ul>
    </div>
  </section>
</template>

<script>

</script>

<style>
.works-list-item {
  @apply text-lg pb-2;
  &::before {
  content: "*";
  top: 100%;
 }
}

</style>
