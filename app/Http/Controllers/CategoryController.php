<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $category = Category::all();

        return view('admin/categoryİndex',compact('category'));

    }

    public function edit(){

        $categoryedit = Category::all();

        return view('admin/categoryEdit',compact('categoryedit'));
    }

}
