<template>
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-light bg-light main-navbar">
            <router-link class="navbar-brand" :to="{name: 'home'}">
                <img class="site-logo" :src="logoPath" alt="">
                <!-- LOGO -->
            </router-link>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse all-lists" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 main-list">
                    <li class="nav-item">
                        <router-link class="nav-link text-white main-nav-link" :to="{name: 'home'}" :class="this.$route.name == 'home' ? 'nav-link-active' : ''">{{ $trans('app.home') }}</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link text-white main-nav-link" :to="{name: 'about'}" :class="this.$route.name == 'about' ? 'nav-link-active' : ''">{{ $trans('app.about') }}</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link text-white main-nav-link" :to="{name: 'services'}" :class="this.$route.name == 'services' ? 'nav-link-active' : ''">{{ $trans('app.services') }}</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link text-white main-nav-link" :to="{name: 'contacts'}" :class="this.$route.name == 'contacts' ? 'nav-link-active' : ''">{{ $trans('app.contacts') }}</router-link>
                    </li>
                </ul>
                <span class="nav-line"></span>
                <ul class="navbar-nav language-list mr-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle language-toggle-dropdown p-2" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>{{ this.$lang.getLocale() == 'ar' ? this.$trans('app.arabic') : this.$trans('app.english') }}</span>
                            <i class="fas fa-globe"></i>
                        </a>
                        <div class="dropdown-menu language-dropdown" aria-labelledby="dropdownId">
                            <a class="dropdown-item" :class="this.$lang.getLocale() == 'ar' ? 'lang-link-active' : ''" @click="changeLang('ar')">{{ $trans('app.arabic') }}</a>
                            <a class="dropdown-item" :class="this.$lang.getLocale() == 'en' ? 'lang-link-active' : ''" @click="changeLang('en')">{{ $trans('app.english') }}</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- <router-view></router-view> -->

    </div>
</template>

<script>
    export default {
        data() {
            return {
                logoPath: './assets/images/general/logo.png',
            }
        },
        methods: {
            changeLang (lang) {
                axios.get('/intro/public/lang/'+lang).then(() => {
                    this.$lang.setLocale = lang;
                    localStorage.setItem('local', lang);
                }).then(() => {
                    window.location.reload()
                });
            },
        },
    }
</script>
