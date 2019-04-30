<template>
    <appHeader title="404 Pages!" />
</template>

<script>
    // Header
    import appHeader from './templates/Header.vue';

    export default {
        name: 'app404',
        metaInfo: {
            title: '404 Not Found',
            meta: [
                { 
                    'Description': 'Whoops! Can\'t Seem to find that... Awkward'
                }
            ]
        },
        components: {
            appHeader,
        }
    }
</script>