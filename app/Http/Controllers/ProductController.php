<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('Products.product', compact('products'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('products.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('Products.product_edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }

    // ORDENAR POR ID DESCENDENTE
    public function product_sort()
    {
        $products_desc = Product::orderBy('id', 'desc')->get();
        $products = Product::all();
        return view('Products.product', compact('products', 'products_desc'));
    }

    public function product_quantity_asc()
    {
        $products_asc = Product::orderBy('quantity', 'asc')->get();
        $products = Product::all();
        return view('Products.product_quantity', compact('products', 'products_asc'));
    }

    public function product_alfabetico()
    {
        $products_name = Product::orderBy('name', 'asc')->get();
        $product = Product::all();
        return view('Products.product_alfabetico', compact('products_name', 'product'));
    }

    public function product_search(Request $request)
    {
        $products_search = Product::where('name', 'LIKE', "%{$request->name}%")->get();
        return view('Products.product_search', compact('products_search'));
    }   

    public function product_max()
    {
        $product_max = Product::orderBy('price', 'desc')->first();
        return view('Products.product_max', compact('product_max'));
    }

    public function product_letter_a()
    {
        $products_letter_a = Product::where('name', 'LIKE', "A%")->get();
        $products = Product::all();
        return view('Products.product_letter_a', compact('products_letter_a', 'products'));
    }

    public function product_sum()
    {
        $product_sum = Product::sum('price');
        return view('Products.product_sum', compact('product_sum'));
    }
}
