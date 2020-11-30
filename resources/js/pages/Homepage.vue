<template>
    <div class="row">
        <div class="col-md-9">
            <items-box title="New Items"></items-box>
        </div>
        <div class="col-md-3">
            <items-box title="Popular Items"></items-box>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["title"],

        mounted() {

        }
    }
</script>
