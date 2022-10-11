<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index1()
    {
        return view('article.1', [
            'title' => ' Mengapa data perlu disajikan?',
            'articles' => Article::all()
        ]);
    }

    public function index2()
    {
        return view('article.2', [
            'title' => 'Menyajikan data variable kategori',
            'articles' => Article::all(),
        ]);
    }

    public function index3()
    {
        return view('article.3', [
            'title' => 'Diagram batang',
            'articles' => Article::all(),
        ]);
    }

    public function index4()
    {
        return view('article.4', [
            'title' => 'Diagram batang majemuk',
            'articles' => Article::all(),
        ]);
    }

    public function index5()
    {
        return view('article.5', [
            'title' => 'Diagram lingkar',
            'articles' => Article::all(),
        ]);
    }

    public function index6()
    {
        return view('article.6', [
            'title' => 'Diagram garis',
            'articles' => Article::all(),
        ]);
    }

    public function index7()
    {
        return view('article.0', [
            'title' => 'Penyajian Data',
            'articles' => Article::all()
        ]);
    }

    public function quiz()
    {
        return view('article.quiz', [
            'title' => 'Quiz',
            'articles' => Article::all(),
        ]);
    }

    public function selesai()
    {
        return view('article.7', [
            'title' => 'Congratulation',
            'articles' => Article::all(),
        ]);
    }
}
