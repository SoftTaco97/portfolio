<template>
    <Header title="404 Pages!" />
</template>

<script>
    // Header
    import Header from './templates/Header.vue';

    export default {
        name: '404',
        components: {
            Header
        },
        metaInfo: {
            title: '404 Not Found',
            meta: [
                { 
                    'Description': 'Whoops! Can\'t Seem to find that... Awkward'
                }
            ]
        }
    }
</script>