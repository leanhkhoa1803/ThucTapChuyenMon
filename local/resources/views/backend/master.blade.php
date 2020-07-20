<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="{{ asset('public/layout/backend') }}/">
<title>@yield('title')</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script type="text/javascript" src="../../editor/ckeditor/ckeditor.js"></script>
<script src="js/lumino.glyphs.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{ asset('admin/home') }}">Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> 
							{{ Auth::user()->email }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ asset('logout') }}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li class="active"><a href="{{ asset('admin/home') }}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
			<li><a href="{{ asset('admin/product') }}"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Sản phẩm</a></li>
			<li><a href="{{ asset('admin/category') }}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Danh mục</a></li>
			<li role="presentation" class="divider"></li>
		</ul>
		
    </div><!--/.sidebar-->
    <!-- Main-->
    @yield('main')
    <script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	{{--  @yield('js')  --}}
	{{--  @section('js')  --}}
	<div class="modal fade" id="modal-file" >
		<div class="modal-dialog" style="width: 85%">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
					<h4>Ảnh chi tiết</h4>
				</div>
				<div class="modal-body">
					<iframe src="{{ url('local/filemanager') }}/dialog.php?akey=5851071036&field_id=img_list" frameborder="0"
					style="width: 100%;height: 500px;border: 0;overflow-y: auto"></iframe>
				</div>
			</div>
		</div>
	</div>
	<script>
		$('#modal-file').on('hide.bs.modal',function(){
			var _imgs = $('input#img_list').val();
			var img_list = $.parseJSON(_imgs);	
			var _html = '';
			for (var index = 0; index < img_list.length; index++) {
		
				var img = img_list[index].replace("localhost:8080/upload_Image/","localhost:8080/ShopMobile/local/upload_Image/");
				_html+='<div class="col-md-3 thumbnail">';
				_html+='<img src="'+img+'" alt="">';
				_html+='</div>';
				
			}
			$('#image_show_list').html(_html);
			
		});

	</script>

		
{{--  @endsection  --}}
	<script>
		
		$('#calendar').datepicker({
		});
	  
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){          
				$(this).find('em:first').toggleClass("glyphicon-minus");      
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);
	  
		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
		// Chang Image add product
		function changeImg(input){
			//Nếu như đã tồn tại thuộc tính file, đồng nghĩa người dùng đã chọn file mới
			if(input.files && input.files[0]){
				var reader = new FileReader();
				//Sự kiện file đã được load vào website
				reader.onload = function(e){
					//Thay đổi đường dẫn ảnh
					$('#avatar').attr('src',e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$(document).ready(function() {
			$('#avatar').click(function(){
				$('#img').click();
			});
		});
	   </script>
	   
</body>

</html>