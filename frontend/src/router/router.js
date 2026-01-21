import Contact from "@/pages/Contact.vue";
import Index from "@/pages/Index.vue";
import Menu from "@/pages/Menu.vue";

import { createRouter, createWebHistory } from "vue-router";

const routes = [
  {
    path: "/",
    component: Index,
  },
  {
    path: "/menu",
    component: Menu,
  },
  {
    path: "/contact",
    component: Contact,
  },
];

const router = createRouter({
  routes,
  history: createWebHistory(),
});

export default router;
