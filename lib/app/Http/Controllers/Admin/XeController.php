<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Hangxe;
use App\Models\Xe;
use App\Http\Requests\AddXeRequest;

class XeController extends Controller
{
    public function getXe(){
        $dulieu['xelist'] =DB::table('xe')->join('hangxe','xe.IDHang','=','hangxe.IDHang')->orderBy('IDxe','asc')->get();

		return view('admin.product',$dulieu);
	}
    public function getAddXe(){
        $data['catelist'] = Hangxe::all();
        return view('admin.addproduct',$data);
    }
    public function postAddXe(AddXeRequest $request){
        $filename = $request->img->getClientOriginalName();
        $xe = new Xe();
        $xe->Tentaixe=$request->tentaixe;
        $xe->Giave=$request->price;
        $xe->Logo=$filename;
        $xe->SLghe=$request->slghe;
        $xe->vitrighetrong=$request->vitri;
        $xe->Gioxuatben=$request->gioxuat;
        $xe->IDHang=$request->hangxe;
        $xe->giodukien=$request->giodukien;
        $xe->noidi=$request->noidi;
        $xe->noiden=$request->noiden;
        $xe->bienso=$request->bienso;
        $xe->thutughe=$request->thutughe;
        $xe->noibat=$request->featured;
        $xe->statusghe=$request->status;
        $xe->hangghe=$request->hangghe;
        $xe->save();
       $request->img->storeAs('avatar',$filename);
       return back();
    }
}
