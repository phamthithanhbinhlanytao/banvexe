<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Xe;
use DB;
use App\Models\Hangxe;
use App\Models\News;
use Hash;
use App\User;
use Auth;
use App\Thanhtoan;
use App\Models\Comments;
use App\Http\Requests\AddPayRequest;
use App\Models\Taikhoan;

class FrontendController extends Controller
{
    public function getHome(){
        $data['hang'] = Hangxe::all();
        $data['tt'] = News::all();
     	return view('client.index',$data);
    }
    public function getTintuc(){
     $data['tintuc'] = DB::table('news')->join('hangxe','news.IDhang','=','hangxe.IDHang')->orderBy('IDNews','asc')->get();
     
    	return view('client.blog',$data);
    }

    public function getLienhe(){
    	return view('client.contact');
    }

    public function getQlvexe(){
    	return view('client.qlve');
    }

    public function getHangxe(){
        $data['h'] = Hangxe::all();
    	return view('client.candidates',$data);
    }

   public function getTintucdon($id){
    $data['cmt'] = Comments::where('IDCom',$id)->get();
    $data['id'] = News::find($id);
    	return view('client.blog-single',$data);
    }
    public function postComment(Request $request,$id){
        $cmt = new Comments;
        $cmt->name= $request->name;
        $cmt->email= $request->email;
        $cmt->content= $request->note;
        $cmt->Com_News= $id;
        $cmt->save();
        return back();
    }
    public function getUpdate(Request $request,$id){
        $dat1 = $request->h1;
        $dat2 = $request->h2;
        $dat3= $request->h3;
        $dat4 = $request->h4;
        $data['vedat1'] = $dat1;
        $data['vedat2'] = $dat2;
        $data['vedat3'] = $dat3;
        $data['vedat4'] = $dat4;
        $data['ngayd'] = $request->day;
        $data['tk'] = Hangxe::find($id);
        return view('client.thanhtoan',$data);

    }

    public function postUpdate(AddPayRequest $add){
        $tt = new Thanhtoan();
        $tt->IDHang = $add->hang;
        $tt->Payment = $add->payment_method;
        $tt->Status = $add->status;
        $tt->ghedadat = $add->ghedat;
        $tt->name = $add->ten;
        $tt->phone = $add->phone;
        $tt->ngaydi = $add->ngaydi;
        $tt->noidi = $add->noidi;
        $tt->noiden = $add->noiden;
        $tt->tongtien = $add->tongtien;
        $tt->madatcho = $add->madatcho;
        $tt->ghichu = $add->note;
        $tt->save();

        return redirect('hoanthanh');

    }
    public function getHT(){
        return view('client.hoanthanh');
    }

    public function getSearch(Request $request){ 
        // dd($request->all);
       $noidi = $request->di;
       $noiden = $request->den;
      $date = $request->date;
        $data['items'] = Hangxe::where([
            ['Noidi','=',$noidi],
            ['Noiden','=',$noiden],
        ])->get();
        $data['ngay'] = $date;
        return view('client.timkiem',$data);
    }
    public function getDatcho($id,Request $req){
        $data['datcho1'] = Xe::where('hangghe','AD')->orderBy('IDxe','asc')->get();
        $data['datcho2'] = Xe::where('hangghe','BD')->orderBy('IDxe','asc')->get();
        $data['datcho3'] = Xe::where('hangghe','AT')->orderBy('IDxe','asc')->get();
        $data['datcho4'] = Xe::where('hangghe','BT')->orderBy('IDxe','asc')->get();
        $data['tk'] = Hangxe::find($id);
        $data['ngaydi'] = $req->datenow;
        return view('client.job-post',$data);
    }
    public function getDN(){
        return view('client.new-post');
    }

    public function postDN(Request $request){
        $arr=['email'=>$request->email,'password'=>$request->password,'level'=>'2'];
        
        if(Auth::attempt($arr))
            return redirect()->intended('/');
        
        else{
            return back()->withInput()->with('error','Sai mật khẩu hoặc Email');
        }
    }

    public function postDK(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:3|max:20',
                'name'=>'required',
                'phone'=>'required|min:10|max:11',
                
                'level'=>'required'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'phone.min'=>'SDT phải đủ 10 or 11 số',
                'password.min'=>'Mật khẩu ít nhất 3 kí tự'
            ]);
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->add;
        $user->level = $req->level;
        $user->save();
        return back()->withInput()->with('error','Tạo tài khoản thành công');
    }
    public function getDK(){
        return view('client.dangki');
    }
    public function postDX(){
        Auth::logout();
        return redirect()->intended('/');
    }

    public function getVedat(Request $request){
        $result = $request->result;
        $data['tukhoa'] = $result;
        $result = str_replace(' ','%',$result);
        $data['items'] = DB::table('thanhtoan')->join('hangxe','hangxe.IDHang','=','thanhtoan.IDHang')->where('madatcho','=',$result)->get();
        return view('client.browsejobs',$data);

    }
    public function getTK($id){
        $data['tkhoan'] = Taikhoan::find($id);
        $data['kh'] = DB::table('thanhtoan')->join('users','users.email','=','thanhtoan.name')->where('users.email','=','admin@gmail.com')->get();
        return view('client.taikhoan',$data);
    }
}
