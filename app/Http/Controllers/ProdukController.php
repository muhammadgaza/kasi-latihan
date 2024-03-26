<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class produkController extends Controller
{

public function index() 
{
    $data = [
        'title' => 'Pendataan Produk',
        'produk' => Produk::paginate(20),
        'content' => 'admin/pendataan-dashboard'
    ];
    
    return view('admin.pendataan-dashboard', $data);    
}



public function pendataan()
{
    $produks = Produk::all();
    return view('admin.pendataan-dashboard', compact('produks'));
}

public function store(Request $request)
{
    $request->validate([
        'NamaProduk' => 'required',
        'Harga' => 'required',
        'Stok' => 'required',
    ]);
    
    $data = [
        'NamaProduk' => $request->input('NamaProduk'),
        'Harga' => $request->input('Harga'),
        'Stok' => $request->input('Stok'),
    ];
    
    if ($request->hasFile('image')) {
        $gambar = $request->file('image');
        $file_name = time() . "_" . $gambar->getClientOriginalName();
        
        $storage = 'uploads/image/';
        $data['image'] = $storage . $file_name;
    } else {
        $data['image'] = null;
    }
    
    Produk::create($data);
    return redirect()->route('adminproduk-pembelian')->with('success', 'Berhasil menambahkan data baru');
    
    }

    public function destroy($id)
    {
        $produks = Produk::findOrFail($id);
        $produks->delete();
    
        $produks = Produk::all(); // Ambil data pengguna setelah penghapusan
    
        return $this->pendataan()->with('success', 'Penghapusan pengguna berhasil')->with('produk', $produks);
    }
}