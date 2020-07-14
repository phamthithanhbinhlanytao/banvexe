<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hangxe extends Model
{
    protected $table = 'hangxe';
    protected $primaryKey = 'IDHang';
    protected $guarded = [];

    public function xe(){
    	return $this->hasMany('App\Models\Xe','IDHang','IDHang');
    }

    // public function thanhtoan(){
    // 	return $this->hasMany('App\Thanhtoan','IDHang','IDHang');
    // }
}
