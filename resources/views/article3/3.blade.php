@extends("layout_article.main")

@section("container")
<nav>
    <div class="row border">
        <div class="col pt-1">
            <a href="/beranda" class="a fw-bold fs-5"><i class="bi bi-arrow-left"></i> Penyajian Data Variable
                kuantitatif : Histogram </a>
        </div>
        @include('layout_article.offcanvas3')
    </div>

</nav>

<div class="container pt-3 pb-3">
    <article class="p-5">
        <h1 class="fw-bold">Memeriksa Distribusi</h1>
        <p>Seperti yang telah dipaparkan sebelumnya, menampilkan data dalam bentuk grafik bertujuan untuk memudahkan
            membaca distribusi data. Setelah menampilkan data dalam bentuk grafik stemplot atau histogram, maka kita
            dapat melihat karakteristik penting yang ada dalam data.
            Beberapa hal yang perlu dilihat untuk mendeskripsikan bentuk distribusi:
        </p>
        <ol class="fs-3">
            <li>Modus</li>
            <ol type="a">
                <li>Apakah distribusi data memiliki satu atau lebih puncak utama (modus)? </li>
                <li>Distribusi yang memiliki satu puncak utama disebut unimodal, distribusi yang memiliki dua puncak
                    disebut bimodal, dan distribusi yang memiliki lebih dari dua modus disebut multimodal</li>

            </ol>
            <li>Simetri</li>
            <ol type="a">
                <li>Apakah bentuk distribusi hampir simetris ataukah miring ke salah satu sisi? </li>
                <li>Distribusi dikatakan simetris jika nilai-nilai data yang lebih kecil atau lebih besar dari nilai
                    tengahnya</li>
                <li>Distribusi dikatakan miring ke kanan jika bagian ujung kanan data (nilai data yang lebih besar)
                    lebih panjang dari bagian ujung kiri (nilai data yang lebih kecil).</li>
            </ol>
        </ol>

        <p><span class="fw-bold">Contoh 2.9</span> Memeriksa distribusi data dari histogram </p>
        <p>Dari histogram pada Gambar 2.8 tentang Persentase Penduduk di 34 provinsi di Indonesia Berumur 5 Tahun ke atas
            yang Mengakses Internet untuk Sosial Media selama bulan Januari-Maret 2021, maka dapat dideskripsikan
            distribusi data sebagai berikut: </p>
        <p>Persentase penduduk yang mengakses internet berkisar antara 84% hingga 93,9% di setiap provinsi. Distribusi
            data berbentuk hampir simetris dan memiliki satu puncak yaitu pada kelas interval 88,0 – 89,9, yang artinya
            kebanyakan provinsi memiliki 88% hingga 89,9% penduduknya yang mengakses internet untuk sosial media. </p>
    </article>
</div>

<footer>
    <hr>
    <ul class=" ul d-flex">
        <li class="li">
            <form action="{{ route('call21') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item b">
                    <i class="bi bi-chevron-left"></i> {{ $articles[1]->nama_article }}

                </button>
            </form>
        </li>
        <li class="li fw-bolder b"> {{ $articles[2]->nama_article }}</li>
        <li class="li">
            <form action="{{ route('call23') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi3 }}">
                <input type="hidden" name="materi3" value="{{ $articles[2]->id }}">
                <button type="submit" class="dropdown-item b">
                    {{ $articles[3]->nama_article }} <i class="bi bi-chevron-right"></i>
                </button>
            </form>
        </li>
    </ul>
</footer>

<script>

</script>
@endsection