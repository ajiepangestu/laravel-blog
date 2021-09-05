<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('categories',[
            'title' => 'Categories',
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('posts', [
            'title' => "$category->name",
            'posts' => $category->posts,
            'category' => $category->name
        ]);
    }
}
