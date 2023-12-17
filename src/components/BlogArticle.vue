<script setup>

defineProps({
  // serviceTitle: {type: String, required: true},
  // serviceDesc: {type: String, required: true},
  // bgImgUrl: {type: String, required: true}
})

</script>

<template>
  <div class="row blog-article justify-content-center align-items-center p-3 my-4">
    <div class="col-12 col-md-3 col-lg-4 p-0">
      <img src="/test.jpg" alt="">
    </div>
    <div class="col-12 col-md-6 col-lg-6">
      <h1>Article Title</h1>
      <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores eligendi quis at. Maiores iure rerum sint repellat in, velit, tenetur aut dicta fuga veritatis expedita quia dolore eligendi sapiente magni?</div>
    </div>
  </div>
</template>

<style scoped lang="scss">
@import "@/assets/_globals.scss";

.row.blog-article {
  border: 1px white solid;
  border-radius: .5rem;

  & img {
    width: 100%;
    max-height: 200px;
    object-fit: cover;
  }
}

</style>
