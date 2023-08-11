@extends('layouts.app')

@section('title', __('recipes.meta'))

@section('description',__('recipes.desc'))

@section('content')

<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="/images/bg-recipes.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
              	<h2 class="breadcrumbs-custom-title">{{__('recipes.title')}}</h2>
              	<h5 class="breadcrumbs-custom-text">{{__('recipes.subtitle')}} “{{__('recipes.subtitle1')}}” {{__('recipes.subtitle2')}}</h5>
            </div>
        </div>
    </div>
</section>
<!-- Section About-->

<!-- Grid Gallery-->
<section class="section section-xl bg-default">
    <div class="container">
    	<div class="card-columns">
    		<div class="card border-0">
    			<article class="post post-classic">
    				<div class="post-classic-figure"><img src="/images/recipes/biryani.png" alt="{{__('recipes.title1')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title1')}}</h5>
                        <p class="post-classic-text">
                          {{__('recipes.text1')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/shawarma-chicken.png" alt="{{__('recipes.title2')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title2')}}</h5>
                        <p class="post-classic-text">{{__('recipes.text2')}}</p>
                    </div>
                </article>
            </div>
    		<div class="card border-0">
    			<article class="post post-classic">
    				<div class="post-classic-figure"><img src="/images/recipes/shawarma-meat.png" alt="{{__('recipes.title3')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title3')}}</h5>
                        <p class="post-classic-text">
                       {{__('recipes.text3')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/kafta.png" alt="{{__('recipes.title4')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title4')}}</h5>
                        <p class="post-classic-text">{{__('recipes.text4')}}</p>
                    </div>
                </article>
            </div>
    		<div class="card border-0">
    			<article class="post post-classic">
    				<div class="post-classic-figure"><img src="/images/recipes/ouzi.png" alt="{{__('recipes.title5')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title5')}}</h5>
                        <p class="post-classic-text">
                          {{__('recipes.text5')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/kabsa.png" alt="{{__('recipes.title6')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title6')}}</h5>
                        <p class="post-classic-text">{{__('recipes.text6')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/kibbeh.png" alt="{{__('recipes.title7')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title7')}}</h5>
                        <p class="post-classic-text">{{__('recipes.text7')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/chicken-fajita.png" alt="{{__('recipes.title8')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title8')}}</h5>
                        <p class="post-classic-text">{{__('recipes.text8')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/chicken-burger.png" alt="{{__('recipes.r7')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.r7')}}</h5>
                        <p class="post-classic-text">
                       {{__('recipes.p14')}} <br>{{__('recipes.p15')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/burger-meat.png" alt="{{__('recipes.r9')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.r8')}}</h5>
                        <p class="post-classic-text">{{__('recipes.p16')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/chicken-escalope.png" alt="{{__('recipes.r6')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.r6')}}</h5>
                        <p class="post-classic-text">
          {{__('recipes.p12')}}<br>{{__('recipes.p13')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/white-tawou2.png" alt="{{__('recipes.r5')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.r5')}}</h5>
                        <p class="post-classic-text">
                           {{__('recipes.p11')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/red-tawouk.png" alt="{{__('recipes.r4')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.r4')}}</h5>
                        <p class="post-classic-text">
     {{__('recipes.p10')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/philadelphia.png" alt="{{__('recipes.r3')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.r3')}}</h5>
                        <p class="post-classic-text">
                          {{__('recipes.p9')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/zinger.png" alt="{{__('recipes.r2')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.r2')}}</h5>
                        <p class="post-classic-text">
                          {{__('recipes.p4')}}
                            <br>{{__('recipes.p5')}}
                            <br>{{__('recipes.p6')}}
                            <br>{{__('recipes.p7')}}
                            <br>{{__('recipes.p8')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/crispy-chicken.png" alt="{{__('recipes.r1')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.r1')}}</h5>
                        <p class="post-classic-text">
                        {{__('recipes.p')}}
                         
                         <br>{{__('recipes.p1')}}
                         <br>{{__('recipes.p2')}}
                         <br>{{__('recipes.p3')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/chicken-broasted.png" alt="{{__('recipes.r')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.r')}}</h5>
                        <p class="post-classic-text">{{__('recipes.rtext')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/fransisco.png" alt="{{__('recipes.title21')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title21')}}</h5>
                        <p class="post-classic-text">
                         {{__('recipes.text21')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/argentine.png" alt="{{__('recipes.title20')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title20')}}</h5>
                        <p class="post-classic-text">
                         {{__('recipes.text20')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/cajun.png" alt="{{__('recipes.title19')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title19')}}</h5>
                        <p class="post-classic-text">{{__('recipes.text19')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/mexicana.png" alt="{{__('recipes.title18')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title18')}}</h5>
                        <p class="post-classic-text">{{__('recipes.text18')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/mexican.png" alt="{{__('recipes.title17')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title17')}}</h5>
                        <p class="post-classic-text">{{__('recipes.text17')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/chineese-with-veggies.png" alt="{{__('recipes.title16')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title16')}}</h5>
                        <p class="post-classic-text">{{__('recipes.text16')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/moghrabieh.png" alt="{{__('recipes.title15')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title15')}}</h5>
                        <p class="post-classic-text">{{__('recipes.text15')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/tandoori.png" alt="{{__('recipes.title14')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title14')}}</h5>
                        <p class="post-classic-text">{{__('recipes.text14')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/sayadiyah.png" alt="{{__('recipes.title13')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title13')}}</h5>
                        <p class="post-classic-text">{{__('recipes.text13')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/sahlab.png" alt="{{__('recipes.title12')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title12')}}</h5>
                        <p class="post-classic-text">{{__('recipes.text12')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/kashtalieh.png" alt="{{__('recipes.title11')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title11')}}</h5>
                        <p class="post-classic-text">{{__('recipes.text11')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/meghli.png" alt="{{__('recipes.title10')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title10')}}</h5>
                        <p class="post-classic-text">{{__('recipes.text10')}}</p>
                    </div>
                </article>
            </div>
            <div class="card border-0">
            	<article class="post post-classic">
            		<div class="post-classic-figure"><img src="/images/recipes/mhalabieh.png" alt="{{__('recipes.text9')}}" width="370" height="239"/></div>
                    <div class="post-classic-content">
                        <h5 class="post-classic-title">{{__('recipes.title9')}}</h5>
                        <p class="post-classic-text">{{__('recipes.text9')}} </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

@endsection
