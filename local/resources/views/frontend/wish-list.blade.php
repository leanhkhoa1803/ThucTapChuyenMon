@extends('frontend.master')
@section('title','Danh sách sản phẩm yêu thích')
@section('content')
     <!-- Begin Li's Breadcrumb Area -->
     <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="{{ asset('/') }}">Home</a></li>
                    <li class="active">Wishlist</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Li's Breadcrumb Area End Here -->
    <!--Wishlist Area Strat-->
    <div class="wishlist-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="li-product-remove">Xóa</th>
                                        <th class="li-product-thumbnail">Hình ảnh</th>
                                        <th class="cart-product-name">Tên sản phẩm</th>
                                        <th class="li-product-price">Giá tiền</th>
                                        <th class="li-product-stock-status">Trạng thái</th>
                                        <th class="li-product-add-cart">add to cart</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wistlist as $item)
                                    <tr>
                                        <td class="li-product-remove"><a href="{{ asset('cart/deleteWishlist/'.$item->rowId) }}"><i class="fa fa-times"></i></a></td>
                                        <td style="width: 30%" class="li-product-thumbnail"><a href="{{ asset('detailProduct/'.$item->id.'/'.$item->options->slug.'.html') }}">
                                            <img width="40%" height="30%" src="{{ asset('local/upload_Image/'.$item->options->img) }}" alt=""></a></td>
                                        <td class="li-product-name"><a href="{{ asset('detailProduct/'.$item->id.'/'.$item->options->slug.'.html') }}">
                                            {{ $item->name }}</a></td>
                                        <td class="li-product-price"><span class="amount">{{ number_format($item->price,0,',','.') }} VND</span></td>
                                        <td class="li-product-stock-status">
                                            @if ($item->options->status ==1)
                                            <span style="font-size: 18px" class="in-stock">Còn Hàng</span></td>
                                            @else
                                            <span style="font-size: 18px" class="in-stock">Hết Hàng</span></td>
                                            @endif
                                            
                                        <td class="li-product-add-cart"><a href="{{ asset('cart/add/'.$item->id) }}">add to cart</a></td>
                                    </tr>
                                    @endforeach
                                   
                                    
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Wishlist Area End-->
@endsection