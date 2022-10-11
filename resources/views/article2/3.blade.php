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
        <h1 class="fw-bold">Pojok Latihan</h1>
        <p class="fw-bold">1. Berikut adalah data nilai statistika 20 orang mahasiswa pada kelas A</p>
        <p>Buatlah stemplot untuk data berikut: </p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">62</th>
                    <th scope="col">65</th>
                    <th scope="col">70</th>
                    <th scope="col">73</th>
                    <th scope="col">74</th>
                    <th scope="col">74</th>
                    <th scope="col">75</th>
                    <th scope="col">76</th>
                    <th scope="col">76</th>
                    <th scope="col">78</th>
                    <th scope="col">80</th>
                    <th scope="col">81</th>
                </tr>
                <tr>
                    <th scope="col">82</th>
                    <th scope="col">83</th>
                    <th scope="col">83</th>
                    <th scope="col">84</th>
                    <th scope="col">86</th>
                    <th scope="col">87</th>
                    <th scope="col">87</th>
                    <th scope="col">88</th>
                    <th scope="col">89</th>
                    <th scope="col">90</th>
                    <th scope="col">90</th>
                    <th scope="col">95</th>
                </tr>
            </thead>
        </table>
        <p>Sebagai alternatif,<a href="https://www.statology.org/stem-and-leaf-plot-generator/">
                https://www.statology.org/stem-and-leaf-plot-generator/ </a>dapat digunakan untuk membuat stemplot
            sederhana.</p>
        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Catatan</button>
        <hr>
        <p><span class="fw-bold"> Tidak semua data sesuai ditampilkan dengan menggunakan stemplot</span>
            Suatu data sesuai atau tidak ditampilkan dengan stemplot tergantung pada apakah data tersebut dapat
            dibulatkan tanpa menghilangkan informasi penting yang ada dalam data.
        </p>
        <p>Memutuskan jenis grafik apa yang sesuai untuk menampilkan data memerlukan pertimbangan yang tepat. Statistik
            bukan sekedar resep!</p>
        <br>

        <p class="fw-bold">2. Jarak tempuh ke Kota Banda Aceh.</p>
        <p>
            Provinsi Aceh memiliki 23 Kota/Kabupaten dengan
            Ibukota Provinsi
            bernama Kota Banda Aceh yang terletak di ujung barat Pulau Sumatera. Provinsi ini memiliki luas 58.377 KM2
            yang terbentang dari Kota Sabang di Pulau Weh sampai
            ke Kabupaten Aceh Tamiang yang berbatasan dengan Provinsi Sumatera Utara.
            Jarak tempuh setiap kabupaten/kota tersebut dengan Kota Banda Aceh ditampilkan pada Tabel berikut. </p>

        <table class="table table-info table-striped mt-3">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Daerah</th>
                    <th>Jarak(KM)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <th>Kabupaten Sigli</th>
                    <th>112,1</th>
                </tr>
                <tr>
                    <th>2</th>
                    <th>Kabupaten Pidie Jaya</th>
                    <th>172,2</th>
                </tr>
                <tr>
                    <th>3</th>
                    <th>Kabupaten Bireuen</th>
                    <th>220,1</th>
                </tr>
                <tr>
                    <th>4</th>
                    <th>Kabupaten Aceh Utara</th>
                    <th>305,2</th>
                </tr>
                <tr>
                    <th>5</th>
                    <th>Kota Lhokseumawe</th>
                    <th>274,3</th>
                </tr>
                <tr>
                    <th>6</th>
                    <th>Kabupaten Aceh Timur</th>
                    <th>429,5</th>
                </tr>
                <tr>
                    <th>7</th>
                    <th>Kota Langsa</th>
                    <th>425,1</th>
                </tr>
                <tr>
                    <th>8</th>
                    <th>Kabupaten Aceh Tamiang</th>
                    <th>470,0</th>
                </tr>
                <tr>
                    <th>9</th>
                    <th>Kabupaten Aceh Jaya</th>
                    <th>160,7</th>
                </tr>
                <tr>
                    <th>10</th>
                    <th>Kabupaten Aceh Barat</th>
                    <th>239,7</th>
                </tr>
                <tr>
                    <th>11</th>
                    <th>Kabupaten Nagan Raya</th>
                    <th>296,8</th>
                </tr>
                <tr>
                    <th>12</th>
                    <th>Kabupaten Aceh Selatan</th>
                    <th>434,1</th>
                </tr>
                <tr>
                    <th>13</th>
                    <th>Kabupaten Aceh Tengah</th>
                    <th>316,1</th>
                </tr>
                <tr>
                    <th>14</th>
                    <th>Kabupaten Gayo Lues</th>
                    <th>451,7</th>
                </tr>
                <tr>
                    <th>15</th>
                    <th>Kabupaten Singkil</th>
                    <th>639,6</th>
                </tr>
                <tr>
                    <th>16</th>
                    <th>Kabupaten Aceh Tenggara</th>
                    <th>550,7</th>
                </tr>
                <tr>
                    <th>17</th>
                    <th>Kabupaten Subulussalam</th>
                    <th>579,6</th>
                </tr>
                <tr>
                    <th>18</th>
                    <th>Kabupaten Aceh Besar</th>
                    <th>53,1</th>
                </tr>
                <tr>
                    <th>19</th>
                    <th>Kabupaten Aceh Barat Daya</th>
                    <th>270,0</th>
                </tr>
                <tr>
                    <th>20</th>
                    <th>Kabupaten Bener Meriah</th>
                    <th>317,9</th>
                </tr>
                <tr>
                    <th>21</th>
                    <th>Kabupaten Simeulue</th>
                    <th>332,0</th>
                </tr>
                <tr>
                    <th>22</th>
                    <th>Kota Sabang</th>
                    <th>38,3</th>
                </tr>
            </tbody>
        </table>

        <p class="text-center fs-5">Sumber data: Google Map 2022</p>

        <p>Pertanyaan interaktif: </p>
        <ol class="fs-3">
            <li>Jarak tempuh Kota Sigli ke Banda Aceh diketahui adalah 112,1 KM. Jika data tersebut ditampilkan dalam
                grafik stemplot,
                angka apa yang akan dijadikan batang? <input type="number" size="5" id="id1" onchange="jawaban1()"> <i
                    class="text-center fs-3" id="hasil1"></i>
                Angka apa yang akan dijadikan daun? <input type="number" size="5" id="id2" onchange="jawaban2()"> <i
                    class="text-center fs-3" id="hasil2"></i>
            </li>
            <li>Jika data jarak tempuh tersebut dibulatkan dalam desimal terdekat (misalnya 112,1 menjadi 112 dan 451,7
                menjadi 452),
                apakah menurutmu data tersebut akan sesuai ditampilkan dengan menggunakan stemplot? Mengapa?</li>
            <div class="form-check">
                <input class="form-check-input" onclick="salah()" type="radio" name="flexRadioDefault"
                    id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    <p>a. Sesuai</p>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" onclick="benar()" type="radio" name="flexRadioDefault"
                    id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    <p>b. Tidak Sesuai</p>
                </label>
            </div>
        </ol>


        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Catatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Untuk membuat stemplot, pastikan yang menjadi bagian daun adalah digit terakhir dari data.
                        </p>
                        <ul class="fs-3">
                            <li>Jika data lebih dari 2 digit maka dua digit pertama menjadi batang dan satu digit
                                terakhir menjadi daun;</li>
                            <li>Jika data berbentuk desimal, maka digit terakhir setelah koma menjadi daun dan digit
                                yang sebelumnya menjadi batang</li>
                        </ul>
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
            <form action="{{ route('call11') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item b">
                    <i class="bi bi-chevron-left"></i> {{ $articles[1]->nama_article }}

                </button>
            </form>
        </li>
        <li class="li fw-bolder b"> {{ $articles[2]->nama_article }}</li>
        <li class="li">
            <form action="{{ route('call13') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi2 }}">
                <input type="hidden" name="materi2" value="{{ $articles[2]->id }}">
                <button type="submit" class="dropdown-item b">
                    {{ $articles[3]->nama_article }} <i class="bi bi-chevron-right"></i>
                </button>
            </form>
        </li>
    </ul>
</footer>

<script>
    var id1 = document.getElementById('id1');
    var id2 = document.getElementById('id2');
    var hasil1 = document.getElementById('hasil1');
    var hasil2 = document.getElementById('hasil2');

    function jawaban1() {
        if (id1.value == 112) {
            hasil1.innerHTML = "Benar";
            hasil1.style.color = "green";
        } else if (id1.value != 112) {
            hasil1.innerHTML = "salah";
            hasil1.style.color = "red";
        }
    }

    function jawaban2() {
        if (id2.value == 1) {
            hasil2.innerHTML = "Benar";
            hasil2.style.color = "green";
        } else if (id2.value != 1) {
            hasil2.innerHTML = "salah";
            hasil2.style.color = "red";
        }
    }

    function salah() {
        Swal.fire({
            title: 'Jawaban Salah!! ',
            text: '',
            icon: 'error',
            confirmButtonText: 'OK'
        })
    }

    function benar() {
        Swal.fire({
            title: 'Benar!!! ',
            text: 'Karena rentang data pada batang terlalu luas, sehingga sebaran data tidak dapat terlihat dengan baik',
            icon: 'success',
            confirmButtonText: 'OK'
        })
    }
</script>
@endsection