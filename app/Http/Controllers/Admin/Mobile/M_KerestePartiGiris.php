<?php

namespace App\Http\Controllers\Admin\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Kereste_parti;
use App\Models\Musteri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class M_KerestePartiGiris extends Controller
{
    public function index(){
        $musteriler = Musteri::orderBy('id','asc')->pluck('musteriadi');

        return view('admin.mobile.kereste_parti_giris',compact('musteriler'));

    }

    public function kaydet(Request $request)
    {
        /*   Aynı isimde MUSTERI varsa kaydetma yoksa kaydet    */
        $musteri = Musteri::firstOrNew([
            'musteriadi' => request('musteri_adi')
        ]);
        $musteri -> save();

        // Girilen musterinin bilgisini cekiyoruz
        $user = DB::table('musteris')->where('musteriadi', $request->musteri_adi)->first();

        // Musteriye ait en son blok bulunur ve 1 artırılır
        $blokNo = DB::table('kereste_partis')->where('musteri_id', $user->id)->orderBy('blok_no', 'desc')->pluck('blok_no')->first();
        if($blokNo == null) $blokNo = 0;
        $blokNo = $blokNo+1;



        $sayac = count($request->toplam_dm);


        $kayit = array();
        for ($i = 0; $i < $sayac; $i++) {
            if($request->toplam_dm[$i] == null || $request->toplam_dm[$i] == 0){
                continue;
            }

            $kayit[$i]["sira"] = $request->sira[$i];
            $kayit[$i]["kln"] = $request->kln[$i];
            $kayit[$i]["en"] = $request->eni[$i];
            $kayit[$i]["boy"] = $request->boy[$i];
            $kayit[$i]["toplam_dm"] = $request->toplam_dm[$i];

        }

        $kayitencode = json_encode($kayit);

        $musteriParti = new Kereste_parti();
        $musteriParti->musteri_id = $user->id;
        $musteriParti->blok_no = $blokNo;
        $musteriParti->urun_kalitesi = $request->urun_kalitesi;
        $musteriParti->agac_turu = $request->agac_turu;
        $musteriParti->parti_detay = $kayitencode;
        $musteriParti->toplam_dm3 = $request->subtotal;
        $musteriParti->servis1 = $request->servis_saglayan_1;
        $musteriParti->servis2 = $request->servis_saglayan_2;


        $musteriParti->save();


        return back()->with('success', 'Parti Girişi Başarılı..');

    }

}

