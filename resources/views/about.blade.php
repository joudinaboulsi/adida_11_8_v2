@extends('layouts.app')

@section('title',
    __('about.meta'))

@section('description',
    )

@section('content')

    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="/images/bg-about.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">{{__('about.title')}}</h2>
                    <h5 class="breadcrumbs-custom-text"><span class="link-primary">{{__('about.custom')}}</span> {{__('about.custom1')}} <br>{{__('about.custom2')}}</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- Section About-->

    <section class="section section-xxl bg-default text-md-left">
        <div class="container">
            <div class="row row-40 row-md-60 justify-content-center align-items-xl-center">
                <div class="col-md-11 col-lg-5">
                    <h5 class="title-style-2 wow fadeInRight">{{__('about.title1')}}</h5>
                    <h2 class="title-style-3 wow fadeInRight" data-wow-delay=".2s">{{__('about.weare')}}</h2>
                    <!-- Bootstrap tabs-->
                    <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                        <!-- Nav tabs-->
                        <div class="nav-tabs-wrap">
                            <ul class="nav nav-tabs">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1"
                                        data-toggle="tab">{{__('about.company')}}</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2"
                                        data-toggle="tab">{{__('about.vision')}}</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3"
                                        data-toggle="tab">{{__('about.values')}}</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-4"
                                        data-toggle="tab">{{__('about.strategy')}}</a></li>
                            </ul>
                        </div>
                        <!-- Tab panes-->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-1-1">
                                <p>“{{__('about.adida')}}” {{__('about.text')}}</p>
                                <p>{{__('about.text1')}}</p>
                                <p>{{__('about.text2')}} “{{__('about.bold')}}” {{__('about.isthe')}}
                                    <b>{{__('about.Purity')}}</b>  {{__('about.p')}}
                                </p>
                                <p>{{__('about.text3')}}</p>
                                <p>{{__('about.text4')}}</p>
                                <p>{{__('about.text5')}}</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-2">
                                <p>{{__('about.text6')}}</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-3">
                                <p>{{__('about.text7')}}</p>
                            </div>
                            <div class="tab-pane fade" id="tabs-1-4">
                                <p>{{__('about.p1')}} <b>{{__('about.bold1')}}</b>{{__('about.dot')}}</p>
                                <p>{{__('about.text8')}}</p>
                                <p>“{{__('about.adida')}}” {{__('about.text9')}} <b>{{__('about.text10')}} “{{__('about.text11')}}”</b>.</p>
                                <p>{{__('about.text12')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4 pl-0">
                        <a class="button button-primary button-xs" href="/company-profile.pdf" target="_blank">{{__('about.button')}}</a>
                    </div>
                </div>
                <div class="col-md-11 col-lg-6 col-xl-7">
                    <div class="slick-slider-1 inset-xl-left-35">
                        <!-- Slick Carousel-->
                        <div class="slick-slider carousel-parent slick-nav-1 slick-nav-2" id="carousel-parent"
                            data-items="1" data-autoplay="true" data-slide-effect="true" data-child="#child-carousel"
                            data-for="#child-carousel" data-arrows="true">
                            <div class="item"><img src="/images/about-8-634x373.jpg" alt="" width="634"
                                    height="373" /></div>
                            <div class="item"><img src="/images/about-1-634x373.jpg" alt="" width="634"
                                    height="373" /></div>
                            <div class="item"><img src="/images/about-2-634x373.jpg" alt="" width="634"
                                    height="373" /></div>
                            <div class="item"><img src="/images/about-3-634x373.jpg" alt="" width="634"
                                    height="373" /></div>
                        </div>
                        <div class="slick-slider child-carousel" id="child-carousel" data-items="3" data-sm-items="4"
                            data-md-items="4" data-lg-items="4" data-xl-items="4" data-xxl-items="4"
                            data-for="#carousel-parent">
                            <div class="item"><img src="/images/about-8-143x114.jpg" alt="" width="143"
                                    height="114" /></div>
                            <div class="item"><img src="/images/about-1-143x114.jpg" alt="" width="143"
                                    height="114" /></div>
                            <div class="item"><img src="/images/about-2-143x114.jpg" alt="" width="143"
                                    height="114" /></div>
                            <div class="item"><img src="/images/about-3-143x114.jpg" alt="" width="143"
                                    height="114" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter Modern-->
    <section class="parallax-container" data-parallax-img="/images/parallax-2.jpg" style="background-attachment: fixed;">
        <div class="parallax-content section-xxl context-dark">
            <div class="container">
                <div class="row row-30 justify-content-center">
                    <div class="col-6 col-sm-4">
                        <div class="counter-modern">
                            <h2 class="counter-modern-number"><span class="counter">{{__('about.counter')}}</span></h2>
                            <div class="counter-modern-decor"></div>
                            <h5 class="counter-modern-title">{{__('about.title2')}}</h5>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="counter-modern">
                            <h2 class="counter-modern-number"><span class="counter">158</span></h2>
                            <div class="counter-modern-decor"></div>
                            <h5 class="counter-modern-title">{{__('about.title3')}}</h5>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4">
                        <div class="counter-modern">
                            <h2 class="counter-modern-number"><span class="counter">4760</span></h2>
                            <div class="counter-modern-decor"></div>
                            <h5 class="counter-modern-title">{{__('about.title4')}}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Services-->
    <section class="section section-xl bg-default">
        <div class="container">
            <div class="row row-30 box-ordered">
                <div class="col-sm-6 col-lg-3">
                    <article class="box-icon-modern">
                        <div class="box-icon-modern-header">
                            <div class="box-icon-modern-count box-ordered-item"></div>
                            <div class="box-icon-modern-icon fl-bigmug-line-big104"></div>
                        </div>
                        <h4 class="box-icon-modern-title">{{__('about.title5')}}</h4>
                        <p class="box-icon-modern-text">{{__('about.p2')}}</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <article class="box-icon-modern">
                        <div class="box-icon-modern-header">
                            <div class="box-icon-modern-count box-ordered-item"></div>
                            <div class="box-icon-modern-icon fl-bigmug-line-shopping199"></div>
                        </div>
                        <h4 class="box-icon-modern-title">{{__('about.title6')}}</h4>
                        <p class="box-icon-modern-text">{{__('about.p3')}}</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <article class="box-icon-modern">
                        <div class="box-icon-modern-header">
                            <div class="box-icon-modern-count box-ordered-item"></div>
                            <div class="box-icon-modern-icon fl-bigmug-line-like51"></div>
                        </div>
                        <h4 class="box-icon-modern-title">{{__('about.title7')}} “{{__('about.art')}}”</h4>
                        <p class="box-icon-modern-text">{{__('about.p4')}}</p>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <article class="box-icon-modern">
                        <div class="box-icon-modern-header">
                            <div class="box-icon-modern-count box-ordered-item"></div>
                            <div class="box-icon-modern-icon fl-bigmug-line-giftbox54"></div>
                        </div>
                        <h4 class="box-icon-modern-title">{{__('about.title8')}}</h4>
                        <p class="box-icon-modern-text">{{__('about.p5')}}</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Clients-->
    <section class="section section-lg bg-image-1">
        <div class="container">
            <div class="owl-carousel owl-style-2" data-items="2" data-sm-items="3" data-md-items="4" data-lg-items="4"
                data-margin="30" data-dots="true">
                <a class="clients-classic" href="/images/certificates/iso.jpg" data-lightgallery="item"><img
                        src="/images/certificates/iso.jpg" alt="" width="200" height="283" /></a>
                <a class="clients-classic" href="/images/certificates/boecker-pest.png" data-lightgallery="item"><img
                        src="/images/certificates/boecker-pest.png" alt="" width="200" height="267" /></a>
                <a class="clients-classic" href="/images/certificates/boecker-quality.png" data-lightgallery="item"><img
                        src="/images/certificates/boecker-quality.png" alt="" width="200"
                        height="144" /></a>
                <a class="clients-classic" href="/images/certificates/choueifat.png" data-lightgallery="item"><img
                        src="/images/certificates/choueifat.png" alt="" width="200" height="142" /></a>


                <a class="button button-primary button-xs"
                    href="{{ asset('/images/certificates/Adida Certificates.pdf') }}" target="_blank">Adida
                    Certificates</a>
                <a class="button button-primary button-xs"
                    href="{{ asset('/images/certificates/ADIDA SPICES - FSSC 22000 CERTIFICATE.pdf') }}" target="_blank">
                    FSSC 22000 </a>
                <a class="button button-primary button-xs"
                    href="{{ asset('/images/certificates/ADIDA SPICES - ISO 22000 CERTIFICATE.pdf') }}" target="_blank">
                    ISO 22000</a>

            </div>

        </div>

    </section>

@endsection
