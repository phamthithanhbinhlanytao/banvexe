@extends('client.main')

@section('titleclient','Tin tức')

@section('mainclient')

		<section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          @foreach($tintuc as $t)
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('lib/storage/app/avatar/'.$t->anh)}}');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">{{$t->updated_at}}</a></div>
                  <div><a href="#">{{$t->tenhang}}</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="{{asset('Blog/Tintucdon/'.$t->IDNews)}}">{{$t->title}}</a></h3>
              </div>
            </div>
          </div>
          @endforeach
     
          
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
		


 @stop