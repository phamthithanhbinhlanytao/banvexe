@extends('admin.master')

@section('title','Quản lý tài khoản')

@section('main')
        
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tài khoản khách hàng</h1>
            </div>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                
                <div class="panel panel-primary">
                    <div class="panel-heading">Danh sách tài khoản</div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="margin-top:20px;">               
                                    <thead>
                                        <tr class="bg-primary">
                                            <th>ID khách</th>
                                            <th width="10%">Họ và tên</th>
                                           
                                            <th width="10%">Email</th>
                                            <th width="10%">Số điện thoại</th>
                                            <th width="20%">Địa chỉ</th>
                                            <th >Tài khoản</th>
                                            <th >Trạng thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($tk as $prod)
                                        <tr>
                                            <td>{{$prod->id}}</td>
                                            <td>{{$prod->name}}</td>
                                            <td>
                                                {{$prod->email}}
                                            </td>
                                            <td>
                                                0{{$prod->phone}}
                                            </td>
                                            <td>
                                                {{$prod->address}}
                                            </td>
                                            <td>
                                                @if(($prod->level)==2)
                                                Khách hàng
                                                @endif
                                            </td>
                                            <td>
                                                @if(($prod->Status)==0)
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