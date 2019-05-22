<template>
    <div>
        <appHeader title="Clients" />
        <main>
            <b-container fluid>
                <b-row class="text-center text-md-left" id="myfit">
                    <h2 class="display-4">Ace In The Hole Multisport</h2>
                </b-row>
                <b-row class='p-3 p-md-4'>
                    <b-col lg="4" offset-lg="1">
                        <a href="img/aceinthehole-full.png" data-lightbox="aceinthehole">
                            <img src="img/aceinthehole.png">
                        </a>
                        <b-list-group class="mt-5">
                            <b-list-group-item href="https://jaredmartinez.webhostingforstudents.com/cas222/">Ace In the Hole Multisport</b-list-group-item>
                            <b-list-group-item to="/clients/">Made January 2019</b-list-group-item>
                        </b-list-group>
                    </b-col>
                    <b-col lg="5" offset-lg="1">
                        <h3 class="display-5 border-bottom text-center p-3">The Brief</h3>
                        <p class="lead mt-4">
                            Ace In The Hole Multisport was one of my most challenging projects I have ever worked on.
                        </p>
                        <p class="lead">
                            This project was done for the my Integrated Website Design class at Portland Community College. <br>
                        </p>
                        <p class="lead">
                            The premise of the project is to build a static site for a theoretical client using:
                            <ul>
                                <li>
                                    HTML
                                </li>
                                <li>
                                    CSS
                                </li>
                                <li>
                                    JavaScript
                                </li>
                                <li>
                                    PHP
                                </li>
                                <li>
                                    SQL
                                </li>
                            </ul>
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
        name: 'Projects',
        metaInfo: {
            title: 'Projects | Martinez Designs',
            meta: [
                {
                    'Description': 'Checkout out some of the cool projects from Martinez Designs!'
                }
            ]
        },
        components: {
            appHeader,
            appFooter
        }
    }
</script>