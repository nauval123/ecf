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
//Route::view('/artikel','series/artikel')->name('artikel');
//Route::get('artikel/detail/{id}','');
Route::get('artikel','ControllerArtikel@showartikel')->name('artikel');
//route::get('artikel/{id}','');

Route::group(['middleware'=>'auth','web'],function(){
    Route::get('logout','LoginController@logout')->name('logoutAdmin');
    Route::post('profile/update','LoginController@update')->name('updateProfil');
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
    Route::get('farmer/artikel','ControllerArtikel@showartikel')->name('artikelFarmer');
    Route::get('datapakan/{id}','ControllerDataPakan@destroy')->name('hapusdatapakan');
    Route::resource('datapakan','ControllerDataPakan');
});

Auth::routes();

