@extends('layouts.app')

@section('title', __('products.meta')  )

@section('description',__('products.desc'))

@section('content')

    <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="/images/bg-products.jpg">
            <div class="breadcrumbs-custom-body parallax-content context-dark">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">{{__('products.title')}}</h2>
                    <h5 class="breadcrumbs-custom-text">{{__('products.t')}} <br>{{__('products.t1')}}</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- Section About-->

    <!-- Section Shop-->
    <section class="section section-xxl bg-default">
        <div class="container-fluid isotope-wrap">
            <div class="isotope-filters">
                <button class="isotope-filters-toggle button button-sm button-icon button-icon-right button-default-outline"
                    data-custom-toggle=".isotope-filters-list" data-custom-toggle-disable-on-blur="true"
                    data-custom-toggle-hide-on-blur="true"><span class="icon mdi mdi-chevron-down"></span>Filter</button>
                <div class="isotope-filters-list-wrap">
                    <ul class="isotope-filters-list">
                        <li><a class="active" href="#" data-isotope-filter="*">{{__('products.All')}}</a></li>
                        <li><a href="#" data-isotope-filter="Type 1">{{__('products.Spices')}}</a></li>
                        <li><a href="#" data-isotope-filter="Type 2">{{__('products.Spices Blends')}}</a></li>
                        <li><a href="#" data-isotope-filter="Type 3">{{__('products.Herbs')}}</a></li>
                        <li><a href="#" data-isotope-filter="Type 4">{{__('products.Desserts')}}</a></li>
                        <li><a href="#" data-isotope-filter="Type 5">{{__('products.Flavors')}}</a></li>
                    </ul>
                </div>
            </div>
            <div class="row isotope" data-lightgallery="group">
                @if(app()->getLocale()==='En')
                @foreach ($products as $p)
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2 col-xl-2 isotope-item p-1 p-sm-auto"
                        data-filter="Type {{ $p->category }}">
                        <!-- Product-->
                        <article class="product">
                            <div class="product-body">
                                @if ($p->image != null)
                                    <div class="product-figure"><img src="/images/products/{{ $p->image }}"
                                            alt="{{ $p->name }}" width="350" height="250" /></div>
                                @else
                                    <div class="product-figure"><img src="{{ asset('/images/default.png') }}"
                                            alt="{{ $p->name }}" width="350" height="250" /></div>
                                @endif
                                <h5 class="product-title">{{ $p->name }}</h5>
                            </div>
                            <div class="product-button-wrap"></div>
                        </article>
                    </div>
                @endforeach
                @elseif(app()->getLocale()==='Fr')
                @foreach ($products as $p)
                <div class="col-4 col-sm-3 col-md-3 col-lg-2 col-xl-2 isotope-item p-1 p-sm-auto" data-filter="Type {{ $p->category }}">
                    <!-- Product-->
                    <article class="product">
                        <div class="product-body">
                            @if ($p->image != null)
                            <div class="product-figure"><img src="/images/products/{{ $p->image }}" alt="{{ $p->name_fr }}" width="350"
                                    height="250" /></div>
                            @else
                            <div class="product-figure"><img src="{{ asset('/images/default.png') }}" alt="{{ $p->name_fr }}" width="350"
                                    height="250" /></div>
                            @endif
                            <h5 class="product-title">{{ $p->name_fr }}</h5>
                        </div>
                        <div class="product-button-wrap"></div>
                    </article>
                </div>
                @endforeach
                @else
                @foreach ($products as $p)
                <div class="col-4 col-sm-3 col-md-3 col-lg-2 col-xl-2 isotope-item p-1 p-sm-auto" data-filter="Type {{ $p->category }}">
                    <!-- Product-->
                    <article class="product">
                        <div class="product-body">
                            @if ($p->image != null)
                            <div class="product-figure"><img src="/images/products/{{ $p->image }}" alt="{{ $p->name_ar }}" width="350"
                                    height="250" /></div>
                            @else
                            <div class="product-figure"><img src="{{ asset('/images/default.png') }}" alt="{{ $p->name_ar }}" width="350"
                                    height="250" /></div>
                            @endif
                            <h5 class="product-title">{{ $p->name_ar }}</h5>
                        </div>
                        <div class="product-button-wrap"></div>
                    </article>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>

@endsection
