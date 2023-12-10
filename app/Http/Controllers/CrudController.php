<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatabaseLogin;
use App\Models\DatabaseProduk;
use Illuminate\Support\Facades\Storage;

class CrudController extends Controller
{
    public function index()
    {
        $user = DatabaseLogin::where('username', session('username'))->first();

        if (!$user) {
            return redirect('/');
        }

        if ($user->role == 'admin') {
            $data = DatabaseProduk::all();

            return view('crud', compact('data'));
        } else {
            return redirect('/');
        }
    }

    public function addData(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'part_no' => 'required',
            'part_name' => 'required',
            'deskripsi' => 'required',
        ]);

        $gambarPath = $request->file('gambar')->store('produk', 'public');

        DatabaseProduk::create([
            'gambar' => $gambarPath,
            'part_no' => $request->input('part_no'),
            'part_name' => $request->input('part_name'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect('/crud')->with('success', 'Data berhasil nambah');
    }

    public function deleteData($id)
    {
        $data = DatabaseProduk::find($id);

        if ($data) {
            Storage::disk('public')->delete($data->gambar);

            $data->delete();
            return redirect('/crud')->with('success', 'Data hapusd');
        } else {
            return redirect('/crud')->with('error', 'Data gak ada');
        }
    }

    public function editForm($id)
    {
        $data = DatabaseProduk::find($id);

        return view('edit', compact('data'));
    }

    public function updateData(Request $request, $id)
    {
        $request->validate([
            'part_no' => 'required',
            'part_name' => 'required',
            'deskripsi' => 'required',
        ]);

        $data = DatabaseProduk::find($id);

        if (!$data) {
            return redirect('/crud')->with('error', 'Data tidak ditemukan');
        }

        $data->part_no = $request->input('part_no');
        $data->part_name = $request->input('part_name');
        $data->deskripsi = $request->input('deskripsi');

        if ($request->hasFile('gambar')) {
            // inget vit ini buat Hapus gambar lama
            Storage::disk('public')->delete($data->gambar);

            $gambarPath = $request->file('gambar')->store('produk', 'public');
            $data->gambar = $gambarPath;
        }

        $data->save();

        return redirect('/crud')->with('success', 'Data berhasil diupdate');
    }
}