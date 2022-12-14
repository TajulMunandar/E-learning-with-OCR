@extends("layout_article.main")

@section("container")
<nav>
    <div class="row border">
        <div class="col pt-1">
            <a href="/beranda" class="a fw-bold fs-5"><i class="bi bi-arrow-left"></i> Penyajian Data Variable
                kuantitatif : Stemplot </a>
        </div>
        @include('layout_article.offcanvas2')
    </div>
</nav>
<div class="container pt-5 pb-5">
    <article class="p-5">
        <h1 class="fw-bold">Quiz</h1>
        <h3>3. Stemplot dapat digunakan untuk membandingkan distribusi dari tiga kelompok data</h3>
        <form action="" class="ms-5">
            <div class="form-check">
                <input class="form-check-input" onclick="salah()" type="radio" name="flexRadioDefault" id="flexRadioDefault1"
                    value="salah">
                <label class="form-check-label" for="flexRadioDefault1">
                    <p>a. Benar </p>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" onclick="benar()" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                    value="benar">
                <label class="form-check-label" for="flexRadioDefault2">
                    <p>b. Salah </p>
                </label>
            </div>
        </form>
    </article>
</div>
<footer class="pt-5 mt-5">
    <hr>
    <ul class=" ul d-flex">
        <li class="li">
            <form action="{{ route('call15') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item submit">
                    <i class="bi bi-chevron-left"></i>{{ $articles[5]->nama_article }}
                </button>
            </form>
        </li>
        <li class="li fw-bolder b"> {{ $articles[6]->nama_article }} </li>
        <li class="li">
            <form action="{{ route('call17') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi2 }}">
                <input type="hidden" name="materi2" value="{{ $articles[6]->id }}">
                <button type="submit" class="dropdown-item submit">
                    {{ $articles[7]->nama_article }} <i class="bi bi-chevron-right"></i>
                </button>
            </form>
        </li>
    </ul>
</footer>
</article>

<script>
    function salah() {
        Swal.fire({
            title: 'Jawaban Anda Salah!!!',
            text: 'Harap dibaca dengan seksama',
            icon: 'error',
            confirmButtonText: 'OK'
        })
    }

    function benar() {
        Swal.fire({
            title: 'Benar!!! ',
            text: 'Stemplot tidak sesuai untuk membandingkan tiga kelompok data atau lebih',
            icon: 'success',
            confirmButtonText: 'OK'
        })
    }
</script>

@endsection