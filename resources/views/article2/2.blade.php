@extends("layout_article.main")

@section("container")
<nav>
    <div class="row border">
        <div class="col pt-1">
            <a href="/beranda" class="a fw-bold fs-5"><i class="bi bi-arrow-left"></i> Penyajian Data Variable
                kuantitatif : Stemplot</a>
        </div>
        @include('layout_article.offcanvas2')
    </div>

</nav>

<div class="container pt-3 pb-3">
    <article class="p-5">
        <h1 class="fw-bold">1. Stemplot</h1>
        <p>Stemplot disebut juga dengan stem-and-leaf plot (diagram batang dan daun), karena terdiri dari
            bagian yang disebut batang dan bagian yang disebut daun. Grafik ini menampilkan gambaran ringkas
            tentang bentuk distribusi data dengan menggunakan nilai data yang sebenarnya.
            Grafik ini paling sesuai untuk
            jumlah data yang tidak terlalu banyak.
        </p>
        <h1>Contoh 2.6 Stemplot untuk data jumlah ayat dari surah pada Juz 30.</h1>
        <p> Untuk dapat membuat stemplot
            untuk data pada Tabel 1, gunakan digit pertama data sebagai batang dan digit kedua sebagai daun.
            Gambar 2.5 memperlihatkan langkah-langkah membuat stemplot.</p>
        <p class="text-center fs-5"><b>digital: </b>langkah penyusunan stemplot secara manual dibuat dalam bentuk video
        </p>
        <img src="img/materi2/stemplot.png" alt="" class="d-block m-auto">
        <p class="mt-4 text-center fs-5"><span class="fw-bold">Gambar 2.5</span> Pembuatan stemplot untuk data pada Contoh 2.6 (a) Menyusun
            batang. (b) Menuliskan nilai daun pada
            setiap batang yang sesuai.</p>
        <h3 class="fw-bold mt-5">Apa yang digambarkan oleh stemplot?</h3>
        <p>Dari Gambar 2.5 dapat dilihat bahwa jumlah ayat yang paling sedikit adalah 3 ayat yang dimiliki oleh 3 surah,
            muncul pada batang pertama, yaitu batang 0 dengan nilai daun 3.
            Sementara jumlah ayat yang paling banyak adalah 46 yang muncul pada batang 4 dengan nilai daun 6. </p>
        <p>Salah satu tujuan stemplot adalah untuk menggambarkan bentuk distribusi data.</p>
        <ul class="fs-3">
            <li>Bentuk distribusi data jumlah ayat dari surah yang ada pada Juz 30 yang ditampilkan stemplot pada Gambar
                1 adalah miring ke kanan (<i>skewed to the right</i>) dengan titik tengah data yaitu 8 (data ke 15). </li>
            <li>Jumlah ayat terendah adalah 3 dan jumlah ayat terbanyak adalah 46.</li>
            <li>Paling banyak surah memiliki jumlah ayat di bawah 10 (terlihat dari banyaknya jumlah daun pada batang
                0). </li>
        </ul>
        <h3 class="fw-bold mt-5">Cara membuat stemplot </h3>
        <p class="fs-3 fw-bold">Langkah membuat stemplot:</p>
        <ol class="fs-3">
            <li>Pisahkan setiap data menjadi bagian batang dan daun, yaitu: Bagian batang berupa digit awal setiap data
                dan bagian daun berupa satu digit terakhir setiap data</li>
            <li>Batang dapat terdiri dari lebih dari satu digit tergantung total digit dari data, tetapi bagian daun
                harus selalu memiliki satu digit angka saja.</li>
            <li>Susun digit untuk batang secara vertikal dimulai dengan digit terkecil yang diletakkan di bagian atas,
                kemudian tarik sebuah garis vertikal di bagian kanan susunan tersebut.</li>
            <li>Tuliskan digit nilai daun pada baris sebelah kanan untuk setiap batangnya, dengan mengurutkan dari nilai
                terkecil ke yang terbesar.</li>
        </ol>
        <br>
    </article>
</div>

<footer>
    <hr>
    <ul class=" ul d-flex">
        <li class="li">
            <form action="{{ route('call10') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item b">
                    <i class="bi bi-chevron-left"></i> {{ $articles[0]->nama_article }}

                </button>
            </form>
        </li>
        <li class="li fw-bolder b"> {{ $articles[1]->nama_article }}</li>
        <li class="li">
            <form action="{{ route('call12') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi2 }}">
                <input type="hidden" name="materi2" value="{{ $articles[1]->id }}">
                <button type="submit" class="dropdown-item b">
                    {{ $articles[2]->nama_article }} <i class="bi bi-chevron-right"></i>
                </button>
            </form>
        </li>
    </ul>
</footer>
@endsection