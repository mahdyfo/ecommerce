<template>
    <div class="card">

        <div class="card-header">{{title}}</div>

        <div class="card-body">
            <div class="row">
                <div v-for="item in items" class="col-sm-3 mb-4">
                    <item :color="item.color.name" :color-code="item.color.code" :price="item.price"></item>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        props: ["title", "items"],

        mounted() {

        }
    }
</script>
