<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\UserAddressRequest;
use App\Models\User;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function logout(){
        Auth::logout();

        return redirect()->route('home');
    }
    public function profile(){
        $addresses = UserAddress::where('user_id',Auth::user()->id)->get();
        // return $addresses;
        return view("user.profile",compact('addresses'));

    }
    public function updateProfile(ProfileUpdateRequest $request){
        // return $request;
        $user = User::find(decrypt($request->id));
        $input=$request->validated();
        $user->update($input);
        return redirect()->route('profile');
    }
    public function saveAddress(UserAddressRequest $request){
        $address = $request->validated();
        $user_id =decrypt($request->id);
        $address['user_id']=$user_id;
        $address['phone']=$address['number'];
        UserAddress::create($address);
        return back();
    }
    public function deleteAddress($id){
        UserAddress::find(decrypt($id))->delete();
        return back();

    }
}
