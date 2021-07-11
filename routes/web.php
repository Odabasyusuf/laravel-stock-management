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
    return view('admin/login');
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

 Route::get('/admin/mobile/anasayfa', function () {
    return view('layouts.admin.mobile.mobile_master');
});



// Giriş Çıkış İşlemleri
Auth::routes();
//Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard');
Route::get('/admin', 'admin\AdminController@index')->name('dashboard')->middleware(['admin']);
Route::get('/admin/login', 'admin\LoginController@index')->name('admin.login');
Route::post('/admin/login', 'admin\LoginController@login')->name('admin.login');
Route::get('/admin/logout', 'admin\LoginController@logout')->name('admin.logout');



//Route::get('/admin/musteriler', 'admin\MusteriController@index')->name('musteriler')->middleware(['admin']);
//Route::resource('admin/musteri', admin\MusteriController::class);


// Tüm admin rotaları
Route::name('admin.')->prefix('admin')->middleware(['admin'])->group(function () {
    Route::get('/musteriler', 'admin\MusteriController@index')->name('musteriler');
    Route::resource('/musteri', admin\MusteriController::class);
    Route::get('/musteri/del/{id}', 'admin\MusteriController@destroy')->name('musteri_sil');
    Route::get('/musteri/edit/{id}', 'admin\MusteriController@edit')->name('musteri_duzenle');
    Route::post('/musteri/update/{id}', 'admin\MusteriController@update');


    Route::get('/partigiris', 'admin\KerestePartiGiris@index');
    //Route::post('/partigiris/detay', 'admin\KerestePartiGiris@detay')->name('musteripartikaydet');
    Route::post('/partigiris/kaydet', 'admin\KerestePartiGiris@kaydet')->name('musteripartikaydet');


 //   Route::get('/stok/index', 'admin\StokController@index')->name('stok_index');
    Route::get('/stok/kereste', 'admin\StokController@stok_kereste')->name('stok_kereste');
    Route::get('/stok/kereste/{id}', 'admin\StokController@stok_kereste_detay')->name('stok_kereste_detay');
    Route::get('/stok/kereste/sat/{id}', 'admin\StokController@stok_kereste_cikis')->name('stok_kereste_cikis');
    Route::get('/stok/kereste/geri/{id}', 'admin\StokController@stok_kereste_gerial')->name('stok_kereste_gerial');
    Route::get('/stok/kereste/sil/{id}', 'admin\StokController@stok_kereste_tsil')->name('stok_kereste_tsil');

});

// Tüm Admin Mobile rotaları
Route::get('/mobile', 'admin\AdminController@mobile_index')->name('mDashboard')->middleware(['admin']);

Route::name('admin.mobile.')->prefix('mobile')->middleware(['admin'])->group(function () {
    Route::get('/partigiris', 'admin\Mobile\M_KerestePartiGiris@index')->name('partigiris');
    Route::post('/partigiris/kaydet', 'admin\Mobile\M_Ke restePartiGiris@kaydet')->name('kerestepartikaydet');
    Route::get('/particikis', 'admin\Mobile\M_StokController@kereste_cikis_sayfa')->name('kerestecikissayfa');
    Route::post('/particikis/sat/', 'admin\Mobile\M_StokController@kereste_parti_cikis')->name('keresteparticikis');

    Route::get('/musteriler', 'admin\Mobile\M_MusteriController@index')->name('musterilistesi');
    Route::get('/musteri/edit/{id}', 'admin\Mobile\M_MusteriController@edit')->name('musteri_duzenle');
    Route::post('/musteri/update/{id}', 'admin\Mobile\M_MusteriController@update');
    Route::get('/musteri/sil/{id}', 'admin\Mobile\M_MusteriController@sil');

    Route::get('/stokmamul', 'admin\Mobile\M_StokController@stok_mamul')->name('stok_mamul');
});



