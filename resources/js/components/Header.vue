<template lang="pug">
    section.header
        .container
            .row.navbar.align-items-baseline.justify-content-between
                .col-xl-6.flex-column-reverse.flex-sm-column-reverse.d-flex.flex-md-row.justify-content-between.col-lg-4.align-items-stretch.align-items-md-baseline
                    .col-xl-2.d-flex.align-items-md-baseline.justify-content-center.align-items-center
                        .logo
                            img(src='@/img/Logo.png' alt="logo").logo__img
                            h1.logo__text arber
                    .col-lg-6.col-md-9
                        ul
                            for item in list
                                if item == 'Home'
                                    li.active {{item}}
                                else
                                    li {{item}}
                .col-md-4.align-items-center.justify-content-xl-between.d-none.d-lg-flex
                    img(src='@/img/i-profile.png' alt="profile").profile
                    img(src='@/img/i-notification.png' alt="notification").notification
                    .button Appointment
</template>

<script>
    export default {
        data() {
            return {
                list: ["Home", "History", "Service", "Gallery"]
            }
        },
    }
</script>
