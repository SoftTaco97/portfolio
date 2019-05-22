<template>
    <div>
        <appHeader title="Services"/>
        <main>
            <b-container fluid>
                <b-row class="text-center text-md-left" id="website-creation">
                    <h2 class="display-4">Website Creation</h2>
                </b-row>
                <b-row class="p-3 p-md-4">
                    <b-col lg="4" offset-lg="1">
                        <a href="img/website-creation.jpg" data-lightbox="website-creation">
                            <img src="img/website-creation.jpg">
                        </a>
                    </b-col>
                    <b-col lg="5" offset-lg="1" class="mt-5 mt-lg-0">
                        <p class="lead">
                            <em class="text-primary">
                                "Everyone needs a website"
                            </em> 
                            <span class="blockquote-footer">
                                <em>
                                    Albert Einstein
                                </em>
                            </span>
                        </p>
                        <p class="lead">
                            He's absoluelty right. <br>
                            With today's ever increasing online world, having a modern, professional, and secure website is a must for any small business.
                        </p>
                        <b-link variant="info" class="lead" to="/contact/">
                            Have your business's website created right, the first time.
                        </b-link>
                        <b-list-group class="mt-5">
                            <b-list-group-item 
                                class="lead d-md-flex justify-content-between align-items-center" 
                                to="/contact/"
                            >
                                Small eCommerce websites 
                                <b-badge variant="info" class="ml-4 mt-3 mt-md-0 ml-md-0">
                                    $ 1000
                                    <b-badge 
                                        v-b-tooltip.hover 
                                        title="Small eCommerce websites are limited to 10 pages, 15 products, 1 contact form, and 3 revisions. Anything additional is subject to additional charge."
                                    >
                                        ?
                                    </b-badge>
                                </b-badge>
                            </b-list-group-item>
                            <b-list-group-item 
                                class="lead d-md-flex justify-content-between align-items-center"
                                to="/contact/"
                            >
                                Small business websites
                                <b-badge variant="info" class="ml-4 mt-3 mt-md-0 ml-md-0">
                                    $ 750
                                    <b-badge 
                                        v-b-tooltip.hover 
                                        title="Small business websites are limited to 10 pages, 3 contact forms, and 3 revisions. Anything additional is subject to additional charge."
                                    >
                                        ?
                                    </b-badge>
                                </b-badge>
                            </b-list-group-item>
                            <b-list-group-item 
                                class="lead d-md-flex justify-content-between align-items-center"
                                to="/contact/"
                            >
                                Large eCommerce websites
                                <b-badge variant="info" class="mt-3 mt-md-0">
                                    $ 80 Per Hour
                                    <b-badge 
                                        v-b-tooltip.hover 
                                        title="Large eCommerce sites will be quoted at 80 dollars an hour spent on the project."
                                    >
                                        ?
                                    </b-badge>
                                </b-badge>
                            </b-list-group-item>
                        </b-list-group>
                    </b-col>
                </b-row>
                <b-row class="text-center text-md-right" id="website-redesign">
                    <h2 class="display-4">Website Redesign</h2>
                </b-row>
                <b-row class="p-3 p-md-4">
                    <b-col class="d-lg-none p-3">
                        <a href="img/website-redesign.jpg" data-lightbox="website-redesign">
                            <img src="img/website-redesign.jpg">
                        </a>
                    </b-col>
                    <b-col lg="5" offset-lg="1" class="mt-5 mt-lg-0">
                        <p class="lead">
                            Have a website that looks <b><em>a bit</em></b> out of date?
                        </p>
                        <p class="lead">
                            Need something that will better reflect your business's current brand image?
                        </p>
                        <p class="lead">
                            Having a website that is not only visually appleaing, but is easy to use, is one of the most important things a company can invest in.
                        </p>
                        <b-link to="/contact/" variant="info" class="lead">
                            Let's fix your website.
                        </b-link>
                        <b-list-group class="mt-5">
                            <b-list-group-item 
                                class="lead d-md-flex justify-content-between align-items-center" 
                                to="/contact/"
                            >
                                Hourly Rate:  
                                <b-badge variant="info" class="mt-3 mt-md-0">
                                    $ 75 Per Hour
                                    <b-badge 
                                        v-b-tooltip.hover 
                                        title="Website redesign projects will be quoted at 75 dollars an hour spent on the project."
                                    >
                                        ?
                                    </b-badge>
                                </b-badge>
                            </b-list-group-item>
                        </b-list-group>
                    </b-col>
                    <b-col lg="4" offset-lg="1" class="d-none d-lg-block">
                        <a href="img/website-redesign.jpg" data-lightbox="website-redesign">
                            <img src="img/website-redesign.jpg">
                        </a>
                    </b-col>
                </b-row>
                <b-row class="text-center text-md-left" id="software-development">
                    <h2 class="display-4">Software Development</h2>
                </b-row>
                <b-row class="p-3 p-md-4">
                    <b-col lg="4" offset-lg="1">
                        <a href="img/software.jpg" data-lightbox="software">
                            <img src="img/software.jpg">
                        </a>
                    </b-col>
                    <b-col lg="5" offset-lg="1" class="mt-5 mt-lg-0">
                        <p class="lead">
                            Need a mobile app for your business?
                        </p>
                        <p class="lead">
                            Need a web application for your clients to use?
                        </p>
                        <p class="lead">
                            Have an idea for the <b><em>next facebook?</em></b>
                        </p>
                        <b-link to="/contact" variant="info" class="lead">
                            Talk to me about it.
                        </b-link>
                        <b-list-group class="mt-5">
                            <b-list-group-item 
                                class="lead d-md-flex justify-content-between align-items-center" 
                                to="/contact/"
                            >
                                Hourly Rate:  
                                <b-badge variant="info" class="mt-3 mt-md-0">
                                    $ 100 Per Hour
                                    <b-badge 
                                        v-b-tooltip.hover 
                                        title="Software Development projects will be quoted at 100 dollars an hour spent on the project."
                                    >
                                        ?
                                    </b-badge>
                                </b-badge>
                            </b-list-group-item>
                        </b-list-group>
                    </b-col>
                </b-row>
            </b-container>
        </main>
        <appFooter/>
    </div>
</template>

<script>
    // Header
    import appHeader from './templates/Header.vue';

    // Footer
    import appFooter from './templates/Footer.vue';

    export default {
        name: 'Services',
        metaInfo: {
            title: 'Services | Martinez Designs',
            meta: [
                { 
                    'Description': 'Learn about the many services I offer!' 
                }
            ]
        },
        components: {
            appHeader,
            appFooter
        }
    }
</script>