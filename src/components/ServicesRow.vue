<script setup>
import RendezVousBtn from './RendezVousBtn.vue'

defineProps({
  serviceTitle: {type: String, required: true},
  serviceSubTitle: {type: String, required: true},

})
</script>

<template>
  <div class="row justify-content-center align-items-center text-center">
    <div class="col-12">
      <h1>{{ serviceTitle }}</h1>
      <div>{{ serviceSubTitle }}</div>
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
  position: relative;
  height: 100vh;
  border: 1px solid white; // Row border

  background: linear-gradient(#000c, #000c), url("/service2.jpg");
  background-size: cover;
  background-position: center;
}

.data-text {
  position: absolute;
  bottom: 20px;
}


</style>
