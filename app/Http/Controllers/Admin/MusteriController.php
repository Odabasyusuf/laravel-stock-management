<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Musteri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MusteriController extends Controller
{

    public function index()
    {
        // $musteriler = Musteri::all();
        $musteriler = Musteri::orderBy("musteriadi",'asc')->get();

        return view('admin.musteri_listesi',compact('musteriler'));
    }


    public function create()
    {
        $musteriler = Musteri::orderBy("musteriadi",'asc')->get();

        return view('admin.musteri_ekle',compact('musteriler'));

    }


    public function store(Request $request)
    {
        // model kullanarak kayıt //

        //Veritabanında aynı veri varsa kaydetme !


        $musteri = new Musteri();

        $musteri->musteriadi = $request->musteri_adi;
        $musteri->tel = $request->musteri_tel;
        $musteri->adres = $request->musteri_adres;


        $ayniVeri = DB::table('musteris')->where('musteriadi', '=', $request->musteri_adi);
        $check = $ayniVeri->count();

        if ($check > 0) {
            $request->flash();
            return back()->with('message', 'Aynı isimde müşteri mevcut..');
        } else {
            $musteri->save();
            return redirect(route('admin.musteriler'))->with('success', 'Müşteri Kaydı Başarılı..');
        }



    }


    public function show($id)
    {
        return view('admin.musteri_ekle');
    }


    public function edit($id)
    {
        $veri =  DB::select('SELECT * from musteris WHERE Id=?',[$id]);

        return view('admin.musteri_duzenle',compact('veri'));
    }


    public function update(Request $request, $id)
    {
        $musteri = Musteri::find($id);

        $musteri -> musteriadi = $request->musteri_adi;
        $musteri -> tel = $request->musteri_tel;
        $musteri -> adres = $request->musteri_adres;

        $musteri->save();

        return redirect(route('admin.musteriler'))->with('success', 'Müşteri Bilgisi Düzenlendi.');
    }


    public function destroy($id)
    {
        $musteri = Musteri::find($id);

//        $musteri -> Delete();

        return back()->with('success','Müşteri Silindi');


    }
}
