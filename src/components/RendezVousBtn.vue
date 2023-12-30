<template>
  <!-- <button class="rdv-btn">
    Rendez-Vous
  </button> -->

  <!-- Calendly link widget -->
  <a href=""
    onclick="Calendly.initPopupWidget({url: 'https://calendly.com/sparedev/rendez-vous'});return false;">
    Rendez-Vous
  </a>
</template>

<style scoped lang="scss">

@import "@/assets/_globals.scss";
.rdv-btn {
  cursor: pointer;
  position: relative;
  padding: 8px 10px;
  /* font-size: 18px; */
  color: var(--color-text);
  border: 2px solid var(--color-text);
  border-radius: 8px;
  background-color: transparent;
  font-weight: 600;
  transition: all 0.3s cubic-bezier(0.23, 1, 0.320, 1);
  overflow: hidden;
}

.rdv-btn::before {
  content: '';
  position: absolute;
  inset: 0;
  margin: auto;
  width: 80px;
  height: 80px;
  border-radius: inherit;
  scale: 0;
  z-index: -1;
  background-color: var(--color-text);
  transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
}

.rdv-btn:hover::before {
  scale: 3;
}

.rdv-btn:hover {
  color: var(--color-background);
  // scale: 1.1;
  box-shadow: 0 0px 20px rgba(193, 163, 98,0.4);
}

.rdv-btn:active {
  scale: 1;
}



</style>
