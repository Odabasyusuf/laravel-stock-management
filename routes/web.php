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
    return redirect('/admin');
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

Route::get('/mobile/login', 'Admin\Mobile\M_LoginController@index');
Route::post('/mobile/login', 'Admin\Mobile\M_LoginController@login');
Route::get('/mobile/logout', 'Admin\Mobile\M_LoginController@logout');

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

    Route::get('/particikis', 'admin\StokController@kereste_cikis_sayfa')->name('kereste_cikis_sayfa');
    Route::get('/particikis/musterisec', 'admin\StokController@kereste_cikis_sayfa_musterisec')->name('kereste_cikis_sayfa_musterisec');
    Route::get('/particikis/musteri/{id}', 'admin\StokController@kereste_cikis_sayfa_musteriid')->name('kereste_cikis_sayfa_musteriid');
    Route::get('/particikis/{id}', 'admin\StokController@kereste_cikis_sayfa_idli');
    Route::post('/particikis/sat', 'admin\StokController@kereste_parti_cikis')->name('kereste_parti_cikis');

    Route::get('/tomrukgiris', 'admin\TomrukGirisController@tomruk_giris_sayfa')->name('tomrukgiris');
    Route::post('/tomrukgiris/kaydet', 'admin\TomrukGirisController@tomruk_giris_kaydet')->name('tomrukgiriskaydet');

    Route::get('/tomrukcikis', 'admin\StokController@tomruk_cikis_sayfa')->name('tomrukcikis');
    Route::get('/tomrukcikis/{id}', 'admin\StokController@tomruk_cikis_sayfa_idli');
    Route::post('/tomrukcikis/sat', 'admin\StokController@tomruk_parti_cikis')->name('tomruk_parti_cikis');

    Route::get('/tomruk/sil/{id}', 'admin\StokController@tomruk_parti_sil');

 //   Route::get('/stok/index', 'admin\StokController@index')->name('stok_index');
    Route::get('/stok/kereste/musterisec', 'admin\StokController@kereste_musteri_sec')->name('kereste_musteri_sec');
    Route::get('/stok/kereste/musteri/{id}', 'admin\StokController@kereste_musteri_id')->name('kereste_musteri_id');
    Route::get('/stok/kereste/detay/{id}', 'admin\StokController@stok_kereste_detay_musteri')->name('stok_kereste_detay_musteri');
    Route::get('/stok/kereste', 'admin\StokController@stok_kereste')->name('stok_kereste');
    Route::get('/stok/kereste/{id}', 'admin\StokController@stok_kereste_detay')->name('stok_kereste_detay');
    Route::get('/stok/kereste/sat/{id}', 'admin\StokController@stok_kereste_cikis')->name('stok_kereste_cikis');
    Route::get('/stok/kereste/geri/{id}', 'admin\StokController@stok_kereste_gerial')->name('stok_kereste_gerial');
    Route::get('/stok/kereste/sil/{id}', 'admin\StokController@stok_kereste_tsil')->name('stok_kereste_tsil');

    Route::get('/stok/tomruk', 'admin\StokController@stok_tomruk')->name('stok_tomruk');
});

// Tüm Admin Mobile rotaları
Route::get('/mobile', 'admin\AdminController@mobile_index')->name('mDashboard')->middleware(['mobileAdmin']);

Route::name('admin.mobile.')->prefix('mobile')->middleware(['mobileAdmin'])->group(function () {
    Route::get('/partigiris', 'admin\Mobile\M_KerestePartiGiris@index')->name('partigiris');
    Route::post('/partigiris/kaydet', 'admin\Mobile\M_KerestePartiGiris@kaydet')->name('kerestepartikaydet');

    Route::get('/particikis', 'admin\Mobile\M_StokController@kereste_cikis_sayfa')->name('kerestecikissayfa');
    Route::get('/particikis/musterisec', 'admin\Mobile\M_StokController@kereste_cikis_sayfa_musterisec')->name('kerestecikissayfa_musterisec');
    Route::get('/particikis/musteri/{id}', 'admin\Mobile\M_StokController@kereste_cikis_sayfa_musteriid')->name('kerestecikissayfa_musteriid');
    Route::get('/particikis/{id}', 'admin\Mobile\M_StokController@kereste_cikis_sayfa_idli');
    Route::post('/particikis/sat', 'admin\Mobile\M_StokController@kereste_parti_cikis')->name('keresteparticikis');

    Route::get('/mamulparti/sil/{id}', 'admin\Mobile\M_StokController@mamul_parti_sil');

    Route::get('/hammaddegiris', 'admin\Mobile\M_HammaddeController@hammadde_giris_sayfa')->name('hammadde_giris_sayfa');
    Route::post('/hammaddegiris/kaydet', 'admin\Mobile\M_HammaddeController@hammadde_giris_kaydet')->name('hammadde_giris_kaydet');

    Route::get('/hammaddecikis', 'admin\Mobile\M_HammaddeController@hammadde_cikis_sayfa')->name('hammadde_cikis_sayfa');
    Route::get('/hammaddecikis/{id}', 'admin\Mobile\M_HammaddeController@hammadde_cikis_sayfa_idli');
    Route::post('/hammaddecikis/sat', 'admin\Mobile\M_HammaddeController@hammadde_parti_cikis')->name('hammadde_parti_cikis');

    Route::get('/hammadde/sil/{id}', 'admin\Mobile\M_HammaddeController@hammadde_parti_sil');

    Route::get('/musteriler', 'admin\Mobile\M_MusteriController@index')->name('musterilistesi');
    Route::get('/musteri/edit/{id}', 'admin\Mobile\M_MusteriController@edit')->name('musteri_duzenle');
    Route::post('/musteri/update/{id}', 'admin\Mobile\M_MusteriController@update');
    Route::get('/musteri/sil/{id}', 'admin\Mobile\M_MusteriController@sil');

    Route::get('/stokhammadde', 'admin\Mobile\M_StokController@stok_hammadde')->name('stok_hammadde');
    Route::get('/stokmamul', 'admin\Mobile\M_StokController@stok_mamul')->name('stok_mamul');
    Route::get('/stokmamulmusterisec', 'admin\Mobile\M_StokController@stokmamulmusterisec')->name('stokmamulmusterisec');
    Route::get('/stokmamul/{id}', 'admin\Mobile\M_StokController@stok_mamul_musteri')->name('stok_mamul_musteri');

    Route::get('/stokmamul/yazdir/{id}', 'admin\Mobile\M_YazdirController@stok_mamul_yazdir')->name('stok_mamul_yazdir');

});



