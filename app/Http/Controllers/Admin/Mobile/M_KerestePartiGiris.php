<?php

namespace App\Http\Controllers\Admin\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class M_KerestePartiGiris extends Controller
{
    public function index(){
        return view('admin.mobile.kereste_parti_giris');
    }
}
