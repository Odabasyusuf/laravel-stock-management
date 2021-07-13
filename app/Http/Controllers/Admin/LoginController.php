<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("admin.login");
    }

    public function login(Request $request)
    {
        $remember = $request->has('remember') ? true : false;
        if($request->isMethod('post')){
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin', 'active' => 'True'],$remember)){
                return redirect('/admin');
            }else {
                return redirect('/admin/login')->with('message','Hatalı Kullanıcı Adı yada Şifre');
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login')->with('success','Çıkış Başarılı');
    }
}
