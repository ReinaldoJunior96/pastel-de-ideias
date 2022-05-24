<template>
  <div :class="$store.state.displayPedido" class="pt-24 animate__animated animate__bounceInUp">
    <div class="flex justify-center gap-10 items-center">
      <div class="h-[1px] w-4/12 bg-red-500"></div>
      <span class="font-bold text-base text-secondary-color">Veja como será apresentado ao cliente</span>
      <div class="h-[1px] w-4/12 bg-red-500"></div>
    </div>
    <div class="flex justify-center pt-5">
      <div class="bg-white rounded-2xl w-6/12 shadow-xl relative">
        <div class="flex bg-primary-color rounded-tl-2xl rounded-tr-2xl py-4 px-10">
          <div class="flex flex-1">
            <h1 class="text-optional-color">"Ajeita rapidinho para mim"</h1>
          </div>
          <div class="flex justify-end">
            <span class="text-white">R$ 10,00</span>
          </div>
        </div>
        <div class="flex flex-col gap-2 px-5 py-3 -m-2">
          <div class="absolute -top-3 -left-32">
            <img class="w-8/12" src="../assets/images/pastel-img.png" alt="">
          </div>
          <div class="flex flex-col p-5 gap-3">
            <span class="text-secondary-color"><strong>Sabor: </strong>PowerPoint importante</span>
            <span
                class="text-secondary-color"><strong>Descrição: </strong>1 PPT, 6834 slides e uma pitada de animação</span>
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