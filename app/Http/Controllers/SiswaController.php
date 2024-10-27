<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\siswa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SiswaController extends Controller
{

    public function index(){
        // Ambil semua data siswa dari database
    $siswas = siswa::all();


    // Kirim data siswa ke view index.blade.php
    return view('siswa.index', compact('siswas'));
    }

    // public function search(Request $request): View{
    //     $searchTerm = $request->input('search'); // Mendapatkan query pencarian dari input

    //     // Melakukan pencarian berdasarkan term pencarian
    //     $products = Product::where('title', 'like', '%' . $searchTerm . '%')
    //                        ->latest()
    //                        ->paginate(10); // Menggunakan pagination jika perlu

    //     return view('products.index', compact('products', 'searchTerm'), ['searchTerm' => $searchTerm]);
    // }

    public function create(){
        return view('siswa.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'pelapor'=> 'required|string',
            'terlapor'=> 'required|string',
            'kelas'=> 'required|string',
            'laporan'=> 'required|string',
            'foto'=> 'required|image|mimes:jpeg,jpg,png,afiv|max:2048',
        ]);

        // $foto = $request->file('foto');
        // $foto->store('public/bukti', $foto->hashName(), 'public');

        $foto = $request->file('foto')->store('bukti', 'public');


        siswa::create([
            'pelapor'=> $request->pelapor,
            'terlapor'=> $request->terlapor,
            'kelas'=> $request->kelas,
            'laporan'=> $request->laporan,
            'foto'=> $foto ?? null,
            'status'=> 'sedang dalam tinjauan',
        ]);


        return redirect('siswa')->with('Mantap', 'Laporan sudah diterima guru');
    }

    public function show(string $id): view {
        // mengatur/ambil data berdasarkan ID
        $siswas = siswa::findOrFail($id);
        // findOrFail : untuk mengambil sebuah record dari db berdasarkan id
        // mengirimkan data product ke view

        return view('siswa.show', compact('siswas'));
    }


}
