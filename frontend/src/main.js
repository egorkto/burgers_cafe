import "./assets/css/bootstrap.min.css";
import "./assets/css/owl.carousel.min.css";
import "./assets/css/magnific-popup.css";
import "./assets/css/font-awesome.min.css";
import "./assets/css/themify-icons.css";
import "./assets/css/nice-select.css";
import "./assets/css/flaticon.css";
import "./assets/css/animate.css";
import "./assets/css/slicknav.css";
import "./assets/css/style.css";
import "./assets/css/jquery-ui.css";
import "./assets/css/theme-default.css";
import router from "./router/router";
import { createApp } from "vue";
import App from "./App.vue";

createApp(App).use(router).mount("#app");
