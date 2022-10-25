<template lang="pug">
    section.feedback.gradient
        .background-border
            .container
                .row.justify-content-center
                    h2.my-5.text-center Feedbacks
                    .carousel.slide#feedback-carousel(data-bs-ride="false")
                        .carousel-inner
                            for item, index in feedbacks
                                .carousel-item.text-center(v-bind:class = "index==0?'active':''")
                                    img(:src="require('@/img/'+item.img)")
                                    .carousel-caption.position-static
                                        h3 {{item.name}}
                                        p {{item.feedback}}
                        button.carousel-control-prev.invert-50(type="button" data-bs-target="#feedback-carousel" data-bs-slide="prev")
                            span.carousel-control-prev-icon(aria-hidden="true")
                            span.visually-hidden Previous
                        button.carousel-control-next.invert-50(type="button" data-bs-target="#feedback-carousel" data-bs-slide="next")
                            span.carousel-control-next-icon(aria-hidden="true")
                            span.visually-hidden Next
</template>

<script>
    export default {
        data() {
            return {
                feedbacks: ""
            }
        },
        mounted() {
            axios
                .get('/db')
                .then(response => (this.feedbacks = response.data))
        }
    }
</script>
