<template>
    <div class="card mb-2">
        <div class="card-header"><h4>{{item}}</h4></div>
        <div class="card-body">
        <div class="class-text pr-5 pl-5 pt-2">
            <p>{{description}}</p>
            <div class="card-footer bg-white">
                <h5>Price: {{price}}</h5>
            <p>ID number: {{id}}</p>
            </div>
        </div>
        </div>
    </div>
</template>


<script>
export default {
    props: {
        id: Number,
        item: String,
        description: String,
        price: Number,
    },  
};
</script>
