import VueRouter from "vue-router";
import Books from "./components/books/Books";
import Book from "./components/book/Book";

const routes = [
    {
        path: "/",
        component: Books,
        name: "books"
    },
    {
        path: "/books/:book_id",
        component: Book,
        name: "book"
    }
];

const router = new VueRouter({
    routes,
    mode: 'history',
});

export default router;
