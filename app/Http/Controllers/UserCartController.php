<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserCartController extends Controller
{
    public function cartPage()
    {
        $cart=Cart::where("user_id", auth()->user()->id)->where('order_placed','=','0')->orderBy("created_at","desc")->get();

        return view("user.cart",compact("cart"));
    }
    public function details($id)
    {
        $product = Product::find(decrypt($id));
        return view("user.product_details", compact("product"));
    }
    public function AddToCart(Request $request)
    {
        $validator =   Validator::make($request->all(), [
            'quantity' => 'required|min:1',
            'product_id' => 'required',
        ]);
        $input =  $validator->validated();
        $input['product_id'] = decrypt($input['product_id']);
      Cart::updateOrCreate(['user_id' => auth()->user()->id, 'product_id' => $input['product_id']], $input);
        return redirect()->route('cart');
    }
    public function delete($id){
        Cart::find(decrypt($id))->delete();
        return redirect()->route('cart');

    }
}
