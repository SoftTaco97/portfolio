<template>
    <header>
        <h1>Hello {{title}}</h1>
    </header>
</template>

<script>
    export default {
        name: 'header',
        props: {
            title: String
        }
    }
</script>