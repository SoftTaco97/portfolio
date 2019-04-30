<template>
    <div>
        <appHeader title="Other Page Templates" />
        <main>
            <b-container fluid>
                <b-row class="text-center">
                    <h2 class="display-4 w-100">Some Title</h2>
                </b-row>
                <b-row class="text-center">
                    <p class="lead w-100">
                        Some text Some text
                        Some text Some text
                        Some text Some text
                        Some text Some text
                        Some text Some textSome text Some text
                        Some text Some text
                        Some text Some text
                        Some text Some text
                        Some text Some textSome text Some text
                        Some text Some text
                        Some text Some text
                        Some text Some text
                        Some text Some textSome text Some text
                        Some text Some text
                        Some text Some text
                        Some text Some text
                        Some text Some textSome text Some text
                        Some text Some text
                        Some text Some text
                        Some text Some text
                        Some text Some textSome text Some text
                        Some text Some text
                        Some text Some text
                        Some text Some text
                        Some text Some textSome text Some text
                        Some text Some text
                        Some text Some text
                        Some text Some text
                        Some text Some textSome text Some text
                        Some text Some text
                        Some text Some text
                        Some text Some text
                        Some text Some text
                    </p>
                </b-row>
            </b-container>
        </main>
        <appFooter />
    </div>
</template>

<script>
    // Header
    import appHeader from './templates/Header.vue';

    // Footer
    import appFooter from './templates/Footer.vue';

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
            appHeader,
            appFooter
        }
    }
</script>