<template>
    <div>
        <h5 class="lead">{{title}} &nbsp;<i :class=icon ></i></h5>
        <b-progress :value=progress :max="100" class="mb-3" variant="info"></b-progress>
    </div>
</template>

<script>
export default {
    name: 'appProgress',
    props: {
        title: String,
        icon: String,
        progress: Number,
    }
}
</script>