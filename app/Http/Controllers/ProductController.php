<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class ProductController extends Controller
{
    public function index()
    {
        //$productA = DB::table('product')
        //->leftJoin('category', 'product.category_id', '=', 'category.id')
        //->get();

        $product = Product::all();

        return view('admin/productindex', compact('product'));

    }

    public function edit($id = null)
    {
        //$categorylist = Category::findOrFail($id);

        $categorylist = Category::where('status', '=', 'a')->get(['id', 'title']);

        $productedit = Product::findOrFail($id);

        return view('admin/productEdit', compact('productedit', 'categorylist'));
    }

    public function productform()
    {
        $categorieslist = Category::where('status', '=', 'a')->get(['id', 'title']);
        //$userslist = User::where('status', '=', 'a')->get(['id', 'fname', 'lname']);

        return view('admin/productCreate', compact('categorieslist'));
    }

    public function createproduct(Request $request)
    {

        $this->validate(request(), [
            'productunicode' => 'required',
            'productuserid' => 'required',
            'producturl' => 'required',
            'producttitle' => 'required',
            'productdesc' => 'required',
            'productorder' => 'required',
            'productprc' => 'required',
            'productcid' => 'required',
            'prcategoryid' => 'required',
            'productstatus' => 'required',

        ]);

        $productnew = Product::create([

            'unicode' => $request->productunicode,
            'user_id' => $request->productuserid,
            'slug' => $request->producturl,
            'title' => $request->producttitle,
            'description' => $request->productdesc,
            'order' => $request->productorder,
            'prc' => $request->productprc,
            'cid' => $request->productcid,
            'category_id' => $request->prcategoryid,
            'status' => $request->productstatus,


        ]);

        $productnew->save();

        return redirect()->route('productindex')
            ->with('mesaj', 'Ürün Başarıyla Eklendi')
            ->with('mesaj_tur', 'success');

    }

    public function productupdate(Request $request)
    {
        $request->validate([
            'productunicode' => 'required',
            'productuserid' => 'required',
            'producturl' => 'required',
            'producttitle' => 'required',
            'productdesc' => 'required',
            'productorder' => 'required',
            'productprc' => 'required',
            'productcid' => 'required',
            'prcategoryid' => 'required',
            'productstatus' => 'required',
        ]);

        Product::where('id', $request->input('id'))->update([

            'unicode' => $request->input('productunicode'),
            'user_id' => $request->input('productuserid'),
            'slug' => $request->input('producturl'),
            'title' => $request->input('producttitle'),
            'description' => $request->input('productdesc'),
            'order' => $request->input('productorder'),
            'prc' => $request->input('productprc'),
            'cid' => $request->input('productcid'),
            'category_id' => $request->input('prcategoryid'),
            'status' => $request->input('productstatus'),


        ]);

        return redirect()->route('productindex')
            ->with('mesaj', 'Kategori Başarıyla Güncellendi')
            ->with('mesaj_tur', 'success');
    }


    public function delete($id)
    {
        Product::where('id',$id)->delete();

        return redirect()->route('productindex')
            ->with('mesaj', 'Ürün Başarıyla SİLİNDİ')
            ->with('mesaj_tur', 'danger');

    }

}
