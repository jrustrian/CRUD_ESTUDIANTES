<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;
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
}
