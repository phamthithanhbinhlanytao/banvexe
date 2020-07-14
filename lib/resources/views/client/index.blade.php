<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Trang chủ</title>
    <base href="{{asset('public/skillhunt')}}/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
  .jsbank_sample_cont {margin: 20px; padding: 20px; text-align: left;}
  .jsbank_sample_tit {font-weight: bold; margin-bottom: 10px; padding: 5px; width: auto; background-color: #c0c0c0; border: 5px solid #a0a0a0; color: black; text-align: center;}
  .jsbank_copy_right {text-decoration: none;}
  .jsbank_link {text-decoration: none; color: #000;}
  pre, .codehighlight {background-color: #EFEFEF; font-size: 13px; width: 98%; border: 1px dashed gray; padding: 5px;}
  </style>
  </head>
  <body>
    <script type="text/javascript" src="datepicker.js"></script> 
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container-fluid px-md-4 ">
        <a class="navbar-brand" href="{{asset('/')}}"><img src="images\logoshop.png" width="100px" height="100px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{asset('/')}}" class="nav-link">Trang chủ</a></li>
            <li class="nav-item"><a href="{{asset('Qlvexe')}}" class="nav-link">Quản lý vé xe</a></li>
            <li class="nav-item"><a href="{{asset('Hangxe')}}" class="nav-link">Hãng xe</a></li>
            <li class="nav-item"><a href="{{asset('Blog/Tintuc')}}" class="nav-link">Tin tức</a></li>
            <li class="nav-item"><a href="{{asset('Lienhe')}}" class="nav-link">Liên hệ</a></li>
            @if(Auth::check())
           

        
                            <a href="{{asset('taikhoan/1')}}" class="nav-item">{{Auth::user()->name}} <span
                                        class="caret"></span></a>
                          
       
            @else
            <li class="nav-item cta mr-md-1"><a href="{{asset('dangnhap')}}" class="nav-link">Đăng nhập</a></li>
            <li class="nav-item cta cta-colored"><a href="{{asset('dangki')}}" class="nav-link">Đăng kí</a></li>
            @endif
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
        <div class="time">
    <script type="text/javascript">
//<![CDATA[
function startclock(){
var curTime=new Date();
var nhours=curTime.getHours();
var nmins=curTime.getMinutes();
var nsecn=curTime.getSeconds();
var nday=curTime.getDay();
var nmonth=curTime.getMonth();
var ntoday=curTime.getDate();
var nyear=curTime.getYear();
var AMorPM=" ";
if (nhours>=12)
AMorPM=" PM ";
else
AMorPM=" AM ";

if (nhours>=13)
nhours-=12;
if (nhours==0)
nhours=12;
if (nsecn<10)
nsecn="0"+nsecn;
if (nmins<10)
nmins="0"+nmins;
if (nday==0)
nday="Ch&#7911; Nh&#7853;t";
if (nday==1)
nday="Th&#7913; Hai";
if (nday==2)
nday="Th&#7913; Ba";
if (nday==3)
nday="Th&#7913; T&#432;";
if (nday==4)
nday="Th&#7913; N&#259;m";
if (nday==5)
nday="Th&#7913; S&#225;u";
if (nday==6)
nday="Th&#7913; B&#7843;y";
nmonth+=1;
if (nyear<=99)
nyear= "19"+nyear;
if ((nyear>99) && (nyear<2000))
nyear+=1900;
var d;
var Str0="";
if (nhours>9) Str0 = "";
else Str0 = "0";
d= document.getElementById("theClock");
d.innerHTML=" <span>" + Str0 + nhours+":"+nmins+":"+nsecn + " " + AMorPM + "</span>" + nday+", " + ntoday +"/" + nmonth +"/"+nyear ;
setTimeout('startclock()',1000);
}
//]]>
</script>

<div id="theClock" align="left">
<script type="text/javascript">startclock();</script>
</div>  </div>
    <div  style="background-image: url(images/bg_1.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-10 d-flex align-items-center ftco-animate">
            <div class="text text-center pt-5 mt-md-5">
              
              <div class="ftco-search my-md-5">
                <div class="row">
                  <div class="col-md-12 nav-link-wrap">
                    <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a  class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" role="tab" aria-controls="v-pills-1" aria-selected="true">Tìm kiếm vé xe</a>

                      

                    </div>
                  </div>
                  <div class="col-md-12 tab-wrap">
                    
                    <div class="tab-content p-4" id="v-pills-tabContent">

                      <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                        <form action="{{asset('Search')}}" class="search-job" method="get">
                          <div class="row no-gutters">
                            <div class="col-md mr-md-2">
                              <div class="form-group">
                                <div class="form-field">
                                  <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <input type="text" placeholder="Nơi đi" name="di" class="form-control" required="required">  
                              
                                     
                                 
                                 
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md mr-md-2">
                              <div class="form-group">
                                <div class="form-field">
                                  <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <input type="text" placeholder="Nơi đến" name="den" class="form-control" required="required">  
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md mr-md-2">
                              <div class="form-group">
                                <div class="form-field">
                                  <link rel="stylesheet" type="text/css" href="datepicker.css" /> 
                                  <p style="color: red;">Chọn ngày đi
                            <!-- id="start_dt" class='datepicker' maxlength="11" placeholder="Chọn ngày đi ->" --> 
                            <input type="date" name="date" required="required" /> 
                            </p>
                                </div>
                              </div>
                            </div>
                            <div class="col-md">
                              <div class="form-group">
                                <div class="form-field">
                                  <button type="submit" class="form-control btn btn-primary" name="Search">Tìm kiếm</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>

                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  

 
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-0">Tin tức hot</h2>
          </div>
        </div>
    	</div>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          @foreach($tt as $t)
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="{{asset('Blog/Tintucdon/'.$t->IDNews)}}" class="block-20" style="background-image: url('{{asset('lib/storage/app/avatar/'.$t->anh)}}');">
              </a>
              <div class="text mt-3">
                <div class="meta mb-2">
                  <div><a href="#">{{$t->created_at}}</a></div>
                  <div><a href="#">{{$t->tenhang}}</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="{{asset('Blog/Tintucdon/'.$t->IDNews)}}">{{$t->title}}</a></h3>
              </div>
            </div>
          </div>
          @endforeach
          
          
        </div>
      </div>
    </section>

    <section class="ftco-section services-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-resume"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Search Millions of Jobs</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-team"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Easy To Manage Jobs</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-career"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Top Careers</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-employees"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Search Expert Candidates</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-9 pr-lg-5">
    				<div class="row justify-content-center pb-3">
    					<div class="col-md-12 heading-section ftco-animate">
    						<span class="subheading">Tin tức mới</span>
    						<h2 class="mb-4">Những hãng xe nổi bật trong tuần</h2>
    					</div>
    				</div>
    				<div class="row">
              @foreach($hang as $hx)
    					<div class="col-md-12 ftco-animate">
    						<div class="job-post-item p-4 d-block d-lg-flex align-items-center">
    							<div class="one-third mb-4 mb-md-0">
    								<div class="job-post-item-header align-items-center">
    									<span class="subadge">Partime</span>
    									<h2 class="mr-3 text-black"><a href="#">{{$hx->tenhang}}</a></h2>
    								</div>
    								<div class="job-post-item-body d-block d-md-flex">
    									<div class="mr-3"><span class="icon-layers"></span> <a href="#">0{{$hx->Phone}}</a></div>
    									<div><span class="icon-my_location"></span> <span>{{$hx->Noiden}}</span></div>
    								</div>
    							</div>

    							<div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
    								<div>
    									<a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
    										<span class="icon-heart"></span>
    									</a>
    								</div>
    								<a href="job-single.html" class="btn btn-primary py-2">Following</a>
    							</div>
    						</div>
    					</div><!-- end -->
       @endforeach
    				</div>
    			</div>
		      <div class="col-lg-3 sidebar">
		        <div class="row justify-content-center pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		            <h2 class="mb-4">Đối tác đồng hành</h2>
		          </div>
		        </div>
            @foreach($hang as $h)
		        <div class="sidebar-box ftco-animate">
		        	<div class="">
			        	<a class="company-wrap"><img src="{{asset('lib/storage/app/avatar/'.$h->anh)}}" class="img-fluid" alt="Colorlib Free Template"></a>
			        	<div class="text p-3">
			        		<h3><a href="#">Nhà xe {{$h->tenhang}}</a></h3>
			        		<p><span class="number">500</span> <span>Open position</span></p>
			        	</div>
		        	</div>
		        </div>
		        @endforeach
		       
		      </div>
				</div>
			</div>
		</section>



   

    <!-- <section class="ftco-section ftco-candidates bg-primary">
    	<div class="container">
    		<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section heading-section-white text-center ftco-animate">
          	<span class="subheading">Candidates</span>
            <h2 class="mb-4">Latest Candidates</h2>
          </div>
        </div>
    	</div>
    	<div class="container">
        <div class="row">
        	<div class="col-md-12 ftco-animate">
        		<div class="carousel-candidates owl-carousel">
        			<div class="item">
		        		<a href="#" class="team text-center">
		        			<div class="img" style="background-image: url(images/person_1.jpg);"></div>
		        			<h2>Danica Lewis</h2>
		        			<span class="position">Western City, UK</span>
		        		</a>
        			</div>
        			<div class="item">
	        			<a href="#" class="team text-center">
		        			<div class="img" style="background-image: url(images/person_2.jpg);"></div>
		        			<h2>Nicole Simon</h2>
		        			<span class="position">Western City, UK</span>
		        		</a>
	        		</div>
	        		<div class="item">
	        			<a href="#" class="team text-center">
		        			<div class="img" style="background-image: url(images/person_3.jpg);"></div>
		        			<h2>Cloe Meyer</h2>
		        			<span class="position">Western City, UK</span>
		        		</a>
	        		</div>
	        		<div class="item">
	        			<a href="#" class="team text-center">
		        			<div class="img" style="background-image: url(images/person_4.jpg);"></div>
		        			<h2>Rachel Clinton</h2>
		        			<span class="position">Western City, UK</span>
		        		</a>
	        		</div>
	        		<div class="item">
	        			<a href="#" class="team text-center">
		        			<div class="img" style="background-image: url(images/person_5.jpg);"></div>
		        			<h2>Dave Buff</h2>
		        			<span class="position">Western City, UK</span>
		        		</a>
	        		</div>
	        		<div class="item">
	        			<a href="#" class="team text-center">
		        			<div class="img" style="background-image: url(images/person_6.jpg);"></div>
		        			<h2>Dave Buff</h2>
		        			<span class="position">Western City, UK</span>
		        		</a>
	        		</div>
        		</div>
        	</div>
        </div>
    	</div>
    </section> -->

   
		
<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">NTN Vexe</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Thành viên</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="pb-1 d-block">Nguyễn Trọng Nghĩa</a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Hãng xe</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="pb-1 d-block">Tuấn Trung</a></li>
                <li><a href="#" class="pb-1 d-block">Kim anh</a></li>
                <li><a href="#" class="pb-1 d-block">Đồng tâm</a></li>
                <li><a href="#" class="pb-1 d-block">Thái sơn</a></li>
                
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Account</h2>
              <ul class="list-unstyled">
                
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Địa chỉ liên hệ</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Số 3 Bát nàn công chúa - Hòa Hải - Ngũ Hành Sơn - Đà nẵng</span></li>
                  <li><span class="icon icon-phone"></span><span class="text">0986766275</span></li>
                  <li><span class="icon icon-phone"></span><span class="text">0947419769</span></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">171c900084@itf.edu.vn</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Giao diện này được thực hiện<i class="icon-heart text-danger" aria-hidden="true"></i> bởi <a href="https://colorlib.com" target="_blank">Nghĩa -17I2 </a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
