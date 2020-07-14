<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','FrontendController@getHome');
Route::get('Qlvexe','FrontendController@getQlvexe');
Route::get('Hangxe','FrontendController@getHangxe');
Route::get('Lienhe','FrontendController@getLienhe');
Route::get('Datcho/{id}','FrontendController@getDatcho');
Route::get('Thanhtoan/{id}','FrontendController@getUpdate');
Route::post('Thanhtoan/{id}','FrontendController@postUpdate');
Route::get('hoanthanh','FrontendController@getHT');
Route::group(['prefix'=>'dangnhap'],function(){
	Route::get('/','FrontendController@getDN');
	Route::post('/','FrontendController@postDN');
});
Route::get('hangxe/{id}','FrontendController@getID');
Route::get('search/vedat','FrontendController@getVedat');
Route::group(['prefix'=>'dangki'],function(){
	Route::get('/','FrontendController@getDK');
	Route::post('/','FrontendController@postDK');
});
Route::get('dangxuat','FrontendController@postDX');

Route::get('taikhoan/{id}','FrontendController@getTK');
Route::group(['prefix'=>'Blog'],function(){
	Route::get('Tintuc','FrontendController@getTintuc');
	Route::get('Tintucdon/{id}','FrontendController@getTintucdon');
	Route::post('Tintucdon/{id}','FrontendController@postComment');
});
Route::get('Search','FrontendController@getSearch');


Route::group(['namespace'=>'Admin'],function(){
	Route::group(['prefix'=>'login','middleware'=>'CheckLogin'],function(){
		Route::get('/','LoginController@getLogin');
		Route::post('/','LoginController@postLogin');

		
	});
	Route::get('logout','HomeController@getLogout');

	Route::group(['prefix'=>'admin','middleware'=>'CheckLogout'],function(){
			Route::get('home','HomeController@getHome');
			Route::get('quanli','HomeController@getQL');
			Route::get('thongke','HomeController@getthongke');
			Route::get('taikhoan','HomeController@getTK');
			Route::get('binhluan','HomeController@getBL');
			Route::group(['prefix'=>'hangxe'],function(){
				Route::get('/','HangxeController@getHangxe');
				Route::post('/','HangxeController@postHangxe');

				Route::get('edit/{id}','HangxeController@getEditHangxe');
				Route::post('edit/{id}','HangxeController@postEditHangxe');

				Route::get('delete/{id}','HangxeController@getDeleteHangxe');
			});
			Route::group(['prefix'=>'xe'],function(){
				Route::get('/','XeController@getXe');

				Route::get('add','XeController@getAddXe');
				Route::post('add','XeController@postAddXe');

				Route::get('edit/{id}','XeController@getEditXe');
				Route::post('edit/{id}','XeController@postEditXe');

				Route::get('delete/{id}','XeController@getDeleteXe');
			});
			Route::group(['prefix'=>'tintuc'],function(){
				

				Route::get('add','HomeController@getAddNew');
				Route::post('add','HomeController@postAddNew');

				Route::get('edit/{id}','HomeController@getEditXe');
				Route::post('edit/{id}','HomeController@postEditXe');

				Route::get('delete/{id}','HomeController@getDeleteXe');
			});
		});
});