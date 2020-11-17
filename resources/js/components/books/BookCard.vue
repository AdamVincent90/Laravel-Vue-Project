<template>
    <div class="card mb-2">
        <div class="card-header"><h4>{{author}}</h4>
        <p>{{release_date}}</p></div>
        <div class="card-body">
        <div class="class-text pr-5 pl-5 pt-2">
            <h4>{{book_title}}</h4>
            <p>{{description}}</p>
            <div class="card-footer bg-white">
            <h5>Price: £{{price}}.99</h5>
            <p>ID number: {{book_id}}</p>
            </div>
        </div>
        </div>
    </div>
</template>


<script>
export default {
    props: {
        book_id: Number,
        book_title: String,
        author: String,
        price: Number,
        description: String,
        release_date: String
    },  
};
</script>
