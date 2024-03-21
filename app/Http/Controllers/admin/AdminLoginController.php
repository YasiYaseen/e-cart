<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function loginPage(){
        return view("admin.login");
    }
    public function doLogin(AdminLoginRequest $request){
        if(auth('admin')->attempt($request->only("username","password"))){
            return redirect()->route('admin.dashboard');
        }else{
        return redirect()->route('admin.login')->with('error','Login Failed');
        }

    }
    public function logout(){
        auth('admin')->logout();
        return redirect()->route('admin.login');
    }
}
