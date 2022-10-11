<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Article2;
use App\Models\Article3;
use Illuminate\Http\Request;

class DashboardProgressController extends Controller
{
    public function materi1()
    {
        return view('dashboard.materi1.index', [
            'title' => 'Materi 1',
            'users' => User::all(),
            'articles' => Article::all()
        ]);
    }

    public function materi2()
    {
        return view('dashboard.materi2.index', [
            'title' => 'Materi 2',
            'users' => User::all(),
            'articles2' => Article2::all()
        ]);
    }

    public function materi3()
    {
        return view('dashboard.materi3.index', [
            'title' => 'Materi 3',
            'users' => User::all(),
            'articles3' => Article3::all()
        ]);
    }
}
