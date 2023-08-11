@extends('layouts.app')

@section('title', __('order.meta'))

@section('description', __('order.desc'))

@section('content')

<section class="breadcrumbs-custom">
    <div class="parallax-container" data-parallax-img="/images/bg-order.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
                <h2 class="breadcrumbs-custom-title">{{__('order.title')}}</h2>
                <h5 class="breadcrumbs-custom-text"><span class="link-primary">{{__('order.custom')}}</span> {{__('order.custom1')}} <br>{{__('order.custom2')}}</h5>
            </div>
        </div>
    </div>
</section>
<!-- Section About-->

<!-- Get in touch-->
<section class="section section-xl bg-default text-md-left">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="text-center order-title">
                    <h4>{{__('order.title1')}}</h4>
                </div>
            </div>
        </div>
        {!! Form::open(array('route' => 'place_order_path', 'id' => 'order_form', 'class' => 'rd-form')) !!}
        <!-- Bootstrap tabs-->
        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
            <!-- Nav tabs-->
            <div class="nav-tabs-wrap">
                <ul class="nav nav-tabs">
                    <li class="nav-item" role="presentation"><a id="st1" class="nav-link active" href="#tabs-1-1"
                            data-toggle="tab"><b>1.</b> {{__('order.Products')}}</a></li>
                    <li class="nav-item" role="presentation"><a id="st2" class="nav-link" href=""
                            data-toggle="tab"><b>2.</b> {{__('order.tab')}}</a></li>
                    <li class="nav-item" role="presentation"><a id="st3" class="nav-link" href="#tabs-1-3"
                            data-toggle="tab"><b>3.</b> {{__('order.tab3')}}</a></li>
                </ul>
            </div>
            <!-- Tab panes-->
            <div class="tab-content">
                <div class="tab-pane text-center fade show active" id="tabs-1-1">
                    <h4>{{__('order.title2')}}</h4>
                    <hr class="mb-3">
                    @if(app()->getLocale()==='En')
                    <table class="table table-striped table-bordered text-left  display" id="example" cellspacing="0"
                        width="100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>{{__('order.Type')}}</th>
                                <th>{{__('order.Name')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                       
                       
                            @foreach($products as $p)
                            <tr>
                                <td>{{ $p->product_id }}</td>
                                <th>
                                    @if($p->category == 1)
                                    Spices
                                    @elseif($p->category == 2)
                                    Spices Blends
                                    @elseif($p->category == 3)
                                    Herbs
                                    @elseif($p->category == 4)
                                    Desserts
                                    @elseif($p->category == 5)
                                    Flavors
                                    @endif
                                </th>
                                <td class="text-left">
                                    @if($p->image)<img src="/images/products/{{$p->image}}" alt="{{ $p->name }}"
                                        width="150" height="150" />@endif
                                    &nbsp;
                                    {{ $p->name }}
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                        </table>

                        @elseif(app()->getLocale()==='Fr')
                       <table class="table table-striped table-bordered text-left  display" id="example" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>{{__('order.Type')}}</th>
                                    <th>{{__('order.Name')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $p)
                            <tr>
                                <td>{{ $p->product_id }}</td>
                                <th>
                                    @if($p->category == 1)
                                    Épices
                                    @elseif($p->category == 2)
                                    Mélanges d'épices
                                    @elseif($p->category == 3)
                                   Herbes
                                    @elseif($p->category == 4)
                                   Desserts
                                    @elseif($p->category == 5)
                                    Les saveurs
                                    @endif
                                </th>
                                <td class="text-left">
                                    @if($p->image)<img src="/images/products/{{$p->image}}" alt="{{ $p->name_fr }}" width="150"
                                        height="150" />@endif
                                    &nbsp;
                                    {{ $p->name_fr }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                       </table>

                        @else
                       <table class="table table-striped table-bordered text-right  display" id="example" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>{{__('order.Type')}}</th>
                                    <th>{{__('order.Name')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $p)
                            <tr>
                                <td>{{ $p->product_id }}</td>
                                <th>
                                    @if($p->category == 1)
                                   بهارات
                                    @elseif($p->category == 2)
                                   خلطات البهارات
                                    @elseif($p->category == 3)
                                    أعشاب
                                    @elseif($p->category == 4)
                                  حلويات
                                    @elseif($p->category == 5)
                                   النكهات
                                    @endif
                                </th>
                                <td class="text-right">
                                    @if($p->image)<img src="/images/products/{{$p->image}}" alt="{{ $p->name_ar }}" width="150"
                                        height="150" />@endif
                                    &nbsp;
                                    {{ $p->name_ar }}
                                </td>
                            </tr>
                            @endforeach
                       </tbody>
                        </table>
                        @endif
                    
                    <div class="text-center mt-3 prod-select">
                        <a id="msform1" class="button button-primary continue">{{__('order.Continue')}}</a>
                    </div>
                </div>
                <div class="tab-pane text-center fade" id="tabs-1-2">
                    <h4>{{__('order.tab')}}</h4>
                    <div class="cart-inline-body" id="quantities_block">

                    </div>
                    <div class="text-center mt-3">
                        <a id="msform2" class="button button-primary continue">{{__('order.Continue')}}</a>
                    </div>
                </div>
                <div class="tab-pane text-center fade" id="tabs-1-3">
                    <h4>{{__('order.tab3')}}</h4>
                    <hr>
                    <div class="row row-20 row-md-30">
                        <div class="col-lg-8">
                            <div class="row row-20 row-md-30">
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-full-name-2" type="text" name="fullname"
                                            data-constraints="@Required" required />
                                        <label class="form-label" for="contact-full-name-2">{{__('order.Full Name')}}</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-email-2" type="email" name="email"
                                            data-constraints="@Email @Required" required />
                                        <label class="form-label" for="contact-email-2">{{__('order.E-mail')}}</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-phone-2" type="text" name="phone"
                                            data-constraints="@Numeric" required />
                                        <label class="form-label" for="contact-phone-2">{{__('order.Phone')}}</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-country-2" type="text" name="country"
                                            data-constraints="@Required" required />
                                        <label class="form-label" for="contact-country-2">{{__('order.Country')}}</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-wrap text-left">
                                        <select class="form-input" id="contact-sector-2" name="sector"
                                            data-constraints="@Required" required>
                                            <option value="Select Sector" disabled selected>{{__('order.Select')}}</option>
                                            <option value="Food Industry">{{__('order.option')}}>
                                            <option
                                                value="Food Service (Diet Center, Bakery, Butchery, Canteen, etc..)">
                                               {{__('order.option1')}}</option>
                                            <option value="Caterer">{{__('order.option2')}}</option>
                                            <option value="Bar/Café/Restaurant">{{__('order.option3')}}</option>
                                            <option value="Wholesaler/Retailer">{{__('order.option4')}}</option>
                                            <option value="Distributor/Reseller">{{__('order.option5')}}</option>
                                            <option value="Private label">{{__('order.option6')}}</option>
                                            <option value="Other">{{__('order.option7')}}</option>
                                        </select>
                                        <label class="form-label" for="contact-sector-2">{{__('order.Select')}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-message-2">{{__('order.Message')}}</label>
                                <textarea class="form-input textarea-xl" id="contact-message-2" name="message"
                                    data-constraints="@Required" required></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="{{env('NOCAPTCHA_SITEKEY')}}"></div>
                                <input type="hidden" class="hiddenRecaptcha required show-error-msg"
                                    name="hiddenRecaptcha" id="hiddenRecaptcha">
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <button class="button button-primary" type="submit">{{__('order.Order')}}</button>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
    <div id="push"></div>
</section>

@endsection