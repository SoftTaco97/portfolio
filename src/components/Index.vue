<template>
    <div>
        <appHeader/>
        <main>
            <b-container fluid>
                <b-row class="text-center">
                    <h2 class="display-4 w-100">About Me</h2>
                </b-row>
                <b-row>
                    <b-col md="4" offset-lg="1">
                        <img src="https://via.placeholder.com/500x350" alt="placeholder">
                    </b-col>
                    <b-col md="5" offset-lg="1">
                        <p class="lead">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Turpis egestas sed tempus urna et pharetra pharetra massa. Ipsum nunc aliquet bibendum enim facilisis gravida neque convallis a. Gravida in fermentum et sollicitudin ac. Sed risus pretium quam vulputate dignissim. Turpis tincidunt id aliquet risus feugiat in ante metus dictum. Turpis cursus in hac habitasse platea dictumst. Eget duis at tellus at urna. Maecenas sed enim ut sem viverra. Posuere lorem ipsum dolor sit.
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
            appFooter
        }
    }
</script>