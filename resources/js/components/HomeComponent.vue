<template>
    <!-- Main container for all page -->
    <div class="container-fluid p-0">
        <section class="home-slider">
            <div class="uk-section uk-padding-remove-vertical">
                <div class="in-slideshow uk-slideshow" data-uk-slideshow="">
                    <ul class="uk-slideshow-items uk-light">
                        <li tabindex="-1" class="uk-active uk-transition-active list-item">
                            <div class="uk-position-cover">
                                <img src="/intro/public/assets/images/home/slideshow-image-1.jpg" class="uk-cover">
                            </div>
                            <span></span>
                            <div class="uk-container">
                                <div class="uk-grid uk-grid-stack" data-uk-grid="">
                                    <div class="uk-width-3-5@m uk-first-column">
                                        <div class="uk-overlay">
                                            <h1>{{ $trans('app.first_slider_title') }}</h1>
                                            <p class="uk-text-lead uk-visible@m">{{ $trans('app.first_slider_desc') }}</p>
                                            <a href="#" class="uk-button uk-button-primary uk-border-rounded uk-visible@m slider-btn"><i class="fas fa-scroll uk-margin-small-right"></i>{{ $trans('app.slider_btn') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li tabindex="-1" class="list-item">
                            <div class="uk-position-cover">
                                <img src="/intro/public/assets/images/home/slideshow-image-2.jpg" class="uk-cover">
                            </div>
                            <span></span>
                            <div class="uk-container">
                                <div class="uk-grid uk-grid-stack" data-uk-grid="">
                                    <div class="uk-width-3-5@m uk-first-column">
                                        <div class="uk-overlay">
                                            <h1>{{ $trans('app.second_slider_title') }}</h1>
                                            <p class="uk-text-lead uk-visible@m">{{ $trans('app.second_slider_desc') }}</p>
                                            <a href="#" class="uk-button uk-button-primary uk-border-rounded uk-visible@m slider-btn"><i class="fas fa-scroll uk-margin-small-right"></i>{{ $trans('app.slider_btn') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li tabindex="-1" class="list-item">
                            <div class="uk-position-cover">
                                <img src="/intro/public/assets/images/home/slideshow-image-3.jpg" class="uk-cover">
                            </div>
                            <span></span>
                            <div class="uk-container">
                                <div class="uk-grid uk-grid-stack" data-uk-grid="">
                                    <div class="uk-width-3-5@m uk-first-column">
                                        <div class="uk-overlay">
                                            <h1>{{ $trans('app.third_slider_title') }}</h1>
                                            <p class="uk-text-lead uk-visible@m">{{ $trans('app.third_slider_desc') }}</p>
                                            <a href="#" class="uk-button uk-button-primary uk-border-rounded uk-visible@m slider-btn"><i class="fas fa-scroll uk-margin-small-right"></i>{{ $trans('app.slider_btn') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- <div class="uk-container uk-light">
                        <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-center"><li uk-slideshow-item="0" class=""><a href=""></a></li><li uk-slideshow-item="1" class="uk-active"><a href=""></a></li><li uk-slideshow-item="2" class=""><a href=""></a></li></ul>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- End slider section -->

        <!-- Start statistics -->
        <section class="statistics">
            <div class="container stat-container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 stat-col">
                        <div class="stat-content">
                            <div class="stat-icon">
                                <img :src="statisticsImg_1" alt="statistics-icon-1" width="50" height="50">
                            </div>
                            <div class="stat-text">
                                <p class="stat-text-h"> {{ $trans('app.stat_img1_desc_1') }} <br> {{ $trans('app.stat_img1_desc_2') }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 stat-col stat-sec-col">
                        <div class="stat-content">
                            <div class="stat-icon">
                                <img :src="statisticsImg_2" alt="statistics-icon-1" width="50" height="50">
                            </div>
                            <div class="stat-text">
                                <p class="stat-text-h"> {{ $trans('app.stat_img2_desc_1') }} <br> {{ $trans('app.stat_img2_desc_2') }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 stat-col stat-third-col">
                        <div class="stat-content">
                            <div class="stat-icon">
                                <img :src="statisticsImg_3" alt="statistics-icon-1" width="50" height="50">
                            </div>
                            <div class="stat-text">
                                <p class="stat-text-h"> {{ $trans('app.stat_img3_desc_1') }} <br> {{ $trans('app.stat_img3_desc_2') }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 stat-col">
                        <div class="stat-content">
                            <div class="stat-icon">
                                <img :src="statisticsImg_4" alt="statistics-icon-1" width="50" height="50">
                            </div>
                            <div class="stat-text">
                                <p class="stat-text-h"> {{ $trans('app.stat_img4_desc_1') }} <br> {{ $trans('app.stat_img4_desc_2') }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End statistics -->

    </div>
</template>

<script>
    export default {
        data() {
            return {
                sliderImg_1: '/intro/public/assets/images/home/slideshow-image-1.jpg',
                sliderImg_2: '/intro/public/assets/images/home/slideshow-image-2.jpg',
                sliderImg_3: '/intro/public/assets/images/home/slideshow-image-3.jpg',
                statisticsImg_1 : '/intro/public/assets/images/home/icon-1.png',
                statisticsImg_2 : '/intro/public/assets/images/home/icon-2.png',
                statisticsImg_3 : '/intro/public/assets/images/home/icon-3.png',
                statisticsImg_4 : '/intro/public/assets/images/home/icon-4.png',
            }
        },
        created () {
            this.setTitle();    /* Call function to set page title */
        },
        methods: {
            /* Set page title */
            setTitle () {
                document.title = this.$trans('app.home');
            },
        },
    }
</script>
