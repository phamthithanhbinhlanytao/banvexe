@extends('client.main')

@section('titleclient','Quản lý vé xe')

@section('mainclient')
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 pr-lg-4">
						<div class="row">
							@if($tukhoa!=$items)
							@foreach($items as $i)
							<div class="col-md-12 ftco-animate">
								<div class="job-post-item p-4 d-block d-lg-flex align-items-center">
									<div class="one-third mb-4 mb-md-0">
										<div class="job-post-item-header align-items-center">
											<span class="subadge">{{$i->madatcho}}</span>
											<h2 class="mr-3 text-black"><a href="{{asset('Blog/Tintucdon/'.$i->IDHang)}}">{{$i->tenhang}}</a></h2>
											<h3> {{$i->ghedadat}} </h3>
										</div>
										<div class="job-post-item-body d-block d-md-flex">
											<div class="mr-3"><span class="icon-layers"></span> <a href="#">{{$i->noidi}}</a></div>
											<div><span class="icon-my_location"></span> <span>{{$i->noiden}}</span></div>
										</div>
									</div>
									<div class="one-third mb-4 mb-md-0">
										<div class="job-post-item-header align-items-center">
											<span class="subadge">Phương thức thanh toán : {{$i->Payment}}</span>
											@if(($i->Status)==1)
											<h2 class="mr-3 text-black">Trạng Thái : Đã Thanh toán</h2>
											@else
											<h2 class="mr-3 text-black">Chưa Thanh toán</h2>
											@endif
											<p style="color: black;">Ngày đi</p> <input type="date" value="{{$i->ngaydi}}" readonly="readonly">
										</div>
										<div class="job-post-item-body d-block d-md-flex">
											
											<br>
											<div><p style="color: black;">SĐT nhà xe : 0{{$i->Phone}}</p></div>
										</div>
									</div>
								</div>
							</div><!-- end -->
							@endforeach
							@else
							hết
						
							@endif
	
		        </div>
		        
		      </div>
		      <div class="col-lg-3 sidebar">
		        <div class="sidebar-box bg-white p-4 ftco-animate">
		        	<h3 class="heading-sidebar">Nhập mã số vé</h3>
		        	<form action="{{asset('search/vedat')}}" class="search-form mb-3" method="get">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input name="result" type="text" class="form-control" placeholder="Search...">
                </div>
              </form>
		        	
		        </div>


		       
		      </div>
				</div>
			</div>
		</section>

		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-12">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @stop