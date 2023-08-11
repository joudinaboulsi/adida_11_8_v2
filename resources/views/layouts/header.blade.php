<!-- Page Header-->
<header class="section page-header page-header-corporate">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
            data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
            data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
            data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
            data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="154px" data-xl-stick-up-offset="182px"
            data-xxl-stick-up-offset="214px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                    <div class="rd-navbar-main-element">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">

                            <!-- RD Navbar Brand-->
                            <div class="rd-navbar-brand">
                                <!--Brand-->
                                <a class="brand" href="/">
                                    <!-- hidden XS -->
                                    <img class="brand-logo-dark d-none d-sm-block" src="images/logo-default.png"
                                        alt="" width="170" height="170" />
                                    <!-- visible XS -->
                                    <img class="brand-logo-dark d-block d-sm-none" src="images/logo.png" alt=""
                                        width="170" height="" />

                                    <img class="brand-logo-light" src="images/logo-inverse.png" alt=""
                                        width="170" height="170" />
                                </a>
                            </div>
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle pull-right"
                                data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        </div>
                       @if(app()->getLocale() === 'En')
                        <!-- hidden XS -->
                        <div class="rd-navbar-collapse d-none d-sm-block">
                            <ul class="contacts-amber">
                                <li><a href="https://www.google.com/maps/search/Dawhet+Aramoun+Venicia/@33.7887494,35.4860276,17z/data=!3m1!4b1"
                                        target="_blank">Beirut Dawhet Aramoun - Venicia Street - Beirut - Lebanon</a>
                                    <br><br>
                                    <a href="https://www.google.com/maps/place/Adida+spices+%2F+%D8%AA%D9%88%D8%A7%D8%A8%D9%84+%D8%A3%D8%AF%D9%8A%D8%AF%D8%A7,+%D8%B1%D9%82%D9%85+6%D8%8C+%D8%AB%D8%A7%D9%86+6+%D8%A7%D9%83%D8%AA%D9%88%D8%A8%D8%B1%D8%8C+%D8%A7%D9%84%D8%AC%D9%8A%D8%B2%D8%A9%D8%8C%D8%8C,+6th+of+October+City+(2),+Giza+Governorate+12573%E2%80%AD/data=!4m2!3m1!1s0x1458557f997d8011:0x33593e034822ed7f?utm_source=mstt_1&entry=gps&g_ep=CAESCTExLjc5LjMwMRgAINeCAyoAQgJFRw%3D%3D"
                                        target="_blank">6th of October - industrial zone - Egypt</a>
                                </li>

                                <li><a href="tel:+9615803209">+961 5 803 209</a><br>

                                    <a href="tel:002001050805053">002001050805053 </a><br>

                                    <p>info [at] adidaspices [dot] com</p>
                                </li>

                            </ul>
                        </div>
                        @elseif(app()->getLocale() === 'Fr')
                        <div class="rd-navbar-collapse d-none d-sm-block">
                            <ul class="contacts-amber">
                                <li><a href="https://www.google.com/maps/search/Dawhet+Aramoun+Venicia/@33.7887494,35.4860276,17z/data=!3m1!4b1"
                                        target="_blank">Beyrouth Dawhet Aramoun - Rue Venicia - Beyrouth - Liban</a>
                                    <br><br>
                                    <a href="https://www.google.com/maps/place/Adida+spices+%2F+%D8%AA%D9%88%D8%A7%D8%A8%D9%84+%D8%A3%D8%AF%D9%8A%D8%AF%D8%A7,+%D8%B1%D9%82%D9%85+6%D8%8C+%D8%AB%D8%A7%D9%86+6+%D8%A7%D9%83%D8%AA%D9%88%D8%A8%D8%B1%D8%8C+%D8%A7%D9%84%D8%AC%D9%8A%D8%B2%D8%A9%D8%8C%D8%8C,+6th+of+October+City+(2),+Giza+Governorate+12573%E2%80%AD/data=!4m2!3m1!1s0x1458557f997d8011:0x33593e034822ed7f?utm_source=mstt_1&entry=gps&g_ep=CAESCTExLjc5LjMwMRgAINeCAyoAQgJFRw%3D%3D"
                                        target="_blank">6 octobre - zone industrielle - Egypte</a>
                                </li>
                        
                                <li><a href="tel:+9615803209">+961 5 803 209</a><br>
                        
                                    <a href="tel:002001050805053">002001050805053 </a><br>
                        
                                    <p>info [at] adidaspices [dot] com</p>
                                </li>
                        
                            </ul>
                        </div>
                        @else
                        <div class="rd-navbar-collapse d-none d-sm-block">
                            <ul class="contacts-amber">
                                <li><a href="https://www.google.com/maps/search/Dawhet+Aramoun+Venicia/@33.7887494,35.4860276,17z/data=!3m1!4b1"
                                        target="_blank">بيروت دوحة عرمون - شارع فينيسيا - بيروت - لبنان</a>
                                    <br><br>
                                    <a href="https://www.google.com/maps/place/Adida+spices+%2F+%D8%AA%D9%88%D8%A7%D8%A8%D9%84+%D8%A3%D8%AF%D9%8A%D8%AF%D8%A7,+%D8%B1%D9%82%D9%85+6%D8%8C+%D8%AB%D8%A7%D9%86+6+%D8%A7%D9%83%D8%AA%D9%88%D8%A8%D8%B1%D8%8C+%D8%A7%D9%84%D8%AC%D9%8A%D8%B2%D8%A9%D8%8C%D8%8C,+6th+of+October+City+(2),+Giza+Governorate+12573%E2%80%AD/data=!4m2!3m1!1s0x1458557f997d8011:0x33593e034822ed7f?utm_source=mstt_1&entry=gps&g_ep=CAESCTExLjc5LjMwMRgAINeCAyoAQgJFRw%3D%3D"
                                        target="_blank">السادس من اكتوبر - المنطقة الصناعية - مصر</a>
                                </li>
                        
                                <li><a href="tel:+9615803209"> +٩٦١ ٥ ٨٠٣ ٢٠٩</a><br>
                        
                                    <a href="tel:002001050805053">٠٠٢٠٠١٠٥٠٨٠٥٠٥٣ </a><br>
                        
                                    <p>info [at] adidaspices [dot] com</p>
                                </li>
                        
                            </ul>
                        </div>
                       @endif
                    </div>
                  @if(app()->getLocale() === 'En')
                    <div class="rd-navbar-nav-wrap">
                        <ul class="rd-navbar-nav">
                            <li class="rd-nav-item {{ Route::currentRouteName() == 'home_path' ? 'active' : '' }}">
                                <a class="rd-nav-link" href="{{ route('home_path') }}">Home</a>
                            </li>
                            <li class="rd-nav-item {{ Route::currentRouteName() == 'about_path' ? 'active' : '' }}">
                                <a class="rd-nav-link" href="{{ route('about_path') }}">About</a>
                            </li>
                            <li class="rd-nav-item {{ Route::currentRouteName() == 'products_path' ? 'active' : '' }}">
                                <a class="rd-nav-link" href="{{ route('products_path') }}">Products</a>
                            </li>
                            <li class="rd-nav-item {{ Route::currentRouteName() == 'recipes_path' ? 'active' : '' }}">
                                <a class="rd-nav-link" href="{{ route('recipes_path') }}">Recipes</a>
                            </li>
                            <li class="rd-nav-item {{ Route::currentRouteName() == 'packing_path' ? 'active' : '' }}">
                                <a class="rd-nav-link" href="{{ route('packing_path') }}">Packing</a>
                            </li>
                            <!-- <li class="rd-nav-item {{ Route::currentRouteName() == 'news_path' ? 'active' : '' }}">
                                <a class="rd-nav-link" href="{{ route('news_path') }}">News</a>
                            </li> -->
                            <li class="rd-nav-item {{ Route::currentRouteName() == 'contact_path' ? 'active' : '' }}">
                                <a class="rd-nav-link" href="{{ route('contact_path') }}">Contact</a>
                            </li>
                            <li class="rd-nav-item {{ Route::currentRouteName() == 'order_path' ? 'active' : '' }}">
                                <a class="button button-primary button-xs" href="{{ route('order_path') }}">Order</a>
                            </li>
                            <li class="rd-nav-item">
                            
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ app()->getLocale() }}
                                </a>
                            
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="lang/En">English</a>
                                    <a class="dropdown-item" href="lang/Fr">Francais</a>
                                    <a class="dropdown-item" href="lang/Ar">Arabic</a>
                            
                                </div>
                            </li>
                        </ul>
                    </div>
                 
                @elseif (app()->getLocale() === 'Fr')
                  <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                        <li class="rd-nav-item {{ Route::currentRouteName() == 'home_path' ? 'active' : '' }}">
                            <a class="rd-nav-link" href="{{ route('home_path') }}">Page d'accueil</a>
                        </li>
                        <li class="rd-nav-item {{ Route::currentRouteName() == 'about_path' ? 'active' : '' }}">
                            <a class="rd-nav-link" href="{{ route('about_path') }}">À propos</a>
                        </li>
                        <li class="rd-nav-item {{ Route::currentRouteName() == 'products_path' ? 'active' : '' }}">
                            <a class="rd-nav-link" href="{{ route('products_path') }}">Produits</a>
                        </li>
                        <li class="rd-nav-item {{ Route::currentRouteName() == 'recipes_path' ? 'active' : '' }}">
                            <a class="rd-nav-link" href="{{ route('recipes_path') }}">Recettes</a>
                        </li>
                        <li class="rd-nav-item {{ Route::currentRouteName() == 'packing_path' ? 'active' : '' }}">
                            <a class="rd-nav-link" href="{{ route('packing_path') }}">Emballage</a>
                        </li>
                        <!-- <li class="rd-nav-item {{ Route::currentRouteName() == 'news_path' ? 'active' : '' }}">
                                                <a class="rd-nav-link" href="{{ route('news_path') }}">News</a>
                                            </li> -->
                        <li class="rd-nav-item {{ Route::currentRouteName() == 'contact_path' ? 'active' : '' }}">
                            <a class="rd-nav-link" href="{{ route('contact_path') }}">Contact</a>
                        </li>
                        <li class="rd-nav-item {{ Route::currentRouteName() == 'order_path' ? 'active' : '' }}">
                            <a class="button button-primary button-xs" href="{{ route('order_path') }}">Commande</a>
                        </li>
                        <li class="rd-nav-item">
                
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ app()->getLocale() }}
                            </a>
                
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="lang/En">English</a>
                                <a class="dropdown-item" href="lang/Fr">Francais</a>
                                <a class="dropdown-item" href="lang/Ar">Arabic</a>
                
                            </div>
                        </li>
                    </ul>
                </div>
                @else
                <div class="rd-navbar-nav-wrap">
                    <ul class="rd-navbar-nav">
                        <li class="rd-nav-item {{ Route::currentRouteName() == 'home_path' ? 'active' : '' }}">
                            <a class="rd-nav-link" href="{{ route('home_path') }}">الصفحة الرئيسية</a>
                        </li>
                        <li class="rd-nav-item {{ Route::currentRouteName() == 'about_path' ? 'active' : '' }}">
                            <a class="rd-nav-link" href="{{ route('about_path') }}">معلومات عنا</a>
                        </li>
                        <li class="rd-nav-item {{ Route::currentRouteName() == 'products_path' ? 'active' : '' }}">
                            <a class="rd-nav-link" href="{{ route('products_path') }}">منتجات</a>
                        </li>
                        <li class="rd-nav-item {{ Route::currentRouteName() == 'recipes_path' ? 'active' : '' }}">
                            <a class="rd-nav-link" href="{{ route('recipes_path') }}">الوصفات </a>
                        </li>
                        <li class="rd-nav-item {{ Route::currentRouteName() == 'packing_path' ? 'active' : '' }}">
                            <a class="rd-nav-link" href="{{ route('packing_path') }}">التعبئة</a>
                        </li>
                        <!-- <li class="rd-nav-item {{ Route::currentRouteName() == 'news_path' ? 'active' : '' }}">
                                                <a class="rd-nav-link" href="{{ route('news_path') }}">News</a>
                                            </li> -->
                        <li class="rd-nav-item {{ Route::currentRouteName() == 'contact_path' ? 'active' : '' }}">
                            <a class="rd-nav-link" href="{{ route('contact_path') }}">اتصل بنا</a>
                        </li>
                        <li class="rd-nav-item {{ Route::currentRouteName() == 'order_path' ? 'active' : '' }}">
                            <a class="button button-primary button-xs" href="{{ route('order_path') }}">اطلب</a>
                        </li>
                        <li class="rd-nav-item">
                
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ app()->getLocale() }}
                            </a>
                
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="lang/En">English</a>
                                <a class="dropdown-item" href="lang/Fr">Francais</a>
                                <a class="dropdown-item" href="lang/Ar">Arabic</a>
                
                            </div>
                        </li>
                    </ul>
                </div>
                  @endif
                </div>
            </div>
        </nav>
    </div>
</header>
