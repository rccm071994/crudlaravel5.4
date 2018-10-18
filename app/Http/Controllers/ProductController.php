<?php

namespace rccm\Http\Controllers;

use Illuminate\Http\Request;
use rccm\Product;
use rccm\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
      $products = Product::orderBy('id', 'DESC')->paginate();
      return view('products.index', compact('products'));
    }

    public function create()
    {
      return view('products.create');
    }
    public function store(ProductRequest $request)
    {
      return 'products guardado';
    }

    public function edit($id)
    {
      $product =  Product::find($id);
      return view('products.edit', compact('product'));
    }

    public function update(ProductRequest $request, $id)
    {
      return 'products actualizado' . $id;
    }

    public function show($id)
    {
      $product =  Product::find($id);
      return view('products.show', compact('product'));
    }

    public function destroy($id)
    {
      $product = Product::find($id);
      $product->delete();

      return back()->with('info', 'El producto fue eliminado');
    }
}
