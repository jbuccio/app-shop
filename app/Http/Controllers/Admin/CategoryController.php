<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;

class CategoryController extends Controller
{
  public function index()
  {
    $categories = Category::orderBy('name')->paginate(10);
    return view('admin.categories.index')->with(compact('categories')); //listado
  }

  public function create()
  {
    return view('admin.categories.create'); //formulario de registro
  }

  public function store(Request $request)
  {
    //validar
    $this->validate($request, Category::$rules, Category::$messages);

    //registrar la nueva categoria en la bd
    Category::create($request->all()); // mass assignment

    return redirect('/admin/categories');
  }

  public function edit(Category $category)
  {
    return view('admin.categories.edit')->with(compact('category')); //formulario de edicion
  }

  public function update(Request $request, Category $category)
  {
    //validar
    $this->validate($request, Category::$rules, Category::$messages);

    //editar el categoria en la bd
    $category ->update($request->all());

    return redirect('/admin/categories');
  }

  public function destroy(Category $category)
  {
    //eliminar el producto en la bd
    $category->delete(); //DELETE

    return back();
  }
}
