@extends('frontend.master')
@section('title','Chi tiết sản phẩm')
@section('content')
<!-- Li's Breadcrumb Area End Here -->
<!-- content-wraper start -->
<div class="content-wraper">
    <div class="container">
        <div class="row single-product-area">
            <div class="col-lg-5 col-md-6">
               <!-- Product Details Left -->
                <div class="product-details-left">
                    <div class="product-details-images slider-navigation-1">
                        @foreach ($imgName as $img)
                        <?php
            
                    $images = json_decode($img->image);
            
                ?>
                @endforeach
                @if (is_array($images))
                    @foreach ($images as $item)
                    <div class="sm-image">
                        @php
                            $arr = str_replace('localhost:8080/upload_Image/',
                            'localhost:8080/ShopMobile/local/upload_Image/',$item);
                        @endphp
                       
                       <a class="popup-img venobox vbox-item" href="{{ $arr }}" data-gall="myGallery">
                        <img width="80%" src="{{ $arr }}" alt="product image">
                    </a>
                    </div>
                    @endforeach
                @endif
                        
                        
                    </div>
                    <div class="product-details-thumbs slider-thumbs-1 mt-15">   
                        @foreach ($imgName as $img)
													<?php
										
										$images = json_decode($img->image);
										
											?>
											@endforeach
											@if (is_array($images))
												@foreach ($images as $item)
												<div class="sm-image">
													@php
														$arr = str_replace('localhost:8080/upload_Image/',
														'localhost:8080/ShopMobile/local/upload_Image/',$item);
													@endphp
                                                   
                                                <img src="{{ $arr }}" alt="product image thumb">
												</div>
												@endforeach
											@endif
                       
                    </div>
                </div>
                <!--// Product Details Left -->
            </div>

            <div class="col-lg-7 col-md-6">
                <div class="product-details-view-content pt-60">
                    <div class="product-info">
                        <h2>{{ $prod_detail->prod_name }}</h2>
                        @foreach ($prod_list as $item)
                        @if ($item->cate_id == $prod_detail->prod_cate)
                                
                                <span class="product-details-ref">
                                    {{ $item->cate_name }}
                                </span>
                            @endif
                        
                            @endforeach
                        
                        <div class="rating-box pt-20">
                            <ul class="rating rating-with-review-item">
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                <li class="review-item"><a href="#">Read Review</a></li>
                                <li class="review-item"><a href="#">Write Review</a></li>
                            </ul>
                        </div>
                        <div class="price-box pt-20">
                            <span class="new-price new-price-2">{{ number_format($prod_detail->prod_price,0,',','.') }}đ</span>
                        </div>
                        <div class="product-desc">
                            <p>
                                {!! $prod_detail->prod_description !!}
                                </>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="">
                                    <label class="mt-10">ROM</label>
                                    <select class="nice-select">
                                        @foreach ($product_rom as $item)
                                        <option value="{{ $item->prod_rom }}" title="" selected="selected">{{ $item->prod_rom }}GB</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="">
                                <div class="">
                                    <label class="mt-10">RAM</label>
                                    <select class="nice-select">
                                        @foreach ($product_ram as $item)
                                        <option value="{{ $item->prod_ram }}" title="" selected="selected">{{ $item->prod_ram }}GB</option>
                                        @endforeach
                                       
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single-add-to-cart">
                            <form action="#" class="cart-quantity">
                                <div class="quantity">
                                    <label>Quantity</label>
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" value="1" type="text">
                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                    </div>
                                </div>
                                <a class="add-to-cart" href="{{ asset('cart/add/'.$prod_detail->prod_id) }}">Add to cart</a>
                            </form>
                        </div>
                        <div class="product-additional-info pt-25">
                            <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Add to wishlist</a>
                            <div class="product-social-sharing pt-25">
                                <ul>
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                    <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                    <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="block-reassurance">
                            <ul>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-check-square-o"></i>
                                        </div>
                                        <p>Security policy (edit with Customer reassurance module)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <p>Delivery policy (edit with Customer reassurance module)</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="reassurance-item">
                                        <div class="reassurance-icon">
                                            <i class="fa fa-exchange"></i>
                                        </div>
                                        <p> Return policy (edit with Customer reassurance module)</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- content-wraper end -->
