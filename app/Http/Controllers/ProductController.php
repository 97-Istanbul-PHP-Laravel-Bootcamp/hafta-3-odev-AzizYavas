<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        return view('admin/productindex');

    }

    public function edit(){

        return view('admin/productedit');
    }
}
