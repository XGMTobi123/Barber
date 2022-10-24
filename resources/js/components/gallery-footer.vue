<template lang="pug">
    section.gallery.gradient
        .background-border
            .container
                .row
                    .col.text-center
                        h2.my-3 Our <b>Gallery</b>
                - var i = 0;
                .row.justify-content-between
                    while i<6
                        - i++
                        .col-6.col-lg-4
                            .image-holder
                                img.gallery__img(src="@/img/gallery-"+(i)+".jpg")
                .row.justify-content-center
                    .col-12.col-xl-6.text-center
                        .button View All
            .container.foot
                .row.justify-content-center
                    .col-6.d-flex.align-items-baseline.justify-content-center
                        .logo
                            img(src='@/img/Logo.png' alt="logo").logo__img
                            h1.logo__text arber
                .row.justify-content-center
                    .col-12.text-center
                        p It is a long established fact that a reader will be distracted by the readable
                hr
</template>

<script>
    export default {
    }
</script>
