<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductSaveRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //

    public function products(){
        $products = Product::orderByDesc('created_at')->paginate(10);
        return view("admin.products.products-list",compact("products"));
    }
    public function create(){
        return view('admin.products.create');
    }
    public function save(ProductSaveRequest $request){
        $product =$request->validated();
        if($request->image){
            $image = $request->file('image');
            $fileName = $image->hashName();
             $image->storeAs('images', $fileName);
             $product['image'] = $image->storeAs('images', $fileName);

        }
        Product::create($product);
        return redirect()->route('admin.products')->with('success','Product created successfully');
    }
    public function delete($id){
        $product= Product::find(decrypt($id));
        if($product->image){
            // Storage::delete($product->image);
        }
        if($product->delete()){
            return redirect()->route('admin.products')->with('success','Product deleted successfully');

        }else{
            return redirect()->route('admin.products')->with('error','Product deletion failed');
        }


    }
    public function edit($id){
        $product= Product::find(decrypt($id));
        return view('admin.products.edit',compact('product'));
    }
    public function update(ProductSaveRequest $request){
        $product = Product::find(decrypt($request->id));
        $input = $request->validated();
        if($request->image){
            $image = $request->file('image');
            $fileName = $image->hashName();
             $image->storeAs('images', $fileName);
             $input['image'] = $image->storeAs('images', $fileName);

        }
        $product->update($input);
        return redirect()->route('admin.products')->with('success','Product Updated Succesfully');
    }
}
