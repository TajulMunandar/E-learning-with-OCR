<?php

namespace App\Http\Controllers;

use App\Models\Article3;
use Illuminate\Http\Request;

class Article3Controller extends Controller
{
    public function index1()
    {
        return view('article3.1', [
            'title' => 'Histogram',
            'articles' => Article3::all()
        ]);
    }

    public function index2()
    {
        return view('article3.2', [
            'title' => 'Membuat Histogram',
            'articles' => Article3::all()
        ]);
    }

    public function index3()
    {
        return view('article3.3', [
            'title' => 'Memeriksa Distribusi',
            'articles' => Article3::all()
        ]);
    }

    public function index4()
    {
        return view('article3.4', [
            'title' => 'Quiz',
            'articles' => Article3::all()
        ]);
    }

   



}
