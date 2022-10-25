<template lang="pug">
    .row(:class="classCss" :style="styleCss")
        slot
</template>

<script>

    import ComputedElements from '@/js/computed/Elements'

    export default {
        name: "RowElement",
        props: ['classCss', 'styleCss'],
        // computed:
        //     {
        //         ...ComputedElements
        //     }
    }
</script>

<style lang="scss">
</style>
