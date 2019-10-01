<template>
    <b-navbar toggleable="lg">
        <b-navbar-brand class="lead">
            <router-link to="/">
                Martinez Designs <i class="fas fa-laptop-code"></i>
            </router-link>
        </b-navbar-brand>
        <b-navbar-toggle class="ml-auto" target="nav-collapse"></b-navbar-toggle>
        <b-collapse id="nav-collapse" is-nav>
            <b-nav class="ml-auto text-center" vertical>
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
                <!-- Contact Page -->
                <b-nav-item to="/contact/">
                    Contact
                </b-nav-item>
            </b-nav>
        </b-collapse>
  </b-navbar>
</template>

<script>
    export default {
        name: 'appNav',
        props: {
            isHome: Boolean,
            isOther: Boolean
        }
    }
</script>