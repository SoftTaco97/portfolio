<template>
    <div>
        <appHeader title="Projects" />
        <main>
            <b-container fluid>
                <b-row class="text-center text-md-left" id="aceinthehole">
                    <h2 class="display-4">Ace In The Hole Multisport</h2>
                </b-row>
                <b-row class='p-3 p-md-4'>
                    <b-col lg="4" offset-lg="1">
                        <a href="img/aceinthehole-full.png" data-lightbox="aceinthehole">
                            <img src="img/aceinthehole.png">
                        </a>
                        <b-list-group class="mt-5">
                            <b-list-group-item href="https://jaredmartinez.webhostingforstudents.com/cas222/" class="text-info">
                                Ace In The Hole Multisport
                            </b-list-group-item>
                            <b-list-group-item href="https://jaredmartinez.webhostingforstudents.com/cas222/">Made January 2019</b-list-group-item>
                            <b-list-group-item href="https://github.com/SoftTaco97/aceinthehole" class="text-info">Browse the code &nbsp; <i class="fas fa-code"></i></b-list-group-item>
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
                <b-row class="text-center text-md-right" id="giphy">
                    <h2 class="display-4">Giphy Search</h2>
                </b-row>
                <b-row class='p-3 p-md-4'>
                    <b-col class="d-lg-none">
                        <a href="img/giphy-full.png" data-lightbox="giphy-search">
                            <img src="img/giphy.png">
                        </a>
                        <b-list-group class="mt-5">
                            <b-list-group-item href="/giphy-search/" class="text-info">
                                Giphy Search
                            </b-list-group-item>
                            <b-list-group-item href="/giphy-search/">Made July 2018</b-list-group-item>
                            <b-list-group-item href="https://github.com/v1st/Giphy-Search" class="text-info">Browse the code  &nbsp; <i class="fas fa-code"></i></b-list-group-item>
                        </b-list-group>
                    </b-col>
                    <b-col lg="5" offset-lg="1">
                        <h3 class="display-5 border-bottom text-center p-3">The Brief</h3>
                        <p class="lead mt-4">
                            Giphy Search is a web application utilizing the Giphy Developer API.
                        </p>
                        <p class="lead">
                            The project was made in collaboration with a remote web developer based in Florida.<br>
                        </p>
                        <p class="lead">
                            This web application utilizes JavaScript, jQuery, HTML and CSS for its functionality.
                        </p>
                    </b-col>
                    <b-col lg="4" offset-lg="1" class="d-none d-lg-block">
                        <a href="img/giphy-full.png" data-lightbox="giphy-search">
                            <img src="img/giphy.png">
                        </a>
                        <b-list-group class="mt-5">
                            <b-list-group-item href="/giphy-search/" class="text-info">
                                Giphy Search
                            </b-list-group-item>
                            <b-list-group-item href="/giphy-search/">Made July 2018</b-list-group-item>
                            <b-list-group-item href="https://github.com/v1st/Giphy-Search" class="text-info">Browse the code &nbsp; <i class="fas fa-code"></i></b-list-group-item>
                        </b-list-group>
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