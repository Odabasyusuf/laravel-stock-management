<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hammadde_parti;
use App\Models\Kereste_parti;
use App\Models\Musteri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Compound;

class StokController extends Controller
{
    public function index(){
        return view('admin.stok_index');
    }

    public function stok_kereste(){

        $musteriler = Musteri::all();

        $joinTables = DB::table('musteris')
            ->join('kereste_partis','kereste_partis.musteri_id','=', 'musteris.id')
            ->select('kereste_partis.*','musteris.musteriadi')
            ->get();

        $dm3stok = Kereste_parti::where('durum','Depoda')->sum('toplam_dm3');
        $dm3satilan = Kereste_parti::where('durum','Satıldı')->sum('toplam_dm3');


        //return dd($joinTables);

        return view('admin.stok_kereste',compact(['joinTables','dm3stok','dm3satilan','musteriler']));

    }

    public function kereste_musteri_sec(){
        $musteriler = Musteri::all();

       return view('admin.stok_kereste_musterisec',compact(['musteriler']));

    }

    public function kereste_musteri_id($id){
        $secilenMusteriAdi = Musteri::where('id','=',$id)->pluck('musteriadi')->first();
        $musteriler = Musteri::all();

        $joinTables = DB::table('musteris')
            ->join('kereste_partis','kereste_partis.musteri_id','=', 'musteris.id')
            ->select('kereste_partis.*','musteris.musteriadi')
            ->where('musteris.id','=', $id)
            ->get();

        $dm3stok = Kereste_parti::where('musteri_id','=',$id)->where('durum','Depoda')->sum('toplam_dm3');
        $dm3satilan = Kereste_parti::where('musteri_id','=',$id)->where('durum','Satıldı')->sum('toplam_dm3');


        //return dd($joinTables);

        return view('admin.stok_kereste',compact(['joinTables','dm3stok','dm3satilan','musteriler','secilenMusteriAdi']));

    }

    public function stok_kereste_detay($id){

        $joinTables = DB::table('musteris')
            ->join('kereste_partis','kereste_partis.musteri_id', '=','musteris.id')
            ->select('kereste_partis.*','musteris.musteriadi')
            ->orderBy('kereste_partis.id','asc')
            ->get();

        $partiDetaylari = DB::table('kereste_partis')
            ->where('kereste_partis.id',$id)
            ->select('parti_detay')
            ->get();

        $musteriDetay = DB::table('kereste_partis')
            ->join('musteris','kereste_partis.musteri_id', '=','musteris.id')
            ->where('kereste_partis.id',$id)
            ->get();

        $satisKontrol = DB::table('kereste_partis')
            ->where('kereste_partis.id',$id)
            ->select('durum')
            ->first();


        //$json_string = stripslashes($partiDetaylari);
        //return json_decode($partiDetaylari, true);

        $partiDecode = json_decode($partiDetaylari, true);

        $sira1 = $partiDecode[0];

        $datas = array();

        foreach ($sira1 as $s=>$value) {
            $datas = json_decode($value,true);
        }
/*
       for($i=0;$i<count($datas);$i++)
       {
           foreach ($datas[$i] as $data){
               echo " - ". $data;
           }
       }
*/

        $partiID = $id;
        //return view('admin.stok_kereste_detay',compact('datas'),compact('joinTables'),compact('musteriDetay'));
        return view('admin.stok_kereste_detay',compact(['datas', 'joinTables', 'musteriDetay','partiID','satisKontrol']));

    }
    public function stok_kereste_detay_musteri($id){
        $joinTables = DB::table('musteris')
            ->join('kereste_partis','kereste_partis.musteri_id', '=','musteris.id')
            ->select('kereste_partis.*','musteris.musteriadi')
            ->orderBy('kereste_partis.id','asc')
            ->get();

        $partiDetaylari = DB::table('kereste_partis')
            ->where('kereste_partis.id',$id)
            ->select('parti_detay')
            ->get();

        $musteriDetay = DB::table('kereste_partis')
            ->join('musteris','kereste_partis.musteri_id', '=','musteris.id')
            ->where('kereste_partis.id',$id)
            ->get();

        $satisKontrol = DB::table('kereste_partis')
            ->where('kereste_partis.id',$id)
            ->select('durum')
            ->first();


        //$json_string = stripslashes($partiDetaylari);
        //return json_decode($partiDetaylari, true);

        $partiDecode = json_decode($partiDetaylari, true);

        $sira1 = $partiDecode[0];

        $datas = array();

        foreach ($sira1 as $s=>$value) {
            $datas = json_decode($value,true);
        }
/*
       for($i=0;$i<count($datas);$i++)
       {
           foreach ($datas[$i] as $data){
               echo " - ". $data;
           }
       }
*/

        $partiID = $id;
        //return view('admin.stok_kereste_detay',compact('datas'),compact('joinTables'),compact('musteriDetay'));
        return view('admin.stok_kereste_detay_musteri',compact(['datas', 'joinTables', 'musteriDetay','partiID','satisKontrol']));

    }



