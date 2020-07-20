@extends('frontend.master')
@section('title','Thanh toán')
@section('content')
    
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!--Checkout Area Strat-->
<div class="checkout-area pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="coupon-accordion">
                    <!--Accordion Start-->
                    <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                    <div id="checkout-login" class="coupon-content">
                        <div class="coupon-info">
                            <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus.</p>
                            <form action="">
                                <p class="form-row-first">
                                    <label>Username or email <span class="required">*</span></label>
                                    <input type="text">
                                </p>
                                <p class="form-row-last">
                                    <label>Password  <span class="required">*</span></label>
                                    <input type="text">
                                </p>
                                <p class="form-row">
                                    <input value="Login" type="submit">
                                    <label>
                                        <input type="checkbox">
                                         Remember me 
                                    </label>
                                </p>
                                <p class="lost-password"><a href="{{ asset('cart/checkout') }}">Lost your password?</a></p>
                            </form>
                        </div>
                    </div>
                    <!--Accordion End-->
                    <!--Accordion Start-->
                    <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                    <div id="checkout_coupon" class="coupon-checkout-content">
                        <div class="coupon-info">
                            <form action="">
                                <p class="checkout-coupon">
                                    <input placeholder="Coupon code" type="text">
                                    <input value="Apply Coupon" type="submit">
                                </p>
                            </form>
                        </div>
                    </div>
                    <!--Accordion End-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <form method="post">
                    <div class="checkbox-form">
                        <h3>Billing Details</h3>
                        <div class="row">
                            
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Họ tên <span class="required">*</span></label>
                                    <input placeholder="" type="text" name="name">
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Địa chỉ <span class="required">*</span></label>
                                    <input placeholder="Street address" type="text" name="address">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email <span class="required">*</span></label>
                                    <input placeholder="" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Phone  <span class="required">*</span></label>
                                    <input type="text" name="phone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list create-acc">
                                    <input id="cbox" type="checkbox">
                                    <label>Create an account?</label>
                                </div>
                                <div id="cbox-info" class="checkout-form-list create-account">
                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                    <label>Account password  <span class="required">*</span></label>
                                    <input placeholder="password" type="password">
                                </div>
                            </div>
                            <div class="order-button-payment">
                                <button class="btn btn-danger" type="submit">Xác nhận thanh toán</button>
                                
                            </div>
                        </div>
                        
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
            <div class="col-lg-6 col-12">
                <div class="your-order">
                    <h3>Your order</h3>
                    <div class="your-order-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-product-name">Sản phẩm</th>
                                    <th class="cart-product-total">Giá tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart_item as $item)
                                <tr class="cart_item">
                                    <td class="cart-product-name">{{ $item->name }}
                                        <strong class="product-quantity"> × {{ $item->qty }}</strong></td>
                                    <td class="cart-product-total"><span class="amount">{{ $subtotal }}</span></td>  
                                  </tr>
                                @endforeach
                                
                                
                            </tbody>
                            <tfoot>
                                
                                <tr class="order-total">
                                    <th>Tổng tiền</th>
                                    <td><strong><span class="amount">{{ $total }} VND</span></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!--Checkout Area End-->
@endsection