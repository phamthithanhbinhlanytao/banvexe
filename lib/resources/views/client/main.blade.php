<!DOCTYPE html>
<html lang="en">
  <head>
	<title>@yield('titleclient')</title>
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
  </head>
  <body>
    
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
    
    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-12 ftco-animate text-center mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{asset('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-3"><a href="{{asset('Blog/Tintuc')}}">@_@<i class="ion-ios-arrow-forward"></i></a></span> <span></span></p>
            <h1 class="mb-3 bread">@yield('titleclient')</h1>
          </div>
        </div>
      </div>
    </div>
    
    @yield('mainclient')


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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Giao diện này được thực hiện<i class="icon-heart text-danger" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank">Nghĩa -17I2 </a>
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
