<template lang="pug">
    .col(:class="classCss", :style="styleCss")
        slot
</template>

<script>
    import ComputedElements from '@/js/computed/Elements'
    export default {
        name: "ColumnElement",
        props: ['classCss', 'styleCss']
    }
</script>

<style>
</style>
