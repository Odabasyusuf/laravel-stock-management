<?php

namespace App\Http\Controllers\Admin\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Hammadde_parti;
use App\Models\Kereste_parti;
use App\Models\Musteri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class M_MusteriController extends Controller
{
    public function index()
    {
        $musteriler = Musteri::all();
        //$musteriler = Musteri::orderBy("musteriadi",'asc')->get();

        foreach ($musteriler as $musteri)
        {
            $musteriMamulVar[$musteri->id]= Kereste_parti::where('musteri_id','=',$musteri->id)->first();
        }
        foreach ($musteriler as $musteri)
        {
            $musteriHammaddeVar[$musteri->id]= Hammadde_parti::where('musteri_id','=',$musteri->id)->first();
        }

        return view('admin.mobile.m_musteri_listesi',compact(['musteriler','musteriMamulVar','musteriHammaddeVar']));
    }
    public function edit($id)
    {
        $musteri =  DB::select('SELECT * from musteris WHERE Id=?',[$id]);

        return view('admin.mobile.m_musteri_duzenle',compact('musteri'));
    }
    public function update(Request $request, $id)
    {
        $musteri = Musteri::find($id);

        $musteri -> musteriadi = $request->musteri_adi;
        $musteri -> tel = $request->musteri_tel;
        $musteri -> adres = $request->musteri_adres;

        $musteri->save();

        return redirect(route('admin.mobile.musterilistesi'))->with('success', 'Müşteri Bilgisi Düzenlendi.');
    }
    public function sil($id)
    {
        $musteri = Musteri::find($id);

        $musteri -> Delete();

        return back()->with('success','Müşteri Silindi');
    }
}
