<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{


    public function home()
    {
        $menu = Menu::all();
        return view('ui.home', compact('menu'));
    }

    public function menu()
    {
        return view('admin.menu');
    }

    public function tamnbahmenu(Request $request)
    {

        $this->validate($request,[
            'nama_makanan'=>"required|string|unique:menus",
            'deskripsi'=> "required|string",
            'harga'=>"required|string",
            'gambar'=>"required",
        ]);

        if ($request->file('gambar')) {
            $file = $request->file('gambar')->store('menu');
        }

        Menu::create([
            "nama_makanan" => $request->input('nama_makanan'),
            "deskripsi" => $request->input('deskripsi'),
            "harga" => $request->input('harga'),
            "gambar" => $file,
        ]);
        return redirect()->route('home');
    }
}
