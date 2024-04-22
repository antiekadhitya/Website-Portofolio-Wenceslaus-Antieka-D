<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('main',compact('data'));
    }

    public function create()
    {
        return view('create');
    }

    public function view($id)
    {
        $data = User::findOrFail($id);
        return view('view',compact('data'));
    }

    public function post(Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'no_telp'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
        ]);
        $data['password'] = bcrypt('12345');
        User::create($data);
        return redirect('/')->with('success','Data Berhasil ditambahkan');
    }
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('edit',compact('data'));
    }
    public function update($id, Request $request)
    {
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'no_telp'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
        ]);
        User::find($id)->update($data);
        return redirect('/')->with('success','Data Berhasil diubah');
    }
    public function delete($id)
    {
        $data = User::findOrFail($id)->delete();
        return redirect('/')->with('success','Data Berhasil dihapus');
    }
}
