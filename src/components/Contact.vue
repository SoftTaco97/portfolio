<template>
    <div>
        <appHeader title="Contact" />
        <main>
            <b-container fluid>
                <b-row>
                    <b-col lg="10" offset-lg="1" class="p-4">
                        <b-form @submit="onSubmit">
                            <!-- Name -->
                            <b-form-group 
                                id="name-group" 
                                label="Your Name:" 
                                label-for="name"
                                label-sr-only
                            >
                                <b-form-input
                                    id="name"
                                    v-model="form.name"
                                    required
                                    placeholder="Enter your name"
                                />
                            </b-form-group>
                            <!-- /NAME -->

                            <!-- EMAIL -->
                            <b-form-group
                                id="email-group"
                                label="Email address:"
                                label-for="email"
                                label-sr-only
                            >
                            <b-form-input
                                id="email"
                                v-model="form.email"
                                type="email"
                                required
                                placeholder="Enter email"
                            />
                            </b-form-group>
                            <!-- /EMAIL -->

                            <!-- NUMBER -->
                            <b-form-group 
                                id="number-group"
                                label="Telephone Number"
                                label-for="number"
                                label-sr-only
                            >
                                <b-form-input
                                    id="number"
                                    v-model="form.number"
                                    type="text"
                                    placeholder="Enter number"
                                />
                            </b-form-group>
                            <!-- /NUMBER -->

                            <!-- SUBJECT -->
                            <b-form-group
                                id="subject-group"
                                label="Subject"
                                label-for="subject"
                                label-sr-only
                            >
                                <b-form-input
                                    id="subject"
                                    v-model="form.subject"
                                    type="text"
                                    placeholder="Subject"
                                />
                            </b-form-group>
                            <div class='text-center'>
                                <b-button 
                                type="submit" 
                                variant="info"
                                class="pl-4 pr-4 pt-2 pb-2"
                                >
                                    Send
                                </b-button>
                            </div>
                        </b-form>
                        <p class="lead" v-if="showMessage">
                            {{message}}
                        </p>
                    </b-col>
                </b-row>
            </b-container>
        </main>
        <appFooter />
    </div>
</template>

<script>
    // Header
    import appHeader from './templates/Header.vue';

    // Footer
    import appFooter from './templates/Footer.vue';

    export default {
        name: 'Other',
        metaInfo: {
            title: 'Contact | Martinez Designs',
            meta: [
                { 
                    'Description': 'Have a cool idea? Need something built you for small business? Contact me today.'
                }
            ]
        },
        data () {
            return {
                form: {
                    name: '',
                    email: '',
                    number: '',
                    subject: '',
                },
                showMessage: false,
                message: ''
            }
        },
        methods: {
            onSubmit(evt) {
                // Stopping the form from submitting
                evt.preventDefault();

                // Validating form data
            }
        },
        components: {
            appHeader,
            appFooter
        }
    }
</script>