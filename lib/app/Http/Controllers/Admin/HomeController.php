<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Xe;
use App\Models\News;
use DB;
use App\Models\Hangxe;
use App\Models\Taikhoan;
use App\Models\Comments;
use App\Thanhtoan;
use App\Http\Requests\AddNews;

class HomeController extends Controller
{
	public function getHome(){
      
    	return view('admin.index');
    }

    public function getLogout(){
    	Auth::logout();
    	return redirect()->intended('login');
    }
    public function getthongke(){
         $data['totalhx'] = Hangxe::count();
        $data['totalvd'] = Thanhtoan::count();
        $data['totalnd'] = Taikhoan::count();
        $data['totalbl'] = Comments::count();
    
        $data['tongtien'] = Thanhtoan::sum('tongtien');
        $data['tienlai']= Thanhtoan::sum('tongtien')*20/100;
        return view('admin.thongke',$data);
    }

    public function getAddNew(){
    	 $dulieu['newlist'] =Hangxe::all();
    	   return view('admin.addnews',$dulieu);
    }

    public function postAddNew(AddNews $r){
    	$filename = $r->img->getClientOriginalName();
        $new = new News();
        $new->title=$r->tentieude;
        $new->IDHang=$r->hangxe;
        $new->anh=$filename;
        $new->description=$r->description;
        $new->save();
       $r->img->storeAs('avatar',$filename);
       return back();
    }
    public function getQL(){
        $data['ql'] = DB::table('thanhtoan')->join('hangxe','hangxe.IDHang','=','thanhtoan.IDHang')->get();
        return view('admin.qlvedat',$data);
    }
    public function getTK(){
        $data['tk'] = Taikhoan::all();
        return view('admin.admin',$data);
    }
    public function getBL(){
        $data['cmt'] = Comments::all();
        return view('admin.qlcmt',$data);
    }
}
