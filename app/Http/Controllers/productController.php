<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        return view('products.index');
    }
    public function create(){
        return view('products.create');
    }
public function save(Request $request){

// **********************************************************
//       note: this method make a validate to data
// **********************************************************
        $data = $request->validate([
            'name' => 'required',
            'qty'=>'required|numeric',
            'price' =>'required|decimal:0,2',
            'description'=>'nullable'
        ]);

        $product = Product::create($data);

        // or like this

//    $product = new Product();
//    $product->fill($data);
//    $product->save();

//// **********************************************************
//       note: this method doesn't make a validate to data
// **********************************************************

//    $product = new Product();
//    $product->name = $request->name;
//    $product->qty = $request->qty;
//    $product->price = $request->price;
//    $product->description = $request->description;
//    $product->save();


        return redirect(route('product.index'));

}
}
