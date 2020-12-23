<template>
  <section class="form-section text-white">
    <div class="container mx-auto flex  flex-col md:flex-row justify-center px-5 md:px-10 py-10">
        <Form />
      <div class="flex flex-row items-center md:w-5/12 lg:w-2/4 pt-10 md:pt-0">
        <div class="flex flex-col pl-5">
          <div class="">
            <h4 class="text-white text-3xl md:text-4xl  mb-5">ГК ПОЛИТЕХ</h4>
            <p class="text-gray-300 mb-3">График работы: <span>с 10:00 до 19:00</span></p>
            <p class="text-gray-300 mb-3">Сб-Вс выходные</p>
          </div>
          <div class="flex flex-col">
            <h4 class="text-white text-3xl md:text-2xl py-5">Контакты</h4>
            <div class="flex flex-col text-gray-300">
              <div class="flex mb-4">
                <div>
                  <img-loader class="contacts-img mt-4 sm:mt-0 ml-1 sm:ml-0" name="map"></img-loader>
                </div>
                <div>
                  <p class="pl-8 sm:pl-5">г. Пермь, ул. Советская, д. 65А, оф. 18, 2 этаж</p>
                </div>
              </div>
              <div class="flex mb-4">
                <div>
                  <img-loader class="contacts-img" name="mobile"></img-loader>
                </div>
                <div>
                  <p class="pl-5">+7 (982) 449 36 18</p>
                </div>
              </div>
              <div class="flex mb-4">
                <div>
                  <img-loader class="contacts-img" name="envelope-open"></img-loader>
                </div>
                <div>
                  <p class="pl-6 sm:pl-5">gk.polytech@gmail.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import ImgLoader from '~/components/ImgLoader';
import Form from '@/components/Form'

export default {
  components: {
    ImgLoader,
    Form
  }
};
</script>

<style>
.form-section {
    background: linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ), url(@/assets/img//bg.png);
    background-size: cover;
}
.contacts-img {
  width: 18px;
  height: 20px;
}
</style>
