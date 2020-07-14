@extends('client.main')

@section('titleclient','Tin tức đơn')

@section('mainclient')
		<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
           
            <h2 class="mb-3">{{$id->title}}</h2>
            <p>{!!$id->description!!}</p>
            <p>
              <img src="{{asset('lib/storage/app/avatar/'.$id->anh)}}" alt="" class="img-fluid">
            </p>
            <p></p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
              </div>
            </div>
       
          


            <div class="pt-5 mt-5">
              @foreach($cmt as $c)
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>{{$c->name}}</h3>
                    <div class="meta">{{$c->created_at}}</div>
                    <p style="color: black;font-size: 20px;">{!!$c->content!!}</p>
                  </div>
                </li>
              </ul>
              @endforeach
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Để lại bình luận cho chúng tôi</h3>
                @if(Auth::check())
                <form method="post" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Tên </label>
                    <input required type="text" class="form-control" name="name" value="{{Auth::user()->name}}" readonly="readonly">
                  </div>
                  <div class="form-group">
                    <label for="email">Email </label>
                    <input required="required" type="email" class="form-control" name="email" value="{{Auth::user()->email}}" readonly="readonly">
                  </div>

                  <div class="form-group">
                    <label for="message">Nội dung</label>
                   <textarea name="note" id="" cols="40" rows="4" class="form-control" placeholder="lời nhắn" required="required"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Bình luận" class="btn py-3 px-4 btn-primary">
                  </div>
                  {{csrf_field()}}
                </form>
                @else
                 Bạn cần đăng nhập để bình luận
                 @endif
              </div>
            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-md-4 pl-md-5 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-3">Tin tức khác</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> July 12, 2018</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>

            

            
          </div>

        </div>
      </div>
    </section> <!-- .section -->
		
		

@stop