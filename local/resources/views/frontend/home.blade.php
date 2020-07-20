@extends('frontend.master')
@section('title','Trang chủ')
@section('content')


<!-- Begin Slider With Category Menu Area -->
<div class="slider-with-banner">
    <div class="container">
        <div class="row">
            <!-- Begin Category Menu Area -->
            <div class="col-lg-3">
                <!--Category Menu Start-->
                <div class="category-menu category-menu-2">
                    <div class="category-heading">
                        <h2 class="categories-toggle"><span>Danh Mục</span></h2>
                    </div>
                    <div id="cate-toggle" class="category-menu-list">
                        <ul>
                            @foreach ($category as $item)
                            <li class=""><a href="{{ asset('category/'.$item->cate_id.'/'.$item->cate_slug.'.html') }}">{{ $item->cate_name }}</a>
                            
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
                <!--Category Menu End-->
            </div>
            <!-- Category Menu Area End Here -->
            <!-- Begin Slider Area -->
            <div class="col-lg-6 col-md-8">
                <div class="slider-area slider-area-3 pt-sm-30 pt-xs-30 pb-xs-30">
                    <div class="slider-active owl-carousel">
                        <!-- Begin Single Slide Area -->
                        <div class="single-slide align-center-left animation-style-01 bg-7">
                            <div class="slider-progress"></div>
                            <div class="slider-content">
                                <h5>Sale Offer <span>-20% Off</span> This Week</h5>
                                <h2>Chamcham Galaxy S9 | S9+</h2>
                                <h3>Starting at <span>$589.00</span></h3>
                                <div class="default-btn slide-btn">
                                    <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Slide Area End Here -->
                        <!-- Begin Single Slide Area -->
                        <div class="single-slide align-center-left animation-style-02 bg-8">
                            <div class="slider-progress"></div>
                            <div class="slider-content">
                                <h5>Sale Offer <span>Black Friday</span> This Week</h5>
                                <h2>Work Desk Surface Studio 2018</h2>
                                <h3>Starting at <span>$1599.00</span></h3>
                                <div class="default-btn slide-btn">
                                    <a class="links" href="{{ asset('/') }}">Shopping Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Slide Area End Here -->
                        <!-- Begin Single Slide Area -->
                        <div class="single-slide align-center-left animation-style-01 bg-9">
                            <div class="slider-progress"></div>
                            <div class="slider-content">
                                <h5>Sale Offer <span>-10% Off</span> This Week</h5>
                                <h2>Phantom 4 Pro+ Obsidian</h2>
                                <h3>Starting at <span>$809.00</span></h3>
                                <div class="default-btn slide-btn">
                                    <a class="links" href="{{ asset('/') }}">Shopping Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Slide Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Slider Area End Here -->
            <!-- Begin Li Banner Area -->
            <div class="col-lg-3 col-md-4 text-center pt-sm-30">
                <div class="li-banner">
                    <a href="{{ asset('/') }}">
                        <img src="images/banner/3_1.jpg" alt="">
                    </a>
                </div>
                <div class="li-banner mt-15 mt-sm-30 mt-xs-25 mb-xs-5">
                    <a href="{{ asset('/') }}">
                        <img src="images/banner/3_2.jpg" alt="">
                    </a>
                </div>
            </div>
            <!-- Li Banner Area End Here -->
        </div>
    </div>
</div>
<!-- Slider With Category Menu Area End Here -->
<!-- Begin Li's Static Banner Area -->
<div class="li-static-banner pt-20 pt-sm-30">
    <div class="container">
        <div class="row">
            <!-- Begin Single Banner Area -->
            <div class="col-lg-4 col-md-4 text-center">
                <div class="single-banner pb-xs-30">
                    <a href="{{ asset('/') }}">
                        <img src="images/banner/1_3.jpg" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <!-- Single Banner Area End Here -->
            <!-- Begin Single Banner Area -->
            <div class="col-lg-4 col-md-4 text-center">
                <div class="single-banner pb-xs-30">
                    <a href="{{ asset('/') }}">
                        <img src="images/banner/1_4.jpg" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <!-- Single Banner Area End Here -->
            <!-- Begin Single Banner Area -->
            <div class="col-lg-4 col-md-4 text-center">
                <div class="single-banner">
                    <a href="{{ asset('/') }}">
                        <img src="images/banner/1_5.jpg" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <!-- Single Banner Area End Here -->
        </div>
    </div>
