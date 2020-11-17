<template>
    <div class="ml-1 pl-2 pr-2">
        <h6 class="text-secondary">Book Rental Availability</h6>
            <strong>Time you wish to rent</strong>
            <div class="form-row">
                <div class="form-group col-lg-6 col-sm-12">
                    <label for="from">Rent From</label>
                    <input
                        type="date"
                        name="from"
                        class="form-control form-control-sm"
                    />
                </div>
                <div class="form-group col-lg-6 col-sm-12">
                    <label for="to">Rent To</label>
                    <input
                        type="date"
                        name="to"
                        class="form-control form-control-sm"
                    />
            </div>
        </div>
        <div class="text-center">
            <button class="btn-secondary">Check</button>
        </div>
    </div>
</template>
