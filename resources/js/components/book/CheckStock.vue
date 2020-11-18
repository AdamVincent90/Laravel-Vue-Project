<template>
    <div class="ml-1 pl-2 pr-2">
        <h6 class="text-secondary">Book Rental Availability</h6>
        <strong>Time you wish to rent</strong>
        <div class="form-row">
            <div class="form-group col-lg-6 col-sm-12">
                <label for="start_date">Rent From</label>
                <input
                    type="date"
                    name="start_date"
                    class="form-control form-control-sm"
                    v-model="start_date"
                />
            </div>
            <div class="form-group col-lg-6 col-sm-12">
                <label for="end_date">Rent To</label>
                <input
                    type="date"
                    name="end_date"
                    class="form-control form-control-sm"
                    v-model="end_date"
                    @keyup.enter="check"
                />
            </div>
        </div>
        <div class="text-center">
            <button class="btn-secondary" @click="check">Check</button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            start_date: null,
            end_date: null
        };
    },
    methods: {
        check() {
            const request = axios
                .get("/api/books/book/availability", {
                    params: {
                        start_date: this.start_date,
                        end_date: this.end_date
                    }
                })
                .then(response => {
                    console.log(response);
                })
                .catch(err => {
                    console.log(err);
                });
        }
    }
};
</script>
