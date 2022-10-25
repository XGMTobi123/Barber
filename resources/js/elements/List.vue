<template lang="pug">
    ul.list(v-if="!type.length" :class="classCss" :style="styleCss")
        .list__item(v-for="(value, key) in items" :key="key" :class="classItem" :style="styleItem") {{ value }}
    ol.list.list__type_numeric(v-else-if="type == 'numeric'" :class="classCss" :style="styleCss")
        .list__item.list__item__type_numeric(v-for="(value, key) in items" :key="key" :class="classItem" :style="styleItem") {{ value }}
</template>

<script>
    import ComputedElements from '@/js/computed/Elements'

    export default {
        name: 'ListElement',
        props: ['type', 'items', 'styleCss', 'styleItem', 'classCss', 'classItem']
        //     computed:
        //         { ...ComputedElements }
    }

</script>

<style>
</style>
