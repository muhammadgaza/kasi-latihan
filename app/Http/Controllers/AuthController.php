<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexRegistrasi()
    {
        $data = User::all();
       return view('admin.user', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function indexLogin()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */

    //  public function Users(){
    //     $users = User::all();
    //     return view('admin.user')->with('users', $users);
    //  }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
    
        $users = User::all(); // Ambil data pengguna setelah menyimpan
    
        return $this->indexRegistrasi()->with('success', 'Registrasi user berhasil')->with('users', $users);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
    
        if(Auth::attempt($data)){
            return redirect('/admin/produk')->with('success', 'Login berhasil')->with('data', $data);
        }
    
        return back()->with('error', 'Email atau password tidak sesuai');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout berhasil');
    }

    
    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        // Periksa apakah password telah disediakan sebelum mengubahnya
        if ($request->has('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
    
        $users = User::all(); // Ambil data pengguna setelah pembaruan
    
        return $this->indexRegistrasi()->with('success', 'Pembaruan pengguna berhasil')->with('users', $users);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    
        $users = User::all(); // Ambil data pengguna setelah penghapusan
    
        return $this->indexRegistrasi()->with('success', 'Penghapusan pengguna berhasil')->with('users', $users);
    }
}
