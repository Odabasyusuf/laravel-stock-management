<?php

namespace App\Http\Controllers\Admin\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function musteri_listesi(){
        return view('admin.mobile.m_musteri_listesi');
    }
}
