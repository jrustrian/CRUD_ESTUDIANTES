<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
Use Session;
class CategoryController extends Controller
{
    public function create()
    {
        return view("category.create");
    }



    public function store(CreateCategoryRequest $request)
    {
        $data = $request->all();

        Category::create([


            'description' => $data['description'],

        ]);
        Session::flash('save','Se ha registrado correctamente');
        return redirect()->route('category-add');
    }

    public function index()
    {
        $categorys = Category::all();
        return view('category.read', compact('categorys'));
    }
    public function delete($id)
    {
        Category::find($id)->delete();
        Session::flash('delete','Se ha eliminado correctamente');
        return redirect()->route('category-visualize');

    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('category.edit', [

            'category' => $category,
        ]);

    }

    public function update(UpdateCategoryRequest  $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->description = $request->description;


        $category->save();
        Session::flash('update','Se ha actualizado correctamente');
        return redirect()->route('category-visualize');
    }

}
