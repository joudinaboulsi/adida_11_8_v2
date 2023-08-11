@extends('layouts.app')

@section('title', __('contact.meta'))

@section('description', __('contact.desc'))

@section('content')

@if ($message = Session::get('success'))
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Notice</h4>
            </div>
            <div class="modal-body">
                <p>{{ $message }}</p>
            </div>
        </div>
    </div>
</div>
@endif

<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="/images/bg-contact.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
              	<h2 class="breadcrumbs-custom-title">{{__('contact.contact')}}</h2>
              	<h5 class="breadcrumbs-custom-text">{{__('contact.customtext')}} <br>{{__('contact.customtext1')}}</h5>
            </div>
        </div>
    </div>
</section>
<!-- Section About-->

<!-- Get in touch-->
<section class="section section-xl bg-default text-md-left contactS">
    <div class="container">
        <div class="title-classic">
            <h3 class="title-classic-title">{{__('contact.title')}}</h3>
            <p class="title-classic-subtitle">{{__('contact.subtitle')}} <br class="d-none d-lg-block">{{__('contact.subtitle1')}}</p>
        </div>
        {!! Form::open(array('route' => 'contact_path', 'id' => 'contact', 'class' => 'rd-form')) !!}
            <input id="check" type="text" name="check"/>
            <div class="row row-20 row-md-30">
                <div class="col-lg-8">
                    <div class="row row-20 row-md-30">
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="fullname" type="text" name="fullname" required/>
                                <label class="form-label" for="fullname">{{__('contact.name')}}</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="email" type="email" name="email" required/>
                                <label class="form-label" for="email">{{__('contact.email')}}</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="phone" type="text" name="phone"/>
                                <label class="form-label" for="phone">{{__('contact.phone')}}</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-wrap">
                                <input class="form-input" id="country" type="text" name="country"/>
                                <label class="form-label" for="country">{{__('contact.country')}}</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-wrap">
                                <select class="form-input" id="sector" name="sector" required>
                                    <option value="Select Sector" disabled selected>{{__('contact.select')}}</option>
                                    <option value="Food Industry">{{__('contact.option')}}</option>
                                    <option value="Food Service (Diet Center, Bakery, Butchery, Canteen, etc..)">{{__('contact.option1')}}</option>
                                    <option value="Caterer">{{__('contact.option2')}}</option>
                                    <option value="Bar/Café/Restaurant">{{__('contact.option3')}}</option>
                                    <option value="Wholesaler/Retailer">{{__('contact.option4')}}</option>
                                    <option value="Distributor/Reseller">{{__('contact.option5')}}</option>
                                    <option value="Private label">{{__('contact.option6')}}</option>
                                    <option value="Other">{{__('contact.option7')}}</option>
                                </select>
                                <label class="form-label" for="sector">{{__('contact.label')}}</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="{{env('NOCAPTCHA_SITEKEY')}}"></div>
                                <input type="hidden" class="hiddenRecaptcha required show-error-msg" name="hiddenRecaptcha" id="hiddenRecaptcha">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-wrap">
                        <label class="form-label" for="message">{{__('contact.message')}}</label>
                        <textarea class="form-input textarea-xl" id="message" name="message" required></textarea>
                    </div>
                </div>
            </div>
            <button class="button button-lg button-primary button-zakaria" type="submit">{{__('contact.button')}}</button>
        {!! Form::close() !!}
    </div>
</section>

<!-- Get in touch-->
<section class="section section-xl bg-gray-4">
    <div class="container">
        <div class="row row-30 justify-content-center">
            <div class="col-sm-6 col-md-4">
              	<h4>{{__('contact.Phones')}}</h4>
              	<ul class="contacts-classic">
            		<li><a href="tel:+9615803209">{{__('contact.phone1')}}</a></li>
            		<li><a href="tel:+9613561189">{{__('contact.phone2')}}</a></li>
                    <br>
                    <li><a href="tel:002001050805053">{{__('contact.phone3')}} </a></li>
                    <li><a href="tel:002001050805054">{{__('contact.phone4')}}</a></li>
                    <li><a href="tel:00201010101313">{{__('contact.phone5')}} </a></li>
                    <li><a href="tel:00201050801010">{{__('contact.phone6')}}</a></li>
              	</ul>
            </div>
            <div class="col-sm-6 col-md-4">
              	<h4>{{__('contact.Address')}}</h4>
              	<div class="contacts-classic">
                    <a href="https://www.google.com/maps/search/Dawhet+Aramoun+Venicia/@33.7887494,35.4860276,17z/data=!3m1!4b1" target="_blank">{{__('contact.location')}}</a>
                    <br><br>
                    <a href="https://www.google.com/maps/place/Adida+spices+%2F+%D8%AA%D9%88%D8%A7%D8%A8%D9%84+%D8%A3%D8%AF%D9%8A%D8%AF%D8%A7,+%D8%B1%D9%82%D9%85+6%D8%8C+%D8%AB%D8%A7%D9%86+6+%D8%A7%D9%83%D8%AA%D9%88%D8%A8%D8%B1%D8%8C+%D8%A7%D9%84%D8%AC%D9%8A%D8%B2%D8%A9%D8%8C%D8%8C,+6th+of+October+City+(2),+Giza+Governorate+12573%E2%80%AD/data=!4m2!3m1!1s0x1458557f997d8011:0x33593e034822ed7f?utm_source=mstt_1&entry=gps&g_ep=CAESCTExLjc5LjMwMRgAINeCAyoAQgJFRw%3D%3D" target="_blank">{{__('contact.location2')}}</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
              	<h4>{{__('contact.E-mails')}}</h4>
              	<ul class="contacts-classic">
              		<li><p>info [at] adidaspices [dot] com</p></li>
              	</ul>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <!-- RD Google Map-->
    <div class="google-map-container" data-key="AIzaSyBBWmuzra9J1f1PyeLLxEdjUy5gHzHQNyc" data-zoom="7" data-center="Shefayim" data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]">
    	<div class="google-map"></div>
      	<ul class="google-map-markers">
            <li data-location="Beirut Dawhet Aramoun - Venicia Street - Beirut - Lebanon" data-description="Beirut Dawhet Aramoun - Venicia Street - Beirut - Lebanon" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
            <li data-location="6th of October - industrial zone - Egypt" data-description="6th of October - industrial zone - Egypt" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
      	</ul>
    </div>
</section>

@endsection