<!-- Begin Product Area -->
<div class="product-area pt-35">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="li-product-tab">
                    <ul class="nav li-product-menu">
                       <li><a class="active" data-toggle="tab" href="#description"><span>Description</span></a></li>
                       <li><a data-toggle="tab" href="#product-details"><span>Product Details</span></a></li>
                       <li><a data-toggle="tab" href="#reviews"><span>Reviews</span></a></li>
                    </ul>               
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
            </div>
        </div>
        <div class="tab-content">
            <div id="description" class="tab-pane active show" role="tabpanel">
                <div class="product-description">
                    {!! $prod_detail->prod_description !!}
                                </>
                </div>
            </div>
            <div id="product-details" class="tab-pane" role="tabpanel">
                <div class="product-details-manufacturer">
                    <a href="#">
                        <img src="{{ asset('local/upload_Image/'.$prod_detail->prod_img) }}" alt="Product Manufacturer Image">
                    </a>
                    {!! $prod_detail->prod_description,
                                                
                        $prod_detail->prod_warranty                
                        
                     !!}
                     <p><span>{{ $prod_detail->prod_name }}</span></p>
                     @foreach ($prod_list as $item)
                        @if ($item->cate_id == $prod_detail->prod_cate)
                                
                                <p><span class="product-details-ref">
                                   Loại : {{ $item->cate_name }}
                                </span></p>
                            @endif
                        
                            @endforeach
                     
                     <p><span>Màn hinh : {{ $prod_detail->prod_screen }}</span></p>
                     <p><span>Rom : {{ $prod_detail->prod_rom }}GB</span></p>
                     <p><span>Ram : {{ $prod_detail->prod_ram }}GB</span></p>
                     <p><span>Phụ kiện : {{ $prod_detail->prod_accessories }}</span></p>
                     <p><span>Trạng thái : @if ($prod_detail->prod_status == 1)
                         Còn hàng
                     @endif</span></p>
                     <p><span>{{ $prod_detail->prod_condition }}</span></p>
                     <p><span>{{ $prod_detail->prod_promotion }}</span></p>
                     
                    </>
                </div>
            </div>
            <div id="reviews" class="tab-pane" role="tabpanel">
                <div class="product-reviews">
                    <div class="product-details-comment-block">
                        
                        @foreach ($comment as $item)
                        <div class="comment-review">
                            <span>Grade</span>
                            <ul class="rating">
                                @php
                                    $rating = (int)$item->com_rating;
                                @endphp
                                @for ($i = 0; $i < $rating; $i++)
                                <li><i class="fa fa-star-o"></i></li>
                                @endfor
                                @for ($i = 0; $i < 5- $rating; $i++)
                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                @endfor
                                
                            </ul>
                        </div>
                        <div class="comment-author-infos pt-5">
                            <span>{{ $item->com_name }}</span>
                            <em>{{ date('d/m/Y H:i',strtotime($item->created_at)) }}</em>
                        </div>
                        <div class="comment-details mt-1">
                            <p>{{ $item->com_content }}</p>
                        </div>
                        @endforeach
                       
                        <div class="review-btn">
                            <a class="review-links" href="#" data-toggle="modal" data-target="#mymodal">Write Your Review!</a>
                        </div>
                        <!-- Begin Quick View | Modal Area -->
                        <div class="modal fade modal-wrapper" id="mymodal" >
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h3 class="review-page-title">Write Your Review</h3>
                                        <div class="modal-inner-area row">
                                            <div class="col-lg-6">
                                               <div class="li-review-product">
                                                   <img src="{{ asset('local/upload_Image/'.$prod_detail->prod_img) }}" width="70%" alt="Li's Product">
                                                   <div class="li-review-product-desc">
                                                       <p class="li-product-name">Tên điện thoại : {{ $prod_detail->prod_name }}</p>
                                                       <p>                                                          
                                                           <p><span>Màn hinh : {{ $prod_detail->prod_screen }}</span></p>
                     <p><span>Rom : {{ $prod_detail->prod_rom }}GB</span></p>
                     <p><span>Ram : {{ $prod_detail->prod_ram }}GB</span></p>
                     <p><span>Phụ kiện : {{ $prod_detail->prod_accessories }}</span></p>
                     <p><span>Phụ kiện : {{ $prod_detail->prod_warranty }}</span></p>
                                                       </p>
                                                   </div>
                                               </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="li-review-content">
                                                    <!-- Begin Feedback Area -->
                                                    <div class="feedback-area">
                                                        <div class="feedback">
                                                            <h3 class="feedback-title">Our Feedback</h3>
                                                            <form method="post">
                                                                <p class="your-opinion">
                                                                    <label>Your Rating</label>
                                                                    <span>
                                                                        <select class="star-rating" name="rating">
                                                                          <option value="1">1</option>
                                                                          <option value="2">2</option>
                                                                          <option value="3">3</option>
                                                                          <option value="4">4</option>
                                                                          <option value="5">5</option>
                                                                        </select>
                                                                    </span>
                                                                </p>
                                                                <p class="feedback-form">
                                                                    <label for="feedback">Your Review</label>
                                                                    <textarea required id="feedback" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                                </p>
                                                                <div class="feedback-input">
                                                                    <p class="feedback-form-author">
                                                                        <label for="author">Name<span class="required">*</span>
                                                                        </label>
                                                                        <input required id="author" name="author" value="" size="30" aria-required="true" type="text">
                                                                    </p>
                                                                    <p class="feedback-form-author feedback-form-email">
                                                                        <label for="email">Email<span class="required">*</span>
                                                                        </label>
                                                                        <input required id="email" name="email" value="" size="30" aria-required="true" type="text">
                                                                        <span class="required"><sub>*</sub> Required fields</span>
                                                                    </p>
                                                                    <div class="feedback-btn pb-15">
                                                                        <button href="#" class="close" data-dismiss="modal" aria-label="Close">Close</button>
                                                                        <button type="submit" class="btn btn-light btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                                {{ csrf_field() }}
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- Feedback Area End Here -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <!-- Quick View | Modal Area End Here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->
<!-- Begin Li's Laptop Product Area -->
<section class="product-area li-laptop-product pt-30 pb-50">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="li-section-title">
                    <h2>
                        <span>Sản phẩm tương tự:</span>
                    </h2>
                </div>
                <div class="row">
                    <div class="product-active owl-carousel">
                        @foreach ($prod_random as $item)
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
                                                @foreach ($prod_list as $cate_id)
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
                                        <h4><a class="product_name" href="{{ asset('detailProduct/'.$item->prod_id.'/'.$item->prod_slug.'.html') }}">{{ $item->prod_name }}</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">{{ number_format($item->prod_price,0,',','.') }}đ</span>
                                        </div>
                                    </div>
                                    <div class="add-actions">
                                        <ul class="add-actions-link">
                                            <li class="add-cart active"><a href="{{ asset('cart/add/'.$item->prod_id) }}">Add to cart</a></li>
                                            <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                            <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
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
@endsection