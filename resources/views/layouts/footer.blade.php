<!-- Page Footer-->
<footer class="section footer-corporate footer-corporate-2 context-dark footerAr">
    <div class="footer-corporate-body section-lg">
        <div class="container">
            <div class="row row-40 row-md-50 justify-content-xl-between">
                <div class="col-sm-6 col-lg-4 wow fadeInRight">
                    <h5 class="footer-corporate-title">{{__('footer.title')}}</h5>
                    <div class="footer-corporate-decor"></div>
                    <ul class="footer-corporate-info">
                        <li>
                            <div class="unit flex-column flex-sm-row align-items-center">
                                <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                <div class="unit-body"><a
                                        href="https://www.google.com/maps/search/Dawhet+Aramoun+Venicia/@33.7887494,35.4860276,17z/data=!3m1!4b1"
                                        target="_blank">{{__('footer.location')}}</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="unit flex-column flex-sm-row align-items-center">
                                <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                                <div class="unit-body"><a
                                        href="https://www.google.com/maps/place/Adida+spices+%2F+%D8%AA%D9%88%D8%A7%D8%A8%D9%84+%D8%A3%D8%AF%D9%8A%D8%AF%D8%A7,+%D8%B1%D9%82%D9%85+6%D8%8C+%D8%AB%D8%A7%D9%86+6+%D8%A7%D9%83%D8%AA%D9%88%D8%A8%D8%B1%D8%8C+%D8%A7%D9%84%D8%AC%D9%8A%D8%B2%D8%A9%D8%8C%D8%8C,+6th+of+October+City+(2),+Giza+Governorate+12573%E2%80%AD/data=!4m2!3m1!1s0x1458557f997d8011:0x33593e034822ed7f?utm_source=mstt_1&entry=gps&g_ep=CAESCTExLjc5LjMwMRgAINeCAyoAQgJFRw%3D%3D"
                                        target="_blank">{{__('footer.location2')}}</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="unit flex-column flex-sm-row align-items-center">
                                <div class="unit-left"><span class="icon mdi mdi-clock"></span></div>
                                <div class="unit-body">
                                    <ul class="list-schedule">
                                        <li><span>{{__('footer.Weekdays')}}</span><span>{{__('footer.hours')}}</span></li>
                                        <li><span>{{__('footer.sat')}}</span><span>{{__('footer.hours')}}</span></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay=".1s">
                    <h5 class="footer-corporate-title">{{__('footer.title1')}}</h5>
                    <div class="footer-corporate-decor"></div>
                    <ul class="footer-corporate-list d-sm-inline-block d-md-block">
                        <li><a href="{{ route('home_path') }}">{{__('footer.Home')}}</a></li>
                        <li><a href="{{ route('about_path') }}">{{__('footer.About')}}</a></li>
                        <li><a href="{{ route('products_path') }}">{{__('footer.Products')}}</a></li>
                        <li><a href="{{ route('recipes_path') }}">{{__('footer.Recipes')}}</a></li>
                        <li><a href="{{ route('packing_path') }}">{{__('footer.Packing')}}</a></li>
                        <!-- <li><a href="{{ route('news_path') }}">News</a></li> -->
                        <li><a href="{{ route('contact_path') }}">{{__('footer.Contact')}}</a></li>
                        <li><a href="{{ route('order_path') }}">{{__('footer.Order')}}</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 wow fadeInRight" data-wow-delay=".2s">
                    <h5 class="footer-corporate-title">{{__('footer.Get in touch')}}</h5>
                    <div class="footer-corporate-decor"></div>
                    <br>
                    <p>{{__('footer.info')}}</p><br>
                    <a href="tel:+9615803209">{{__('footer.phone1')}}</a><br>
                    <a href="tel:+9613561189">{{__('footer.phone2')}}</a><br>
                    <br>
                    <a href="tel:002001050805053">{{__('footer.phone3')}}</a><br>
                    <a href="tel:002001050805054">{{__('footer.phone4')}}</a><br>
                    <a href="tel:00201010101313">{{__('footer.phone5')}} </a><br>
                    <a href="tel:00201050801010">{{__('footer.phone6')}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-corporate-panel">
        <div class="container">
            <div class="row row-10 row-sm-30 align-items-center justify-content-sm-between">
                <div class="col-sm-auto col-lg-4">
                    <ul class="list-inline list-social-4 list-inline-xs text-left text-right">
                        <li><a class="icon mdi mdi-facebook icon-xxs" href="https://www.facebook.com/Adidaspices" target="_blank"></a></li>
                        <li><a class="icon mdi mdi-instagram icon-xxs" href="https://www.instagram.com/adidaspices" target="_blank"></a></li>
                    </ul>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <p class="rights">
                        <span>&copy;</span>
                        <span class="copyright-year"></span>
                        <span>{{__('footer.by')}} <a href="http://webneoo.com" target="_blank">Webneoo</a></span>.<span> {{__('footer.copyright')}}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
