@extends('layouts.app')

@section('title',__('packing.meta') )

@section('description',__('packing.desc'))

@section('content')

<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="/images/bg-order.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
              	<h2 class="breadcrumbs-custom-title">{{__('packing.title')}}</h2>
                <h5 class="breadcrumbs-custom-text"><span class="link-primary">{{__('packing.custom')}}</span> {{__('packing.custom1')}} <br>{{__('packing.custom2')}}</h5>
            </div>
        </div>
    </div>
</section>
<!-- Section About-->

<!-- Accordions-->
<section class="section section-sm bg-default">
	  <div class="container">
        <div class="title-group packing text-center mt-5">
            <h3 class="font-weight-regular">{{__('packing.regular')}}</h3>
            <p class="text-width-large">{{__('packing.text')}}</p>
        </div>
		    <!-- Bootstrap collapse-->
		    <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
            <div class="row">
              	<div class="col-lg-6">
                  	<!-- Bootstrap card-->
                  	<article class="card card-custom card-corporate">
                        <div class="card-header" role="tab">
                            <div class="card-title">
                                <a class="collapsed" id="accordion1-card-head-lfqjkacy" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-1" aria-controls="accordion1-card-body-1" aria-expanded="false" role="button">{{__('packing.sorting')}} 
                                    <div class="card-arrow">
                                        <div class="icon"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
  	                  	<div class="collapse" id="accordion1-card-body-1" aria-labelledby="accordion1-card-head-lfqjkacy" data-parent="#accordion1" role="tabpanel">
    	                    	<div class="card-body">
    	                      		<p>{{__('packing.tab')}} </p>
    		                      	<ul>
                  									<li>{{__('packing.li')}}</li>
                  									<li>{{__('packing.li1')}}</li>
    		                      	</ul>
    	                    	</div>
  	                  	</div>
                  	</article>
                  	<!-- Bootstrap card-->
                  	<article class="card card-custom card-corporate">
                    		<div class="card-header" role="tab">
                        		<div class="card-title">
                          			<a class="collapsed" id="accordion1-card-head-peyreccp" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-2" aria-controls="accordion1-card-body-2" aria-expanded="false" role="button">{{__('packing.grinding')}}
                            				<div class="card-arrow">
                            					  <div class="icon"></div>
                            				</div>
                          			</a>
                        		</div>
                    		</div>
                    		<div class="collapse" id="accordion1-card-body-2" aria-labelledby="accordion1-card-head-peyreccp" data-parent="#accordion1" role="tabpanel">
                        		<div class="card-body">
                          			<p>{{__('packing.tab1')}} </p>
                        		</div>
                    		</div>
                  	</article>
                  	<!-- Bootstrap card-->
                  	<article class="card card-custom card-corporate card-corporate-2">
                    		<div class="card-header" role="tab">
                        		<div class="card-title">
                          			<a class="collapsed" id="accordion1-card-head-jmpacxeb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-gocqjuvk" aria-controls="accordion1-card-body-gocqjuvk" aria-expanded="false" role="button">{{__('packing.In House-Sterilization')}}
                            				<div class="card-arrow">
                            					  <div class="icon"></div>
                            				</div>
                          			</a>
                        		</div>
                    		</div>
                    		<div class="collapse" id="accordion1-card-body-gocqjuvk" aria-labelledby="accordion1-card-head-jmpacxeb" data-parent="#accordion1" role="tabpanel">
                        		<div class="card-body">
                          			<p>{{__('packing.text1')}} </p>
                          			<p>{{__('packing.text2')}} </p>
                          			<p>{{__('packing.text3')}} </p>
                          			<p>{{__('packing.text4')}}</p>
                        		</div>
                    		</div>
                  	</article>
                </div>
                <div class="col-lg-6">
  	              	<div class="slick-slider-1 inset-xl-left-35">
  	                  	<!-- Slick Carousel-->
  	                  	<div class="slick-slider carousel-parent slick-nav-1 slick-nav-2" id="carousel-parent" data-items="1" data-autoplay="true" data-slide-effect="true" data-child="#child-carousel" data-for="#child-carousel" data-arrows="true">
                        		<div class="item"><img src="images/about-4-634x373.jpg" alt="" width="634" height="373"/></div>
                        		<div class="item"><img src="images/about-5-634x373.jpg" alt="" width="634" height="373"/></div>
                        		<div class="item"><img src="images/about-6-634x373.jpg" alt="" width="634" height="373"/></div>
                        		<div class="item"><img src="images/about-7-634x373.jpg" alt="" width="634" height="373"/></div>
  	                  	</div>
  	                  	<div class="slick-slider child-carousel" id="child-carousel" data-items="3" data-sm-items="4" data-md-items="4" data-lg-items="4" data-xl-items="4" data-xxl-items="4" data-for="#carousel-parent">
                        		<div class="item"><img src="images/about-4-143x114.jpg" alt="" width="143" height="114"/></div>
                      		  <div class="item"><img src="images/about-5-143x114.jpg" alt="" width="143" height="114"/></div>
                        		<div class="item"><img src="images/about-6-143x114.jpg" alt="" width="143" height="114"/></div>
                        		<div class="item"><img src="images/about-7-143x114.jpg" alt="" width="143" height="114"/></div>
  	                  	</div>
  	              	</div>
              	</div>
            </div>
        </div>
    </div>
</section>

<section class="section section-sm section-last" style="background-color: #eceaeb">
    <div class="container-fluid">
        <div class="title-group packing text-center mt-5">
            <h3 class="font-weight-regular">{{__('packing.regular')}}</h3>
            <p class="text-width-large">{{__('packing.offer')}}</p>
        </div>
        <div class="row">
            <div class="col-12">
                <img src="/images/packages.jpg" class="img-fluid">
            </div>
        </div>
    </div>
</section>

@endsection