    public function kereste_cikis_sayfa_musterisec(){
        $musteriler = Musteri::all();

        return view('admin.kereste_cikis_musterisec',compact(['musteriler']));
    }
    public function kereste_cikis_sayfa_musteriid($id){
        $secilenParti_id = null;

        $joinTables = DB::table('musteris')
            ->join('kereste_partis','kereste_partis.musteri_id','=', 'musteris.id')
            ->select('kereste_partis.*','musteris.musteriadi')
            ->where('musteris.id','=', $id)
            ->get();

        return view('admin.kereste_cikis',compact(['joinTables','secilenParti_id']));
    }

    public function kereste_cikis_sayfa()
    {

        $secilenParti_id = null;
        $joinTables = DB::table('musteris')
            ->join('kereste_partis','kereste_partis.musteri_id','=', 'musteris.id')
            ->select('kereste_partis.*','musteris.musteriadi')
            ->get();



        return view('admin.kereste_cikis',compact(['joinTables','secilenParti_id']));

    }

    public function kereste_cikis_sayfa_idli($id){
        $secilenParti_id = Kereste_parti::where('id', $id)->get(['id']);

        $joinTables = DB::table('musteris')
            ->join('kereste_partis','kereste_partis.musteri_id','=', 'musteris.id')
            ->select('kereste_partis.*','musteris.musteriadi')
            ->get();


        return view('admin.kereste_cikis',compact(['secilenParti_id','joinTables']));
    }

    public function kereste_parti_cikis(Request $request){
        $secilenParti = Kereste_parti::find($request->blok_no);

        $secilenParti -> durum = "Satıldı";
        if($secilenParti -> toplam_dm3 > 0)
            $secilenParti -> toplam_dm3 = -1*$secilenParti -> toplam_dm3;

        $secilenParti -> arac_plaka = $request->arac_plaka;
        $secilenParti -> fatura_no = $request->fatura_no;

        $secilenParti -> save();

        return back()->with("success",'Seçilen Parti Ürün "Satıldı"  olarak işaretlendi');
    }

    public function stok_kereste_cikis(Request $request, $id)
    {
        /*$secilenParti = Kereste_parti::find($id);

        $secilenParti -> durum = "Satıldı";
        $secilenParti -> toplam_dm3 = -1*$secilenParti -> toplam_dm3;

        $secilenParti -> save();

        return back()->with("success",'Seçilen Parti Ürün "Satıldı"  olarak işaretlendi');

        */

        return "sat sayfası yapıldı";
    }

    public function stok_kereste_gerial(Request $request, $id)
    {
        $secilenParti = Kereste_parti::find($id);

        $secilenParti -> durum = "Depoda";
        $secilenParti -> toplam_dm3 = -1*$secilenParti -> toplam_dm3;

        $secilenParti -> save();

        return back()->with("success",'Seçilen Parti Ürün "Depoda"  olarak işaretlendi');
    }
    public function stok_kereste_tsil($id)
    {
        $secilenParti = Kereste_parti::find($id);

        $secilenParti -> Delete();

        return redirect()->route('admin.stok_kereste')->with("success",'Seçilen Parti Kalıcı olarak silindi..');
    }



    public function stok_tomruk(){
        $joinTables = DB::table('musteris')
            ->join('hammadde_partis','hammadde_partis.musteri_id', '=','musteris.id')
            ->select('hammadde_partis.*','musteris.musteriadi')
            ->orderBy('hammadde_partis.id','asc')
            ->get();



        return view('admin.stok_tomruk',compact(['joinTables']));
    }


    public function tomruk_cikis_sayfa(){
        $secilenParti_id = 0;

        $joinTables = DB::table('musteris')
            ->join('hammadde_partis','hammadde_partis.musteri_id','=', 'musteris.id')
            ->select('hammadde_partis.*','musteris.musteriadi')
            ->get();

        return view('admin.tomruk_cikis',compact('secilenParti_id','joinTables'));

    }


    public function tomruk_cikis_sayfa_idli($id){
        $secilenParti_id = Hammadde_parti::where('id', $id)->get(['id']);

        $joinTables = DB::table('musteris')
            ->join('hammadde_partis','hammadde_partis.musteri_id','=', 'musteris.id')
            ->select('hammadde_partis.*','musteris.musteriadi')
            ->get();

        return view('admin.tomruk_cikis',compact('secilenParti_id','joinTables'));
    }

    public function tomruk_parti_cikis(Request $request){
        $secilenParti = Hammadde_parti::find($request->blok_no);

        $secilenParti -> durum = "Satıldı";
        if($request->arac_plaka!=null)
            $secilenParti -> cikis_arac_plaka = $request->arac_plaka;
        if($request->fatura_no !=null)
            $secilenParti -> cikis_fatura_no = $request->fatura_no;

        $secilenParti -> save();

        return back()->with("success",'Seçilen partinin Çıkışı yapıldı');

    }
    public function tomruk_parti_sil($id){
        $secilenParti = Hammadde_parti::find($id);

        $secilenParti -> Delete();

        return back()->with('success','Seçilen Parti Silindi');

    }


}
