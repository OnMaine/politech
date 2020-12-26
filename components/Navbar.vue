<template>
  <div id="aps" class="container mx-auto bg-black">
    <nav class="flex lg:flex-row flex-col justify-between items-center px-6 py-2">
      <div class="flex flex-row items-center justify-between md:justify-center lg:justify-between w-full pb-3 lg:pb-0">
        <div class="">
          <nuxt-link class="font-bold text-2xl lg:text-3xl" to="/">
            PoliTech
          </nuxt-link>
        </div>
        <div class="block md:hidden">
        <transition name="fade" mode="out-in">
          <button v-if="!show" @click="show = !show" key="menu" class="menu flex items-center px-3 py-2 border rounded text-white border-gray-100 hover:text-gray-100 hover:border-teal-500 appearance-none focus:outline-none">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
          <button v-else @click="show = !show" key="clear" class="clear flex items-center px-3 py-2 border rounded text-white border-gray-100 hover:text-gray-100 hover:border-teal-500 appearance-none focus:outline-none">
            <svg class="fill-current h-3 w-3" viewBox="5 0 20 20"><path fill="#fff" d="M17.3 8.2L13.4 12l3.9 3.8a1 1 0 0 1-1.5 1.5L12 13.4l-3.8 3.9a1 1 0 0 1-1.5-1.5l3.9-3.8-3.9-3.8a1 1 0 0 1 1.5-1.5l3.8 3.9 3.8-3.9a1 1 0 0 1 1.5 1.5z" fill-rule="evenodd"/></svg>
          </button>
        </transition>
        </div>
      </div>
      <div class="w-full">
      <transition name="fade">
        <ul class="flex flex-col md:flex-row items-center justify-center" v-if="show">
          <nuxt-link active-class="active" class="link text-base md:text-sm lg:text-base ml-6 lg:ml-0 px-0 lg:px-6" to="/actives">
            Активы
          </nuxt-link>
          <nuxt-link active-class="active" class="link text-base md:text-sm lg:text-base ml-6 lg:ml-0 px-0 lg:px-6" to="/consultation">
            Инвестиции
          </nuxt-link>
          <nuxt-link active-class="active" class="link text-base md:text-sm lg:text-base ml-6 lg:ml-0 px-0 lg:px-6" to="/analysis">
            Анализ
          </nuxt-link>
          <nuxt-link active-class="active" class="link text-base md:text-sm lg:text-base ml-6 lg:ml-0 px-0 lg:px-6" to="/immovables">
            Недвижимость
          </nuxt-link>
          <nuxt-link active-class="active" class="link text-base md:text-sm lg:text-base ml-6 lg:ml-0 px-0 lg:px-6" to="/consulting">
            Консалтинг
          </nuxt-link>
          <nuxt-link active-class="active" class="link text-base md:text-sm lg:text-base ml-6 lg:ml-0 px-0 lg:px-6" to="/vacancy">
            Вакансии
          </nuxt-link>
        </ul>
        </transition>

        <ul class="flex flex-col md:flex-row items-center justify-center hidden md:flex">
          <nuxt-link active-class="active" class="link text-base md:text-sm lg:text-base ml-6 lg:ml-0 px-0 lg:px-6" to="/actives">
            Активы
          </nuxt-link>
          <nuxt-link active-class="active" class="link text-base md:text-sm lg:text-base ml-6 lg:ml-0 px-0 lg:px-6" to="/consultation">
            Инвестиции
          </nuxt-link>
          <nuxt-link active-class="active" class="link text-base md:text-sm lg:text-base ml-6 lg:ml-0 px-0 lg:px-6" to="/analysis">
            Анализ
          </nuxt-link>
          <nuxt-link active-class="active" class="link text-base md:text-sm lg:text-base ml-6 lg:ml-0 px-0 lg:px-6" to="/immovables">
            Недвижимость
          </nuxt-link>
          <nuxt-link active-class="active" class="link text-base md:text-sm lg:text-base ml-6 lg:ml-0 px-0 lg:px-6" to="/consulting">
            Консалтинг
          </nuxt-link>
          <nuxt-link active-class="active" class="link text-base md:text-sm lg:text-base ml-6 lg:ml-0 px-0 lg:px-6" to="/vacancy">
            Вакансии
          </nuxt-link>
        </ul>

      </div>
    </nav>
  </div>
</template>

<script>

export default {
  name: 'aps',
  data() {
    return {
      show: false,
    };
  },
};

</script>

<style>
.link {
  @apply text-white font-bold uppercase border-b-2 border-black;
  &:hover,
  &:focus {
    @apply text-orange-300 border-b-2 border-solid border-orange-300;
  }
}
</style>
