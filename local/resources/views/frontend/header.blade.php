<header>
    <!-- Begin Header Top Area -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <!-- Begin Header Top Left Area -->
                <div class="col-lg-3 col-md-4">
                    <div class="header-top-left">
                        <ul class="phone-wrap">
                            <li><span>Telephone Enquiry:</span><a href="{{ asset('/') }}">035.2939.272</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Header Top Left Area End Here -->
                <!-- Begin Header Top Right Area -->
                <div class="col-lg-9 col-md-8">
                    <div class="header-top-right">
                        <ul class="ht-menu">
                            <!-- Begin Setting Area -->
                            <li>
                                <div class="ht-setting-trigger"><span>Setting</span></div>
                                <div class="setting ht-setting">
                                    <ul class="ht-setting-list">
                                        <li><a href="{{ asset('login') }}">My Account</a></li>
                                        <li><a href="{{ asset('cart/checkout') }}">Checkout</a></li>
                                        <li><a href="{{ asset('logout') }}">Sign In</a></li>
                                    </ul>
                                </div>
                            </li>
                           
                            <!-- Language Area End Here -->
                        </ul>
                    </div>
                </div>
                <!-- Header Top Right Area End Here -->
            </div>
        </div>
    </div>
    <!-- Header Top Area End Here -->
    <!-- Begin Header Middle Area -->
    <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
        <div class="container">
            <div class="row">
                <!-- Begin Header Logo Area -->
                <div class="col-lg-3">
                    <div class="logo pb-sm-30 pb-xs-30">
                        <a href="{{ asset('/') }}">
                            <img src="images/menu/logo/1.jpg" alt="">
                        </a>
                    </div>
                </div>

                <!-- Header Logo Area End Here -->
                <!-- Begin Header Middle Right Area -->
                <div class="col-lg-9">
                    <!-- Begin Header Middle Searchbox Area -->
                    <form style="min-width: 580px" action="{{ asset('search/') }}" class="hm-searchbox" method="get">
                        
                        <input type="text" placeholder="Enter your search key ..." name="result">
                        <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <!-- Header Middle Searchbox Area End Here -->
                    <!-- Begin Header Middle Right Area -->
                    <div class="header-middle-right">
                        <ul class="hm-menu">
                            <!-- Begin Header Middle Wishlist Area -->
                            <li class="hm-wishlist">
                                <a href="{{ asset('cart/showWishlist') }}">
                                    <span class="cart-item-count wishlist-item-count">
                                        {{ Cart::instance('wishlist')->count() }}</span>
                                    <i class="fa fa-heart-o"></i>
                                </a>
                            </li>
                            <!-- Header Middle Wishlist Area End Here -->
                            <!-- Begin Header Mini Cart Area -->
                            <li class="hm-minicart">
                                <div class="hm-minicart-trigger">
                                    <span class="item-icon"></span>
                                    <span class="item-text">{{ Cart::instance('cart')->total() }}
                                        <span class="cart-item-count">{{ Cart::instance('cart')->count() }}</span>
                                    </span>
                                </div>
                                <span></span>
                                <div class="minicart">
                                    <ul class="minicart-product-list">
                                        @php
                                            $cart = Cart::instance('cart')->content();
                                            $subtotal = Cart::instance('cart')->subtotal();
                                            
                                        @endphp
                                        @foreach ($cart as $item)
                                        <li>
                                            <a href="single-product.html" class="minicart-product-image">
                                                <img src="{{ asset('local/upload_Image/'.$item->options->img) }}" alt="cart products">
                                            </a>
                                            <div class="minicart-product-details">
                                                <h6><a href="single-product.html">{{ $item->name }} ({{ $item->qty }})</a></h6>
                                                <span>{{  $subtotal }} VND</span>
                                            </div>
                                            <a class="close" href="{{ asset('cart/delete/'.$item->rowId) }}">
                                                <i class="fa fa-close"></i>
                                            </a>
                                        </li>
                                        @endforeach
                                        
                                        
                                    </ul>
                                    <p class="minicart-total">Tổng tiền: <span>{{ Cart::instance('cart')->total() }} VND</span></p>
                                    <div class="minicart-button">
                                        <a href="{{ asset('cart/show') }}" class="li-button li-button-dark li-button-fullwidth li-button-sm">
                                            <span>View Full Cart</span>
                                        </a>
                                        <a href="{{ asset('cart/checkout') }}" class="li-button li-button-fullwidth li-button-sm">
                                            <span>Checkout</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- Header Mini Cart Area End Here -->
                        </ul>
                    </div>
                    <!-- Header Middle Right Area End Here -->
                </div>
                <!-- Header Middle Right Area End Here -->
            </div>
        </div>
    </div>
    <!-- Header Middle Area End Here -->
    <!-- Begin Header Bottom Area -->
    <div class="header-bottom header-sticky stick d-none d-lg-block d-xl-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Begin Header Bottom Menu Area -->
                    <div class="hb-menu hb-menu-2">
                        <nav>
                            <ul>
                                <li ><a href="{{ asset('/') }}">Home</a>
                                   
                                </li>
                                
                                <li><a href="{{ asset('about/') }}">About Us</a></li>
                                <li><a href="{{ asset('contact/') }}">Contact</a></li>
                                <!-- Begin Header Bottom Menu Information Area -->
                                <li class="hb-info f-right p-0 d-sm-none d-lg-block">
                                    <span>Tư vấn mua hàng : 035.2939.272</span>
                                </li>
                                <!-- Header Bottom Menu Information Area End Here -->
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Bottom Menu Area End Here -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Bottom Area End Here -->
    <!-- Begin Mobile Menu Area -->
    <div class="mobile-menu-area d-lg-none d-xl-none col-12">
        <div class="container"> 
            <div class="row">
                <div class="mobile-menu">
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Area End Here -->
</header>