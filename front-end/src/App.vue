<template>
  <div class="relative">
    <div class="">
      <img src="./assets/images/wave.svg" alt="">
    </div>
    <div class="flex flex-col -mt-[80px] phone:-mt-[100px] tablet:-mt-[210px] laptop:-mt-[300px] desktop:-mt-[350px]">
      <div class="flex justify-center py-2">
        <img class="w-6/12 laptop:w-4/12" src="./assets/images/Logo-pastel.png" alt="">
      </div>
      <Formulario/>
    </div>
    <Pedido :visualizacao="display"/>
  </div>
</template>

<script>
import Formulario from "./components/Formulario.vue";
import Pedido from "./components/Pedido.vue";

export default {
  data() {
    return {
      display: 'hidden'
    }
  },
  components: {
    Formulario,
    Pedido
  },
}
</script>


<style>

</style>
