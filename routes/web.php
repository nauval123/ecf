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


Route::get('login','AkunController@index')->name('loginpage');
Route::view('/','series/homepage')->name('homepage');
//Route::post('login','AkunController@login')->name('login');
Route::view('create','series/create');
//Route::view('/artikel','series/artikel')->name('artikel');
Route::get('artikel/{id}/more','ControllerArtikel@detailartikel')->name('detilartil1');
Route::get('artikel','ControllerArtikel@show')->name('artikel');
//route::get('artikel/{id}','');
Route::get('detail/{id}','ControllerArtikel@showdetail')->name('detaildatapeternak');

Route::group(['middleware'=>'auth','web'],function(){
    Route::get('logout','Auth\LoginController@logout')->name('logoutAdmin');
    Route::post('profile/update','AkunController@update')->name('updateProfil');
    Route::group(['middleware'=>['admin']],function (){
        Route::get('admin','ControllerArtikel@index')->name('homepageAdmin');
        Route::get('artikel/{id}','ControllerArtikel@edit')->name('lihatartikel');
        Route::get('artikel/delete/{id}',['as'=>'hapusartikel','uses'=>'ControllerArtikel@destroy']);
        Route::get('create','ControllerArtikel@create')->name('buatartikel');
        Route::get('artikel/edit/{id}', ['as' => 'editartikel', 'uses' => 'ControllerArtikel@edit']);
        Route::put('artikel/update/{id}', ['as' => 'updateartikel', 'uses' => 'ControllerArtikel@update']);
        Route::post('artikel/post','ControllerArtikel@store')->name('storeartikel');
        Route::view('admin/profile','admin/adminProfil')->name('profilAdmin');
    });
    Route::get('farmer','ControllerDataPakan@index')->name('homepageFarmer');
    Route::view('farmer/profil','farmer/farmerProfil')->name('profilFarmer');
    Route::get('farmer/artikel','ControllerArtikel@show')->name('artikelFarmer');
    Route::get('artikel/{id}','ControllerArtikel@detailartikel')->name('detilartil2');
    Route::get('datapakan/{id}/delete','ControllerDataPakan@destroy')->name('hapusdatapakan');
    Route::resource('datapakan','ControllerDataPakan');
});

Auth::routes();

