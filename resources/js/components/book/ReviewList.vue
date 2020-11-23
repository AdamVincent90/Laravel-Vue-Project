<template>
    <div class="container">
        <h5 class="pt-2 text-uppercase text-primary font-weight-bolder">Review Title</h5>
        <div class="border-bottom border-primary pb-3 pt-2 bg-light" v-for="number in 5" :key="number">
            <div class="row pb-1">
                <div class="col-md-6 font-weight-bolder">
                    Date Added
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    Review Rating
                </div>
            </div>
            <div class="row pb-1">
                <div class="col-md-12">
                    Reviewer Name
                </div>
            </div>
            <div class="row font-italic">
                <div class="col-md-12">
                    Review Content
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style scoped></style>
