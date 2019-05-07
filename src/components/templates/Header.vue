<template>
    <header>
        <b-container fluid>
            <appNav />
            <b-row class="text-center" id="nonHero">
                <h1 class="display-4 w-100">{{title}}</h1>
                <vue-particles 
                    color="#fff"
                    :particleOpacity="0.7"
                    :particlesNumber="50"
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

    export default {
        name: 'appHeader',
        props: {
            title: String
        },
        components: {
            appNav
        }
    }
</script>