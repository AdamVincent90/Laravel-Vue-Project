<template>
    <div>
        <h1>Bookables</h1>
        <p>List of Bookable List Items</p>
        <div v-if="loading">Loading....</div>
        <div v-else>
            <p>Number of rows of Books is: {{rows}}</p>
            <div class="row" v-for="row in rows" :key="'row' + row">{{row}}</div>
            <bookable-list-item
                v-for="book in books"
                :key="book.id"
                :id="book.id"
                :item="book.item"
                :description="book.description"
                :price="book.price"
            ></bookable-list-item>
        </div>
    </div>
</template>

<script>
import BookableListItem from "./BookableListItem";

export default {
    props: [],
    components: {
        BookableListItem
    },
    computed: {
        rows() {
            return this.books === null ? 0 : Math.ceil(this.books.length / this.columns);
        }
    },
    data() {
        return {
            books: null,
            loading: false,
            columns: 3
        };
    },
    created() {
        console.log("Created");
        this.loading = true;
        setTimeout(() => {
            this.books = [
                {
                    id: 1,
                    item: "Harry Potter",
                    description: "The third installment!",
                    price: 99.99
                },
                {
                    id: 2,
                    item: "Empress",
                    description: "The first installment!",
                    price: 19.99
                },
                {
                    id: 3,
                    item: "Sharknado 3",
                    description: "Ah Hell no!",
                    price: 19.99
                },
                {
                    id: 4,
                    item: "Randy Frankel",
                    description: "A blast from the past!",
                    price: 19.99
                },
                {
                    id: 5,
                    item: "Simulated Worlds",
                    description: "The true origin of the universe!",
                    price: 19.99
                },
                {
                    id: 6,
                    item: "JLB Credit",
                    description:
                        "Inside the worlds most succesful loan creditors!",
                    price: 19.99
                },
                {
                    id: 7,
                    item: "God Senders",
                    description: "terminators!",
                    price: 19.99
                }
            ];
            this.loading = false;
        }, 2000);
    }
};
</script>
