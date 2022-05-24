<template>
  <div class="flex justify-center relative ">
    <div class="bg-white rounded-2xl w-8/12 shadow-xl">
      <div class="flex bg-amber-400 rounded-tl-2xl rounded-tr-2xl py-3 px-10">
        <div class="flex flex-1">
          <h1 class="text-secondary-color text-base font-bold">Monte aqui o seu cardápio. O que está esperando?</h1>
        </div>
        <div class="flex justify-end">
          <span>Comida / Bebida</span>
        </div>
      </div>
      <div class="flex flex-col gap-2 px-5 -m-2">
        <div class="flex gap-5">
          <input type="text" class="outline-0 border-2 rounded-lg border-primary-color w-5/12 px-2 text-primary-color" placeholder="Título do pedido">
          <input type="text" class="outline-0 border-2 rounded-lg border-primary-color w-5/12 px-2 text-primary-color" placeholder="Sabor">
          <input type="text" class="outline-0 border-2 rounded-lg border-primary-color w-2/12 px-2 text-primary-color" placeholder="R$">
        </div>
        <div class="">
          <textarea placeholder="Descrição" class="outline-0 border-2 rounded-lg border-red-400 w-full px-2" rows="4" cols="50"></textarea>
        </div>
        <div class="">
          <input type="file">
        </div>

      </div>
      <div class="flex justify-center gap-3 -mb-4 mb-5">
        <button class="bg-red-500 py-2 px-10 text-white font-bold rounded-3xl uppercase">Limpar</button>
        <button @click="salvarPedido" class="bg-amber-400 py-2 px-10 font-bold rounded-3xl text-sm text-secondary-color uppercase">Cadastrar</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Formulario",
  methods:{
    salvarPedido(){
      this.$store.commit('salvarPedido');
    }
  }
}
</script>

<style scoped>

</style>