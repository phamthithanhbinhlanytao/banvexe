@extends('client.main')

@section('titleclient','Hãng xe')

@section('mainclient')

		<section class="ftco-section ftco-candidates ftco-candidates-2 bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-8 pr-lg-4">
    				<div class="row">
               @foreach($h as $hx)
		    			<div class="col-md-12">
		    				<div class="team d-md-flex p-4 bg-white">
		        			<img src="{{asset('lib/storage/app/avatar/'.$hx->anh)}}" width="500px">
                 
		        			<div class="text pl-md-4">
		        				<span class="location mb-0">{{$hx->Noiden}}</span>
		        				<h2>{{$hx->tenhang}}</h2>
			        			
			        			<p class="mb-2">{{$hx->Mieuta}}</p>
			        			<span class="seen">hoạt động từ {{$hx->created_at}}</span>
			        			<p><a href="{{asset('Blog/Tintucdon/'.$hx->IDHang)}}" class="btn btn-primary">đến nhà xe</a></p>
		        			</div>
             
		        		</div>
		    			</div>
		    			     @endforeach
		    		</div>
		    		
		    	</div>
		      <div class="col-lg-3 sidebar">
            <div class="sidebar-box bg-white p-4 ftco-animate">
              <h3 class="heading-sidebar">Nhập mã số vé</h3>
              <form action="{{asset('search/vedat')}}" class="search-form mb-3" method="get">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input name="result" type="text" class="form-control" placeholder="Search..." autofocus="autofocus">
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