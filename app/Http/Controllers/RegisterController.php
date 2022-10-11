<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.register', [
            'title' => 'Tanyo Muruno | Register',
            'users' => User::all(),
        ]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255|min:3',
            'asalkampus' => 'required|min:3',
            'nim' => 'required|unique:users',
            'password' => 'required|min:8|max:255',
            
        ]);

        $validated['password'] = Hash::make($validated['password']);
        

        User::create($validated);
    

        return redirect('/')->with('success', 'Akun Sudah Berhasil Dibuat! Silahkan Masuk');
    }
}
