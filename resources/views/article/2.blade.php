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
    <h1 class="fw-bold">A. Penyajian data variabel kategori</h1>
    <h2 class="mt-5">Contoh 2.1 Penyaluran Zakat.</h2>
    <p>Dalam QS. At-Taubah ayat 80 disebutkan bahwa terdapat 8 (delapan) golongan orang yang berhak menerima zakat, yaitu orang fakir, miskin, amil, muallaf, hamba sahaya (riqab),
        gharimin, fisabilillah, dan ibnu sabil. 8 golongan ini disebut dengan Asnaf</p>

    <p>Asnaf merupakan variabel kategori, yang nilai-nilainya (atau kategorinya) adalah: fakir, miskin, amil, muallaf, riqab, gharimin, fisabilillah, dan ibnu sabil.
        Kategori ini berbeda dalam jenisnya, bukan dalam kuantitasnya.</p>

    <p>Di Indonesia, penyaluran zakat ditangani oleh Badan Amil Zakat Nasional (BAZNAS) dan data penyaluran zakat tersebut dilaporkan setiap tahun dalam bentuk buku laporan statistik zakat nasional. Data penyaluran zakat berdasarkan Asnaf dapat disajikan dengan menampilkan jumlah dana dan persentase yang disalurkan untuk setiap golongan.
    Tabel 2.1 berikut menampilkan data penyaluran zakat berdasarkan Asnaf pada Tahun 2019.</p>

<table class="table table-info table-striped mt-5">
  <thead class="text-center">
    <tr>
      <th scope="col" >NO</th>
      <th scope="col" >Asnaf</th>
      <th scope="col" >Penyaluran Per Asnaf</th>
      <th></th>
    </tr>
    <tr>
      <th rowspan="2"></th>
      <td rowspan="2"></td>
      <td>Jumlah Dana (Rp)</td>
      <td>Persentase (%)</td>
    </tr>
  </thead>
  <tbody class="text-center">
    <tr>
      <th scope="row">1</th>
      <td>Fakir dan Miskin</td>
      <td>188.484.194.602</td>
      <td>69,6</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Amil</td>
      <td>34.782.883.136</td>
      <td>12,8</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Muallaf</td>
      <td>2.044.314.613</td>
      <td>0,8</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Riqab</td>
      <td>0</td>
      <td>0,0</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Gharimin</td>
      <td>366.415.513</td>
      <td>0,1</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Fi Sabilillah</td>
      <td>44.915.837.079</td>
      <td>16,6</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Ibnu Sabil</td>
      <td>1123.305.822</td>
      <td>0,0</td>
    </tr>
    <tr >
      <th colspan="2">TOTAL PEMBAYARAN ZAKAT</th>
      <td>270.716.950.765</td>
      <td>100,0</td>
    </tr>

  </tbody>
</table>
<p class="text-center fs-5"><b>Tabel 2.1 </b> Data penyaluran zakat Tahun 2019 berdasarkan Asnaf</p>

        <div class="peringatan p-4 mt-5" >
            <h2 class="mt-3">Diskusi</h2>
            <p style="color:blue;"> Urutan data dalam tabel. Menurutmu, bagaimana urutan yang sesuai untuk menyusun kategori dalam Tabel 2.1? Berikan alasanmu.
            </p>
            <p style="color:blue;">
            Dari Tabel 2.1 terlihat bahwa golongan Riqab mendapatkan penyaluran zakat sebesar 0. Berikan komentarmu!
            </p>
        </div>
</article>
</div>

<footer>
    <hr>
    <ul class=" ul d-flex">
        <li class="li">
            <form action="{{ route('call1') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item b">
                <i class="bi bi-chevron-left"></i> {{ $articles[1]->nama_article }}
                    
                </button>
            </form>
        </li>
        <li class="li fw-bolder b"> {{ $articles[2]->nama_article }} </li>
        <li class="li">
            <form action="{{ route('call3') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi1 }}">
                <input type="hidden" name="materi1" value="{{ $articles[2]->id }}">
                <button type="submit" class="dropdown-item b">
                    {{ $articles[3]->nama_article }} <i class="bi bi-chevron-right"></i>
                    
                </button>
            </form>
        </li>
    </ul>
</footer>
@endsection
