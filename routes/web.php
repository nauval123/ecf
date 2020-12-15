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
Route::get('artikel/{id}/more','ArtikelController@detailartikel')->name('detilartil1');
Route::get('artikel','ArtikelController@show')->name('artikel');
//route::get('artikel/{id}','');
Route::get('detail/{id}','ArtikelController@showdetail')->name('detaildatapeternak');

Route::group(['middleware'=>'auth','web'],function(){
    Route::get('logout','Auth\LoginController@logout')->name('logoutAdmin');
    Route::post('profile/update','AkunController@update')->name('updateProfil');
    Route::group(['middleware'=>['admin']],function (){
        Route::get('admin','ArtikelController@index')->name('homepageAdmin');
        Route::get('artikel/{id}','ArtikelController@edit')->name('lihatartikel');
        Route::get('artikel/delete/{id}',['as'=>'hapusartikel','uses'=>'ArtikelController@destroy']);
        Route::get('create','ArtikelController@create')->name('buatartikel');
        Route::get('artikel/edit/{id}', ['as' => 'editartikel', 'uses' => 'ArtikelController@edit']);
        Route::put('artikel/update/{id}', ['as' => 'updateartikel', 'uses' => 'ArtikelController@update']);
        Route::post('artikel/post','ArtikelController@store')->name('storeartikel');
        Route::view('admin/profile','admin/adminProfil')->name('profilAdmin');
    });

    Route::get('farmer','DataPakanController@index')->name('homepageFarmer');
    Route::view('farmer/profil','farmer/farmerProfil')->name('profilFarmer');
    Route::get('farmer/artikel','ArtikelController@show')->name('artikelFarmer');
    Route::get('artikel/{id}','ArtikelController@detailartikel')->name('detilartil2');
    Route::get('datapakan/{id}/delete','DataPakanController@destroy')->name('hapusdatapakan');
    Route::resource('datapakan','DataPakanController');
});

Auth::routes();

