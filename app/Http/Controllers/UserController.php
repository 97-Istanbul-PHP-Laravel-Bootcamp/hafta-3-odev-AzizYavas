<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();

        return view('admin/userindex',compact('user'));
    }

    public function edit($id = null)
    {
        //$categorylist = Category::findOrFail($id);

        //$categorylist = Category::where('status', '=', 'a')->get(['id', 'title']);

        $userdit = User::findOrFail($id);

        return view('admin/userEdit', compact('userdit'));
    }

    public function userform()
    {
        //$userlist = Category::where('status', '=', 'a')->get(['id', 'title']);
        //$userslist = User::where('status', '=', 'a')->get(['id', 'fname', 'lname']);

        return view('admin/userCreat');
    }

    public function createuser(Request $request)
    {

        $this->validate(request(), [
            'uname' => 'required',
            'pass' => 'required',
            'mail' => 'required',
            'mpno' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'status' => 'required',

        ]);

        $usernew = User::create([

            'uname' => $request->uname,
            'pass' => $request->pass,
            'mail' => $request->mail,
            'mpno' => $request->mpno,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'status' => $request->status,

        ]);

        $usernew->save();

        return redirect()->route('userindex')
            ->with('mesaj', 'Kullancı Başarıyla Eklendi')
            ->with('mesaj_tur', 'success');

    }

    public function userupdate(Request $request)
    {

        $request->validate([
            'uname' => 'required',
            'pass' => 'required',
            'mail' => 'required',
            'mpno' => 'required',
            'fname' => 'required',
            'lname' => 'required',
            'status' => 'required',
        ]);

        User::where('id', $request->input('id'))->update([

            'uname' => $request->input('uname'),
            'pass' => $request->input('pass'),
            'mail' => $request->input('mail'),
            'mpno' => $request->input('mpno'),
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'status' => $request->input('status'),


        ]);

        return redirect()->route('userindex')
            ->with('mesaj', 'Kullanıcı Başarıyla Güncellendi')
            ->with('mesaj_tur', 'success');
    }

    public function delete($id)
    {
        User::where('id',$id)->delete();

        return redirect()->route('userindex')
            ->with('mesaj', 'Kullanıcı Başarıyla SİLİNDİ')
            ->with('mesaj_tur', 'danger');

    }



}
