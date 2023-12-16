<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatabaseLogin;
use App\Models\DatabaseProduk;
use App\Models\DatabaseMesin;
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
            $data1 = DatabaseProduk::all();
            $data2 = DatabaseMesin::all();

            return view('crud', compact('data1', 'data2'));
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

        $action = $request->input('action');

        switch ($action) {
            case 'tambah_produk':
                $gambarPath = $request->file('gambar')->store('produk', 'public');
                DatabaseProduk::create([
                    'gambar' => $gambarPath,
                    'part_no' => $request->input('part_no'),
                    'part_name' => $request->input('part_name'),
                    'deskripsi' => $request->input('deskripsi'),
                ]);
                break;
            case 'tambah_mesin':
                $gambarPath = $request->file('gambar')->store('mesin', 'public');
                DatabaseMesin::create([
                    'gambar' => $gambarPath,
                    'part_no' => $request->input('part_no'),
                    'part_name' => $request->input('part_name'),
                    'deskripsi' => $request->input('deskripsi'),
                ]);
                break;
        }

        return redirect('/crud')->with('success', 'Data berhasil nambah');
    }

    public function deleteData(Request $request, $id)
    {
        $routeName = $request->route()->getName();
        switch ($routeName) {
            case 'delete-produk':
                $data = DatabaseProduk::find($id);
                break;
            case 'delete-mesin':
                $data = DatabaseMesin::find($id);
                break;
        }
        if ($data) {
            Storage::disk('public')->delete($data->gambar);

            $data->delete();
            return redirect('/crud')->with('success', 'Data hapus');
        } else {
            return redirect('/crud')->with('error', 'Data gak ada');
        }
    }

    public function editForm(Request $request, $id)
    {
        $routeName = $request->route()->getName();
        switch ($routeName) {
            case 'edit-produk':
                $data = DatabaseProduk::find($id);
                $action = 'edit-produk';
                break;
            case 'edit-mesin':
                $data = DatabaseMesin::find($id);
                $action = 'edit-mesin';
                break;
        }
        return view('edit', compact('data', 'action'));
    }

    public function updateData(Request $request, $id)
    {
        $request->validate([
            'part_no' => 'required',
            'part_name' => 'required',
            'deskripsi' => 'required',
        ]);

        $routeName = $request->route()->getName();
        switch ($routeName) {
            case 'update-produk':
                $data = DatabaseProduk::find($id);
            case 'update-mesin':
                $data = DatabaseMesin::find($id);
        }

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