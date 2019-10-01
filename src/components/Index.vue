<template>
    <div>
        <appHeader/>
        <main>
            <b-container fluid>
                <b-row class="text-center">
                    <h2 class="display-4">About Me</h2>
                </b-row>
                <b-row class="pt-4">
                    <b-col md="4" offset-md="1" offset-lg="1" class="mb-4 mb-md-0 text-center">
                        <a href="img/jared-martinez.jpg" data-lightbox="Jared Martinez">
                            <img src="img/jared-martinez.jpg" alt="Jared Martinez" class="rounded-circle">
                        </a>
                    </b-col>
                    <b-col md="6" offset-md="1" offset-lg="0" class="mt-2 about">
                        <p class="lead">
                            Oh man... <em>I have to write stuff?</em> <br>Well, I guess I could talk about my skills and stuff... <em><b>sigh</b></em>
                        </p>
                        <p class="lead">
                            I am a Portland Based Web Developer, slash, Software Developer, slash, User Interface designer, slash, <em><b>a person who is really good at googling things.</b></em>
                        </p>
                        <p class="lead">
                            I <b>love</b> to learn new things, and am always pushing myself to be better at what I do.
                        </p>
                        <p class="lead">
                            Have a cool project you think I would be perfect for? 
                        </p>
                        <b-link to="/contact/" variannt="info" class="lead">Contact me here</b-link>
                    </b-col>
                </b-row>
                <b-row class="pt-4 text-center text-md-left">
                    <h2 class="display-4">My Work</h2>
                </b-row>
                <b-row class="p-lg-4">
                    <b-col md="4" offset-md="1">
                        <h2 class="pt-5 pt-md-4 text-center">MyFit</h2>
                        <b-list-group class="mt-5 mt-md-0">
                            <b-list-group-item href="https://myfitofficial.com/" class="text-info" target="_blank">
                                MyFit
                            </b-list-group-item>
                            <b-list-group-item to="/clients/">Made November 2017</b-list-group-item>
                            <b-list-group-item to="/clients/">The owner of MyFit came to me wanting …</b-list-group-item>
                            <b-list-group-item to="/clients/" active>Read more here</b-list-group-item>
                        </b-list-group>
                    </b-col>
                    <b-col md="6" offset-md="1" class="mt-5">
                        <a href="img/myfitofficial-full.png" data-lightbox="myfitofficial">
                            <img src="img/myfitofficial.png">
                        </a>
                    </b-col>
                </b-row>
                <b-row class="p-lg-4">
                        <b-col md="4" class="mt-5 mobile">
                            <h2 class="text-center">Ace In The Hole</h2>
                            <b-list-group class="mt-5">
                                <b-list-group-item href="https://jaredmartinez.webhostingforstudents.com/cas222/" target="_blank" class="text-info">
                                    Ace In The Hole Multisport
                                </b-list-group-item>
                                <b-list-group-item to="/projects/">Made January 2019</b-list-group-item>
                                <b-list-group-item to="/projects/">Ace In The Hole Multisport was one of my most challenging projects …</b-list-group-item>
                                <b-list-group-item to="/projects/" active>Read more here</b-list-group-item>
                            </b-list-group>
                        </b-col>
                        <b-col md="6" offset-lg="1" class="mt-5 pt-3">
                            <a href="img/aceinthehole-full.png" data-lightbox="aceinthehole">
                                <img src="img/aceinthehole.png">
                            </a>
                        </b-col>
                        <b-col md="4" class="desktop">
                            <h2>Ace In The Hole</h2>
                            <b-list-group>
                                <b-list-group-item href="https://jaredmartinez.webhostingforstudents.com/cas222/" target="_blank" class="text-info">
                                    Ace In The Hole Multisport
                                </b-list-group-item>
                                <b-list-group-item to="/projects/">Made January 2019</b-list-group-item>
                                <b-list-group-item to="/projects/">Ace In The Hole Multisport was one of my most challening projects …</b-list-group-item>
                                <b-list-group-item to="/projects/" active>Read more here</b-list-group-item>
                            </b-list-group>
                        </b-col>
                </b-row>
                <b-row class="text-center text-md-right">
                    <h2 class="display-4">My Skills</h2>
                </b-row>
                <b-row class="pt-4">
                    <b-col md="10" offset-md="1" class="p-4 shadow">
                        <app-progress title="JavaScript" icon="fab fa-js-square" :progress=95 />
                        
                        <app-progress title="Node.js" icon="fab fa-node-js" :progress=87 />

                        <app-progress title="PHP" icon="fab fa-php" :progress=80 />

                        <app-progress title="WordPress" icon="fab fa-wordpress" :progress=75 />

                        <app-progress title="Vue.js" icon="fab fa-vuejs" :progress=73 />
                        
                        <app-progress title="HTML / CSS" icon="fab fa-html5" :progress=70 />

                        <app-progress title="BootStrap" icon="fab fa-bootstrap" :progress=65 />
                    </b-col>
                </b-row>
                <b-row class="text-center text-md-left mt-5">
                    <h2 class="display-4">Services</h2>
                </b-row>
                <b-row class="p-md-5">
                    <b-col md class="mt-3">
                        <b-link to="/contact/">
                            <b-card
                                img-src="img/website-creation.jpg"
                                img-alt="Image"
                                title="Website Creation"
                                img-top
                            >
                                <b-card-text>
                                    Need a website? Look no more you have found your magical code monkey                            
                                </b-card-text>

                                <b-button to="/contact/" variant="info">Lets Talk</b-button>
                            </b-card>
                        </b-link>
                    </b-col>
                    <b-col md class="mt-3">
                        <b-link to="/contact/">
                            <b-card
                                img-src="img/website-redesign.jpg"
                                img-alt="Image"
                                title="Website Redesign"
                                img-top
                            >
                                <b-card-text>
                                    Don’t like how your website looks? I probably won’t like it either. Lets fix it.
                                </b-card-text>

                                <b-button to="/contact/" variant="info">Lets Talk</b-button>
                            </b-card>
                        </b-link>
                    </b-col>
                    <b-col md class="mt-3">
                        <b-link to="/contact/">
                            <b-card
                                img-src="img/software.jpg"
                                img-alt="Image"
                                title="Software Development"
                                img-top
                            >
                                <b-card-text>
                                    Have a cool idea? Need a nerd to make it for you? I’m kind of a nerd, <em>so</em>.
                                </b-card-text>

                                <b-button to="/contact/" variant="info">
                                    Lets Talk
                                </b-button>
                            </b-card>
                        </b-link>
                    </b-col>
                </b-row>
                <b-row class="pt-4 text-center text-md-right">
                    <h2 class="display-4">Contact</h2>
                </b-row>
                <b-row class="text-center">
                    <b-col>
                        <h3 class="w-100 lead mt-4">Have a project? Let's talk about it.</h3>
                        <b-button to="/contact/" variant="info" class="lead m-5 p-2 pl-5 pr-5">
                            Contact
                        </b-button>
                        <p class="lead">
                            <b-link href="mailto:info@martinezdesigns.net">info@martinezdesigns.net &nbsp; <span class="far fa-envelope"></span></b-link>
                        </p>
                    </b-col>
                </b-row>
            </b-container>
        </main>
        <appFooter/>
    </div>
</template>

<script>
    // Components
    import appHeader from './templates/HeaderHome.vue'; // Header
    import appFooter from './templates/Footer.vue'; // Footer
    import appProgress from './templates/Progress.vue'; // Progress bar

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
            appProgress
        }
    }
</script>