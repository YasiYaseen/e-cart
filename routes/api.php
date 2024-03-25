<?php

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/update-cart', function (Request $request) {

   $validator = $request->validate([
    'user_id'=>['required'],
    'product_id'=>['required'],
    'quantity'=>['required','integer','min:1'],
   ]);

   $cart = Cart::where('user_id',$validator['user_id'])->where('product_id',$validator['product_id'])->first();
   if ($cart) {
$cart->update([
    'quantity'=>$validator['quantity']
]);
return ['message'=>'Success'];

   }else{
       return ['message'=>'failed'];

   }


});
