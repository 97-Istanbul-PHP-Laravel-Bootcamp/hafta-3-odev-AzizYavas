<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $category = Category::all();

        return view('admin/categoryİndex', compact('category'));

    }

    public function edit($id)
    {
        $categoryedit = Category::findOrFail($id);

        return view('admin/categoryEdit', compact('categoryedit'));

    }

    public function createform()
    {

        return view('admin/categoryCreate');

    }

    public function createfile(Request $request)
    {

        $this->validate(request(), [
            'cname' => 'required',
            'curl' => 'required',
        ]);

        $categorynew = Category::create([

            'title' => $request->cname,
            'description' => $request->cdesc,
            'slug' => $request->curl,
            'status' => $request->cstatus

        ]);

        $categorynew->save();

        //TODO BURADA EKRANA GELEN BİLDİRİMİ SÜRELİ YAPIP YOK EDEMEMEDİM
        return redirect()->route('categoryindex')
            ->with('mesaj', 'Kategori Başarıyla Eklendi')
            ->with('mesaj_tur', 'success');

    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Category::where('id', $request->input('id'))->update([

            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => $request->input('slug'),
            'status' => $request->input('status'),

        ]);

        return redirect()->route('categoryindex')
            ->with('mesaj', 'Kategori Başarıyla Güncellendi')
            ->with('mesaj_tur', 'success');

    }

    public function delete($id)
    {
        Category::where('id',$id)->delete();

        return redirect()->route('categoryindex')
            ->with('mesaj', 'Kategori SİLİNDİ')
            ->with('mesaj_tur', 'danger');

    }
}
