<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                   
                </div>
            </div>
        </div>
        <example-component2></example-component2>
    </div>
</template>

<script>
import ExampleComponent from '../../../vendor/laravel/ui/src/Presets/vue-stubs/ExampleComponent.vue'
    export default {
  components: { ExampleComponent },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
