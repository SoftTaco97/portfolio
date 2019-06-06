<template>
    <div>
        <appHeader title="Contact" />
        <main>
            <b-container fluid>
                <b-row>
                    <b-col md="7" offset-lg="1" class="p-4">
                        <b-form @submit="onSubmit" v-if="!showSuccess">
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
                                <b-form-text class="pt-4">
                                    We promise to never share your information with anyone.
                                </b-form-text>
                            </div>
                        </b-form>
                    <b-alert class="lead mt-5" variant="danger" dismissible v-model="showError">
                        {{message}}
                    </b-alert>
                    <b-alert class="lead mt-5" variant="success" dismissible v-model="showSuccess">
                        {{message}}
                    </b-alert>
                    </b-col>
                    <b-col md="3" class="mt-3 mb-4 mb-md-0 text-center info-box">
                        <a href="img/jared-martinez.jpg" data-lightbox="Jared Martinez">
                            <img src="img/jared-martinez.jpg" alt="Jared Martinez" class="rounded-circle">
                        </a>
                        <p class="lead p-5">
                            <b-link href="mailto:info@martinezdesigns.net">info@martinezdesigns.net &nbsp; <span class="far fa-envelope"></span></b-link>
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

                // name
                if(!this.form.name){
                    return output(false, 'name', 'Please enter your name.');
                } 
                
                // email
                if(!this.form.email || !valEmail.test(this.form.email)){
                    return output(false, 'email', 'Please enter a valid email.');
                } 
                
                // subject
                if(!this.form.subject){
                    return output(false, 'subject', 'Please enter a subject');
                } 
                
                // message
                if(!this.form.message){
                    return output(false, 'message', 'Please enter a message');
                }

                return output(true, null, null);
            },
            sendInfo() {
                /* Variables */
                const data = new FormData();

                // Setting the fields
                for(let field in this.form){
                    data.set(field, this.form[field]);
                }
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
                .then(response => {
                    // Displaying the result
                    this.displayMessage(response.data);
                })
                .catch(() => {
                    //handle error
                    this.displayMessage({
                        success: false,
                        error: 'encountered error on server',
                        message: 'Your message could not be sent at this time. Please try again later.'
                    })
                });
            },
            displayMessage(data){
                // showing error if there is one
                this.showError = !data.success;
                // Showing success if there is one
                this.showSuccess = data.success;
                // Showing message
                this.message = data.message;

                // Clearing the input fields if the form was submitted
                if(data.success){
                    for(let field in this.form){
                        this.form[field] = '';
                    }
                }
            }
        },
        components: {
            appHeader,
            appFooter
        }
    }
</script>