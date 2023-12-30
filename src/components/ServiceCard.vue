<script setup>

defineProps({
  serviceTitle: {type: String, required: true},
  serviceDesc: {type: String, required: true},
  iconUrl: {type: String, required: true}
})

</script>

<template>
  <div class="col-10 col-md-5 col-lg-4 service-card rounded px-4 py-3">
    <div class="row">

      <div class="col-3 card-icon">
        <img :src="`/icons/${iconUrl}`" width="75" loading="lazy"
          alt="service icon" class="w-75">
      </div>

      <div class="col-9">
        <div class="h4 card-title">{{ serviceTitle }}</div>
        <p class="card-text">{{ serviceDesc }}</p>
      </div>

    </div>
  </div>
</template>

<style scoped lang="scss">

@import "@/assets/_globals.scss";
.service-card {
  border: 1px solid grey;
}

.h3 {
  font-size: clamp(1.5rem, 3vw, 2rem);
}


</style>
