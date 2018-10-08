<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //登陆
    public function login()
    {

    }
    //退出
    public function logout()
    {
        \Auth::logout();
        session()->flash('操作成功','退出成功');
        return redirect('/');
    }
}
