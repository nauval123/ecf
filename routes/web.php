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


Route::get('login','LoginController@index')->name('loginpage');
Route::view('/','series/homepage')->name('homepage');
Route::post('login','LoginController@login')->name('login');
Route::view('create','series/create');
Route::view('/artikel','series/artikel')->name('artikel');



Route::group(['middleware'=>'auth','web'],function(){
    Route::get('logout','LoginController@logout')->name('logoutAdmin');
    Route::post('profile/update','LoginController@update')->name('updateProfil');
    Route::group(['middleware'=>['admin']],function (){
        Route::view('admin','admin/homepageAdmin')->name('homepageAdmin');
        Route::view('admin/artikel','admin/adminArtikel')->name('lihatartikel');
        Route::view('artikel/create','admin/buatArtikel')->name('buatartikel');
        Route::view('admin/profile','admin/adminProfil')->name('profilAdmin');

    });
    Route::view('farmer','farmer/homepagefarmer')->name('homepageFarmer');
    Route::view('farmer/profil','farmer/farmerProfil')->name('profilFarmer');
});

Auth::routes();

