<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thanhtoan extends Model
{
    protected $table = 'thanhtoan';
    protected $primaryKey = 'IDPay';
    protected $guarded = [];
     
     // public function hangxe(){
     // 	return $this->belongsTo('App\Models\Hangxe','IDHang','IDPay');
     // }
}
