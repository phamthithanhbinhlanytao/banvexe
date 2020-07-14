<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hangxe;

class HangxeController extends Controller
{
    public function getHangxe(){
    	$data['hanglist'] = Hangxe::all();
    	return view('admin.category',$data);
    }
}
