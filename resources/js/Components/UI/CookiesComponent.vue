<template>
    <div style="display: none;"></div>
</template>

<script>
    export default {
        props: {

        },
        data() {
            return {
                cookieAccepted: localStorage.getItem('cookieAccepted') === 'true',
            };
        },
        methods: {
            acceptCookie() {
                localStorage.setItem('cookieAccepted', 'true');
                this.cookieAccepted = true;
            },
        },
        watch: {

        }
    };
</script>
