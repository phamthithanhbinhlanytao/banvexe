@extends('admin.master')

@section('title','Quản lý Bình luận')

@section('main')
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bình luận khách hàng</h1>
            </div>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                
                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách </div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="margin-top:20px;">               
                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID Comment</th>
                                            <th width="10%">Họ và tên</th>
                                           
                                            <th width="10%">Email</th>
                                            <th width="20%">Nội dung bình luận</th>
                                            <th width="10%">ID tin tức</th>
                                            
                                            <th >Trạng thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($cmt as $prod)
                                        <tr>
                                            <td>{{$prod->IDCom}}</td>
                                            <td>{{$prod->name}}</td>
                                            <td>
                                                {{$prod->email}}
                                            </td>
                                            <td>
                                                {{$prod->content}}
                                            </td>
                                            <td>
                                                {{$prod->Com_news}}
                                            </td>
                                            
                                            <td>
                                                @if(($prod->Com_news)<0)
                                                <button class="btn btn-danger">Khóa</button>
                                                @else
                                                <button class="btn btn-success">Mở</button>
                                                @endif
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
    </div>  <!--/.main-->
    @stop