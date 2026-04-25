<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;

class PerusahaanController extends Controller
{
    // tampil semua data
    public function index()
    {
        $data = Perusahaan::all();
        return view('perusahaan.index', compact('data'));
    }

    // tampil form tambah
    public function create()
    {
        return view('perusahaan.create');
    }

    // simpan data ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);

        Perusahaan::create($request->all());

        return redirect('/perusahaan')->with('success', 'Data berhasil ditambahkan');
    }

    // tampil form edit
    public function edit($id)
    {
        $data = Perusahaan::findOrFail($id);
        return view('perusahaan.edit', compact('data'));
    }

    // update data
    public function update(Request $request, $id)
    {
        $data = Perusahaan::findOrFail($id);

        $data->update($request->all());

        return redirect('/perusahaan')->with('success', 'Data berhasil diupdate');
    }

    // hapus data
    public function destroy($id)
    {
        $data = Perusahaan::findOrFail($id);
        $data->delete();

        return redirect('/perusahaan')->with('success', 'Data berhasil dihapus');
    }
}