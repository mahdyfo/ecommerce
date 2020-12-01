<template>
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-between">

                <div class="col-auto">{{item.name}}</div>

                <div class="col-auto"><strong :style="'color:' + item.color.code">{{item.color.name}}</strong></div>

                <div class="col-12 border-top mt-3 pt-2 text-center">
                    ${{item.price}}
                </div>
                <div class="col-12 text-center mt-2">
                    <button class="btn btn-success btn-sm" @click="$emit('addToCart')">Add to cart</button>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["item"],

        mounted() {

        },

        methods: {

        }
    }
</script>

