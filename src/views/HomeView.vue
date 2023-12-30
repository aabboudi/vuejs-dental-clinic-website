<script setup>
import { ref, computed } from 'vue';
import RendezVousBtn from '../components/RendezVousBtn.vue';
import ServiceCard from '../components/ServiceCard.vue';
// import TheWelcome from '../components/TheWelcome.vue'

const prefersDarkMode = ref(window.matchMedia('(prefers-color-scheme: dark)').matches);
const imageSrc = computed(() => prefersDarkMode.value ? '/jaw-xray.jpg' : '/tooth.png');
</script>

<template>

  <!-- LANDING -->
  <div class="container-fluid">
    <div class="row row-landing justify-content-center align-items-center">
      <div class="col-12 col-md-5">
        <h1 class="font-weight-bold text-center text-md-left">Votre Cabinet Dentaire Le Plus Tech</h1>
        <RendezVousBtn class="btn rdv-btn" />
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
        <!-- <img src="/jaw-xray.jpg" alt="" class="jaw-xray"> -->
        <img :src="imageSrc" alt="Dynamic Image" class="jaw-xray" />
      </div>
    </div>

    <div class="row row-pattern justify-content-around px-4 py-5">
      <div class="col-12">
        <h1 class="text-center">Ce Qu'On Offre</h1>
      </div>

      <ServiceCard
        serviceTitle="Consultation Generale"
        serviceDesc="Desc Desc Desc Desc Desc Desc Desc Desc Desc Desc Desc Desc Desc Desc Desc Desc Desc Desc Desc Desc Desc "
        iconUrl="service-icon-1.png"
      />

      <ServiceCard
        serviceTitle="Ordonthologie conservatrice"
        serviceDesc="Desc"
        iconUrl="service-icon-2.png"
      />

      <ServiceCard
        serviceTitle="Prothese"
        serviceDesc="Desc"
        iconUrl="service-icon-3.png"
      />

      <ServiceCard
        serviceTitle="Chirurgie orale"
        serviceDesc="Desc"
        iconUrl="service-icon-4.png"
      />

      <ServiceCard
        serviceTitle="Implantologie"
        serviceDesc="Desc"
        iconUrl="service-icon-5.png"
      />

      <ServiceCard
        serviceTitle="Parodentologie"
        serviceDesc="Desc"
        iconUrl="service-icon-6.png"
      />

      <ServiceCard
        serviceTitle="Pedodontie"
        serviceDesc="Desc"
        iconUrl="service-icon-5.png"
      />

      <ServiceCard
        serviceTitle="Radiologie, imagerie 3D"
        serviceDesc="Desc"
        iconUrl="service-icon-6.png"
      />

    </div>

    <div class="row row-diff-factor justify-content-center align-items-center">
      <div class="col-10 col-md-8 text-white text-center">
        <div class="h1">Professionalisme</div>
        <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias facere tenetur accusamus iste quae, optio quis!</div>
      </div>
    </div>

    <div class="row row-blogs justify-content-evenly align-items-center py-5">
      <div class="col-12 col-md-3 text-center px-3">
        <img src="/test.jpg" alt="">
        <div class="h4">Lorem, ipsum dolor.</div>
        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, odio?</div>
        <a href="#!">Read more</a>
      </div>
      <div class="col-12 col-md-3 text-center px-3">
        <img src="/test.jpg" alt="">
        <div class="h4">Lorem, ipsum dolor.</div>
        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, odio?</div>
        <a href="#!">Read more</a>
      </div>
      <div class="col-12 col-md-3 text-center px-3">
        <img src="/test.jpg" alt="">
        <div class="h4">Lorem, ipsum dolor.</div>
        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, odio?</div>
        <a href="#!">Read more</a>
      </div>
    </div>

    <div class="row row-reviews justify-content-evenly align-items-center py-5">
      <div class="col-12 col-md-4 text-center text-md-left">
        <div class="h1">Temoignages de nos patients</div>
      </div>
      <div class="col-12 col-md-6">
        <div class="h4">Mohammed A.</div>
        <div class="text-lg-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto quo sapiente vero optio eligendi dicta, maxime repudiandae placeat suscipit dolorem praesentium qui officia officiis iure voluptatibus quaerat perferendis veniam reprehenderit.</div>
        <div><cite class="small">Ordontologie Moderne, avril 2023</cite></div>
      </div>
    </div>

  </div>

</template>

<style scoped lang="scss">

.row {
  min-height: 400px;
}
.row-landing {
  min-height: 100vh;

  & .jaw-xray {
    height: 30vh;
    filter: hue-rotate(180deg) grayscale(1) saturate(1);
    animation: hoverAnimation 5s infinite ease-in-out;
    mix-blend-mode: exclusion;
  }
}


.row-pattern {
  min-height: 300px;
  // background: linear-gradient(#000d, #000d), url("/dental-pattern.jpg");
  // background-position: center;
  // background-size: cover;
  gap: 30px;
}

@keyframes hoverAnimation {
  0% {transform: scale(-1.2, 1.2) translateY(0);}
  50% {transform: scale(-1.2, 1.2) translateY(-10px);}
  100% {transform: scale(-1.2, 1.2) translateY(0);}
}

.row-diff-factor {
  // width: 100%;
  // aspect-ratio: 3/4;
  // object-fit: cover;
  // transform: translateY(-30px);

  background: linear-gradient(#000d, #000d), url("/service2.jpg");
  background-position: center;
  background-size: cover;
}

.row-blogs {
  & img {
    width: 100%;
    aspect-ratio: 4/3;
    object-fit: cover;
  }
}


</style>
