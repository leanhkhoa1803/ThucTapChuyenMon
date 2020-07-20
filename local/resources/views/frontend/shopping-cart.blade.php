
@extends('frontend.master')
@section('title','Giỏ hàng')
@section('content')
<script type="text/javascript">
    function updateCart(qty,rowId){
        $.get(
            '{{ asset('cart/update') }}',
            {
                qty:qty,rowId:rowId
            },
            function(){
                location.reload();
            }
        );
    }
</script>
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Shopping Cart Area Strat-->
<div class="Shopping-cart-area pt-60 pb-60">
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
                                    <th class="li-product-quantity">Số lương</th>
                                    <th class="li-product-subtotal">Tổng tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (Cart::count()==0)
                                <div style="text-align: center">
                                    <h3 style="color: red">Giỏ hàng trống !</h3>
                                </div>
                                @else
                                @foreach ($cart_item as $item)
                                <tr>
                                    <td class="li-product-remove"><a href="{{ asset('cart/delete/'.$item->rowId) }}"><i class="fa fa-times"></i></a></td>
                                    <td class="li-product-thumbnail">
                                        <a href="{{ asset('detailProduct/'.$item->id.'/'.$item->options->slug.'.html') }}">
                                            <img width="50%" height="30%" src="{{ asset('local/upload_Image/'.$item->options->img) }}" alt="Li's Product Image"></a></td>
                                    <td class="li-product-name"><a href="{{ asset('detailProduct/'.$item->id.'/'.$item->options->slug.'.html') }}">{{ $item->name }}</a></td>
                                    <td class="li-product-price"><span class="amount">{{ number_format($item->price,0,',','.') }}đ</span></td>
                                    <td class="quantity">
                                        <label>Số lượng</label>
                                        <div style="display: inline-block;width: 50%">
                                            <input class="form-control" type="number" value="{{ $item->qty }}" 
                                            onchange="updateCart(this.value,'{{ $item->rowId }}')">
                                            
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">{{ number_format($item->price*$item->qty,0,',','.') }}VND</span></td>
                                </tr>
                                @endforeach
                                @endif
                                
                            </tbody>
                            
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                               
                                <div class="coupon2" style="width: 180px">
                                    
                                    <a style="text-align: center;background: black;color: white" class="btn btn-block" type="" onclick="reload();">Update cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Subtotal <span>{{ $total }}</span></li>
                                    <li>Total <span>{{ $total }}</span></li>
                                </ul>
                                <a href="{{ asset('cart/checkout') }}">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                    {{--  @if (Cart::count()==0)
                        <div style="text-align: center">
                            <h3 style="color: red">Giỏ hàng trống !</h3>
                        </div>
                    @endif
                    @if (Cart::count() !=0)
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Subtotal <span>{{ $total }}</span></li>
                                    <li>Total <span>{{ $total }}</span></li>
                                </ul>
                                <a href="{{ asset('cart/checkout') }}">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                    @endif  --}}
                </form>
            </div>
        </div>
    </div>
</div>
<!--Shopping Cart Area End-->
@endsection