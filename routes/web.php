<?php

use Illuminate\Support\Facades\Route;

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


//Route::get('dashboardAdmin',function (){
//    if(session('berhasil_login')){
//        return view('admin/homepageAdmin');
//    }else{
//        return redirect()->route('loginpage');
//    }
//});

Auth::routes();
Route::get('login','LoginController@index')->name('loginpage');
Route::view('/','series/homepage')->name('homepage');
Route::post('login','LoginController@login')->name('login');
Route::view('create','series/create');



////Route::group(['middleware'=>'CekLoginMiddleware'],function(){
 Route::group(['middleware'=>'auth'],function(){
    Route::view('admin','admin/homepageAdmin')->name('homepageAdmin');
    Route::view('admin/artikel','admin/artikelAdmin');
    Route::view('artikel','admin/artikelAdmin')->name('lihatartikel');
    Route::view('artikel/create','admin/buatArtikel')->name('buatartikel');
    Route::get('logout','LoginController@logout')->name('logoutAdmin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
