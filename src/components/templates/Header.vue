<template>
    <header>
        <b-container fluid>
            <appNav />
            <b-row class="text-center" id="nonHero">
                <h1 class="display-4 w-100">{{title}}</h1>
                <appParticles :value=75 :value_area=750 />
            </b-row>
        </b-container>
    </header>
</template>

<script>
    // Nav
    import appNav from './Nav.vue';

    // Particles
    import appParticles from './Particles.vue';

    export default {
        name: 'appHeader',
        props: {
            title: String
        },
        components: {
            appNav,
            appParticles
        }
    }
</script>