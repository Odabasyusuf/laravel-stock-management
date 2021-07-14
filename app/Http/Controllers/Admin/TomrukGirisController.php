<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hammadde_parti;
use App\Models\Musteri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TomrukGirisController extends Controller
{
    public function index(){

    }

    public function tomruk_giris_sayfa(){
        $musteriler = Musteri::orderBy('id','asc')->pluck('musteriadi');

        return view('admin.tomruk_giris',compact('musteriler'));
    }
    public function tomruk_giris_kaydet(Request $request){
        /*   Aynı isimde MUSTERI varsa kaydetma yoksa kaydet    */
        $musteri = Musteri::firstOrNew([
            'musteriadi' => request('musteri_adi')
        ]);

        $musteri -> save();

        // Girilen musterinin bilgisini cekiyoruz
        $user = DB::table('musteris')->where('musteriadi', $request->musteri_adi)->first();

        $hammaddeParti = new Hammadde_parti();
        $hammaddeParti->musteri_id = $user->id;
        $hammaddeParti->miktar = $request->miktar;
        $hammaddeParti->adet = $request->adet;
        $hammaddeParti->arac_plaka = $request->arac_plaka;
        $hammaddeParti->nakliye_seri_no = $request->nakliye_seri_no;
        $hammaddeParti->gelis_yeri = $request->gelis_yeri;
        $hammaddeParti->emval_yeri = $request->emval_yeri;
        $hammaddeParti->agac_turu = $request->agac_turu;
        $hammaddeParti->urun_turu = $request->urun_turu;
        $hammaddeParti->sinif_kodu = $request->sinif_kodu;
        $hammaddeParti->boy_kodu = $request->boy_kodu;
        $hammaddeParti->cap_kodu = $request->cap_kodu;

        $hammaddeParti->save();


        return redirect(route('admin.stok_tomruk'))->with('success', 'Parti Girişi Başarılı..');
    }
}
