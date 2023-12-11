<script setup>
import RendezVousBtn from './RendezVousBtn.vue'

defineProps({
  serviceTitle: {type: String, required: true},
  serviceSubTitle: {type: String, required: true}
})

</script>

<template>
  <div class="row justify-content-center align-items-center text-center">
    <div class="col-10 col-md-8">
      <h1 class="font-weight-bold">{{ serviceTitle }}</h1>
      <div class="mb-3">{{ serviceSubTitle }}</div>
      <RendezVousBtn />
    </div>
    <div class="col-12 text-left data-text">
      Lorem, ipsum dolor.
    </div>
  </div>
</template>

<style scoped lang="scss">

@import "@/assets/_globals.scss";

div.row {
  background: linear-gradient(#000c, #000c), url("/service2.jpg");
  background-size: cover;
  background-position: center;
  position: relative;
  height: 100vh;
}

.data-text {
  position: absolute;
  bottom: 20px;
}

</style>
