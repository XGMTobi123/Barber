<template lang="pug">
    section.header
        ContainerElement
            RowElement(classCss="navbar align-items-baseline justify-content-between")
                ColumnElement(classCss="col-xl-6 col-lg-4 d-flex flex-column-reverse flex-md-row justify-content-between align-items-stretch align-items-md-baseline")
                    ColumnElement(classCss="col-xl-2 d-flex align-items-center align-items-md-baseline justify-content-center")
                        LogoElement
                    ColumnElement(classCss="col-lg-6 col-md-9")
                        ListElement(type="" :items="list")
                ColumnElement(classCss="col-md-4 align-items-center justify-content-xl-between d-none d-lg-flex")
                    ImageElement(:src="img[0]" alt='profile' class-css="profile")
                    ImageElement(:src="img[1]" alt='notification' class-css="notification")
                    button.button(type='button' data-bs-toggle='modal' data-bs-target='#exampleModal') Appointment
                    ModalElement
</template>

<script>
    import RowElement from '@/js/elements/Row';
    import ContainerElement from "../elements/Container";
    import ColumnElement from "../elements/Column";

    import LogoElement from "../elements/Logo";
    import ListElement from "../elements/List";
    import ImageElement from "../elements/Image";
    import ModalElement from "@/js/elements/Modal";

    export default {
        name: "HeaderBlock",
        components: {
            ImageElement,
            ListElement, LogoElement, ColumnElement, ContainerElement, RowElement, ModalElement
        },
        data() {
            return {
                list: ["Home", "History", "Service", "Gallery"],
                img: [require('@/img/i-profile.png'), require('@/img/i-notification.png')]
            }
        },
    }
</script>
