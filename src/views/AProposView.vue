<template>
<div class="container-fluid">

  <div class="row">
    <h1 class="text-center">Equipe Medicale</h1>
  </div>

  <div class="row justify-content-around dr-card">
    <div class="col-12 my-4">
      <div class="row justify-content-center">
        <div class="col-12 col-md-4">
          <img src="/test.jpg" alt="" class="rounded shadow">
        </div>
        <div class="col-12 col-md-7">
          <div class="h3 font-weight-bold">Dr. Flan Bakraoui</div>
          <div class="h5 font-italic">Chirurgien Dentiste</div>
          <div class="text-md-justify">Laureat de l'Institut National de je ne sais quoi, Dr. Adil est l'un des je ne sais quoi les plus pertinents de la region. Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo placeat optio odio porro exercitationem et labore autem iste non nesciunt.</div>
        </div>
      </div>
    </div>

    <div class="col-12 my-4">
      <div class="row justify-content-center">
        <div class="col-12 col-md-4">
          <img src="/test.jpg" alt="" class="rounded shadow">
        </div>
        <div class="col-12 col-md-7">
          <div class="h3 font-weight-bold">Dr. Flan Bakraoui</div>
          <div class="h5 font-italic">Lorem, ipsum dolor.</div>
          <div class="text-md-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam ipsam modi dolor unde praesentium sequi libero amet minus dolorum suscipit beatae delectus, tempore earum harum odio dolorem eaque cupiditate vero possimus, reiciendis quisquam sapiente corporis qui. Eaque nemo alias ab. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum, sed.</div>
        </div>
      </div>
    </div>

    <div class="col-12 my-4">
      <div class="row justify-content-center">
        <div class="col-12 col-md-4">
          <img src="/test.jpg" alt="" class="rounded shadow">
        </div>
        <div class="col-12 col-md-7">
          <div class="h3 font-weight-bold">Dr. Flan Foulani</div>
          <div class="h5 font-italic">Lorem, ipsum dolor.</div>
          <div class="text-md-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam ipsam modi dolor unde praesentium sequi libero amet minus dolorum suscipit beatae delectus, tempore earum harum odio dolorem eaque cupiditate vero possimus, reiciendis quisquam sapiente corporis qui. Eaque nemo alias ab. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum, sed.</div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
      SHOW OFF EQUIPMENT HERE
    </div>

    <div class="row">
      ADD CLIENT TESTIMONIALS HERE
    </div>

</div>

</template>

<style scope lang="scss">

.container-fluid {
  margin-top: 60px;
  padding-block: 30px;

  & * {
    max-width: 1440px;
    margin-inline: auto;
  }
}

.dr-card {
  // height: 400px;
  
  & img {
    width: 100%;
    min-height: 200px;
    max-height: 400px;
    object-fit: cover;
    aspect-ratio: 1;
  }
}
</style>
