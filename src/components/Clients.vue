<template>
    <div>
        <appHeader title="Clients" />
        <main>
            <b-container fluid>
                <b-row class="text-center text-md-left" id="myfit">
                    <h2 class="display-4">MyFit</h2>
                </b-row>
                <b-row class='p-3 p-md-4'>
                    <b-col lg="4" offset-lg="1">
                        <a href="img/myfitofficial-full.png" data-lightbox="myfitofficial">
                            <img src="img/myfitofficial.png">
                        </a>
                        <b-list-group class="mt-5">
                            <b-list-group-item href="https://myfitofficial.com/" class="text-info" target="_blank">MyFit</b-list-group-item>
                            <b-list-group-item href="https://myfitofficial.com/" target="_blank">Made November 2017</b-list-group-item>
                        </b-list-group>
                    </b-col>
                    <b-col lg="5" offset-lg="1">
                        <h3 class="display-5 border-bottom text-center p-3">The Brief</h3>
                        <p class="lead mt-4">
                            The owner of MyFit came to me wanting a website for her personal training business.
                        </p>
                        <p class="lead">
                            After talking with her, it was obvious that she would want to make content updates herself, rather can keep me on retainer. <br>
                            This made her a perfect candidate for WordPress.
                        </p>
                        <p class="lead">
                            I used a pre-made theme from the WordPress market place, and modified to better fit the client's needs. <br>
                            This project took roughly ten hours, including meeting times.
                        </p>
                    </b-col>
                </b-row>
            </b-container>
        </main>
        <appFooter />
    </div>
</template>

<script>
    // header
    import appHeader from './templates/Header.vue';

    // footer
    import appFooter from './templates/Footer.vue';

    export default {
        name: 'Clients',
        metaInfo: {
            title: 'Clients | Martinez Designs',
            meta: [
                {
                    'Description': 'Checkout out some of the happy clients of Martinez Designs!'
                }
            ]
        },
        components: {
            appHeader,
            appFooter
        }
    }
</script>