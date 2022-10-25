<template lang="pug">
    img.image(@click="onClick" :src="src" :alt="alt" :class="classCss" :style="styleCss")
</template>

<script>

    import ComputedElements from '@/js/computed/Elements'

    export default {
        name: 'ImageElement',
        props:[ 'classCss', 'alt', 'src', 'styleCss', 'onclick' ],
        methods:
            {
                onClick(e)
                {
                    if(typeof this.onclick == 'function' )
                    {
                        this.onclick(e)
                    }
                }
            },
        // computed:
        //     {
        //         ...ComputedElements
        //     }
    }

</script>

<style lang="scss">
</style>
