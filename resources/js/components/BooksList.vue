<template>
  <div class="list-items">
      <Book v-for="book in books"
       :key="book.id"
       :book="book"
       />
  </div>
</template>

<script>
  import Book from './Book';
  import { reactive, computed } from 'vue';

  export default {
    name: 'BooksList',
    components: { Book },
    props: {
      books: { type: Array, required: true, default: () => [] },
    },

    setup(props, { emit }) {
      props = reactive(props);
      return {
        booksInOrder:computed(()=>{
       return [
         props.books,
       ]
     }),
      };
    },
  };
</script>
