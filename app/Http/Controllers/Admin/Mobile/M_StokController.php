<?php

namespace App\Http\Controllers\Admin\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Kereste_parti;
use App\Models\Musteri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class M_StokController extends Controller
{
    public function kereste_cikis_sayfa_musterisec(){
        $musteriler = Musteri::all();

        return view('admin.mobile.m_kereste_cikis_musterisec',compact(['musteriler']));
    }
    public function kereste_cikis_sayfa_musteriid($id){
        $secilenMusteri = Musteri::where('id', $id)->pluck('musteriadi')->first();


        $secilenParti_id = null;

        $joinTables = DB::table('musteris')
            ->join('kereste_partis','kereste_partis.musteri_id','=', 'musteris.id')
            ->select('kereste_partis.*','musteris.musteriadi')
            ->where('musteris.id','=', $id)
            ->get();

        return view('admin.mobile.m_kereste_cikis',compact(['joinTables','secilenParti_id','secilenMusteri']));
    }

   public function kereste_cikis_sayfa(){
       $secilenParti_id = null;
        $joinTables = DB::table('musteris')
            ->join('kereste_partis','kereste_partis.musteri_id','=', 'musteris.id')
            ->select('kereste_partis.*','musteris.musteriadi')
            ->get();




        return view('admin.mobile.m_kereste_cikis',compact(['joinTables','secilenParti_id']));

    }
    public function kereste_cikis_sayfa_idli($id){
        $secilenParti_id = Kereste_parti::where('id', $id)->get(['id']);

        $joinTables = DB::table('musteris')
            ->join('kereste_partis','kereste_partis.musteri_id','=', 'musteris.id')
            ->select('kereste_partis.*','musteris.musteriadi')
            ->get();


        return view('admin.mobile.m_kereste_cikis',compact(['secilenParti_id','joinTables']));
    }



    public function kereste_parti_cikis(Request $request){
        $sayac = count($request->blok_no);
        $secilenParti = Kereste_parti::find($request->blok_no);

        $kayit = array();
        for ($i = 0; $i < $sayac; $i++) {
            if($request->blok_no[$i] == null  || $request->blok_no[$i] == 0){
                continue;
            }
            $secilenParti = Kereste_parti::find($request->blok_no[$i]);
            $secilenParti->durum = "Satıldı";
            $secilenParti -> arac_plaka = $request->arac_plaka;
            $secilenParti -> fatura_no = $request->fatura_no;

            if($secilenParti -> toplam_dm3 > 0)
                $secilenParti -> toplam_dm3 = -1*$secilenParti -> toplam_dm3;

            $secilenParti -> save();
        }


      /*  $secilenParti -> durum = "Satıldı";
        $secilenParti -> toplam_dm3 = -1*$secilenParti -> toplam_dm3;
        $secilenParti -> arac_plaka = $request->arac_plaka;
        $secilenParti -> fatura_no = $request->fatura_no;
*/
        //$secilenParti -> save();

        return back()->with("success",'Seçilen Partiler "Satıldı"  olarak işaretlendi');
    }
    public function kereste_parti_cikis_yedek(Request $request){
        $secilenParti = Kereste_parti::find($request->blok_no);

        $secilenParti -> durum = "Satıldı";
        $secilenParti -> toplam_dm3 = -1*$secilenParti -> toplam_dm3;
        $secilenParti -> arac_plaka = $request->arac_plaka;
        $secilenParti -> fatura_no = $request->fatura_no;

        $secilenParti -> save();

        return back()->with("success",'Seçilen Parti Ürün "Satıldı"  olarak işaretlendi');
    }

    public function stok_mamul(){
        $musteriler = Musteri::orderBy("musteriadi",'asc')->get();

        $joinTables = DB::table('musteris')
            ->join('kereste_partis','kereste_partis.musteri_id','=', 'musteris.id')
            ->select('kereste_partis.*','musteris.musteriadi')
            ->get();

        return view('admin.mobile.m_stok_kereste',compact(['musteriler','joinTables']));

    }
    public function stok_mamul_musteri($id){
        $musteriler = Musteri::find($id)->get();

        $joinTables = DB::table('musteris')
            ->join('kereste_partis','kereste_partis.musteri_id','=', 'musteris.id')
            ->select('kereste_partis.*','musteris.musteriadi')
            ->where('musteris.id','=', $id)
            ->get();

        return view('admin.mobile.m_stok_kereste',compact(['musteriler','joinTables']));

    }


    public function stokmamulmusterisec(){
        $musteriler = Musteri::orderBy("musteriadi",'asc')->get();


        return view('admin.mobile.m_stok_kereste_musterisec',compact(['musteriler']));

    }

    public function mamul_parti_sil($id){
        $secilenParti = Kereste_parti::find($id);

        $secilenParti -> Delete();

        return back()->with('success','Seçilen Parti Silindi');
    }

    public function stok_hammadde(){
        $musteriler = Musteri::orderBy("musteriadi",'asc')->get();

        $joinTables = DB::table('musteris')
            ->join('hammadde_partis','hammadde_partis.musteri_id','=', 'musteris.id')
            ->select('hammadde_partis.*','musteris.musteriadi')
            ->get();

        return view('admin.mobile.m_stok_hammadde',compact(['musteriler','joinTables']));

    }
}
