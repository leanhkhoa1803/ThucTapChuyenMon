@extends('backend.master')
@section('title','Chỉnh sửa sản phẩm')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Sản phẩm</h1>
		</div>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			
			<div class="panel panel-primary">
				<div class="panel-heading">Sửa sản phẩm</div>
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data">
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group" >
									<label>Tên sản phẩm</label>
									<input required type="text" name="name" class="form-control" 
									value="{{ $product->prod_name }}">
								</div>
								<div class="form-group" >
									<label>Giá sản phẩm</label>
									<input required type="number" name="price" class="form-control"
									value="{{ $product->prod_price }}">
								</div>
								<div class="form-group" >
									<label>Ảnh sản phẩm</label>
									<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
									<img id="avatar" class="thumbnail" width="300px"
									 src="{{ asset('local/upload_Image/'.$product->prod_img) }}">
								</div>
								<div class="form-group" >
									
									<label>Ảnh chi tiết 
										<a href="#modal-file" data-toggle="modal" class="btn btn-default">Select</a></label>
									<input required type="hidden" name="img_list" class="" id="img_list">
									<div class="row" id="image_show_list">
										<div class="row">
											<hr>
											@foreach ($pro_img as $img)
													<?php
										
										$images = json_decode($img->image);
										//dd($images);
											?>
											@endforeach
											@if (is_array($images))
												@foreach ($images as $item)
												<div class="col-md-4">
													@php
														$arr = str_replace('localhost:8080/upload_Image/',
														'localhost:8080/ShopMobile/local/upload_Image/',$item);
													@endphp
													<img src="{{ $arr }}" alt="" width="100%">
												</div>
												@endforeach
											@endif
										</div>
										
									</div>
									
								</div>
								<div class="form-group" >
									<label>Danh mục</label>
									<select required name="cate" class="form-control">
										@foreach ($cate as $item)
										<option value="{{ $item->cate_id }}" @if ($item->cate_id == $product->prod_cate)
											selected
										@endif>{{ $item->cate_name }}</option>
										@endforeach
										
										
									</select>
								</div>
								<div class="form-group" >
									<label>Bộ nhớ trong</label>
									<select required name="rom" class="form-control">
										@foreach ($prod_detail as $item)
										<option value="{{ $item->prod_rom }}">{{ $item->prod_rom }}GB</option>
										@endforeach
										
										
									</select>
								</div>
								<div class="form-group" >
									<label>Bộ nhớ RAM</label>
									<select required name="ram" class="form-control">
										@foreach ($prod_detail as $item)
										<option value="{{ $item->prod_ram }}">{{ $item->prod_ram }}GB</option>
										@endforeach
										
									</select>
								</div>
								<div class="form-group" >
									<label>Phụ kiện</label>
									<input required type="text" name="accessories" class="form-control"
									value="{{ $product->prod_accessories }}">
								</div>
								<div class="form-group" >
									<label>Bảo hành</label>
									<input required type="text" name="warranty" class="form-control"
									value="{{ $product->prod_warranty }}">
								</div>
								<div class="form-group" >
									<label>Khuyến mãi</label>
									<input required type="text" name="promotion" class="form-control"
									value="{{ $product->prod_promotion }}">
								</div>
								<div class="form-group" >
									<label>Tình trạng</label>
									<input required type="text" name="condition" class="form-control"
									value="{{ $product->prod_condition }}">
								</div>
								<div class="form-group" >
									<label>Màn hình</label>
									<input required type="text" name="screen" class="form-control">
								</div>
								<div class="form-group" >
									<label>Trạng thái</label>
									<select required name="status" class="form-control">
										<option value="1" @if ($product->prod_status==1)
											checked
										@endif>Còn hàng</option>
										<option value="0" @if ($product->prod_status==0)
											checked
										@endif>Hết hàng</option>
									</select>
								</div>
								<div class="form-group" >
									<label>Miêu tả</label>
									<textarea class="ckeditor" required name="description" 
									value="{{ $product->prod_description }}"></textarea>
									<script type="text/javascript">
										var editor = CKEDITOR.replace('description',{
											language:'vi',
											filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
											filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
											filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
											filebrowserFlashUploadUrl: '../../editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
										});
									</script>
								</div>
								
								<div class="form-group" >
									<label>Sản phẩm nổi bật</label><br>
									Có: <input type="radio" name="featured" value="1" @if ($product->prod_featured==1)
									selected
								@endif>
									Không: <input type="radio" checked name="featured" value="0" @if ($product->prod_featured==0)
									selected
								@endif>>
								</div>
								<input type="submit" name="submit" value="Chỉnh Sửa" class="btn btn-primary">
								<a href="{{ asset('admin/product') }}" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
						{{ csrf_field() }}
					</form>
					
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@endsection
	
	