<?php

namespace App\Http\Controllers;

use App\Models\Article2;
use Illuminate\Http\Request;

class Article2Controller extends Controller
{
    public function index1()
    {
        return view('article2.1', [
            'title' => 'Penyajian data variabel kuantitatif: Stemplot',
            'articles' => Article2::all()
        ]);
    }

    public function index2()
    {
        return view('article2.2', [
            'title' => 'Stemplot',
            'articles' => Article2::all()
        ]);
    }


    public function index3()
    {
        return view('article2.3', [
            'title' => 'Pojok Latihan',
            'articles' => Article2::all()
        ]);
    }

    public function index4()
    {
        return view('article2.4', [
            'title' => 'Materi Tingkat Lanjut (Advanced)',
            'articles' => Article2::all()
        ]);
    }

    public function index5()
    {
        return view('article2.quiz1', [
            'title' => 'Quiz',
            'articles' => Article2::all()
        ]);
    }

    public function index6()
    {
        return view('article2.quiz2', [
            'title' => 'Quiz',
            'articles' => Article2::all()
        ]);
    }

    public function index7()
    {
        return view('article2.quiz3', [
            'title' => 'Quiz3',
            'articles' => Article2::all()
        ]);
    }

    public function index8()
    {
        return view('article2.6', [
            'title' => 'Congratulation',
            'articles' => Article2::all()
        ]);
    }

}
