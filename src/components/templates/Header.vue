<template>
    <header>
        <b-container fluid>
            <appNav :isHome=false :isOther=true />
            <b-row>
                <h1>{{title}}</h1>
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