<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //
    public function index(){
        $products = Product::paginate(16);
        return view("user.home",compact("products"));
    }
}
