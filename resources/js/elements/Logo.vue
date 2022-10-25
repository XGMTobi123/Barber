<template lang="pug">
    .logo(:class="classCss", :style="styleCss")
        img(src='@/img/Logo.png' alt="logo").logo__img
        .logo__text arber
</template>

<script>
    import ComputedElements from '@/js/computed/Elements'
    export default {
        name: "LogoElement",
        props: ['classCss', 'styleCss']
    }
</script>

<style>
</style>
