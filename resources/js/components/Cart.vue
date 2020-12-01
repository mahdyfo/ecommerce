<template>
    <div>

        <div class="dropdown">

            <strong>Cart: </strong> <a href="#" data-toggle="dropdown" :class="{'disabled': items.length === 0}">{{items.length}} items</a>

            <div class="dropdown-menu">
                <div class="dropdown-item" v-for="item in items">

                    <div class="row justify-content-between">
                        <div class="col-auto">{{item.name}}</div>
                        <div class="col-auto">
                            <a href="#" class="text-danger" @click="removeItem(item)">Remove</a>
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
               items: []
           }
        },

        created() {
            this.$parent.$on('addToCart', this.addItem);
            this.$parent.$on('RemoveFromCart', this.removeItem);
            this.getItemsFromCookies();
        },

        methods: {
            getItemsFromCookies() {
                let items_cookie = this.$cookies.get("items");
                if(items_cookie){
                    this.items = JSON.parse(items_cookie);
                }
            },

            addItem(item) {
                // If user was logged in, make a request to add item to database cart, I didn't write it because of being too time consuming

                // add only name and product_id. other attributes are not needed in cart
                this.items.push({
                    product_id: item.product_id,
                    name: item.name
                });
            },

            removeItem(item) {
                // Used for instead of filter because we do not have count for items in this test project.
                // So when the first item is found, it will be deleted.
                for(let i = 0; i < this.items.length; i++)
                {
                    if(this.items[i].product_id === item.product_id)
                    {
                        this.items.splice(i, 1);
                        break;
                    }
                }
            }
        },

        watch: {
            items: function(items) {
                // Save in cookies for 1 year
                this.$cookies.set('items', JSON.stringify(this.items), 365*24*60*60);
            }
        }
    }
</script>

<style scoped>
    .dropdown-menu {
        width: 300px;
    }
</style>
