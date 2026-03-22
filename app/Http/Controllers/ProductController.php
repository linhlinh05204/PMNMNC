<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\CheckTimeAccess;
use App\Models\Product;

class ProductController extends Controller
{
    //
    // public function middleware() {
    //     return [
    //         CheckTimeAccess::class,
    //     ];
    // }

    public function index() {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }
    public function getDetail($id="123") {
        return view('product.detail', ['id' => $id]);
    }
    public function create() {
        return view('product.add');
    }
    public function store(Request $request) {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->save();
        return redirect()->route('index');
    }
    public function show($id) {
        $product = Product::find($id);
        return view('product.detail', ['product' => $product]);
    }
    public function edit($id) {
        $product = Product::find($id);
        return view('product.edit', ['product' => $product]);
    }
    public function update(Request $request, $id) {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->save();
        return redirect()->route('index');
    }
    public function delete($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('index');
    }
    
    
}
