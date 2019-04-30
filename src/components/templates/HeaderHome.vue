<template>
    <header>
        <b-container fluid class="w-100">
            <appNav :isHome=true :isOther=false />
            <b-row class="text-center" id="hero">
                <h1 class="w-100 display-4">Martinez Designs</h1>
                <h3 class="tagline w-100">Web Development</h3>
            </b-row>
        </b-container>
    </header>
</template>

<script>
    // Nav
    import appNav from './Nav.vue';

    export default {
        name: 'appHeader',
        components: {
            appNav
        }
    }
</script>