<script setup>
import RendezVousBtn from './RendezVousBtn.vue'

defineProps({
  serviceTitle: {type: String, required: true},
  serviceDesc: {type: String, required: true},
  bgImgUrl: {type: String, required: true}
})

</script>

<template>
  <div class="row service-instance justify-content-center align-items-center text-center" :style="{ background: 'linear-gradient(#000c, #000c), url(' + bgImgUrl + ') center/cover' }">
    <div class="col-10 col-md-8">
      <div class="display-4 font-weight-bold">{{ serviceTitle }}</div>
      <div class="h5 mb-3">{{ serviceDesc }}</div>
      <RendezVousBtn />
    </div>
    <div class="col-11 text-left data-text">
      Lorem, ipsum dolor.
    </div>
  </div>
</template>

<style scoped lang="scss">

@import "@/assets/_globals.scss";

.row.service-instance {
  // background: linear-gradient(#000c, #000c), url("/service2.jpg");
  // background-size: cover;
  // background-position: center;
  position: relative;
  height: 100vh;
}

.data-text {
  position: absolute;
  bottom: 20px;
}

</style>
