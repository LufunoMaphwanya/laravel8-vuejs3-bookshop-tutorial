<template>
  <div class="list-items">

      <page-nav :links="books.links"/>
      <hr />
      <Book v-for="book in books.data"
       :key="book.id"
       :book="book"
       />
  </div>
</template>

<script>
  import Book from './Book';
  import PageNav from './PageNav';
  import { reactive, computed } from 'vue';

  export default {
    name: 'BooksList',
    components: { Book, PageNav},
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
