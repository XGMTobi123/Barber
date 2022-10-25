<template lang="pug">
    .container(:class="classCss", :style="styleCss")
        slot
</template>

<script>

    import ComputedElements from '@/js/computed/Elements'

    export default {
        name: "ContainerElement",
        props: ['classCss', 'styleCss']
    }
</script>

<style>
</style>
