<template>
    <img :src="require(`@/assets/img/`+`${name}`+`.png`)" class="items-center self-center">
</template>

<script>
  export default {
      props: {
          name: {
              type: String,
              required: true
          }
      }
  }

</script>

<style>

</style>
