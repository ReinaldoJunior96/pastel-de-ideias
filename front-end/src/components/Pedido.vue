<template>
  <div :class="$store.state.displayPedido" class="pt-16 animate__animated animate__bounceInUp">
    <div class="flex flex-col laptop:flex-row justify-center gap-3 laptop:gap-10 items-center">
      <div class="h-[1px] w-4/12 bg-primary-color"></div>
      <span class="font-bold text-base text-secondary-color">Veja como será apresentado ao cliente</span>
      <div class="h-[1px] w-4/12 bg-primary-color"></div>
    </div>
    <div class="flex justify-center pt-5">
      <div class="bg-white rounded-2xl w-full tablet:w-8/12 shadow-xl relative">
        <div class="flex flex-col laptop:flex-row items-center bg-primary-color rounded-tl-2xl rounded-tr-2xl py-4 px-10 tablet:px-16">
          <div class="flex flex-1">
            <h1 class="text-optional-color">"Ajeita rapidinho para mim"</h1>
          </div>
          <div class="flex justify-end">
            <span class="text-white">R$ 10,00</span>
          </div>
        </div>
        <div class="flex flex-col text-center gap-2 px-5 py-3 -m-2">
          <div class="tablet:absolute -top-3 -left-36 flex justify-center">
            <img class="w-8/12" src="../assets/images/pastel-img.png" alt="">
          </div>
          <div class="flex flex-col items-center tablet:items-start py-6 tablet:px-12 gap-2">
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