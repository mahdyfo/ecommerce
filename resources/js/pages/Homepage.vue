<template>
    <div>
        <div class="row justify-content-between mb-3">
            <div class="col-auto">
                <cart></cart>
            </div>
            <div class="col-sm-5">
                <div class="row">
                    <div class="col-3"><input class="form-control" @change="getItems()" v-model="search.price_min" placeholder="Min price" type="number"/></div>
                    <div class="col-3"><input class="form-control" @change="getItems()" v-model="search.price_max" placeholder="Max price" type="number"/></div>
                    <div class="col-5"><input class="form-control" @change="getItems()" v-model="search.name" placeholder="Search by name..."/></div>
                    <div class="col-1"><button class="btn btn-primary">Go</button></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">

                <div class="card">
                    <div class="card-header">New Items</div>
                    <div class="card-body">
                        <div class="row">
                            <div v-for="item in items" class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                <item :item="item" v-on:addToCart="$emit('addToCart', item)"></item>
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
        data() {
            return {
                items: [],
                search: {
                    name: "",
                    price_min: null,
                    price_max: null
                }
            }
        },

        mounted() {
            this.getItems();
        },

        methods: {
            getItems() {
                axios.get("/ajax/items" , {
                    params: {
                        name: this.search.name,
                        price_min: this.search.price_min,
                        price_max: this.search.price_max
                    }
                }).then(response => {
                    this.items = response.data.data;
                }).catch(error => {
                    alert(error.response.data.message);
                });
            }
        }
    }
</script>
