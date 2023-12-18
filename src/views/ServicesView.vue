<script setup>
import ServicesRow from '../components/ServicesRow.vue'
</script>

<template>
  <div class="container-fluid">
    <ServicesRow
      bgImgUrl="/service2.jpg"
      serviceTitle="Consultation Generale"
      serviceDesc="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, eaque! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, eaque!"
    />

    <ServicesRow
      bgImgUrl="/prothese.jpg"
      serviceTitle="Prothese"
      serviceDesc="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, eaque!"
    />

    <ServicesRow
      bgImgUrl="/radiologie-imagerie-3d.jpg"
      serviceTitle="Radiologie & Imagerie 3D"
      serviceDesc="Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim, eaque!"
    />

  </div>
</template>

<style scoped lang="scss">
// .container-fluid {
//   margin: 0;
//   padding: 0;
// }
// Causes overflow issues

</style>
