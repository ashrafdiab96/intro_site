<template>
    <div class="container-fluid login-container">
        <div class="login-box">
            <div class="login-logo">
                <b>Admin</b>
            </div>
        
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">{{ $trans('app.sign_as_admin') }}</p>

                    <form method="post">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" :placeholder="$trans('app.email')" v-model="form_data.email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" :placeholder="$trans('app.password')" v-model="form_data.password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">{{ $trans('app.login') }}</button>
                            </div>
                        </div>
                    </form>

                    <p class="my-2">
                        <a href="forgot-password.html">{{ $trans('app.forget_pass') }}</a>
                    </p>
                </div>
                
            </div>
        </div>
    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                form_data: {
                    email: '',
                    password: '',
                }
            }
        },
        created () {
            this.setTitle();    /* Call function to set page title */
        },
        methods: {
            /* Set page title */
            setTitle () {
                document.title = this.$trans('app.login');
            },
        },
    }
</script>