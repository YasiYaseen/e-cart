<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserCartController extends Controller
{
    public function cartPage()
    {
        $cart = Cart::where("user_id", auth()->user()->id)->orderBy("created_at", "desc")->get();

        return view("user.cart.cart", compact("cart"));
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
    public function delete($id)
    {
        Cart::find(decrypt($id))->delete();
        return redirect()->route('cart');
    }

    public function selectAddress()
    {

        $addresses = UserAddress::where('user_id', Auth::user()->id)->get();

        return view('user.cart.select-address', compact('addresses'));
    }
    public function finish(Request $request)
    {
        $validator =   Validator::make($request->all(), [
            'address' => ['required'],
        ]);
        $input =  $validator->validated();
        $address = UserAddress::find(decrypt($input['address']));
        $addressText = $address->addressText();
        $cartItems = Cart::where('user_id', auth()->user()->id)->get(['id', 'user_id', 'product_id', 'quantity']);
        if (count($cartItems) != 0) {
           $order = Order::create([
                'user_id' => auth()->user()->id,
                'address' => $addressText,
            ]);
            foreach ($cartItems as $cartItem) {
                OrderProduct::create([
                    'order_id'=>$order->id,
                    'product_id' => $cartItem->product_id,
                    'quantity' => $cartItem->quantity,
                ]);
                $cartItem->delete();
            }
        } else {
            return back();
        }

        return redirect()->route('orders');
    }

    public function orders()
    {
        $orders = Order::where('user_id', Auth::user()->id)->orderByDesc('created_at')->get();
        return view('user.cart.orders', compact('orders'));
    }
}
