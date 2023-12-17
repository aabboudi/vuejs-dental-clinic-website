import './assets/main.css'

import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

router.beforeEach((to, from, next) => {
  window.scrollTo(0,0);
  next();
});

const app = createApp(App)

app.use(router)

app.mount('#app')

// Add collapse for off click, page click event listener
document.getElementsByClassName("hamburger-menu")[0].addEventListener("click", function(){
  if(!document.getElementsByClassName("navbar-collapse")[0].classList.contains("show")) {
    document.getElementsByClassName("hamburger-menu")[0].classList.add("open");
  } else {
    document.getElementsByClassName("hamburger-menu")[0].classList.remove("open");
  }
});
