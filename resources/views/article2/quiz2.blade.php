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
        <h3>2. Stemplot sesuai untuk membandingkan dua kelompok data</h3>
        <form action="" class="ms-5">
            <div class="form-check">
            <input class="form-check-input" onclick="benar()" type="radio" name="flexRadioDefault" id="flexRadioDefault1" >
                <label class="form-check-label" for="flexRadioDefault1">
                    <p>a. Benar </p>
                </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" onclick="salah()" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
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
            <form action="{{ route('call14') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item submit">
                    <i class="bi bi-chevron-left"></i>{{ $articles[4]->nama_article }}
                </button>
            </form>
        </li>
        <li class="li fw-bolder b"> {{ $articles[5]->nama_article }} </li>
        <li class="li">
            <form action="{{ route('call16') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi2 }}">
                <input type="hidden" name="materi2" value="{{ $articles[5]->id }}">
                <button type="submit" class="dropdown-item submit">
                    {{ $articles[6]->nama_article }} <i class="bi bi-chevron-right"></i>
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
            text: 'Stemplot dua arah dapat digunakan untuk membandingkan distribusi dari dua kelompok data',
            icon: 'success',
            confirmButtonText: 'OK'
        })
     } 

</script>

@endsection
