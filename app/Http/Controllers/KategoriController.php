<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;


class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        return view('admin.kategoris-dashboard', compact('kategoris'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);
    }
}
    