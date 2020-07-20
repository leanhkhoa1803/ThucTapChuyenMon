@extends('frontend.master')
@section('title','Tìm kiếm sản phẩm')
@section('content')

    <!-- Begin Li's Content Wraper Area -->
    <div class="content-wraper pt-60 pb-60 pt-sm-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-1 order-lg-2">
                    <!-- Begin Li's Banner Area -->
                    <div class="single-banner shop-page-banner">
                        <a href="{{ asset('/') }}">
                            <img src="images/bg-banner/2.jpg" alt="Li's Static Banner">
                        </a>
                    </div>
                    <!-- Li's Banner Area End Here -->
                    <!-- shop-top-bar start -->
                    <div class="shop-top-bar mt-30">
                        <div class="shop-bar-inner">
                            <div class="product-view-mode">
                                <!-- shop-item-filter-list start -->
                                <ul class="nav shop-item-filter-list" role="tablist">
                                    <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                                </ul>
                                <!-- shop-item-filter-list end -->
                            </div>
                            
                        </div>
                        <!-- product-select-box start -->
                        
                        <!-- product-select-box end -->
                    </div>
                    <!-- shop-top-bar end -->
                    <!-- shop-products-wrapper start -->
                    <div class="shop-products-wrapper">
                        <div class="tab-content">
                            <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                <div class="product-area shop-product-area">
                                    <div class="row">
                                        @foreach ($product as $item)
                                        <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
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
                                                                @foreach ($category as $cat)
                                                                    @if ($item->prod_cate == $cat->cate_id)
                                                                        <a href="{{ asset('detailProduct/'.$item->prod_id.'/'.$item->prod_slug.'.html') }}">
                                                                        {{ $cat->cate_name }}
                                                                        </a>
                                                                     @endif
                                                                 @endforeach
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
                                                        <h4><a class="product_name" href="{{ asset('detailProduct/'.$item->prod_id.'/'.$item->prod_slug.'.html') }}">
                                                            {{ $item->prod_name }}</a></h4>
                                                        <div class="price-box">
                                                            <span class="new-price">{{ number_format($item->prod_price,0,',','.') }}đ</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-actions">
                                                        <ul class="add-actions-link">
                                                            <li class="add-cart active"><a href="{{ asset('cart/add/'.$item->prod_id) }}">Add to cart</a></li>
                                                            <li><a href="{{  asset('detailProduct/'.$item->prod_id.'/'.$item->prod_slug.'.html') }}" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            <li><a class="links-details" href="{{  asset('cart/addwishlist/'.$item->prod_id) }}"><i class="fa fa-heart-o"></i></a></li>
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
                            <div id="list-view" class="tab-pane fade product-list-view" role="tabpanel">
                                <div class="row">
                                    <div class="col">
                                        @foreach ($product as $item)
                                        <div class="row product-layout-list">
                                            <div class="col-lg-3 col-md-5 ">
                                                <div class="product-image">
                                                    <a href="{{ asset('detailProduct/'.$item->prod_id.'/'.$item->prod_slug.'.html') }}">
                                                        <img src="{{ asset('local/upload_Image/'.$item->prod_img) }}" alt="Li's Product Image">
                                                    </a>
                                                    <span class="sticker">New</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-7">
                                                <div class="product_desc">
                                                    <div class="product_desc_info">
                                                        <div class="product-review">
                                                            <h5 class="manufacturer">
                                                                @foreach ($category as $cate_id)
                                                                    @if ($item->prod_cate== $cate_id->cate_id)
                                                                        <a href="{{ asset('detailProduct/'.$item->prod_id.'/'.$item->prod_slug.'.html') }}">
                                                                        {{ $cate_id->cate_name }}
                                                                        </a>
                                                                     @endif
                                                                 @endforeach
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
                                                        <h4><a class="product_name" href="{{ asset('detailProduct/'.$item->prod_id.'/'.$item->prod_slug.'.html') }}">
                                                            {{ $item->prod_name }}</a></h4>
                                                        <div class="price-box">
                                                            <span class="new-price">{{ number_format($item->prod_price,0,',','.') }}đ</span>
                                                        </div>
                                                        <p>{!! $item->prod_description,
                                                
                                                            $item->prod_warranty                
                                                            
                                                         !!}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="shop-add-action mb-xs-30">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart"><a href="{{ asset('cart/add/'.$item->prod_id) }}">Add to cart</a></li>
                                                        <li class="wishlist"><a href="{{  asset('cart/addwishlist/'.$item->prod_id) }}"><i class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                                        <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="{{  asset('detailProduct/'.$item->prod_id.'/'.$item->prod_slug.'.html') }}">
                                                            <i class="fa fa-eye"></i>Quick view</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="paginatoin-area">
                                <div class="row">
                                    
                                    <div class="col-lg-6 col-md-6">
                                        {{--  {{ $product->links() }}  --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop-products-wrapper end -->
                </div>
                <div class="col-lg-3 order-2 order-lg-1">
                    <!--sidebar-categores-box start  -->
                    <div class="sidebar-categores-box mt-sm-30 mt-xs-30">
                        <div class="sidebar-title">
                            <h2>SMART PHONE</h2>
                        </div>
                        <!-- category-sub-menu start -->
                        <div class="category-sub-menu">
                            <ul>
                                @foreach ($category as $item)
                                <li><a href="{{ asset('category/'.$item->cate_id.'/'.$item->cate_slug.'.html') }}">{{ $item->cate_name }}</a></li>
                                @endforeach
                                
                            </ul>
                        </div>
                        <!-- category-sub-menu end -->
                    </div>
                    <!--sidebar-categores-box end  -->
                    <!--sidebar-categores-box start  -->
                    <div class="sidebar-categores-box">
                        <div class="sidebar-title">
                            <h2>BỘ LỌC</h2>
                        </div>
                        <!-- btn-clear-all start -->
                        <button class="btn-clear-all mb-sm-30 mb-xs-30" onclick="location.reload()">Clear all</button>
                        <!-- btn-clear-all end -->
                        <!-- filter-sub-area start -->
                        
                        
                        <!-- filter-sub-area end -->
                        
                         <form action="{{ asset('searchPrice/') }}" method="get" >
                            <div class="filter-sub-area">
                                <h5 class="filter-sub-titel">Chọn Mức giá</h5>
                                <div class="categori-checkbox">
                                    
                                        <ul>
                                            <li><input class="btn btn-dark"type="radio" value="<3" name="result">Dưới 3 triệu</li>
                                            <li><input class="btn btn-dark"type="radio" value="3-6" name="result">Từ 3 đến 6 triệu</li>
                                            <li><input class="btn btn-dark"type="radio" value="6-12" name="result">Từ 6 đến 12 triệu</li>
                                            <li><input class="btn btn-dark"type="radio" value=">13" name="result">Trên 13 triệu</li>
                                            
                                        </ul>

                                </div>
                            </div>
                            <div class="filter-sub-area pt-sm-10 pt-xs-10">
                                <h5 class="filter-sub-titel">Bộ nhớ trong</h5>
                                <div class="size-checkbox">
                                    <ul>
                                        @foreach ($product_ram as $item)
                                    <li><input type="radio" name="ram" value="{{ $item->prod_ram }}">{{ $item->prod_ram }}GB</li>
                                    @endforeach
                                    </ul>
                                    
                                    
                                </div>
                            </div> 
                            <div class="filter-sub-area pt-sm-10 pt-xs-10">
                                <h5 class="filter-sub-titel">Bộ nhớ ngoài </h5>
                                <div class="size-checkbox">
                                    <ul>
                                        @foreach ($product_rom as $item)
                                    <li><input type="radio" name="rom" value="{{ $item->prod_rom }}">{{ $item->prod_rom }}GB</li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div> 
                            <button type="submit">submit</button>
                            {{ csrf_field() }}
                         </form>
                       
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Content Wraper Area End Here -->
@endsection