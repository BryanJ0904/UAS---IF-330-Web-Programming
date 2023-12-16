<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatabaseProduk;
use App\Models\DatabaseMesin;

class ProdukCtr extends Controller
{
    public function index()
    {
        $produk = DatabaseProduk::all();
        $mesin = DatabaseMesin::all();

        return view('index', compact('produk', 'mesin'));
    }

    public function showAll()
    {
        $produk = DatabaseProduk::all();

        return view('produk', compact('produk'));
    }

    public function showDetail($id)
    {
        $produk = DatabaseProduk::find($id);

        if (!$produk) {
            abort(404);
        }

        return view('detail', compact('produk'));
    }
}
