<template>
  <header class="header font-sans leading-relaxed bg-black text-white">
    <div class="container mx-auto">
      <div class="pt-8 pb-4 flex-col justify-center">
        <h1 class="uppercase text-5xl font-medium text-center">ГРУППА КОМПАНИЙ ПОЛИТЕХ</h1>
        <div class="header__line border-b-8 w-20 mx-auto my-4 border-blue-300">
        </div>
      </div>
      <Navbar/>
    </div>
  </header>
</template>

<script>
import Navbar from '@/components/Navbar';
export default {
  components: {
    Navbar,
  }
};
</script>

<style>

</style>
