<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
//    function to return main view
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);


    }
//    function to return create view
    public function create()
    {
        return view('products.create');
    }
//    function to save product to DB
    public function save(Request $request)
    {

// **********************************************************
//       note: this method make a validate to data
// **********************************************************
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
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
//    function to return edit view
    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }
    public function update(Product $product,Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);
        $product->update($data);

        return redirect(route('product.index'))->with('success','Product Update Successfully');
    }
    public function delete(Product $product)
    {
        $product->delete();

        return redirect(route('product.index'))->with('successDelete','Product deleted Successfully');
    }

}
