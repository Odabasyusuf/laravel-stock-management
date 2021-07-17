<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hammadde_parti;
use App\Models\Kereste_parti;
use App\Models\Musteri;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('admin');
    }


    public function index()
    {
        $musteriSay = count(Musteri::orderBy("musteriadi",'asc')->get());

        $hammaddeStok = count(Hammadde_parti::where('durum' ,'=','Depoda')->get());

        $mamulStok = count(Kereste_parti::where('durum' ,'=','Depoda')->get());

        $mamulStokDm3 = Kereste_parti::where('durum','Depoda')->sum('toplam_dm3');

        return view('admin.anasayfa',compact(['musteriSay','hammaddeStok','mamulStok','mamulStokDm3']));
    }
    public function mobile_index()
    {
        return view('admin.mobile.anasayfa');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
