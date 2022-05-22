<template>
  <div :class="$store.state.displayPedido" class="pt-16 animate__animated animate__bounceInUp">
    <div class="flex justify-center">
      <span>Veja como será apresentado ao cliente</span>
    </div>
    <div class="flex justify-center">
      <div class="bg-white rounded-2xl w-6/12 shadow-xl relative">
        <div class="flex bg-amber-400 rounded-tl-2xl rounded-tr-2xl py-4 px-10">
          <div class="flex flex-1">
            <h1>"Ajeita rapidinho para mim"</h1>
          </div>
          <div class="flex justify-end">
            <span>R$ 10,00</span>
          </div>
        </div>
        <div class="flex flex-col gap-2 px-5 py-3 -m-2">
          <div class="absolute -top-3 -left-32">
            <img class="w-8/12" src="./assets/images/pastel-img.png" alt="">
          </div>
          <div class="flex flex-col p-5">
            <span><strong>Sabor:</strong>PowerPoint importante</span>
            <span><strong>Descrição::</strong>PowerPoint importante</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Pedido",
}
</script>

<style scoped>

</style>