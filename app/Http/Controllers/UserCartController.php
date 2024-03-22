<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCartController extends Controller
{
    public function cartPage(){
        return view("user.cart");
    }
}
