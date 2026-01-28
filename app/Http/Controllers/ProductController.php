<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\CheckTimeAccess;

class ProductController extends Controller
{
    //
    public function middleware() {
        return [
            CheckTimeAccess::class,
        ];
    }

    public function index() {
        $title = "Danh sach san pham";
        return view('product.index', ['title' => $title, 
            'products' =>[
               ['id' => 1, 'name' => 'Product A', 'price' => 100],
               ['id' => 2, 'name' => 'Product B', 'price' => 200],
               ['id' => 3, 'name' => 'Product C', 'price' => 300],
            ] 
        ]);
    }
    public function getDetail($id="123") {
        return view('product.detail', ['id' => $id]);
    }
    public function create() {
        return view('product.add');
    }
    public function store(Request $request) {
        var_dump($request->input());
        // $name = $request->input('name');
        // $price = $request->input('price');
        // return redirect()->route('index');
        // return $request->all();
        // var_dump($request->all());
    }
    
    
}
