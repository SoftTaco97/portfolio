<template>
    <appHeader title="Other Pages!" />
</template>

<script>
    // Header
    import appHeader from './templates/Header.vue';

    export default {
        name: 'Other',
        metaInfo: {
            title: 'Other Pages | Martinez Designs',
            meta: [
                { 
                    'Description': 'Template for other pages'
                }
            ]
        },
        components: {
            appHeader
        }
    }
</script>