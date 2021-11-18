import { createApp } from "vue";
import Welcome from "./components/Welcome.vue";
import Book from "./components/Book.vue";
import BooksList from "./components/BooksList.vue";

const app = createApp({
    components: {
        Welcome,
        Book,
        BooksList
    },
}).mount("#app");


