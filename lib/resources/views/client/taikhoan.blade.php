@extends('client.main')

@section('titleclient','Tài khoản')

@section('mainclient')
		<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
           
            <h2 class="mb-3">Mã đặt chỗ</h2>
            @foreach($kh as $k)
            <input type="text" value="{{$k->madatcho}}" readonly="readonly" class="form-control">
            @endforeach

            <div class="pt-5 mt-5">
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Để lại bình luận cho chúng tôi</h3>
                @if(Auth::check())

                  <div class="form-group">
                    <label for="name">Tên </label>
                    <input required type="text" class="form-control" name="name" value="{{Auth::user()->name}}" readonly="readonly">
                  </div>
                  <div class="form-group">
                    <label for="email">Email </label>
                    <input required="required" type="email" class="form-control" name="email" value="{{Auth::user()->email}}" readonly="readonly">
                  </div>

                  <div class="form-group">
                    <label for="email">Phone </label>
                    <input required="required" type="text" class="form-control" name="email" value="{{Auth::user()->phone}}" readonly="readonly">
                  </div>
                  <div class="form-group">
                    <label for="email">Address </label>
                    <input required="required" type="text" class="form-control" name="email" value="{{Auth::user()->address}}" readonly="readonly">
                  </div>
                   <div class="form-group">
                   <a href="{{asset('dangxuat')}}"><input  type="button" class="form-control" name="email" value="Đăng xuất" readonly="readonly"></a> 
                  </div>
                  @else
                  không tồn tại
                  @endif
              </div>
            </div>

          </div> <!-- .col-md-8 -->

        </div>
      </div>
    </section> <!-- .section -->
		
		

@stop