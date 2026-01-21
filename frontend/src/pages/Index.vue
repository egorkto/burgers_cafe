<script>
import About from "@/components/About.vue";
import BurgerPresident from "@/components/BurgerPresident.vue";
import ProductsList from "@/components/ProductsList.vue";
export default {
  components: {
    About,
    BurgerPresident,
    ProductsList,
  },
};
</script>

<template>
  <div class="bradcam_area breadcam_bg overlay">
    <h3>Home</h3>
  </div>
  <ProductsList></ProductsList>
  <BurgerPresident></BurgerPresident>
  <About></About>
</template>

<style scoped></style>
