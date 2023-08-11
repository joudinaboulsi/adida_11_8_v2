@extends('layouts.app')

@section('title',
    __('home.meta'))

@section('description',__('home.desc'))
    

@section('content')

    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-6 swiper-nav-1" data-loop="true">
        <div class="swiper-wrapper text-sm-left">
            <div class="swiper-slide" data-slide-bg="/images/slide-1.png">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="swiper-box">
                            <h5 class="swiper-title-3" data-caption-animate="fadeInRight" data-caption-delay="200">{{__('home.slide1')}}</h5>
                            <h2 class="swiper-title-1 mob-title1" data-caption-animate="fadeInLeft"
                                data-caption-delay="100">{{__('home.title1')}}</h2>
                            <h3 class="swiper-title-2 mob-title2" data-caption-animate="fadeInRight"
                                data-caption-delay="200">{{__('home.title2')}}</h3>
                            <div class="button-wrap" data-caption-animate="fadeInUp" data-caption-delay="300">
                                <a class="button button-lg button-shadow-2 button-primary button-zakaria"
                                    href="{{ route('products_path') }}">{{__('home.link')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-slide-bg="/images/slide-2.jpg">
                <div class="swiper-slide-caption section-md">
                    <div class="container">
                        <div class="swiper-box">
                            <h5 class="swiper-title-3" data-caption-animate="fadeInRight" data-caption-delay="200">{{__('home.slide2')}}</h5>
                            <h2 class="swiper-title-1 mob-title1" data-caption-animate="fadeInLeft"
                                data-caption-delay="100">{{__('home.title3')}}</h2>
                            <h3 class="swiper-title-2 mob-title2" data-caption-animate="fadeInRight"
                                data-caption-delay="200">{{__('home.title4')}}<br>{{__('home.title5')}}</h3>
                            <div class="button-wrap" data-caption-animate="fadeInUp" data-caption-delay="300">
                                <a class="button button-lg button-shadow-2 button-primary button-zakaria"
                                    href="{{ route('products_path') }}">{{__('home.link')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </section>

    <section class="section bg-default">
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-style-13" data-items="1" data-sm-items="2" data-lg-items="2" data-xxl-items="2"
            data-dots="true" data-mouse-drag="false">
            <!-- Product Dawn-->
            <a class="product-dawn product-dawn-bg-1" href="{{ route('products_path') }}">
                <div class="unit unit-spacing-0 align-items-center">
                    <div class="unit-left">
                        <div class="product-dawn-figure"><img src="/images/product-1-234x362.png" alt=""
                                width="500" height="362" /></div>
                    </div>
                    <div class="unit-body">
                        <div class="product-dawn-title">
                            <div class="heading-3 product-dawn-title-big">{{__('home.herbs')}}</div>
                        </div>
                        <div class="button button-sm button-icon-3 product-dawn-button"><span
                                class="mdi mdi-arrow-right"></span></div>
                    </div>
                </div>
            </a>
            <!-- Product Dawn-->
            <a class="product-dawn product-dawn-bg-2" href="{{ route('products_path') }}">
                <div class="unit unit-spacing-0 align-items-center">
                    <div class="unit-left">
                        <div class="product-dawn-figure"><img src="/images/product-2-200x362.png" alt=""
                                width="500" height="362" /></div>
                    </div>
                    <div class="unit-body">
                        <div class="product-dawn-title">
                            <div class="heading-3 product-dawn-title-big">{{__('home.spices')}}</div>
                        </div>
                        <div class="button button-sm button-icon-3 product-dawn-button"><span
                                class="mdi mdi-arrow-right"></span></div>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- Featured Events-->
    <section class="section section-xxl section-bottom-0 section-inset-5 bg-gray-100 text-sm-left bg-image"
        style="background-image: url(/images/bg-image-1.jpg);">
        <div class="container">
            <div class="row justify-content-sm-end">
                <div class="col-sm-9 col-md-8 col-lg-7 col-xl-6">
                    <h2 class="title-style-3 wow fadeInRight"><span class="title-decor-1">{{__('home.why')}}</span> {{__('home.adida')}}</h2>
                    <div class="swiper-container swiper-slider swiper-slider-custom swiper-slider-7 swiper-scrollbar-1"
                        data-autoplay="5000" data-direction="vertical" data-margin="25" data-slides="auto"
                        data-simulate-touch="true" data-mousewheel="true">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="box-icon-kelly block-1">
                                    <div class="unit unit-spacing-lg flex-column flex-sm-row text-center text-sm-left">
                                        <div class="unit-left">
                                            <img src="/images/4.jpg" class="img-fluid">
                                        </div>
                                        <div class="unit-body">
                                            <h4 class="box-icon-kelly-title">{{__('home.Purity')}}</h4>
                                            <p class="box-icon-kelly-text">{{__('home.p')}}</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="box-icon-kelly block-1">
                                    <div class="unit unit-spacing-lg flex-column flex-sm-row text-center text-sm-left">
                                        <div class="unit-left">
                                            <img src="/images/1.jpg" class="img-fluid">
                                        </div>
                                        <div class="unit-body">
                                            <h4 class="box-icon-kelly-title">{{__('home.subtitle')}}</h4>
                                            <p class="box-icon-kelly-text">{{__('home.p1')}}</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="box-icon-kelly block-1">
                                    <div class="unit unit-spacing-lg flex-column flex-sm-row text-center text-sm-left">
                                        <div class="unit-left">
                                            <img src="/images/2.jpg" class="img-fluid">
                                        </div>
                                        <div class="unit-body">
                                            <h4 class="box-icon-kelly-title">{{__('home.subtitle1')}}</h4>
                                            <p class="box-icon-kelly-text">{{__('home.p2')}}</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="box-icon-kelly block-1">
                                    <div class="unit unit-spacing-lg flex-column flex-sm-row text-center text-sm-left">
                                        <div class="unit-left">
                                            <div class="box-icon-kelly-svg">
                                                <img src="/images/3.jpg" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="unit-body">
                                            <h4 class="box-icon-kelly-title">{{__('home.subtitle2')}}</h4>
                                            <p class="box-icon-kelly-text">{{__('home.p3')}}</p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide swiper-slide-last"></div>
                        </div>
                        <!-- Siwper Scrollbar-->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New products-->
    <section class="section section-xxl bg-default">
        <div class="container">
            <h2 class="title-style-3 wow fadeScale">{{__('home.product')}}</h2>
            <div class="row row-30 justify-content-center align-items-center">
                <div class="col-md-9 col-lg-6">
                    <div class="owl-nav-1 owl-nav-2">
                        <div class="owl-style-14">
                            <!-- Owl Carousel-->
                            @if (app()->getLocale() === 'En')
                            <div class="owl-carousel" data-items="1" data-autoplay="true" data-mouse-drag="true"
                                data-navigation-class=".owl-nav-1">
                                @foreach ($crispy as $c)
                                    <!-- Product Terri-->
                                    <article class="product-terri">
                                        @if ($c->image)
                                            <div class="product-figure"><img src="/images/products/{{ $c->image }}"
                                                    alt="{{ $c->name }}" width="350" height="250" /></div>
                                        @else
                                            <div class="product-figure"><img src="{{ asset('/images/default.png') }}"
                                                    alt="{{ $c->name }}" width="250" height="250" /></div>
                                        @endif
                                        <h3 class="product-terri-title">{{ $c->name }}</h3>
                                    </article>
                                @endforeach
                            </div>
                            @elseif (app()->getLocale() === 'Fr')
<div class="owl-carousel" data-items="1" data-autoplay="true" data-mouse-drag="true" data-navigation-class=".owl-nav-1">
    @foreach ($crispy as $c)
    <!-- Product Terri-->
    <article class="product-terri">
        @if ($c->image)
        <div class="product-figure"><img src="/images/products/{{ $c->image }}" alt="{{ $c->name }}" width="350"
                height="250" /></div>
        @else
        <div class="product-figure"><img src="{{ asset('/images/default.png') }}" alt="{{ $c->name }}" width="250"
                height="250" /></div>
        @endif
        <h3 class="product-terri-title">{{ $c->name }}</h3>
    </article>
    @endforeach
</div>
@else
<div class="owl-carousel" data-items="1" data-autoplay="true" data-mouse-drag="true" data-navigation-class=".owl-nav-1">
    @foreach ($crispy as $c)
    <!-- Product Terri-->
    <article class="product-terri">
        @if ($c->image)
        <div class="product-figure"><img src="/images/products/{{ $c->image }}" alt="{{ $c->name_ar }}" width="350"
                height="250" /></div>
        @else
        <div class="product-figure"><img src="{{ asset('/images/default.png') }}" alt="{{ $c->name_ar }}" width="250"
                height="250" /></div>
        @endif
        <h3 class="product-terri-title">{{ $c->name_ar }}</h3>
    </article>
    @endforeach
</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-lg-6">
                    <div class="row row-30 row-md-40">
                @if (app()->getLocale() === 'En')
                        @foreach ($top as $t)
                            <div class="col-sm-6 wow fadeInDown">
                                <!-- Product-->
                                <article class="product product-3">
                                    <div class="product-body">
                                        @if ($t->image)
                                            <div class="product-figure"><img src="/images/products/{{ $t->image }}"
                                                    alt="{{ $t->name }}" width="350" height="250" /></div>
                                        @else
                                            <div class="product-figure"><img src="{{ asset('/images/default.png') }}"
                                                    alt="{{ $t->name }}" width="350" height="250" /></div>
                                        @endif
                                        <h5 class="product-title">{{ $t->name }}</h5>
                                    </div>
                                    <div class="product-button-wrap"></div>
                                </article>
                            </div>
                        @endforeach
                        @elseif(app()->getLocale() === 'Fr')

                        @foreach ($top as $t)
                        <div class="col-sm-6 wow fadeInDown">
                            <!-- Product-->
                            <article class="product product-3">
                                <div class="product-body">
                                    @if ($t->image)
                                    <div class="product-figure"><img src="/images/products/{{ $t->image }}" alt="{{ $t->name_fr }}" width="350"
                                            height="250" /></div>
                                    @else
                                    <div class="product-figure"><img src="{{ asset('/images/default.png') }}" alt="{{ $t->name_fr }}" width="350"
                                            height="250" /></div>
                                    @endif
                                    <h5 class="product-title">{{ $t->name_fr}}</h5>
                                </div>
                                <div class="product-button-wrap"></div>
                            </article>
                        </div>
                        @endforeach
                        @else
                        @foreach ($top as $t)
                        <div class="col-sm-6 wow fadeInDown">
                            <!-- Product-->
                            <article class="product product-3">
                                <div class="product-body">
                                    @if ($t->image)
                                    <div class="product-figure"><img src="/images/products/{{ $t->image }}" alt="{{ $t->name_ar }}" width="350"
                                            height="250" /></div>
                                    @else
                                    <div class="product-figure"><img src="{{ asset('/images/default.png') }}" alt="{{ $t->name_ar }}" width="350"
                                            height="250" /></div>
                                    @endif
                                    <h5 class="product-title">{{ $t->name_ar }}</h5>
                                </div>
                                <div class="product-button-wrap"></div>
                            </article>
                        </div>
                        @endforeach
                @endif
                    </div>
                </div>
            </div>
            <a class="button button-lg button-shadow-2 button-primary button-zakaria wow fadeInUp"
                href="{{ route('products_path') }}">{{__('home.more')}}</a>
        </div>
    </section>

    <!-- Our gallery-->
    <section class="section section-xxl bg-image-1">
        <div class="container">
            <h2 class="title-style-3 wow fadeScale">{{__('home.r')}}</h2>
            <div class="card-columns mt-5">
                <div class="card border-0">
                    <article class="post post-classic">
                        <div class="post-classic-figure"><img src="/images/recipes/crispy-chicken.png"
                                alt="{{__('home.t')}}" width="370" height="239" /></div>
                        <div class="post-classic-content">
                            <h5 class="post-classic-title">{{__('home.t')}}</h5>
                            <p class="post-classic-text">{{__('home.text')}}<br>{{__('home.text1')}}<br>{{__('home.text2')}}<br>{{__('home.text3')}}</p>
                        </div>
                    </article>
                </div>
                <div class="card border-0">
                    <article class="post post-classic">
                        <div class="post-classic-figure"><img src="/images/recipes/biryani.png" alt="{{__('home.t1')}}"
                                width="370" height="239" /></div>
                        <div class="post-classic-content">
                            <h5 class="post-classic-title">{{__('home.t1')}}</h5>
                            <p class="post-classic-text">{{__('home.text4')}}</p>
                        </div>
                    </article>
                </div>
                <div class="card border-0">
                    <article class="post post-classic">
                        <div class="post-classic-figure"><img src="/images/recipes/chineese-with-veggies.png"
                                alt="{{__('home.t2')}}" width="370" height="239" /></div>
                        <div class="post-classic-content">
                            <h5 class="post-classic-title">{{__('home.t2')}}</h5>
                            <p class="post-classic-text">{{__('home.text5')}}</p>
                        </div>
                    </article>
                </div>
            </div>
            <a class="button button-lg button-shadow-2 button-primary button-zakaria wow fadeInUp"
                href="{{ route('recipes_path') }}">{{__('home.more')}}</a>
        </div>
    </section>

    <!-- Our blog-->
    <section class="section section-xxl bg-default">
        <div class="container">
            <h2 class="title-style-3 wow fadeScale">{{__('home.r1')}}</h2>
            <div class="row row-lg row-30">
                <div class="col-sm-6 wow fadeInLeft">
                    <!-- Post Creative-->
                    <article class="post post-lisa block-2">
                        <div class="post-lisa-content">
                            <div class="post-lisa-tag">{{__('home.News')}}</div>
                            <h4 class="post-lisa-title">{{__('home.text6')}}</h4>
                        </div>
                        <div class="post-lisa-figure"><img src="/images/iso-22000.jpg" alt="ISO 22000" width="550"
                                height="247" /></div>
                    </article>
                </div>
                <div class="col-sm-6 wow fadeInRight">
                    <!-- Post Creative-->
                    <article class="post post-lisa block-2">
                        <div class="post-lisa-content">
                            <div class="post-lisa-tag">{{__('home.Events')}}</div>
                            <h4 class="post-lisa-title">{{__('home.text7')}}</h4>
                        </div>
                        <div class="post-lisa-figure"><img src="/images/gulf.jpg" alt="Gulfood" width="550"
                                height="247" /></div>
                    </article>
                </div>
            </div>
            <!-- <a class="button button-lg button-shadow-2 button-primary button-zakaria wow fadeInUp" href="{{ route('news_path') }}">View more</a> -->
        </div>
    </section>

@endsection
