<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Musteri;
use Illuminate\Http\Request;
use App\Models\Kereste_parti;
use Illuminate\Support\Facades\DB;

class KerestePartiGiris extends Controller
{
    public function index()
    {
        $musteriBilgileri = Musteri::all();
        return view('admin.musteri_parti_giris',compact('musteriBilgileri'));
    }

    public function detay(Request $request)
    {

        $sayac = count($request->toplam_dm);
        $kayit = array();

        for ($i = 0; $i < $sayac; $i++) {
            //$arr = array('' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

            $kayit[$i]["sira"] = $request->sira[$i];
            $kayit[$i]["kln"] = $request->kln[$i];
            $kayit[$i]["en"] = $request->eni[$i];
            $kayit[$i]["boy"] = $request->boy[$i];
            $kayit[$i]["toplam_dm"] = $request->toplam_dm[$i];


        }
        $kayitencode = json_encode($kayit);
        //echo $kayitencode;


        $kayitdecode = json_decode($kayitencode, true);

        $sira1 = $kayitdecode['0'];

        foreach ($sira1 as $s) {
            echo "   " . $s;
        }
        //return $sira1;


        /*        $newArray['sira'] = $request->sira;
                $newArray['kln'] = $request->kln;
                echo json_encode ($newArray);
        */

        return dd($request);

        //return dd("kln",$request->kln, "en",$request->eni, "boy",$request->boy, "toplam_dm",$request->toplam_dm, "genel_toplam",$request->subtotal);
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
            if($request->toplam_dm[$i] == null  || $request->toplam_dm[$i] == 0){
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

        return redirect(route('admin.stok_kereste'))->with('success', 'Parti Girişi Başarılı..');
    }


}
