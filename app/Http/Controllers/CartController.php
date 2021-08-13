<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {

        //$saleA = DB::table('sale')
        //->leftJoin('product', 'sale.product_id', '=', 'product.id')
        //->get();

        $sale = Sale::all();

        return view('admin/cartİndex', compact('sale'));

    }

    public function edit($id = null)
    {

        $productname = Product::where('status', '=', 'p')->get(['id','title']);

        $saleedit = Sale::findOrFail($id);

        return view('admin/cartEdit', compact('saleedit','productname'));

    }


    //public function cartcreateform()
    //{
      //  $productname = Product::where('id',$id)->get(['id','title']);
    //return view('admin/cartEdit');
    //}

    public function cartupdate(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'orid' => 'required',
            'product_id' => 'required',
            'code' => 'required',
            'prc' => 'required',
            'cid' => 'required'

        ]);

        Sale::where('id', $request->input('id'))->update([

            'user_id' => $request->input('user_id'),
            'orid' => $request->input('orid'),
            'product_id' => $request->input('product_id'),
            'code' => $request->input('code'),
            'prc' => $request->input('prc'),
            'cid' => $request->input('cid'),


        ]);

        return redirect()->route('cartindex')
            ->with('mesaj', 'Satılan Ürün Bilgileri Güncellendi')
            ->with('mesaj_tur', 'success');

    }

    public function delete($id)
    {
        Sale::where('id', $id)->delete();

        return redirect()->route('cartindex')
            ->with('mesaj', 'Ürün Başarıyla SİLİNDİ')
            ->with('mesaj_tur', 'danger');

    }


}
