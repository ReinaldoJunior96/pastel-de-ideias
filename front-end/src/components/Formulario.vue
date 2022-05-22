<template>
  <div class="flex justify-center relative ">
    <div class="bg-white rounded-2xl w-8/12 shadow-xl">
      <div class="flex bg-amber-400 rounded-tl-2xl rounded-tr-2xl py-3 px-10">
        <div class="flex flex-1">
          <h1>Monte aqui o seu cardápio. O que está esperando?</h1>
        </div>
        <div class="flex justify-end">
          <span>Comida / Bebida</span>
        </div>
      </div>
      <div class="flex flex-col gap-2 px-5 -m-2">
        <div class="flex gap-5">
          <input type="text" class="border-2 rounded border-red-400 w-5/12">
          <input type="text" class="border-2 rounded border-red-400 w-5/12">
          <input type="text" class="border-2 rounded border-red-400 w-2/12">
        </div>
        <div class="">
          <textarea class="border-2 rounded border-red-400 w-full" rows="4" cols="50"></textarea>
        </div>
        <div class="">
          <input type="file">
        </div>

      </div>
      <div class="flex justify-center gap-3 -mb-4 mb-5">
        <button class="bg-red-500 py-2 px-10 text-white font-bold rounded-3xl">Limpar</button>
        <button @click="" class="bg-amber-400 py-2 px-10 text-white font-bold rounded-3xl">Cadastrar</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Formulario"
}
</script>

<style scoped>

</style>