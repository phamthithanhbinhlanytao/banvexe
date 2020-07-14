@extends('admin.master')

@section('title','Danh mục sản phẩm')

@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Thêm danh mục
						</div>
						<div class="panel-body">
							@include('error.note')
								<form method="post">
							<div class="form-group">
								<label>Tên hãng:</label>
    							<input type="text" name="name" class="form-control" placeholder="Tên danh mục...">
							</div>
							<div class="form-group">
								<label>Sl xe:</label>
    							<input type="number" name="slxe" class="form-control" placeholder="Tên danh mục...">
							</div>
							<div class="form-group">
								<label>Nơi đi:</label>
    							<input type="text" name="noidi" class="form-control" placeholder="Tên danh mục...">
							</div>
							<div class="form-group">
								<label>Nơi đến:</label>
    							<input type="text" name="name" class="form-control" placeholder="Tên danh mục...">
							</div>
							<div class="form-group">
								<label>Phone:</label>
    							<input type="text" name="name" class="form-control" placeholder="Tên danh mục...">
							</div>
							<div class="form-group">
								<label>Tên hãng:</label>
    							<input type="text" name="name" class="form-control" placeholder="Tên danh mục...">
							</div>
							<div class="form-group" >
										<label>Miêu tả</label>
										<textarea required name="mieuta" class="ckeditor"></textarea>
										<script type="text/javascript">
											var editor = CKEDITOR.replace('mieuta',{
												language:'vi',
												filebrowserImageBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl: '../../editor/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl: '../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl: '../../editor/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>

									</div>
								<div class="form-group">
								
    							<input type="submit" name="submit" class="form-control btn btn-primary" value="Thêm mới">
							</div>
							{{csrf_field()}}
							</form>
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách danh mục</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Tên Hãng xe</th>
					                  <th style="width:30%">Tùy chọn</th>
					                </tr>
				              	</thead>
				              	
				              	<tbody>
				              		@foreach($hanglist as $hang)
								<tr>
									<td>{{$hang->tenhang}}</td>
									<td>
			                    		<a href="{{asset('admin/hangxe/edit/'.$hang->IDHang)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
			                    		<a href="{{asset('admin/hangxe/delete/'.$hang->IDHang)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
			                  		</td>
			                  	</tr>
			                  	@endforeach
				                </tbody>
				                
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	@stop