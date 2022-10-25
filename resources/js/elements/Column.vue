<template lang="pug">
    .container(:class="classCss", :style="styleCss")
        slot
</template>

<script>

    import ComputedElements from '@/js/computed/Elements'

    export default {
        name: "Container",
        props: ['classCss', 'styleCss']
    }
</script>

<style>
</style>
