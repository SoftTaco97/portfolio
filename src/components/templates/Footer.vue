<template>
    <footer>
        <b-container fluid>
            <b-row>
                <b-col md="4" class="text-center">
                    <img src="img/favicon.png" alt="logo">
                </b-col>
                <b-col md="4" class="text-center">
                    <b-row>
                        <b-col>
                            <a href="https://www.instagram.com/martinez_designs/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </b-col>
                        <b-col>
                            <a href="https://github.com/SoftTaco97/" target="_blank"><i class="fab fa-github"></i></a>
                        </b-col>
                        <b-col>
                            <a href="https://www.linkedin.com/in/jared-martinez-1312b0168" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </b-col>
                    </b-row>
                </b-col>
                <b-col md="4">
                    <b-nav vertical class="w-100 text-center">
                        <!-- Home Page -->
                        <b-nav-item to="/">
                            Home
                        </b-nav-item>
                        <!-- Projects Page -->
                        <b-nav-item to="/projects/">
                            Projects
                        </b-nav-item>
                        <!-- Clients Page -->
                        <b-nav-item to="/clients/">
                            Clients
                        </b-nav-item>
                        <!-- Services Page -->
                        <b-nav-item to="/services/">
                            Services
                        </b-nav-item>
                        <!-- Contact Page -->
                        <b-nav-item to="/contact/">
                            Contact
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
        data () {
            return {
                currentYear: new Date().getFullYear()
            }
        }
    }
</script>