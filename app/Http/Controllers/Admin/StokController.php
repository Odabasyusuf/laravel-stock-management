<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        $joinTables = DB::table('musteris')
            ->join('kereste_partis','kereste_partis.musteri_id','=', 'musteris.id')
            ->select('kereste_partis.*','musteris.musteriadi')
            ->get();

        $dm3stok = Kereste_parti::where('durum','Depoda')->sum('toplam_dm3');
        $dm3satilan = Kereste_parti::where('durum','Satıldı')->sum('toplam_dm3');


        //return dd($joinTables);

        return view('admin.stok_kereste',compact(['joinTables','dm3stok','dm3satilan']));

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
    public function stok_kereste_cikis(Request $request, $id)
    {
        $secilenParti = Kereste_parti::find($id);

        $secilenParti -> durum = "Satıldı";
        $secilenParti -> toplam_dm3 = -1*$secilenParti -> toplam_dm3;

        $secilenParti -> save();

        return back()->with("success",'Seçilen Parti Ürün "Satıldı"  olarak işaretlendi');
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

}
