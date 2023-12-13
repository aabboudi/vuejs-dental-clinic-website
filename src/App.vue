<script setup>
import { RouterLink, RouterView } from 'vue-router'
// import HelloWorld from './components/HelloWorld.vue'
import RendezVousBtn from './components/RendezVousBtn.vue'
// document.querySelector("#copyright-disclaimer span").innerText = `${new Date().getFullYear()}`;
</script>

<template>
  
  <!-- MAKE LOGO COLOR DYNAMIC -->
  <nav class="navbar navbar-expand-lg fixed-top font-weight-bold py-2 py-lg-0">
    <RouterLink to="/">
      <img src="@/assets/logo.svg" alt="" height="40px">
    </RouterLink>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<div class="hamburger-menu"><span></span><span></span><span></span><span></span></div>
		</button>

    <div class="collapse navbar-collapse justify-content-end pb-3 pb-lg-0" id="collapsibleNavbar">
			<ul class="navbar-nav">
				<li class="nav-item a-propos my-auto">
					<RouterLink to="/a-propos" class="nav-link pt-3 pb-1 pb-lg-3">A Propos</RouterLink>
				</li>
        <li class="nav-item services my-auto">
          <RouterLink to="/services" class="nav-link pt-3 pb-1 pb-lg-3">Services</RouterLink>
        </li>
				<li class="nav-item blog my-auto">
					<RouterLink to="/blog" class="nav-link pt-3 pb-1 pb-lg-3">Blog</RouterLink>
				</li>
				<li class="nav-item contact my-auto">
					<RouterLink to="/contact" class="nav-link pt-3 pb-1 pb-lg-3">Contact</RouterLink>
				</li>
				<li class="nav-item rendez-vous">
					<RouterLink to="/rendez-vous" class="nav-link pt-3 pb-1 pb-lg-3">Rendez-Vous</RouterLink>
				</li>
				<!-- <li class="nav-item rendez-vous">
					<RouterLink to="/rendez-vous" class="nav-link pt-3 pb-1 pb-lg-3"><RendezVousBtn /></RouterLink>
				</li> -->
			</ul>
		</div>
  </nav>




  <RouterView />

  <hr>

  <div class="container-fluid footer">
    <div class="row py-4">
      <div class="col-12 col-md-8 order-1 order-md-0">
        <div class="h5">Centre Dentaire Bakraoui</div>
        <div>Avenue FAR | 0600-000-000</div>
        <div class="links">
          <a href="#!" class="cstm-link">Link1</a>
        </div>
      </div>
      <div class="col-12 col-md-4 order-0 order-md-1">
        <div class="row justify-content-center justify-content-md-start">
          <img src="@/assets/logo.svg" alt="" class="logo">
        </div>
      </div>
    </div>
    <div class="row row-copyright justify-content-center text-center user-select-none p-1">
      <div class="col-12 small" id="copyright-disclaimer">&copy; <span>2023</span> Centre Dentaire Bakraoui. Tous droits réservés.</div>
      <!-- Maybe make the year dynamic -->
    </div>
  </div>

</template>

<style scoped lang="scss">
.navbar {
  min-height: 60px;
  // background-color: var(--vt-c-black-mute);
  background: rgba(var(--color-background-soft) 0.1);
  border-radius: 0 0 8px 8px;
  box-shadow: 0 5px 12px 0 rgba(0, 0, 0, 0.5);
  backdrop-filter: blur(6.6px);
  -webkit-backdrop-filter: blur(6.6px);

  & .nav-link {
    color: var(--color-text);

  }
}

/* NAVBAR SCSS CODE */
.nav-item {
  margin: 0 16px;
  font-size: 18px;
  text-align: center;
  width: max-content;
  position: relative;

  &:after {
    content: "";
    width: 0;
    position: absolute;
    bottom: 0;
    left: 0;
    height: 3px;
    background-color: var(--color-text);
    transition: width 0.3s ease 0s, left 0.3s ease 0s;
  }
  
  &:hover:after {
    width: 100%; 
    left: 0; 
  }
}

@media only screen and (max-width: 991px) {
  .nav-item {
    padding-inline: 8px;
    margin-inline: auto;
  }

  .nav-item:after {
    transition-duration: 0s;
  }
}

.navbar-toggler {
  border-width: 0 !important;

  &:focus {
      outline: none;
  }
}

.hamburger-menu {
  width: 30px;
  height: 20px;
  position: relative;
  margin: 0px;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .5s ease-in-out;
  -moz-transition: .5s ease-in-out;
  -o-transition: .5s ease-in-out;
  transition: .5s ease-in-out;
  cursor: pointer;
}

.hamburger-menu span {
  display: block;
  position: absolute;
  background: var(--color-text);
  height: 3px;
  width: 100%;
  border-radius: 9px;
  opacity: 1;
  left: 0;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .25s ease-in-out;
  -moz-transition: .25s ease-in-out;
  -o-transition: .25s ease-in-out;
  transition: .25s ease-in-out;

  &:nth-child(1) {top: 0px;}
  &:nth-child(2) {top: 10px;}
  &:nth-child(3) {top: 10px;}
  &:nth-child(4) {top: 20px;}
}

.hamburger-menu.open span {
  &:nth-child(1) {
    top: 11px;
    width: 0%;
    left: 50%;
  }

  &:nth-child(2) {
    -webkit-transform: rotate(45deg);
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    transform: rotate(45deg);
  }

  &:nth-child(3) {
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    transform: rotate(-45deg);
  }

  &:nth-child(4) {
    top: 11px;
    width: 0%;
    left: 50%;
  }
}


hr {
  background-color: var(--color-text);
  margin-inline: 30px;
}

.footer .logo {
  width: 100px;
}

.row-copyright {
  background-color: rgba(var(--color-background),1) !important;
}
</style>
