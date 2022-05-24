<template>
  <div class="flex justify-center relative ">
    <div class="bg-white rounded-2xl w-8/12 shadow-xl ">
      <div class="flex bg-optional-color rounded-tl-2xl rounded-tr-2xl py-3 px-10">
        <div class="flex flex-1">
          <h1 class="text-secondary-color text-base font-bold">Monte aqui o seu cardápio. O que está esperando?</h1>
        </div>
        <div class="flex justify-end items-center gap-3">
          <span class="text-primary-color">Comida</span>
          <label class="switch">
            <input v-model="tipo" @change="tipoComida()" type="checkbox">
            <span class="slider round"></span>
          </label>
          <span class="text-primary-color">Bebida</span>
        </div>
      </div>
      <div class="flex flex-col gap-5 px-5 -m-2 mb-10">
        <div class="flex gap-5">
          <input v-model="pedido.titulo" type="text" maxlength="60"
                 class="outline-0 border rounded-md border-primary-color w-5/12 px-2 text-primary-color"
                 placeholder="Título do pedido">
          <input v-model="pedido.sabor" type="text" maxlength="60"
                 class="outline-0 border rounded-md border-primary-color w-5/12 px-2 text-primary-color"
                 placeholder="Sabor">
          <input v-model="pedido.valor" type="number" required
                 class="outline-0 border rounded-md border-primary-color w-2/12 px-2 text-primary-color"
                 placeholder="R$">
        </div>
        <div class="">
          <textarea v-model="pedido.descricao" placeholder="Descrição"
                    class="outline-0 border rounded-lg border-primary-color w-full px-2" rows="4"
                    cols="50"></textarea>
        </div>
        <div class="">
          <picture-input
              :customStrings="{
              upload: '<h1>Bummer!</h1>',
                       drag: '<h1>Clique ou arraste para inserir uma foto.</h1>'
              }"
              @change="fototeste"
              width="500"
              height="200"
              margin="10"
              accept="image/jpeg,image/png">
          </picture-input>
        </div>
      </div>
      <div class="flex justify-center gap-3 -mb-5 mb-5">
        <button class="bg-red-500 py-2 px-10 text-white font-bold rounded-3xl uppercase">Limpar</button>
        <button @click="salvarPedido"
                class="bg-amber-400 py-2 px-10 font-bold rounded-3xl text-sm text-secondary-color uppercase">Cadastrar
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import PictureInput from 'vue-picture-input'

export default {
  name: "Formulario",
  components: {
    PictureInput
  },
  data() {
    return {
      tipo: Boolean,
      image: '',
      pedido: {
        titulo: '',
        sabor: '',
        valor: 0,
        descricao: '',
      }
    }
  },
  methods: {
    salvarPedido() {
      this.$store.commit('salvarPedido');
    },
    fototeste() {
      console.log("Picture changed!")
    },
    onChange(image) {
      console.log('New picture selected!')
      if (image) {
        console.log('Picture loaded.')
        this.image = image
        console.log(this.image)
      } else {
        console.log('FileReader API not supported: use the <form>, Luke!')
      }
    }
  },

}
</script>

<style scoped>
h1 * {
  font-size: 2px;
}
</style>