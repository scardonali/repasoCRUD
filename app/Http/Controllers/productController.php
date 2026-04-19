<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('gestion_productos')->with('products',$products);
    }

    public function create()
    {
        return view('crear_productos');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->nombre;
        $product->description = $request->descripcion;
        $product->price = $request->precio;
        $product->save();

        return redirect()->route('productos.index');
    }

    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('editar_productos',)->with('product',$product);
    }

    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->name = $request->nombre;
        $product->description = $request->descripcion;
        $product->price = $request->precio;
        $product->save();

        return redirect()->route('productos.index');
    }

    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('productos.index');
    }
}