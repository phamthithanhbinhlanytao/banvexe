@extends('admin.master')

@section('title','Quản lý vé đặt')

@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Vé đã đặt</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách vé</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th>IDPay</th>
											<th width="10%">Tên Xe</th>
											<th>Tổng tiền</th>
											<th width="10%">Phương thức</th>
											<th width="10%">Trạng thái</th>
											<th>Ghế đã đặt</th>
											<th>Tên</th>
											<th width="10%">Ngày đi</th>
											<th>Nơi đi</th>
											<th>Nơi đến</th>
											<th>Mã đặt chỗ</th>
											<th>Phone</th>
											<th width="20%">Ghi chú</th>
										</tr>
									</thead>
									<tbody>
										@foreach($ql as $prod)
										<tr>
											<td>{{$prod->IDPay}}</td>
											<td>{{$prod->tenhang}}</td>
											<td>{{number_format($prod->tongtien,0,',','.')}}</td>
											<td>
												{{$prod->Payment}}
											</td>
											<td>@if(($prod->Status)==1)
												Đã Thanh toán
												@else
												Chưa thanh toán
												@endif
											</td>
											<td>
												{{$prod->ghedadat}}
											</td>
											<td>
												{{$prod->name}}
											</td>
											<td>
												{{$prod->ngaydi}}
											</td>
											<td>
												{{$prod->noidi}}
											</td>
											<td>
												{{$prod->noiden}}
											</td>
											<td>
												{{$prod->madatcho}}
											</td>
											<td>
												{{$prod->phone}}
											</td>
											<td>
												{{$prod->ghichu}}
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	@stop