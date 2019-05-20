<template>
    <div>
        <appHeader title="404 Not Found" />
        <main>
            <b-container fluid>
                <b-row class="text-left">
                    <h2 class="display-4 p-5 w-100">
                        Whoops!
                    </h2>
                </b-row>
                <b-row>
                    <b-col xs="10" offset-md="1">
                        <p class="lead pt-4 pb-5">
                            Can't seem to find that... <em><b>Awkward</b></em>
                        </p>
                        <b-button variant="info" class="pl-4 pr-4 pt-2 pb-2" to="/">
                            Take me home
                        </b-button>
                    </b-col>
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
            appFooter
        }
    }
</script>