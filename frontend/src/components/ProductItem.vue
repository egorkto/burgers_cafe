<template>
  <div class="col-xl-6 col-md-6 col-lg-6">
    <div class="single_delicious d-flex align-items-center">
      <div class="thumb">
        <img src="/img/burger/1.png" alt="" />
      </div>
      <div class="info">
        <h3>{{ product.name }}</h3>
        <p>{{ product.description }}</p>
        <span>{{ product.price }} руб.</span>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    product: {
      type: Object,
      required: true,
    },
  },
};
</script>
