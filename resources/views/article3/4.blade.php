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
      <h1 class="fw-bold">Quiz</h1>
      <ol class="fs-3">
        <li>Jika data kuantitatif berukuran cukup besar (misalnya >30 data), maka grafik yang lebih sesuai untuk menampilkan data tersebut adalah: </li>
        <div class="form-check">
        <input class="form-check-input" onclick="salah()" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault2">
                <p>a. Stemplot</p>
            </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" onclick="benar()" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault2">
                <p>B. Histogram</p>
            </label>
        </div>
      </ol>
    </article>
</div>

<footer>
    <hr>
    <ul class=" ul d-flex">
        <li class="li">
            <form action="{{ route('call22') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item b">
                    <i class="bi bi-chevron-left"></i> {{ $articles[2]->nama_article }}

                </button>
            </form>
        </li>
        <li class="li fw-bolder b"> {{ $articles[3]->nama_article }}</li>
        <li class="li">
            <form action="{{ route('call24') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi3 }}">
                <input type="hidden" name="materi3" value="{{ $articles[3]->id }}">
                <button type="submit" class="dropdown-item b">
                    {{ $articles[4]->nama_article }} <i class="bi bi-chevron-right"></i>
                </button>
            </form>
        </li>
    </ul>
</footer>


<script>
    function salah() {
        Swal.fire({
            title: 'Jawaban Anda Salah!!! ',
            text: 'Harap dibaca dengan seksama',
            icon: 'error',
            confirmButtonText: 'OK'
        })
    }

    function benar() {
        Swal.fire({
            title: 'Benar!!! ',
            text: 'Stemplot akan sulit digunakan untuk data berjumlah besar karena setiap nilai data ditampilkan dalam grafik',
            icon: 'success',
            confirmButtonText: 'OK'
        })
    }
</script>

@endsection