<template>
  <div class="best_burgers_area">
    <div class="container">
      <div class="row">
        <product-item
          v-for="product in products.data"
          :product="product"
          :key="product.id"
        ></product-item>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <Bootstrap4Pagination
            :data="products"
            @pagination-change-page="fetchProducts"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import ProductItem from "./ProductItem.vue";
import { Bootstrap4Pagination } from "laravel-vue-pagination";
import { ref } from "vue";

export default {
  components: {
    ProductItem,
    Bootstrap4Pagination,
  },
  data() {
    return {
      products: {},
      isProductsLoading: false,
    };
  },
  methods: {
    async fetchProducts(page = 1) {
      try {
        this.isProductsLoading = true;
        const response = await axios.get(
          `http://localhost/api/products?page=${page}`,
        );
        this.products = response.data;
        console.log(response);
      } catch (e) {
        console.log(response);
      } finally {
        this.isProductsLoading = false;
      }
    },
  },
  mounted() {
    this.fetchProducts();
  },
};
</script>
