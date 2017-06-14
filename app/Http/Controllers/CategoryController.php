<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('backend.category.index', [
            'categories' => $categories
        ]);
    }

    public function postAdd(Request $request)
    {
        $category = new Category;
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        if ($category->save()) {
            return redirect()->back()->with('successMessage', 'Berhasil menambahkan kategori '.$category->title);
        }
    }
}
