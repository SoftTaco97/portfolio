<template>
    <header>
        <b-container fluid class="w-100">
            <appNav :isHome=true :isOther=false />
                <b-row class="text-center" id="hero">
                    <h1 class="w-100 display-4">Martinez Designs</h1>
                    <img src="https://martinezdesigns.net/images/favicon.png" alt="logo">
                    <h3 class="lead w-100">I am a <span class="tagline"></span></h3>
                    <vue-particles 
                        color="#fff"
                        :particleOpacity="0.7"
                        :particlesNumber="100"
                        shapeType="circle"
                        :particleSize="3"
                        linesColor="#fff"
                        :linesWidth="1"
                        :lineLinked="true"
                        :lineOpacity="0.4"
                        :linesDistance="100"
                        :moveSpeed="2"
                        :hoverEffect="false"
                        hoverMode="grab"
                        :clickEffect="false"
                        clickMode="none" 
                    />
                </b-row>
        </b-container>
    </header>
</template>

<script>
    // Nav
    import appNav from './Nav.vue';

    // Typed JS
    import Typed from 'typed.js';
    
    export default {
        name: 'appHeader',
        components: {
            appNav,
        },
        mounted () {
            // Typed JS
            const options = {
                strings: ["web developer.", "web designer.", "software engineer.", "master of googling."],
                typeSpeed: 40,
                loop: true,
                backSpeed: 40,
                backDelay: 1000
            }
            new Typed(".tagline", options);
        }
    }
</script>