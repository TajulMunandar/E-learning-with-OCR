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
<h1 class="fw-bold">2.1 Diagram Batang  </h1>
<h2 class="mt-5">Contoh 2.2 Diagram batang untuk persentase penyaluran zakat.</h2>
<p>Gambar 2.1 menampilkan data penyaluran zakat berdasarkan Asnaf dengan menggunakan diagram batang. Tinggi dari 7 batang menunjukkan persentase jumlah dana yang disalurkan pada setiap golongan. </p>
<p>Cobalah ubah nilai persentase pada kategori dalam Tabel, maka akan terlihat perubahan tinggi batang untuk kategori tersebut pada diagram batang. </p>
<br>
<div class="container p-3 ">
  <canvas id="myChart"></canvas>
  <hr>
  <div class="row">
    <div class="col">
    <label for="fakir">Fakir dan Miskin</label>
    <input type="number" class="form-control" id="fakir" value="12" onchange="updateChart()">
    </div>
    <div class="col">
    <label for="fisabilillah">Fi Sabilillah</label>
    <input type="number" class="form-control" id="sabili" value="3" onchange="updateChart()">
    </div>
    <div class="col">
    <label for="amil">Amil</label>
    <input type="number" class="form-control" id="amil" value="4" onchange="updateChart()">
    </div>
    <div class="col">
    <label for="muallaf">Muallaf</label>
    <input type="number" class="form-control" id="muallaf" value="5" onchange="updateChart()">
    </div>
    <div class="col">
    <label for="ibnusabil">Ibnu Sabil</label>
    <input type="number" class="form-control" id="ibnu" value="6" onchange="updateChart()">
    </div>
    <div class="col">
    <label for="gharimin">Gharimin</label>
    <input type="number" class="form-control" id="gharimin" value="7" onchange="updateChart()">
    </div>
    <div class="col">
    <label for="riqab">Riqab</label>
    <input type="number" class="form-control" id="riqab" value="8" onchange="updateChart()">
    </div>
  </div>
  <hr>
</div>
<p class="text-center fs-5"><span class="fw-bold">Gambar 2.1</span> Diagram batang untuk persentase penyaluran zakat</p>
<div class="peringatan p-4" >
    <p style="color:blue;">Pertimbangkan dengan seksama cara terbaik dalam mengurutkan nilai variabel kategori ketika membuat
        diagram batang. Pilihlah cara pengurutan yang paling sesuai menurutmu. Jika kamu ragu,
        tanyakan pendapat temanmu apakah informasi penting yang ingin kamu tampilkan dapat terbaca dari pengurutan
        yang kamu lakukan!
    </p>
    <button type="button" class="btn btn-warning d-block m-auto mb-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    <h4>catatan</h4>
    </button>
</div>



<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Catatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Diagram batang memiliki dua sumbu, yaitu sumbu horizontal dan sumbu vertikal.</p>
        <p>Sumbu horizontal menampilkan kategori dari variabel yang disusun sesuai dengan:</p>
        <ul>
            <li>urutan alfabet; atau</li>
            <li>besarnya frekuensi; atau</li>
            <li>cara lainnya yang dianggap dapat menampilkan data dengan lebih bermakna.</li>
        </ul>
        <p>Persegi panjang (batang) dengan lebar yang sama diletakkan di atas setiap kategori.</p>
        <p>Setiap batang diberikan jarak pemisah satu sama lain untuk memperlihatkan kategori data.</p>
        <p>Sumbu vertikal menampilkan:</p>
        <ul>
            <li>nilai frekuensi yang sebenarnya (f); atau</li>
            <li>nilai frekuensi relatif (%).</li>
        </ul>
        <p>Tinggi batang disesuaikan dengan nilai frekuensi dari masing-masing kategori.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</article>
</div>

<footer>
    <hr>
    <ul class=" ul d-flex">
        <li class="li">
            <form action="{{ route('call2') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item b">
                <i class="bi bi-chevron-left"></i> {{ $articles[2]->nama_article }}
                    
                </button>
            </form>
        </li>
        <li class="li fw-bolder b">{{ $articles[3]->nama_article }} </li>
        <li class="li">
            <form action="{{ route('call4') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi1 }}">
                <input type="hidden" name="materi1" value="{{ $articles[3]->id }}">
                <button type="submit" class="dropdown-item b">
                    {{ $articles[4]->nama_article }} <i class="bi bi-chevron-right"></i>
                    
                </button>
            </form>
        </li>
    </ul>
</footer>
@endsection