</div>
<!-- Li's Static Banner Area End Here -->
<!-- Begin Li's Special Product Area -->
<section class="product-area li-laptop-product Special-product pt-60 pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Điện thoại nổi bật</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="special-product-active owl-carousel">
                        @foreach ($featured as $item)
                        <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="{{ asset('detailProduct/'.$item->prod_id.'/'.$item->prod_slug.'.html') }}">
                                        <img src="{{ asset('local/upload_Image/'.$item->prod_img) }}" alt="">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="{{ asset('detailProduct/'.$item->prod_id.'/'.$item->prod_slug.'.html') }}">{{ $item->cate_name }}</a>
                                            </h5>
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h4><a class="product_name" href="{{ asset('detailProduct/'.$item->prod_id.'/'.$item->prod_slug.'.html') }}">{{ $item->prod_name }}</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">{{ number_format($item->prod_price,0,',','.') }}đ</span>
                                        </div>
                                        <div class="countersection">
                                            <div class="li-countdown"></div>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-cart active"><a href="{{ asset('cart/add/'.$item->prod_id) }}">Add to cart</a></li>
                                            <li><a class="links-details" href="{{ asset('cart/addwishlist/'.$item->prod_id) }}"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a href="{{ asset('detailProduct/'.$item->prod_id.'/'.$item->prod_slug.'.html') }}" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
<!-- Li's Special Product Area End Here -->
<!-- Begin Li's Laptop Product Area -->
<section class="product-area li-laptop-product pt-60 pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Điện thoại Mới</span>
                    </h2>
                    
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        @foreach ($prod_list as $item)
                        <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="{{ asset('detailProduct/'.$item->prod_id.'/'.$item->prod_slug.'.html') }}">
                                        <img src="{{ asset('local/upload_Image/'.$item->prod_img) }}" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="shop-left-sidebar.html">{{ $item->cate_name }}</a>
                                            </h5>
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h4><a class="product_name" href="{{ asset('detailProduct/'.$item->prod_id.'/'.$item->prod_slug.'.html') }}">{{ $item->prod_name }}</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">{{ number_format($item->prod_price,0,',','.') }}đ</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-cart active"><a href="{{ asset('cart/add/'.$item->prod_id) }}">Add to cart</a></li>
                                            <li><a class="links-details" href="{{ asset('cart/addwishlist/'.$item->prod_id) }} "><i class="fa fa-heart-o"></i></a></li>
                                            <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="{{ asset('detailProduct/'.$item->prod_id.'/'.$item->prod_slug.'.html') }}"><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
<!-- Li's Laptop Product Area End Here -->
<!-- Begin Li's TV & Audio Product Area -->
<section class="product-area li-laptop-product li-tv-audio-product pb-45">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Điện thoại dung lượng khủng</span>
                    </h2>
                    
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        @foreach ($rom as $item)
                        <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="{{ asset('detailProduct/'.$item->prod_id.'/'.$item->prod_slug.'.html') }}">
                                        <img src="{{ asset('local/upload_Image/'.$item->prod_img) }}" alt="Li's Product Image">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="shop-left-sidebar.html">{{ $item->cate_name }}</a>
                                            </h5>
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h4><a class="product_name" href="{{ asset('detailProduct/'.$item->prod_id.'/'.$item->prod_slug.'.html') }}">{{ $item->prod_name }}</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">{{ number_format($item->prod_price,0,',','.') }}đ</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-cart active"><a href="{{ asset('cart/add/'.$item->prod_id) }}">Add to cart</a></li>
                                            <li><a class="links-details" href="{{ asset('cart/addwishlist/'.$item->prod_id) }}"><i class="fa fa-heart-o"></i></a></li>
                                            <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="{{ asset('detailProduct/'.$item->prod_id.'/'.$item->prod_slug.'.html') }} "><i class="fa fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product-wrap end -->
                        </div>
                        @endforeach
                      
                    </div>
                </div>
            </div>
            <!-- Li's Section Area End Here -->
        </div>
    </div>
</section>
<!-- Li's TV & Audio Product Area End Here -->
<!-- Begin Li's Static Banner Area -->
<div class="li-static-banner li-static-banner-3 text-center">
    <div class="container">
        <div class="row">
            <!-- Begin Single Banner Area -->
            <div class="col-lg-6 col-md-6">
                <div class="single-banner pb-xs-30">
                    <a href="{{ asset('/') }}">
                        <img src="images/banner/2_3.jpg" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <!-- Single Banner Area End Here -->
            <!-- Begin Single Banner Area -->
            <div class="col-lg-6 col-md-6">
                <div class="single-banner">
                    <a href="{{ asset('/') }}">
                        <img src="images/banner/2_4.jpg" alt="Li's Static Banner">
                    </a>
                </div>
            </div>
            <!-- Single Banner Area End Here -->
        </div>
    </div>
</div>
<!-- Li's Static Banner Area End Here -->

<!-- Li's Trending Product Area End Here -->
@endsection