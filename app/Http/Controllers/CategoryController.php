<?php

namespace rccm\Http\Controllers;

use Illuminate\Http\Request;
use rccm\Category;
use rccm\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
      $categorys = Category::orderBy('id', 'DESC')->paginate();
      return view('categorys.index', compact('categorys'));
    }
    public function create()
    {
      return view('categorys.create');
    }

    public function store(CategoryRequest $request)
    {
      $category = new Category;

      $category->name        = $request->name;
      $category->description = $request->description;

      $category->save();

      return redirect()->route('categorys.index')
                      ->with('info', 'La Categoria fue creado');
    }

    public function edit($id)
    {
      $category = Category::find($id);
      return view('categorys.edit', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
      $category = Category::find($id);

      $category->name        = $request->name;
      $category->description = $request->description;

      $category->save();

      return redirect()->route('categorys.index')
                      ->with('info', 'La Categoria fue actualizado');
    }

    public function show($id)
    {
      $category = Category::find($id);
      return view('categorys.show', compact('category'));
    }

    public function destroy($id)
    {
      $category = Category::find($id);
      $category->delete();

      return back()->with('info', 'La Categoria fue eliminado');
    }
}
