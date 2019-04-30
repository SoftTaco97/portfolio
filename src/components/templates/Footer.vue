<template>
    <footer>
        <b-container fluid>
            <b-row>
                <b-col md="4">
                    <img src="https://martinezdesigns.net/images/favicon.png" alt="logo">
                </b-col>
                <b-col md="4">
                    <b-row>
                        <b-col>
                            <i class="fab fa-instagram"></i>
                        </b-col>
                        <b-col>
                            <i class="fab fa-instagram"></i>
                        </b-col>
                        <b-col>
                            <i class="fab fa-instagram"></i>
                        </b-col>
                        <b-col>
                            <i class="fab fa-instagram"></i>
                        </b-col>
                    </b-row>
                </b-col>
                <b-col md="4">
                    <b-nav vertical>
                        <b-nav-item>
                            <router-link to="/">
                                Home
                            </router-link>
                        </b-nav-item>
                        <b-nav-item>
                            <router-link to="/other/">
                                Other
                            </router-link>
                        </b-nav-item>
                    </b-nav>
                </b-col>
            </b-row>
            <b-row class="text-center">
                <h2 class="w-100 display-4">Martinez Designs &copy; {{currentYear}}</h2>
            </b-row>
        </b-container>
    </footer>
</template>

<script>
    export default {
        name: 'appFooter',
        data: () => {
            return {
                currentYear: new Date().getFullYear()
            }
        }
    }
</script>