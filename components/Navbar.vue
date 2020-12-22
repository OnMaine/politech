<template>
  <nav>
    <div class="container mx-auto px-6 py-2 flex justify-between items-center">
      <nuxt-link class="font-bold xt-2xl lg:text-3xl" to="/">
        PoliTech
      </nuxt-link>
      <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-white border-gray-100 hover:text-gray-100 hover:border-teal-500 appearance-none focus:outline-none">
          <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:block">
        <ul class="inline-flex">
          <nuxt-link active-class="active" class="link" to="/actives">
            Активы
          </nuxt-link>
          <nuxt-link active-class="active" class="link" to="/consultation">
            Инвестиции
          </nuxt-link>
          <nuxt-link active-class="active" class="link" to="/analysis">
            Анализ
          </nuxt-link>
          <nuxt-link active-class="active" class="link" to="/immovables">
            Недвижимость
          </nuxt-link>
          <nuxt-link active-class="active" class="link" to="/consulting">
            Консалтинг
          </nuxt-link>
          <nuxt-link active-class="active" class="link" to="/vacancy">
            Вакансии
          </nuxt-link>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
}
</script>

<style>
.link {
  @apply px-6 text-white font-bold uppercase border-b-2 border-black;
  &:hover,
  &:focus {
    @apply text-orange-300 border-b-2 border-solid border-orange-300;
  }
}
</style>
