<template>
<div id="app" class="sm:w-11/12 md:w-9/12 lg:w-5/12">
  <form class="vue-form px-5 md:px-10" @submit.prevent="submit">
    <div class="error-message">
      <p v-show="!email.valid">Введите валидные данные</p>
    </div>

    <fieldset>
      <legend>Связатся с нами</legend>
      <div>
        <label class="label" for="name">Имя</label>
        <input type="text" name="name" id="name" required="" v-model="name">
      </div>
      <div>
        <label class="label" for="surName">Фамилия</label>
        <input type="text" name="surName" id="surName" required="" v-model="surName">
      </div>
      <div>
        <label class="label" for="phone">Телефон</label>
        <input type="phone" placeholder="+7 (999)- 999-99-99" name="phone" id="phone" required="" v-model="phone">
      </div>
      <div>
        <label class="label" for="email">Email</label>
        <input type="email" placeholder="example@gmail.com" name="email" id="email" required=""
               :class="{ email , error: !email.valid }"
               v-model="email.value">
      </div>
      <div>
        <label class="label" for="textarea">Комментарий</label>
        <textarea class="message" name="textarea" id="textarea" required=""
                  v-model="message.text"
                  :maxlength="message.maxlength"></textarea>
        <span class="counter">{{ message.text.length }} / {{ message.maxlength }}</span>
      </div>
      <div>
        <input type="submit" value="Отправить">
      </div>
    </fieldset>
  </form>

  <!-- <div class="debug">
    <pre><code>{{ $data }}</code></pre>
  </div> -->

</div>
</template>


<script>

var emailRegExp = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

export default {
  name: 'app',
  data() {
    return {
      name: "",
      surName: "",
      phone: "",
      email: {
        value: "",
        valid: true
      },
      message: {
        text: ``,
        maxlength: 255
      },
      submitted: false
    };
  },
  methods: {
    // submit form handler
    submit: function() {
      this.submitted = true;
    },
    // validate by type and value
    validate: function(type, value) {
      if (type === "email") {
        this.email.valid = this.isEmail(value) ? true : false;
      }
    },
    // check for valid email adress
    isEmail: function(value) {
      return emailRegExp.test(value);
    }
  },
  watch: {
    // watching nested property
    "email.value": function(value) {
      this.validate("email", value);
    }
  }
};

</script>

<style>
.vue-form {
  @apply py-2 m-auto rounded-md bg-white shadow-2xl w-full;
}

.vue-form legend {
  @apply pb-5 text-lg border-b border-gray-400 text-gray-700 font-medium;
}
.vue-form div {
  @apply relative pt-2;
}
.vue-form h4,
.vue-form .label {
  @apply mb-3 text-gray-700;
}
.vue-form .label {
  @apply block;
}
.vue-form input,
.vue-form textarea,
.vue-form label {
  @apply text-gray-800;
}
.vue-form input[type="text"],
.vue-form input[type="email"],
.vue-form textarea,
.vue-form legend {
  @apply block appearance-none w-full;
}
.vue-form input[type="text"],
.vue-form input[type="email"],
.vue-form textarea {
  @apply bg-white rounded p-2 border border-gray-400 shadow-md;
}
.vue-form input[type="text"]:focus,
.vue-form input[type="email"]:focus,
.vue-form textarea:focus {
  @apply outline-none border-gray-400 shadow-md;
}

.vue-form textarea {
  min-height: 120px;
  @apply overflow-auto resize-y;
}
.vue-form input[type="submit"] {
  padding: 12px 20px;
  @apply border-none bg-blue-900 rounded text-white font-bold float-right cursor-pointer appearance-none;
  &:hover {
    @apply bg-blue-600;
  }
  &:focus {
    @apply outline-none bg-blue-600;
  }
}

.vue-form input[type="submit"]:active {
  transform: scale(0.9);
}
.vue-form .error-message {
  height: 35px;
  margin: 0px;
}
.vue-form .error-message p {
  @apply bg-red-400 text-white text-2xl text-center rounded;
  padding: 16px;
}
.vue-form .error {
  @apply border-red-500;
}
.vue-form .counter {
  @apply bg-gray-300 absolute right-0 top-0;
  font-size: 10px;
  padding: 4px;
}

/* .debug {
  border-radius: 4px;
  margin: 50px auto;
  width: 500px;
  background-color: #000;
  padding: 50px;
  background: rgba(0, 0, 0, 0.8);
  box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.3);
}

.debug pre {
  color: #ffffff;
  font-size: 18px;
  line-height: 30px;
  font-family: "Source Code Pro", monospace;
  font-weight: 300;
  white-space: pre-wrap;
} */

</style>
