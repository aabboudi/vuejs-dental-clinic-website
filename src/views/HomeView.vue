
<script setup>
import RendezVousBtn from '../components/RendezVousBtn.vue';
// import TheWelcome from '../components/TheWelcome.vue'
</script>

<template>

  <!-- LANDING -->
  <div class="container-fluid">
    <div class="row row-landing justify-content-around align-items-center">
      <div class="col-12 col-md-6">
        <h1 class="font-weight-bold text-center text-md-left">Votre Cabinet Dentaire Le Plus Tech</h1>
        <RendezVousBtn />
      </div>
      <div class="col-12 col-md-5 d-flex justify-content-center align-items-center">
        <img src="/jaw-xray.jpg" alt="" class="jaw-xray">
      </div>
    </div>

    <div class="row row-pattern justify-content-around px-4 py-5">
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

    <div class="row row-diff-factor align-items-center">
      <div class="col-12 col-md-6">
        <div class="h1">Professionalisme</div>
        <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias facere tenetur accusamus iste quae, tempora quibusdam itaque consequuntur possimus animi sapiente ipsa enim necessitatibus tempore provident laborum sint, optio quis!</div>
      </div>
      <div class="col-12 col-md-6">
        <img src="/service2.jpg" alt="">
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

  // & h1 {
  //   color: var(--color-primary);
  // }

  & .jaw-xray {
    height: 30vh;
    transform: scaleY(1.5);
    mix-blend-mode: screen;
    filter: hue-rotate(180deg) grayscale(1);
    animation: hoverAnimation 5s infinite ease-in-out;
  }
}

.row-pattern {
  min-height: 300px;
  background: linear-gradient(#000d, #000d), url("/dental-pattern.jpg");
  background-position: center;
  background-size: cover;
}

@keyframes hoverAnimation {
  0% {transform: scaleX(-1.5) translateY(0);}
  50% {transform: scaleX(-1.5) translateY(-10px);}
  100% {transform: scaleX(-1.5) translateY(0);}
}

.row-diff-factor img {
  width: 100%;
  aspect-ratio: 3/4;
  object-fit: cover;
  transform: translateY(-30px);
}

.row-blogs {
  & img {
    width: 100%;
    aspect-ratio: 4/3;
    object-fit: cover;
  }
}


</style>
