<?php

namespace App\Http\Controllers\Admin\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class M_LoginController extends Controller
{
    public function index()
    {
        return view('admin.mobile.m_login');
    }

    public function login(Request $request)
    {
        $remember = $request->has('remember') ? true : false;
        if($request->isMethod('post')){
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin', 'active' => 'True'],$remember)){
                return redirect('/mobile');
            }else {
                return redirect('/mobile/login')->with('message','Hatalı Kullanıcı Adı yada Şifre');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/mobile/login')->with('success','Çıkış Başarılı');
    }
}
