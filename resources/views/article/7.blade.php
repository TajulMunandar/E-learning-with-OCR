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
        <h1 class="fw-bold">Congratulation</h1>
        <p>Anda Telah Mempelajari Tentang Penyajian Data</p>
        <p>Setelah mempelajari bagian ini, mahasiswa diharapkan mampu:</p>
        <p>
            <ol class="fs-3">
                <li>Memahami perlunya penyajian data</li>
                <li>Memahami cara penyajian data kategori dengan menggunakan:
                    <ul>
                        <li>Tabel </li>
                        <li>Diagram batang</li>
                        <li>Diagram Lingkar</li>
                    </ul>
                </li>
                <li>Memahami cara penyajian data waktu dengan diagram garis</li>
                <li>Menganalisis distribusi data waktu dengan diagram garis</li>
                <li>Memahami jenis penyajian data yang sesuai untuk data dari berbagai konteks</li>
            </ol>
        </p>
        <p>Jika anda sudah memahami point-point yang di atas maka anda berhak untuk menekan tombol dibawah ini!</p>
        <button class="btn btn-success" id="selesai">Selesai</button>
        
    </article>
</div>

<footer>
    <hr>
    <ul class=" ul d-flex">
        <li class="li">
            <form action="{{ route('call7') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item b">
                <i class="bi bi-chevron-left"></i> {{ $articles[7]->nama_article }}
                    
                </button>
            </form>
        </li>
        <li class="li fw-bolder b"> {{ $articles[8]->nama_article }} </li>
        <li class="li">
            <form action="{{ route('call9') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi1 }}">
                <input type="hidden" name="materi1" value="{{ $articles[6]->id }}">
                <button type="submit" class="dropdown-item b">
                Selesai <i class="bi bi-chevron-right"></i>
                </button>
            </form>
        </li>
    </ul>
</footer>

<script>
    const buttonse = document.querySelectorAll('#selesai');
    for (const button of buttonse) {
        button.addEventListener('click', function() {
            Swal.fire({
                title: 'Selamat Anda Telah Menyelesaikan Kelas ini!',
                text: '',
                icon: 'success',
                confirmButtonText: 'OK'
            })   
        })
    }
</script>
@endsection