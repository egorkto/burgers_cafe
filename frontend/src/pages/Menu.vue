<script>
import About from "@/components/About.vue";
import ProductsList from "@/components/ProductsList.vue";
import BurgerPresident from "@/components/BurgerPresident.vue";
export default {
  components: {
    ProductsList,
    About,
    BurgerPresident,
  },
};
</script>

<template>
  <div class="bradcam_area breadcam_bg overlay">
    <h3>Menu</h3>
  </div>
  <ProductsList></ProductsList>
  <BurgerPresident></BurgerPresident>
</template>

<style scoped></style>
