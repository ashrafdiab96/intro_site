<template>
    <div class="container-fluid">
        About
        <p>{{ $trans('app.content') }}</p>
    </div>
</template>

<script>import axios from "axios"

    export default {
        data() {
            return {

            }
        },
        created () {
            this.setTitle();
        },
        methods: {
            changeLang (lang) {
                axios.get('./lang/'+lang).then(() => {
                    this.$lang.setLocale = lang;
                    localStorage.setItem('local', lang);
                }).then(() => {
                    window.location.reload()
                });
            },
            setTitle () {
                document.title = this.$trans('app.about');
            },
        },
    }
</script>
