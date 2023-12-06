<template>
  <button class="rdv-btn">
    Rendez-Vous
  </button>
</template>

<style scoped lang="scss">

@import "@/assets/_globals.scss";
.rdv-btn {
  cursor: pointer;
  position: relative;
  padding: 8px 10px;
  /* font-size: 18px; */
  color: $clrPrimary;
  border: 2px solid $clrPrimary;
  border-radius: 16px;
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
  width: 50px;
  height: 50px;
  border-radius: inherit;
  scale: 0;
  z-index: -1;
  background-color: $clrPrimary;
  transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
}

.rdv-btn:hover::before {
  scale: 3;
}

.rdv-btn:hover {
  color: #212121;
  // scale: 1.1;
  box-shadow: 0 0px 20px rgba(193, 163, 98,0.4);
}

.rdv-btn:active {
  scale: 1;
}



</style>
