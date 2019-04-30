<template>
    <Header title="Index Page!"/>
</template>

<script>
    // header
    import Header from './templates/Header.vue';
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
            Header
        }
    }
</script>