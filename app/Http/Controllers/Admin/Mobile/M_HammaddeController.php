<?php

namespace App\Http\Controllers\Admin\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Hammadde_parti;
use App\Models\Musteri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class M_HammaddeController extends Controller
{
    public function hammadde_giris_sayfa(){

        $musteriler = Musteri::orderBy('id','asc')->pluck('musteriadi');

       return view('admin.mobile.m_hammadde_giris',compact('musteriler'));
    }

    public function hammadde_giris_kaydet(Request $request){
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


        return back()->with('success', 'Parti Girişi Başarılı..');
    }

    public function hammadde_cikis_sayfa(){
        $secilenParti_id = 0;

        $joinTables = DB::table('musteris')
            ->join('hammadde_partis','hammadde_partis.musteri_id','=', 'musteris.id')
            ->select('hammadde_partis.*','musteris.musteriadi')
            ->get();

        return view('admin.mobile.m_hammadde_cikis',compact('secilenParti_id','joinTables'));
    }

    public function hammadde_cikis_sayfa_idli($id){
        $secilenParti_id = Hammadde_parti::where('id', $id)->get(['id']);

        $joinTables = DB::table('musteris')
            ->join('hammadde_partis','hammadde_partis.musteri_id','=', 'musteris.id')
            ->select('hammadde_partis.*','musteris.musteriadi')
            ->get();

        return view('admin.mobile.m_hammadde_cikis',compact('secilenParti_id','joinTables'));
    }

    public function hammadde_parti_cikis(Request $request){
        $secilenParti = Hammadde_parti::find($request->blok_no);

        $secilenParti -> durum = "Satıldı";
        if($request->arac_plaka!=null)
            $secilenParti -> cikis_arac_plaka = $request->arac_plaka;
        if($request->fatura_no !=null)
            $secilenParti -> cikis_fatura_no = $request->fatura_no;

        $secilenParti -> save();

        return back()->with("success",'Seçilen partinin Çıkışı yapıldı');
    }

    public function hammadde_parti_sil($id){
        $secilenParti = Hammadde_parti::find($id);

        $secilenParti -> Delete();

        return back()->with('success','Seçilen Parti Silindi');
    }
}
