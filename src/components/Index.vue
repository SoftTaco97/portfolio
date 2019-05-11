<template>
    <div>
        <appHeader/>
        <main>
            <b-container fluid>
                <b-row class="text-center">
                    <h2 class="display-4">About Me</h2>
                </b-row>
                <b-row class="p-lg-4">
                    <b-col md="5" offset-lg="1">
                        <img src="images/jared-martinez.jpg" alt="placeholder">
                    </b-col>
                    <b-col md="5" offset-md="1" offset-lg="0">
                        <p class="lead">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis egestas sed tempus urna et pharetra pharetra massa. Ipsum nunc aliquet bibendum enim facilisis gravida neque convallis a. Gravida in fermentum et sollicitudin ac. Sed risus pretium quam vulputate dignissim. Turpis tincidunt id aliquet risus feugiat in ante metus dictum. Turpis cursus in hac habitasse platea dictumst. Eget duis at tellus at urna. Maecenas sed enim ut sem viverra. Posuere lorem ipsum dolor sit.
                        </p>
                    </b-col>
                </b-row>
                <b-row>
                    <h2 class="display-4">My Work</h2>
                </b-row>
                <b-row class="p-lg-4">
                    <b-col md="4" offset-md="1" class="pt-lg-5 mt-lg-5">
                        <b-list-group>
                            <b-list-group-item href="https://myfitofficial.com/">myfitofficial.com</b-list-group-item>
                            <b-list-group-item to="/services/">Made November 2017</b-list-group-item>
                            <b-list-group-item to="/services/">The owner of MyFit came to me wanting …</b-list-group-item>
                            <b-list-group-item to="/servces/" active>Read more here</b-list-group-item>
                        </b-list-group>
                    </b-col>
                    <b-col md="6" offset-md="1">
                        <a href="images/myfitofficial-full.png" data-lightbox="myfitofficial">
                            <img src="images/myfitofficial.png">
                        </a>
                    </b-col>
                </b-row>
                <b-row class="p-lg-4">
                    <b-col md="6" offset-md="1">
                        <a href="images/aceinthehole-full.png" data-lightbox="aceinthehole">
                            <img src="images/aceinthehole.png">
                        </a>
                    </b-col>
                    <b-col md="4" class="pt-lg-5 mt-lg-5">
                        <b-list-group>
                            <b-list-group-item href="https://jaredmartinez.webhostingforstudents.com/cas222/">Ace In The Hole MultiSport</b-list-group-item>
                            <b-list-group-item to="/projects/">Made January 2019</b-list-group-item>
                            <b-list-group-item to="/projects/">Ace In The Hole MultiSport was one of my most challengin projects …</b-list-group-item>
                            <b-list-group-item to="/projects/" active>Read more here</b-list-group-item>
                        </b-list-group>
                    </b-col>
                </b-row>
                <b-row class="text-right">
                    <h2 class="display-4">My Skills</h2>
                </b-row>
                <b-row>
                    <b-col md="10" offset-md="1">
                        <h5 class="lead">JavaScript</h5>
                        <b-progress :value="95" :max="100" class="mb-3" variant="info"></b-progress>

                        <h5 class="lead">PHP</h5>
                        <b-progress :value="85" :max="100" class="mb-3" variant="info"></b-progress>

                        <h5 class="lead">HTML / CSS</h5>
                        <b-progress :value="73" :max="100" class="mb-3" variant="info"></b-progress>

                        <h5 class="lead">WordPress</h5>
                        <b-progress :value="78" :max="100" class="mb-3" variant="info"></b-progress>

                        <h5 class="lead">Vue JS</h5>
                        <b-progress :value="59" :max="100" class="mb-3" variant="info"></b-progress>

                        <h5 class="lead">BootStrap</h5>
                        <b-progress :value="65" :max="100" class="mb-3" variant="info"></b-progress>
                    </b-col>
                </b-row>
                <b-row>
                    <h2 class="display-4">Services I Offer</h2>
                </b-row>
                <b-row class="p-md-5">
                    <b-col md>
                        <b-card
                            img-src="images/website-creation.jpg"
                            img-alt="Image"
                            title="Website Creation"
                            img-top
                        >
                            <b-card-text>
                                Need a website? Look no more you have found your magical code monkey                            
                            </b-card-text>

                            <b-button to="/services/" variant="info">Learn More</b-button>
                        </b-card>
                    </b-col>
                    <b-col md>
                        <b-card
                            img-src="images/website-redesign.jpg"
                            img-alt="Image"
                            title="Website Resdesign"
                            img-top
                        >
                            <b-card-text>
                                Don’t like how your website looks? I probably won’t like it either. Lets fix it.
                            </b-card-text>

                            <b-button to="/services/" variant="info">Learn More</b-button>
                        </b-card>
                    </b-col>
                    <b-col md>
                        <b-card
                            img-src="images/software.jpg"
                            img-alt="Image"
                            title="Software Development"
                            img-top
                        >
                            <b-card-text>
                                Have a cool idea? Need a nerd to make it for you? I’m kind of a nerd, <em>so</em>.
                            </b-card-text>

                            <b-button to="/services/" variant="info">
                                Learn More
                            </b-button>
                        </b-card>
                    </b-col>
                </b-row>
                <b-row class="text-right">
                    <h2 class="display-4">Contact</h2>
                </b-row>
                <b-row class="text-center">
                    <b-col>
                        <h3 class="w-100 lead">Have a project? Let's talk about it.</h3>
                        <b-button to="/contact/" variant="info" class="m-5 p-2">
                            Contact
                        </b-button>
                        <p class="lead">
                            <b-link href="mailto:info@martinezdesigns.net">info@martinezdesigns.net</b-link>
                        </p>
                    </b-col>
                </b-row>
            </b-container>
        </main>
        <appFooter/>
    </div>
</template>

<script>
    // Header
    import appHeader from './templates/HeaderHome.vue';

    // Footer
    import appFooter from './templates/Footer.vue';

    export default {
        name: 'Main',
        metaInfo: {
            title: 'Home | Martinez Designs',
            meta: [
                { 
                    'Description': 'Home Page Template'
                }
            ]
        },
        components: {
            appHeader,
            appFooter,
        }
    }
</script>