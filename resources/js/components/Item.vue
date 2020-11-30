<template>
    <div class="card item">
        <div class="card-body">
            <div class="row justify-content-between">

                <div class="col-auto"><strong :style="'color:' + colorCode">{{color}}</strong></div>

                <div class="col-auto">${{price}}</div>

                <div class="col-12 text-center border-top mt-3 pt-3">
                    <button class="btn btn-success btn-sm">Add to cart</button>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["price", "color", "colorCode"],

        mounted() {

        }
    }
</script>

