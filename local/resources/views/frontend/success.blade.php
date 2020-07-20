@extends('frontend.master')
@section('title','Mua hàng thành công')
@section('content')
<div class="error404-area pt-30 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="error-wrapper text-center ptb-50 pt-xs-20">
                    <div class="error-text">
                        <h2>Mua hàng thành công !</h2>
                        <h2>Cảm ơn quí khách đã tin tưởng lựa chọn</h2>
                        <ul>
                            <li>Sản phẩm sẽ được giao tới trong 2-3 ngày tới</li>
                            <li>Kiểm tra sản phẩm trước khi nhận</li>
                            <li>Miễn phí đổi trả trong vòng 7 ngày</li>
                            <li>Bảo hành tại tất cả các cơ sở trên toàn quốc</li>
                        </ul>
                    </div>
                    
                    <div class="error-button">
                        <a href="{{ asset('/') }}">Back to home page</a>
                    </>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection