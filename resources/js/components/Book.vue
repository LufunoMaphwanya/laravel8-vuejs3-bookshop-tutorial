<template>

  <div class="card" style="width: 18rem;">
  <img class="card-img-top" :src="'/books/'+book.id + '/cover'" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{book.title}}</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</template>

<script>
  import { reactive, computed } from 'vue';

  export default {
    name: 'Book',
    props: {
      book: {
        type: Object,
        required: true,
      },
      storagePath: {
        type: String,
        required: true,
      },
    },

    setup(props, { emit }) {
      props = reactive(props);
      return {
      };
    },
  };
</script>
