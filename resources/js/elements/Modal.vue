<template>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="example-form" @submit.prevent="someAction()">
                        <div class="mb-3">
                            <label for="recipientName" class="col-form-label">Recipient:</label>
                            <input type="text" v-model="recipientName" class="form-control" id="recipientName">
                            <div class = "modal-error" v-if="$v.recipientName.$invalid">
                                <template v-if="!$v.recipientName.maxLength">
                                    Длина имени не должна превышать {{ $v.recipientName.$params.maxLength.max }} символов
                                </template>
                                <template v-else-if="!$v.recipientName.alpha">
                                    Имя должно содержать только русские буквы
                                </template>
                                <template v-else>
                                    Имя обязательно для заполнения
                                </template>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="col-form-label">Phone:</label>
                            <input type="number" v-model="phone" class="form-control" id="phone">
                            <div class = "modal-error" v-if="$v.phone.$invalid">
                                <template v-if="!$v.phone.required">
                                    Телефон обязателен для заполнения
                                </template>
                                <template v-else="!$v.phone.minLength && !v.phone.maxLenght">
                                    Телефон должен содержать ровно 11 символов
                                </template>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="example-form" :disabled="$v.$invalid">Send message</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { required, maxLength, minLength } from 'vuelidate/lib/validators';
    import axios from 'axios';


    export default {
        name: "ModalElement",
        data() {
            return {
                phone: '',
                recipientName: '',
            };
        },

        methods: {
            someAction() {
                let currentObj = this;
                axios.post('/mail', {
                        name: this.recipientName,
                        phone: this.phone
                })
                .then(function (response) {
                    console.log(response);
                    currentObj.output = response.data;
                })
            }
        },

        validations: {
            recipientName: {
                required,
                maxLength: maxLength(15),
                alpha: val => /^[а-яё]*$/i.test(val),
            },
            phone: {
                required,
                maxLength: maxLength(11),
                minLength: minLength(11)
            }
        }
    }
</script>
