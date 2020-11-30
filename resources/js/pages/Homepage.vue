<template>
    <div class="row">
        <div class="col-sm-12">
            <items-box title="New Items" :items="items.new"></items-box>
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

        mounted() {
            this.items = JSON.parse(this.inputItems);
        }
    }
</script>
