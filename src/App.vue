<script setup>
import { RouterLink, RouterView } from 'vue-router'
// import HelloWorld from './components/HelloWorld.vue'
import RendezVousBtn from './components/RendezVousBtn.vue'
</script>

<template>

  <!-- <header>
    <img alt="Vue logo" class="logo" src="@/assets/logo.svg" width="125" height="125" />

    <div class="wrapper">
      <HelloWorld msg="You did it!" />

      <nav>
        <RouterLink to="/">Logo</RouterLink>
        <RouterLink to="/a-propos">A Propos</RouterLink>
      </nav>
    </div>
  </header> -->

  <nav class="navbar navbar-expand fixed-top font-weight-bold py-2 py-lg-0">
    <RouterLink to="/">
      <img src="/src/assets/logo.svg" alt="" height="40px">
      <!-- MAKE COLOR DYNAMIC -->
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
					<RouterLink to="/rendez-vous" class="nav-link pt-3 pb-1 pb-lg-3"><RendezVousBtn /></RouterLink>
				</li>
			</ul>
		</div>
  </nav>

  <RouterView />

  <hr>

  <div class="container-fluid footer">
    <div class="row">
      <div class="col-12 col-md-8">
        <div class="h5">Centre Dentaire Bakraoui</div>
        <div>Avenue FAR | 0600-000-000</div>
        <div class="links">

        </div>
      </div>
      <div class="col-12 col-md-4">
        <img src="@/assets/logo.svg" alt="" class="logo">
      </div>
    </div>
  </div>

</template>

<style scoped lang="scss">
.navbar {
  height: 60px;
  background-color: var(--vt-c-black-mute);
  background: rgba(255, 255, 255, 0.24);
  border-radius: 0 0 8px 8px;
  box-shadow: 0 5px 12px 0 rgba(0, 0, 0, 0.5);
  backdrop-filter: blur(6.6px);
  -webkit-backdrop-filter: blur(6.6px);

  & .nav-link {
    color: var(--vt-c-white-mute);

  }
}

hr {
  background-color: var(--color-text);
  margin-inline: 30px;
}

.footer .logo {
  width: 100px;
}
</style>
