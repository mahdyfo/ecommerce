<template>
    <div>
        <div class="row mb-3">
            <div class="col-12">
                <cart :items="cart_items"></cart>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-header">New Items</div>

                    <div class="card-body">
                        <div class="row">
                            <div v-for="item in getNewItems()" class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                <item :item="item" v-on:addToCart="addToCart(item)"></item>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</template>

<script>
    export default {
        props: ["inputItems"],

        data() {
            return {
                items: [],
                cart_items: []
            }
        },

        mounted() {
            // JSON the input data
            this.items = JSON.parse(this.inputItems);
        },

        methods: {
            getNewItems(){
                return this.items.new;
            },

            addToCart(item) {
                this.cart_items.push(item);
            }
        }
    }
</script>
