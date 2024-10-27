<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\siswa;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class GuruController extends Controller
{
    public function index(){
        // Ambil semua data siswa dari database
    $siswas = siswa::all();


    // Kirim data siswa ke view index.blade.php
    return view('guru.index', compact('siswas'));
    }



    public function edit(string $id): view {
        // mengatur/ambil data berdasarkan ID
        $siswa = siswa::findOrFail($id);
        //findOrFail : untuk mengambil sebuah record dari db berdasarkan id
        // mengirimkan data product ke view

        return view('guru.edit', compact('siswa'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'status' => 'required',
        ]);

        $siswa = siswa::findOrFail($id);

        $siswa->update([
            'status' => $request->status,
        ]);

        //redirect to index
        return redirect()->route('guru.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

}
