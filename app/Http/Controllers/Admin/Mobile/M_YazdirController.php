<?php

namespace App\Http\Controllers\Admin\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class M_YazdirController extends Controller
{

    public function index(){

    }

    public function stok_mamul_yazdir($id){

        $joinTables = DB::table('musteris')
            ->join('kereste_partis','kereste_partis.musteri_id', '=','musteris.id')
            ->select('kereste_partis.*','musteris.musteriadi')
            ->orderBy('kereste_partis.id','asc')
            ->get();

        $partiDetaylari = DB::table('kereste_partis')
            ->where('kereste_partis.id',$id)
            ->select('parti_detay')
            ->get();

        $partiHepsi = DB::table('kereste_partis')
            ->join('musteris','kereste_partis.musteri_id', '=','musteris.id')
            ->where('kereste_partis.id',$id)
            ->get();


        $partiDecode = json_decode($partiDetaylari, true);

        $sira1 = $partiDecode[0];

        $datas = array();

        foreach ($sira1 as $s=>$value) {
            $datas = json_decode($value,true);
        }

        $parti_id = $id;


        return view('admin.mobile.m_mamul_yazdir',compact(['datas', 'joinTables', 'partiHepsi', 'parti_id']));
    }
}
