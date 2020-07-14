@extends('client.main')

@section('titleclient','Vé tìm thấy')

@section('mainclient')

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 pr-lg-4">
				
					<div class="row">
						
						
						@foreach($items as $i)
						<form action="{{asset('Datcho/'.$i->IDHang)}}" method="get">
						<div class="col-md-12 ftco-animate">
							<p style="color: red;font-family: Time New Romans;"> Ngày Đi <input type="date" value="{{$ngay}}" readonly="readonly" name="datenow"></p>
							<div class="job-post-item p-4 d-block d-lg-flex align-items-center">

								<div class="one-third mb-4 mb-md-0">
									<div class="job-post-item-header align-items-center">
										<h3 class="subadge">Nhà xe {{$i->tenhang}}</h3>
										<br>
										<img class="mr-3 text-black" src="{{asset('lib/storage/app/avatar/'.$i->anh)}}" height="150px"><input type="button" onclick="alert('Phải hủy 12h trước khi xe chạy')" value="chính sách hủy vé">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;

										<br>
										<br>
										<h5>Thời gian dự kiến</h5>
										<h5> 18h - 4h</h5>

									</div>
									<div class="job-post-item-body d-block d-md-flex">
										<div class="mr-3"><input type="submit" class="btn btn-primary py-1" value="Đặt chỗ"></div>
										<div><span></span></div>
									</div>
								</div>


								<div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
									<div>
										

									</div>



									

								</div>
							</div>

						</div><!-- end -->
							</form>
						@endforeach
					
						<div class="col-md-12 ftco-animate">
							<div class="job-post-item p-4 d-block d-lg-flex align-items-center">
								<div class="one-third mb-4 mb-md-0">

									<p align="text-center">Không tìm thấy Chuyến đi nào như vậy</p>
								</div>

								<div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
									<div>

									
								</div>
								
							</div>
						</div>
					</div><!-- end -->

				</div>
			
		   <!--    <div class="col-lg-3 sidebar">
		        <div class="sidebar-box bg-white p-4 ftco-animate">
		        	<h3 class="heading-sidebar">Browse Category</h3>
		        	<form action="#" class="search-form mb-3">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Search...">
                </div>
              </form>
		        	<form action="#" class="browse-form">
							  <label for="option-job-1"><input type="checkbox" id="option-job-1" name="vehicle" value="" checked> Website &amp; Software</label><br>
							  <label for="option-job-2"><input type="checkbox" id="option-job-2" name="vehicle" value=""> Education &amp; Training</label><br>
							  <label for="option-job-3"><input type="checkbox" id="option-job-3" name="vehicle" value=""> Graphics Design</label><br>
							  <label for="option-job-4"><input type="checkbox" id="option-job-4" name="vehicle" value=""> Accounting &amp; Finance</label><br>
							  <label for="option-job-5"><input type="checkbox" id="option-job-5" name="vehicle" value=""> Restaurant &amp; Food</label><br>
							  <label for="option-job-6"><input type="checkbox" id="option-job-6" name="vehicle" value=""> Health &amp; Hospital</label><br>
							</form>
		        </div>

		        <div class="sidebar-box bg-white p-4 ftco-animate">
		        	<h3 class="heading-sidebar">Select Location</h3>
		        	<form action="#" class="search-form mb-3">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Search...">
                </div>
              </form>
		        	<form action="#" class="browse-form">
							  <label for="option-location-1"><input type="checkbox" id="option-location-1" name="vehicle" value="" checked> Sydney, Australia</label><br>
							  <label for="option-location-2"><input type="checkbox" id="option-location-2" name="vehicle" value=""> New York, United States</label><br>
							  <label for="option-location-3"><input type="checkbox" id="option-location-3" name="vehicle" value=""> Tokyo, Japan</label><br>
							  <label for="option-location-4"><input type="checkbox" id="option-location-4" name="vehicle" value=""> Manila, Philippines</label><br>
							  <label for="option-location-5"><input type="checkbox" id="option-location-5" name="vehicle" value=""> Seoul, South Korea</label><br>
							  <label for="option-location-6"><input type="checkbox" id="option-location-6" name="vehicle" value=""> Western City, UK</label><br>
							</form>
		        </div>

		        <div class="sidebar-box bg-white p-4 ftco-animate">
		        	<h3 class="heading-sidebar">Job Type</h3>
		        	<form action="#" class="browse-form">
							  <label for="option-job-type-1"><input type="checkbox" id="option-job-type-1" name="vehicle" value="" checked> Partime</label><br>
							  <label for="option-job-type-2"><input type="checkbox" id="option-job-type-2" name="vehicle" value=""> Fulltime</label><br>
							  <label for="option-job-type-3"><input type="checkbox" id="option-job-type-3" name="vehicle" value=""> Intership</label><br>
							  <label for="option-job-type-4"><input type="checkbox" id="option-job-type-4" name="vehicle" value=""> Temporary</label><br>
							  <label for="option-job-type-5"><input type="checkbox" id="option-job-type-5" name="vehicle" value=""> Freelance</label><br>
							  <label for="option-job-type-6"><input type="checkbox" id="option-job-type-6" name="vehicle" value=""> Fixed</label><br>
							</form>
		        </div>
		    </div> -->
		</div>
	</div>
</div>
</section>


@stop