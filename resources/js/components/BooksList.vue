<template>
  <div class="list-items">
      <Book v-for="book in books"
       :key="book.id"
       :book="book"
       :storagePath="storagePath"
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
      storagePath: {
        type: String,
        required: true,
      },
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
