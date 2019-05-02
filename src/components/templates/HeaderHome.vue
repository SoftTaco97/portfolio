<template>
    <header>
        <b-container fluid class="w-100">
            <appNav :isHome=true :isOther=false />
                <b-row class="text-center" id="hero">
                    <h1 class="w-100 display-4">Martinez Designs</h1>
                    <img src="https://martinezdesigns.net/images/favicon.png" alt="logo">
                    <h3 class="lead w-100">I am a <span class="tagline"></span></h3>
                </b-row>
        </b-container>
    </header>
</template>

<script>
    // Nav
    import appNav from './Nav.vue';

    // Typed JS
    import Typed from 'typed.js';

    // Particles JS
    require('particles.js');
    
    export default {
        name: 'appHeader',
        components: {
            appNav
        },
        mounted () {
            // Typed JS
            const options = {
                strings: ["web developer.", "web designer.", "software engineer.", "master of googling."],
                typeSpeed: 40,
                loop: true,
                backSpeed: 40,
                backDelay: 1000
            }

            const typed = new Typed(".tagline", options);

            // Particles JS
            particlesJS('hero', {
                    "particles": {
                        "number": {
                            "value": 200,
                            "density": {
                                "enable": true,
                                "value_area": 750
                            }
                        },
                        "color": {
                            "value": "#ffffff"
                        },
                        "shape": {
                            "type": "circle",
                            "stroke": {
                                "width": 0,
                                "color": "#000000"
                            },
                            "polygon": {
                                "nb_sides": 5
                            },
                            "image": {
                                "src": "img/github.svg",
                                "width": 100,
                                "height": 100
                            }
                        },
                        "opacity": {
                            "value": 0.5524033491425908,
                            "random": true,
                            "anim": {
                                "enable": true,
                                "speed": 1,
                                "opacity_min": 0,
                                "sync": false
                            }
                        },
                        "size": {
                            "value": 3,
                            "random": true,
                            "anim": {
                                "enable": false,
                                "speed": 4,
                                "size_min": 0.3,
                                "sync": false
                            }
                        },
                        "line_linked": {
                            "enable": true,
                            "distance": 64,
                            "color": "#ffffff",
                            "opacity": 0.5,
                            "width": 1
                        },
                        "move": {
                            "enable": true,
                            "speed": 2,
                            "direction": "random",
                            "random": true,
                            "straight": false,
                            "out_mode": "out",
                            "bounce": false,
                            "attract": {
                                "enable": false,
                                "rotateX": 600,
                                "rotateY": 600
                            }
                        }
                    },
                    "interactivity": {
                        "detect_on": "canvas",
                        "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "resize": true
                        },
                        "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                            "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 250,
                            "size": 0,
                            "duration": 2,
                            "opacity": 0,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 100,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                        }
                    },
                    "retina_detect": false
                });
        }
    }
</script>