<template>
    <div>
        <h1>Books</h1>
        <p>Our list of books</p>
        <div v-if="loading" class="spinner-border text-primary" role="status"></div>
        <div v-else class=" row d-flex align-items-stretch">
            <book-card class="col col-lg-4 col-md-6 col-12 hoverable"
                v-for="book in books"
                :key="book.id"
                v-bind="book"
            ></book-card>
        </div>
    </div>
</template>

<script>
import BookCard from "./BookCard";

export default {
    props: [],
    components: {
        BookCard
    },
    data() {
        return {
            books: null,
            loading: false,
        };
    },
    created() {
        //Creates a new promise object and logs the executor function with first class function resolve and reject as params
        // let p = new Promise((resolve, reject) => {

        //     setTimeout(() => {
        //         resolve("Hello World!");
        //     }, 1000);
        // })
        //     .then(res => console.log(`Response Sucessful - Result: ${res}`))
        //     .catch(err =>
        //         console.log(`Error: Response Unsuccessful - Log: ${err}`)
        //     );

        console.log("Created");
        this.loading = true;

        const request = axios
            .get("/api/books")
            .then(response => {
                console.log(response);
                this.loading = false;
                this.books = response.data;
            });
    }
};
</script>
