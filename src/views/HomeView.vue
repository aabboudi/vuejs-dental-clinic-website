<script setup>
// import TheWelcome from '../components/TheWelcome.vue'
</script>

<template>

  <!-- LANDING -->
  <div class="row row-landing justify-content-center align-items-center">
    <div class="col-12 col-md-6">
      <h1 class="font-weight-bold text-center text-md-left">Votre Cabinet Dentaire Le Plus Tech</h1>
    </div>
    <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
      <img src="/jaw-xray.jpg" alt="" class="jaw-xray">
    </div>
  </div>

  <div class="row row-pattern justify-content-around p-4">
    <div class="col-12">
      <h1 class="text-center">Lorem ipsum dolor sit amet.</h1>
    </div>
    <div class="col-12 col-md-3 text-center">
      <div>icon</div>
      <div class="h2">Title</div>
      <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, magni.</div>
    </div>
    <div class="col-12 col-md-3 text-center">
      <div>icon</div>
      <div class="h2">Title</div>
      <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, magni.</div>
    </div>
    <div class="col-12 col-md-3 text-center">
      <div>icon</div>
      <div class="h2">Title</div>
      <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, magni.</div>
    </div>
  </div>

  <div class="row">

  </div>
</template>

<style scoped lang="scss">

  .row-landing {
    min-height: 100vh;
    margin-top: -60px;

    & .jaw-xray {
      height: 30vh;
      mix-blend-mode: screen;
      // filter: hue-rotate(150deg);
      transform: scaleX(-1);
    }
  }

  .row-pattern {
    min-height: 300px;
    background: linear-gradient(#000d, #000d), url("/dental-pattern.jpg");
    background-position: center;
    background-size: cover;
  }

</style>
