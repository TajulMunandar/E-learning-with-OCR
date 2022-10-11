<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->guest() || auth()->user()->role == 0) {
            abort(403);
        }
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'users' => User::all(),
            'total_mahasiswa' => User::whereYear('created_at', now()->year)->count(),
            'total_admin' => User::whereYear('created_at', now()->year)->count(),
            'total_materi' => User::whereYear('created_at', now()->year)->count(),
        ]);
    }

}
