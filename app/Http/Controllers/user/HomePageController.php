<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //
    public function index($sorting='created_at'){
        $products = Product::orderByDesc('created_at')->paginate(16);
        return view("user.home",compact("products"));
    }

}
