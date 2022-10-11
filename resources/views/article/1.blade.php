@extends("layout_article.main")

@section("container")
<nav>
    <div class="row border">
        <div class="col pt-1">
         <a href="/beranda" class="a fw-bold fs-5"><i class="bi bi-arrow-left"></i> Penyajian Data </a>
        </div>
        @include('layout_article.offcanvas')
    </div>

</nav>

<div class="container pt-3 pb-3">
<article class="p-5">
<h1 class="fw-bold">Mengapa data perlu disajikan?</h1>
<p>Analisis statistik berkaitan dengan hasil observasi yang biasanya berjumlah besar.
    Hasil observasi atau data tersebut dapat berbentuk data kuantitatif ataupun data kategori (kualitatif).
    Agar informasi dari data dapat dipahami dengan lebih mudah, maka data perlu disusun, dirangkum dan disajikan.
    Penyajian data dapat dilakukan dengan menggunakan tabel atau grafik.</p>
<p>Penyajian data dalam bentuk tabel dapat menampilkan informasi berupa sifat dan makna data dengan lebih jelas dibandingkan jika data ditampilkan seperti apa adanya atau tidak tersusun.
    Demikian juga, grafik biasanya dapat menampilkan sifat dan makna data lebih jelas dibandingkan tabel.
    Suatu informasi yang mungkin hanya bisa ditampilkan sebagai petunjuk pada tabel, dapat terlihat dengan lebih jelas melalui grafik.</p>
<br>
    <img src="img/article1.png" alt="" class="d-block m-auto" width="300px">
</article>
</div>

<footer>
    <hr>
    <ul class=" ul d-flex">
        <li class="li">
            <form action="{{ route('call0') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item b">
                <i class="bi bi-chevron-left"></i> {{ $articles[0]->nama_article }}

                </button>
            </form>
        </li>
        <li class="li ms-5 ps-5 fw-bolder b">  {{ $articles[1]->nama_article }}</li>
        <li class="li">
            <form action="{{ route('call2') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi1 }}">
                <input type="hidden" name="materi1" value="{{ $articles[1]->id }}">
                <button type="submit" class="dropdown-item b">
                    {{ $articles[2]->nama_article }} <i class="bi bi-chevron-right"></i>
                </button>
            </form>
        </li>
    </ul>
</footer>
@endsection
