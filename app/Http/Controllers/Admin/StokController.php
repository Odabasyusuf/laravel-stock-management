<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
            ->join('kalite_kereste','kalite_kereste.kalite_kodu', '=','kereste_partis.urun_kalitesi')
            ->select('kereste_partis.*','musteris.musteriadi','kalite_kereste.kalite_adi')
            ->get();

        //return dd($joinTables);

        return view('admin.stok_kereste',compact('joinTables'));

    }

    public function stok_kereste_detay($id){

        $joinTables = DB::table('musteris')
            ->join('kereste_partis','kereste_partis.musteri_id', '=','musteris.id')
            ->join('kalite_kereste','kalite_kereste.kalite_kodu','=', 'kereste_partis.urun_kalitesi')
            ->select('kereste_partis.*','musteris.musteriadi','kalite_kereste.kalite_adi')
            ->get();

        $partiDetaylari = DB::table('kereste_partis')
            ->where('kereste_partis.id',$id)
            ->select('parti_detay')
            ->get();

        $musteriDetay = DB::table('kereste_partis')
            ->join('musteris','kereste_partis.musteri_id', '=','musteris.id')
            ->where('kereste_partis.id',$id)
            ->get();



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
        return view('admin.stok_kereste_detay',compact(['datas', 'joinTables', 'musteriDetay','partiID']));

    }
}
