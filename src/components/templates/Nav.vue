<template>
    <b-navbar toggleable="lg">
        <b-navbar-brand href="#">Martinez Designs</b-navbar-brand>
        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
        <b-collapse id="nav-collapse" is-nav>
            <b-nav class="ml-auto">
                <!-- Home Page -->
                <b-nav-item>
                    <router-link to="/">
                        Home
                    </router-link>
                </b-nav-item>
                <!-- Other Pages -->
                <b-nav-item>
                    <router-link to="/other/">
                        Other
                    </router-link>
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