<template>

  <div class="card" style="width: 18rem;">
      <div class="book-cover">
        <img class="card-img-top" :src="'/books/'+book.id + '/cover'" alt="Card image cap">
      </div>
  <div class="card-body">
    <h5 class="card-title">{{book.title}}</h5>
    <p class="card-text">{{book.subtitle}}</p>
    <a href="#" class="btn btn-primary">Read</a>
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
    },

    setup(props, { emit }) {
      props = reactive(props);
      return {
      };
    },
  };
</script>
