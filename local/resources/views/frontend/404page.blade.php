@extends('frontend.master')
@section('title','Tìm kiếm rỗng')
@section('content')
<div class="error404-area pt-30 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="error-wrapper text-center ptb-50 pt-xs-20">
                    <div class="error-text">
                        <h1>404</h1>
                        <h2>Opps! PAGE NOT BE FOUND</h2>
                        <ul>
                            <li>Kiểm tra lỗi chính tả của từ khóa đã nhập</li>
                            <li>Thử lại bằng từ khóa khác</li>
                            <li>Thử lại bằng những từ khóa tổng quát hơn</li>
                            <li>Thử lại bằng những từ khóa ngắn gọn hơn</li>
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