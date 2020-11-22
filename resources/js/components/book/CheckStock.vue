<template>
    <div class="ml-1 pl-2 pr-2">
        <h6 class="text-secondary">
            Book Rental Availability
            <span v-if="noAvailability" class="text-danger"
                >Book unavailble on these dates.</span
            >
            <span v-if="hasAvailability" class="text-success"
                >Book is availble on these dates!</span
            >
        </h6>
        <strong>Time you wish to rent</strong>
        <div class="form-row">
            <div class="form-group col-lg-6 col-sm-12">
                <label for="start_date">Rent From</label>
                <input
                    type="date"
                    name="start_date"
                    class="form-control form-control-sm"
                    v-model="start_date"
                    :class="[{ 'is-invalid': this.errorFor('start_date') }]"
                />
                <div
                    class="invalid-feedback"
                    v-for="(error, index) in this.errorFor('start_date')"
                    :key="'start_date' + index"
                >
                    {{ error }}
                </div>
            </div>
            <div class="form-group col-lg-6 col-sm-12">
                <label for="end_date">Rent To</label>
                <input
                    type="date"
                    name="end_date"
                    class="form-control form-control-sm"
                    v-model="end_date"
                    @keyup.enter="check"
                    :class="[{ 'is-invalid': this.errorFor('end_date') }]"
                />
                <div
                    class="invalid-feedback"
                    v-for="(error, index) in this.errorFor('end_date')"
                    :key="'end_date' + index"
                >
                    {{ error }}
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="btn-secondary" @click="check" :disabled="loading">
                Check
            </button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            start_date: null,
            end_date: null,
            loading: false,
            status: null,
            errors: null
        };
    },
    methods: {
        check() {
            this.loading = true;
            this.errors = null;

            // Axios GET request SLUG = book_id, parameters = start date and end date. Sends to Invoke controller
            const request = axios
                .get(`/api/books/${this.$route.params.book_id}/availability`, {
                    params: {
                        start_date: this.start_date,
                        end_date: this.end_date
                    }
                })
                .then(response => {
                    this.status = response.status;
                })
                .catch(error => {
                    if (422 === error.response.status) {
                        this.errors = error.response.data.errors;
                    }
                    this.status = error.response.status;
                })
                .then(() => {
                    this.loading = false;
                });
        },
        errorFor(field) {
            return this.containsErrors && this.errors[field]
                ? this.errors[field]
                : null;
        }
    },
    computed: {
        containsErrors() {
            return 422 === this.status && this.errors !== null;
        },
        hasAvailability() {
            return 200 === this.status;
        },
        noAvailability() {
            return 404 === this.status;
        }
    }
};
</script>

<style scoped>
.is-invalid {
    color: red;
}
</style>
