<template>
  <nav>
    <div class="container mx-auto px-6 py-2 flex justify-between items-center">
      <a class="font-bold xt-2xl lg:text-3xl" href="#">
        PoliTech
      </a>
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
          <li><a class="link" href="#">Активы</a></li>
          <li><a class="link" href="#">Инвестиции</a></li>
          <li><a class="link" href="#">Анализ</a></li>
          <li><a class="link" href="#">Недвижимость</a></li>
          <li><a class="link" href="#">Консалтинг</a></li>
          <li><a class="link" href="#">Вакансии</a></li>
          <li>
            <a class="link-img" href="#">
              <svg class="inline-flex" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"/>
              </svg>
            </a>
          </li>
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
  @apply px-6 text-white font-bold uppercase;
  &:hover,
  &:focus {
    @apply text-orange-300 border-b-2 border-solid border-orange-300;
  }
}
.link-img {
  @apply text-white px-4;
  &:hover {
    @apply text-orange-300;
  }
}
</style>
