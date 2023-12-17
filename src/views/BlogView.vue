<script setup>
import BlogArticle from '../components/BlogArticle.vue'
</script>

<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 h1 text-center">
        Blog Medical
      </div>
    </div>
    <BlogArticle />
    <hr>
  </div>
</template>

<style scoped lang="scss">
.container-fluid {
  margin-top: 60px;
  padding-block: 30px;
}

hr {
  background-color: var(--color-text);
}
</style>
