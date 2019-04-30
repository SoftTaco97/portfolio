<template>
    <header>
        <b-container fluid>
            <appNav />
            <b-row class="text-center">
                <h1 class="display-4 w-100">{{title}}</h1>
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