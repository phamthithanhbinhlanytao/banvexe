@extends('admin.master')

@section('title','Thêm Sản phẩm')

@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Xe</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Thêm xe</div>
					<div class="panel-body">
						@include('error.note')
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Giá vé</label>
										<input required type="number" name="price" class="form-control" value="260000">
									</div>
									<div class="form-group" >
										<label>Ảnh xe</label>
										<input required id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
									</div>
									<div class="form-group" >
										<label>Nơi đi</label>
										<input required type="text" name="noidi" class="form-control" value="Đà Nẵng">
									</div>
									<div class="form-group" >
										<label>Nơi đến</label>
										<input required type="text" name="noiden" class="form-control" value="Đăk Lăk">
									</div>
									<div class="form-group" >
										<label>Biển số </label>
										<input required type="text" name="bienso" class="form-control" value="47A-123.45">
									</div>
									<div class="form-group" >
										<label>Tên tài xế</label>
										<input required type="text" name="tentaixe" class="form-control" value="Nguyễn văn A">
									</div>
									<div class="form-group" >
										<label>Vị trí ghế</label>
										<input required type="text" name="vitri" class="form-control" value="A1T">
									</div>
									<div class="form-group" >
										<label>Số lượng ghế</label>
										<input required type="text" name="slghe" class="form-control" value="20">
									</div>
									
									<div class="form-group" >
										<label>Hãng xe</label>
										<select required name="hangxe" class="form-control">

											@foreach($catelist as $cate)
											<option value="{{$cate->IDHang}}">{{$cate->tenhang}}</option>
											@endforeach
					                    
										</select>
									</div>
									<div class="form-group" >
										<label>Hàng ghế</label>
										<select required name="hangghe" class="form-control">
											<option value="1">AT</option>
											<option value="2">AD</option>
											<option value="3">BT</option>
											<option value="4">BD</option>
										</select>
									</div>
									<div class="form-group" >
										<label>Thứ tự ghế</label>
										<input required type="text" name="thutughe" class="form-control" value="32">
									</div>
									<div class="form-group" >
										<label>Giờ xuất bến</label>
										<input required type="text" name="gioxuat" class="form-control" value="18h">
									</div>
									<div class="form-group" >
										<label>Giờ dự kiến</label>
										<input required type="text" name="giodukien" class="form-control" value="4h">
									</div>
									<div class="form-group" >
										<label>xe nổi bật</label><br>
										Có: <input type="radio" name="featured" value="1">
										Không: <input type="radio" checked name="featured" value="0">
									</div>
									<div class="form-group" >
										<label>Trạng thái ghế</label><br>
										<select required name="status" class="form-control">
											<option value="1">Trống</option>
											<option value="0">đã đặt</option>
					                    </select>
									</div>
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="#" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

	
	@stop