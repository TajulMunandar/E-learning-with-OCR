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
        <h1 class="fw-bold">2.2 Diagram Lingkar</h1>
        <h2 class="mt-5">Contoh 2.4 Diagram lingkar untuk persentase penyaluran zakat</h2>
        <p>Diagram lingkar pada Gambar 2.3 memperlihatkan besarnya bagian yang dibentuk
            oleh setiap kategori untuk seluruh data. Disini terlihat dengan jelas bahwa golongan
            Fakir dan Miskin mendapatkan persentase penyaluran zakat yang paling besar,
            yaitu membentuk hampir 3/4 bagian dari seluruh total penyaluran zakat.</p>
        <img src="img/5.png" alt="" class="mt-4 d-block m-auto">
        <p class="text-center fs-5"><b>Gambar 2.3</b> Diagram lingkar untuk persentase penyaluran zakat pada Contoh 2.1</p>
        <h2 class="mt-5">Diagram lingkar atau Diagram batang?</h2>
        <p>Bagaimana kita bisa mengetahui diagram yang sesuai untuk menampilkan data tertentu? Beberapa poin berikut dapat dijadikan pertimbangan:</p>
        <p style="color:#C689C6;">Diagram lingkar:</p>
        <p>semua kategori harus dimasukkan ke dalam grafik, sehingga total persentase semua kategori yang ditampilkan haruslah 100%; Variabel dengan kategori yang banyak (lebih dari 8 kategori) biasanya akan tidak efektif ditampilkan dengan diagram lingkar.</p>
        <p style="color:#C689C6;">Diagram batang:</p>
        <p>Dapat digunakan jika kita tidak memiliki atau tidak ingin menampilkan data dari seluruh kategori yang ada;</p>
        <p>Sebagai contoh, diagram batang dapat digunakan untuk membandingkan total penyaluran zakat untuk 3 golongan Asnaf: gharimin, fi sabilillah, dan ibnu sabil. Diagram lingkar tidak dapat menampilkan perbandingan ini karena total penyaluran zakat tidak hanya untuk 3 golongan tersebut.</p>
        <div class="peringatan p-4 mt-5" >
            <h2 class="mt-3">Diskusi</h2>
            <p style="color:blue;">Membandingkan grafik. Perhatikan diagram batang pada Gambar 2.1 dan diagram lingkar pada Gambar 2.3 untuk data penyaluran zakat. Menurutmu,
            grafik manakah yang paling sesuai untuk mendeskripsikan data tersebut? Uraikan alasanmu. 
            </p>
        </div>
    </article>
</div>

<footer>
    <hr>
    <ul class=" ul d-flex">
        <li class="li">
            <form action="{{ route('call4') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item b">
                <i class="bi bi-chevron-left"></i>{{ $articles[4]->nama_article }}
                    
                </button>
            </form>
        </li>
        <li class="li fw-bolder b"> {{ $articles[5]->nama_article }} </li>
        <li class="li">
            <form action="{{ route('call6') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi1 }}">
                <input type="hidden" name="materi1" value="{{ $articles[5]->id }}">
                <button type="submit" class="dropdown-item b">
                    {{ $articles[6]->nama_article }} <i class="bi bi-chevron-right"></i>
                    
                </button>
            </form>
        </li>
    </ul>
</footer>
@endsection
