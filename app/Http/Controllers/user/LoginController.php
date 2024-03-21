<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view("user.login");
    }
    public function doLogin(UserLoginRequest $request)
    {
        $input = $request->validated();
        if (auth()->attempt($input, $request->remember)) {
            return redirect()->route("home")->with("success", "Login Succesful");
        } else {
            return redirect()->route("login")->with("error", "Login Failed");
        }
    }

    public function register()
    {
        return view("user.register");

    }

}
