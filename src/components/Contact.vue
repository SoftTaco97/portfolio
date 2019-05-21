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
                                    placeholder="First and Last Name"
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
                                placeholder="Email Address"
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
                                    placeholder="Telphone Number"
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
                                    required
                                />
                            </b-form-group>
                            <b-form-group
                                id="message-group"
                                label="Message"
                                label-for="message"
                                label-sr-only    
                            >
                                <b-form-textarea
                                    id="textarea"
                                    v-model="form.message"
                                    placeholder="Message"
                                    rows="6"
                                    required
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
                    <b-alert class="lead" variant="danger" dismissible v-if="showError">
                        {{message}}
                    </b-alert>
                    <b-alert class="lead" variant="success" dismissible v-if="showSuccess">
                        {{message}}
                    </b-alert>
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

    // Axios
    import axios from 'axios';

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
                    message: '',
                },
                showError: false,
                showSuccess: false,
                message: '',
                messageVariant: 'danger'
            }
        },
        methods: {
            onSubmit(evt) {
                // Stopping the form from submitting
                evt.preventDefault();

                // Validating form data
                const isValid = this.formValidation();

                // Sending event
                if(isValid.success){
                    this.sendInfo();
                    return;
                }

                this.displayMessage(isValid);
            },
            formValidation() {
                /* variables */
                const valEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/g;

                /* Helper function to structure output data */
                const output = (success, error, message) => {
                    return {
                        success: success,
                        error: error,
                        message: message
                    }
                }

                if(!this.form.name){
                    return output(false, 'name', 'Please enter your name');
                } else if(!this.form.email && !valEmail.test(this.form.email)){
                    return output(false, 'email', 'Please enter a valid email');
                } else if(!this.form.subject){
                    return output(false, 'subject', 'Please enter a subject');
                } else if(!this.form.message){
                    return output(false, 'messaqge', 'Please enter a message');
                }

                return output(true, null, null);
            },
            sendInfo() {
                /* Variables */
                const data = new FormData();

                // Name
                data.set('name', this.form.name);
                // Email
                data.set('email', this.form.email);
                // Number 
                data.set('number', this.form.number);
                // Subject
                data.set('subject', this.form.subject);
                // Message
                data.set('message', this.form.message);

                /* sending form data */
                axios({
                    method: 'post',
                    url: './form.php',
                    data: data,
                    config: { 
                        headers: {
                            'Content-Type': 'multipart/form-data' 
                            }
                        }
                })
                .then((response) => {
                    this.displayMessage({
                        success: (response.success === 200),
                        error: response.error,
                        message: response.message
                    })
                })
                .catch(function () {
                    //handle error
                    this.displayMessage({
                        success: false,
                        error: 'encountered error on server',
                        message: 'Your message could not be sent at this time. Please try again later.'
                    })
                });
            },
            displayMessage(output){
                // Showing the message
                const data = output;
                this.showError = data.success ? false : true;
                this.showSuccess = data.success ? true : false;
                this.message = data.message;

            }
        },
        components: {
            appHeader,
            appFooter
        }
    }
</script>