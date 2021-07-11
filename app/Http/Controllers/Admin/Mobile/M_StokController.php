<?php

namespace App\Http\Controllers\Admin\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Kereste_parti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class M_StokController extends Controller
{

   public function kereste_cikis_sayfa(){
        $joinTables = DB::table('musteris')
            ->join('kereste_partis','kereste_partis.musteri_id','=', 'musteris.id')
            ->join('kalite_kereste','kalite_kereste.kalite_kodu', '=','kereste_partis.urun_kalitesi')
            ->select('kereste_partis.*','musteris.musteriadi','kalite_kereste.kalite_adi')
            ->get();


        //return dd($joinTables);


        return view('admin.mobile.m_kereste_cikis',compact(['joinTables']));

    }

    public function kereste_parti_cikis(Request $request){
        $secilenParti = Kereste_parti::find($request->blok_no);

        //$secilenParti -> durum = "Satıldı";
//        $secilenParti -> toplam_dm3 = -1*$secilenParti -> toplam_dm3;
        $secilenParti -> arac_plaka = $request->arac_plaka;
        $secilenParti -> fatura_no = $request->fatura_no;

        $secilenParti -> save();

        return back()->with("success",'Seçilen Parti Ürün "Satıldı"  olarak işaretlendi');
    }
}
