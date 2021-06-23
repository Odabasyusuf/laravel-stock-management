<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/deneme', function () {
    return view('admin/home');
});

Route::get('/admin/deneme2', function () {
    return view('admin/musteri_parti_1');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//yeni tema deneme rotası
Route::get('/admin/modern/anasayfa', function () {
    return view('layouts.admin.modern.modernmaster');
});



Auth::routes();
//Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
Route::get('/admin', 'admin\AdminController@index')->name('dashboard')->middleware(['admin']);
Route::get('/admin/login', 'admin\LoginController@index')->name('admin.login');
Route::post('/admin/login', 'admin\LoginController@login')->name('admin.login');
Route::get('/admin/logout', 'admin\LoginController@logout')->name('admin.logout');



//Route::get('/admin/musteriler', 'admin\MusteriController@index')->name('musteriler')->middleware(['admin']);
//Route::resource('admin/musteri', admin\MusteriController::class);

Route::name('admin.')->prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/musteriler', 'admin\MusteriController@index')->name('musteriler');
    Route::resource('/musteri', admin\MusteriController::class);
    Route::get('/musteri/del/{id}', 'admin\MusteriController@destroy')->name('musteri_sil');
    Route::get('/musteri/edit/{id}', 'admin\MusteriController@edit')->name('musteri_duzenle');
    Route::post('/musteri/update/{id}', 'admin\MusteriController@update');


    Route::get('/partigiris', 'admin\KerestePartiGiris@index');
    //Route::post('/partigiris/detay', 'admin\KerestePartiGiris@detay')->name('musteripartikaydet');
    Route::post('/partigiris/kaydet', 'admin\KerestePartiGiris@kaydet')->name('musteripartikaydet'); //returnback yapılmadı


    Route::get('/stok/index', 'admin\StokController@index')->name('stok_index');
    Route::get('/stok/kereste', 'admin\StokController@stok_kereste')->name('stok_kereste');
    Route::get('/stok/kereste/{id}', 'admin\StokController@stok_kereste_detay')->name('stok_kereste_detay');




});



