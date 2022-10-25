<template lang="pug">
    section.history.gradient
        .background-border
            .container.history__container
                .row.justify-content-lg-between.justify-content-center.flex-column.flex-lg-row
                    .col-lg-7.d-flex.align-items-center
                        .bg-image
                    .col-lg-4.col.d-flex.flex-column.align-items-center.align-items-lg-start
                        h2.my-4 Our <b>History</b><br>
                        p.text-center.text-lg-start It is a long established fact that a reader will be distracted by the readable content of a page when looking at.<br><br>
                        p.text-center.text-lg-start It is a long established fact that a reader will be distracted by the readable content of a page when looking at.
                        .button Learn more
            .container.service
                .row.justify-center
                    h2.text-center Services We<br><b>Provide</b>
                .row.align-content-lg-center.justify-content-lg-between.flex-column.flex-lg-row
                    .col-lg-3.col-12.service-background.text-center.my-2(v-for="(item, index) in list" v-bind:class = "index==0?'active':''")
                        img.service-icon(:src="require('@/img/service-'+(index+1)+'.png')")
                        h3.my-3 {{item}}
                        p long established fact that a reader will be distracted by the readable content of a page when looking at.
</template>

<script>
    export default {
        data() {
            return {
                list: ["Hair Cut", "Beard Cut", "Facial Cut"]
            }
        }
        // mounted() {
        //     console.log('Component mounted.')
        // }
    }
</script>
