<template>
    <div class="container-fluid">
        NotFound
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
            setTitle () {
                document.title = this.$trans('app.notfound');
            },
        },
    }
</script>
