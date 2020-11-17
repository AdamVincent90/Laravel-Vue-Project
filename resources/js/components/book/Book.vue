<template>
    <div>
        <div v-if="loading" class="spinner text-blue">
            loading....
        </div>
        <div v-else>
            {{book.book_id}}
            {{book.book_title}}
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
        book_id: this.$route.params.book_id,
        book: null,
        loading: false
        }
    },
    created() {
        
        this.loading = true;

        axios.get(`/api/books/${this.book_id}`)
        .then(response => {
            this.book = response.data;
            this.loading = false;
        });
    }
}
</script>