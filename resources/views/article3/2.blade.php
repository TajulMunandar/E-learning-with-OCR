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
        <h1 class="fw-bold">Membuat Histogram</h1>
        <p>Selanjutnya, untuk dapat membuat histogram, maka perlu ditentukan batas bawah dan batas atas untuk setiap
            kelas interval seperti pada Tabel 2.8 berikut. </p>
        <p class="text-center fs-5"><b>Tabel 2.8 </b>Tabel Distribusi Frekuensi untuk Data Jumlah Ayat dari Surah pada Juz
            30</p>
        <table class="table table-info table-striped mt-3">
            <thead class="text-center">
                <tr>
                    <th scope="col">Kelas Interval</th>
                    <th scope="col">Batas Bawah</th>
                    <th scope="col">Batas Atas</th>
                    <th scope="col">Frekuensi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <th>3 - 12</th>
                    <th>2,5</th>
                    <th>12,5</th>
                    <th>21</th>
                </tr>
                <tr>
                    <th>13 - 22</th>
                    <th>12,5</th>
                    <th>22,5</th>
                    <th>8</th>
                </tr>
                <tr>
                    <th>23 - 32</th>
                    <th>22,5</th>
                    <th>32,5</th>
                    <th>4</th>
                </tr>
                <tr>
                    <th>33 - 42</th>
                    <th>32,5</th>
                    <th>42,5</th>
                    <th>3</th>
                </tr>
                <tr>
                    <th>43 - 52</th>
                    <th>42,5</th>
                    <th>52,5</th>
                    <th>1</th>
                </tr>
                <tr>
                    <th colspan="3">Total</th>
                    <th>37</th>
                </tr>
            </tbody>
        </table>

        <p>Batas bawah dan batas atas setiap kelas interval ditentukan dengan mengambil nilai tengah dari ujung atas
            kelas sebelumnya dan ujung bawah kelas intervalnya. Misalnya 12,5 merupakan nilai tengah dari 12 dan 13. Hal
            ini untuk memastikan bahwa jumlah ayat setiap setiap surah berada di dalam salah satu interval, bukan pada
            nilai batas kelasnya. </p>
        <p>Histogram untuk data ini ditampilkan pada Gambar 2.7 berikut. </p>
        <img src="img/materi3/1.png" alt="" class="d-block m-auto">
        <p class="text-center fs-5"><b>Gambar 2.7 </b>Histogram untuk data jumlah ayat dari surah pada Juz 30</p>
        <p>Kelas-kelas frekuensi ditampilkan oleh batang dengan lebar yang sama. Tinggi setiap batang menampilkan
            frekuensi setiap kelas interval.</p>
        <p>Membuat histogram secara manual, terutama untuk data yang besar, akan sangat tidak praktis. Beberapa jenis
            aplikasi statistik yang dapat digunakan untuk membuat histogram misalnya MS Excel, SPP, Minitab, dll.</p>
        <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/I-ceruBVbMI?rel=0" title="YouTube video"
                allowfullscreen></iframe>
        </div>
        <h1 class="mt-5">Contoh 2.8</h1>
        <p> Persentase Penduduk di 34 provinsi di Indonesia Berumur 5 Tahun ke atas yang Mengakses Internet
            untuk Sosial Media selama bulan Januari-Maret 2021 (data persentase telah dibulatkan ke dalam desimal
            terdekat)</p>
        <img src="img/materi3/2.png" alt="" class="d-block m-auto">
        <p class="mt-2">Lengkapi tabel berikut:</p>
        <p class="text-center fs-5">Tabel distribusi frekuensi</p>

        <table class="table table-info table-striped mt-3">
            <thead class="text-center">
                <tr>
                    <th scope="col">Presentase</th>
                    <th scope="col">Batas Atas</th>
                    <th scope="col">Batas Bawah</th>
                    <th scope="col">Frekuensi</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <th>84,0 - 85,9</th>
                    <th>84,95</th>
                    <th>85,95</th>
                    <th>1</th>
                </tr>
                <tr>
                    <th>86,0 - 87,9</th>
                    <th>85,95</th>
                    <th>87,95</th>
                    <th>12</th>
                </tr>
                <tr>
                    <th>88,0 - 89,9</th>
                    <th><input type="number" id="id1" onchange="jawaban1()"> <i class="text-center fs-6" id="hasil1"></i> </th>
                    <th><input type="text" id="2" onchange="jawaban2()"> <i class="text-center fs-6" id="hasil2"></i></th>
                    <th>15</th>
                </tr>
                <tr>
                    <th>90,0 - 91,9</th>
                    <th><input type="text" id="3" onchange="jawaban3()"> <i class="text-center fs-6" id="hasil3"></i></th>
                    <th><input type="text" id="4" onchange="jawaban4()"> <i class="text-center fs-6" id="hasil4"></i></th>
                    <th>5</th>
                </tr>
                <tr>
                    <th>92,0 - 93,9</th>
                    <th><input type="text" id="5" onchange="jawaban5()"> <i class="text-center fs-6" id="hasil5"></i></th>
                    <th><input type="text" id="6" onchange="jawaban6()"> <i class="text-center fs-6" id="hasil6"></i></th>
                    <th>1</th>
                </tr>
                <tr>
                    <th>Total</th>
                    <th></th>
                    <th></th>
                    <th>37</th>
                </tr>
            </tbody>
        </table>

        <img src="img/materi3/3.png" alt="" class="d-block m-auto mt-4">
        <p class="text-center fs-5">Gambar 2.8 Histogram untuk Contoh 2.8</p>
        <i>Note</i>
        <p class="fw-bold">Histogram VS. Stemplot </p>
        <p>Stemplot menampilkan nilai data yang sebenarnya. Sehingga ketika data berjumlah banyak, akan menjadi sulit
            dan tidak sesuai untuk membuat stemplot. Selain itu, gambaran yang dihasilkan oleh stemplot membagi data ke
            dalam kelompok (stem/batang) yang ditentukan oleh sistem angka, bukan dengan pertimbangan lain.
            Histogram tidak memiliki keterbatasan ini. Histogram membagi rentang nilai suatu variabel ke dalam
            kelas-kelas dan hanya menampilkan jumlah atau persentase data yang termasuk ke dalam kelas tersebut. Kita
            dapat memilih jumlah kelas yang sesuai, tetapi harus memiliki panjang kelas yang sama.
            Membuat histogram secara manual memerlukan lebih banyak kerja dibandingkan membuat stemplot. Histogram tidak
            menampilkan data yang sebenarnya. Oleh karena itu, stemplot lebih sesuai jika jumlah data sedikit.
        </p>
    </article>
</div>

<footer>
    <hr>
    <ul class=" ul d-flex">
        <li class="li">
            <form action="{{ route('call20') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item b">
                    <i class="bi bi-chevron-left"></i> {{ $articles[0]->nama_article }}

                </button>
            </form>
        </li>
        <li class="li fw-bolder b"> {{ $articles[1]->nama_article }}</li>
        <li class="li">
            <form action="{{ route('call22') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi3 }}">
                <input type="hidden" name="materi3" value="{{ $articles[1]->id }}">
                <button type="submit" class="dropdown-item b">
                    {{ $articles[2]->nama_article }} <i class="bi bi-chevron-right"></i>
                </button>
            </form>
        </li>
    </ul>
</footer>

<script>
    var id1 = document.getElementById('id1');
    var id2 = document.getElementById('2');
    var id3 = document.getElementById('3');
    var id4 = document.getElementById('4');
    var id5 = document.getElementById('5');
    var id6 = document.getElementById('6');
    
    var hasil1 = document.getElementById('hasil1');
    var hasil2 = document.getElementById('hasil2');
    var hasil3 = document.getElementById('hasil3');
    var hasil4 = document.getElementById('hasil4');
    var hasil5 = document.getElementById('hasil5');
    var hasil6 = document.getElementById('hasil6');

    function jawaban1(){
        if (id1.value == 87.95){
            hasil1.innerHTML = "Benar";
            hasil1.style.color = "green";
        } else if(id1.value != 87.95){
            hasil1.innerHTML = "salah";
            hasil1.style.color = "red";
        }
    }
    function jawaban2(){
        if (id2.value == 89.95){
            hasil2.innerHTML = "Benar";
            hasil2.style.color = "green";
        } else if(id2.value != 89.95){
            hasil2.innerHTML = "salah";
            hasil2.style.color = "red";
        }
    }
    function jawaban3(){
        if (id3.value == 89.95){
            hasil3.innerHTML = "Benar";
            hasil3.style.color = "green";
        } else if(id3.value != 89.95){
            hasil3.innerHTML = "salah";
            hasil3.style.color = "red";
        }
    }
    function jawaban4(){
        if (id4.value == 91.95){
            hasil4.innerHTML = "Benar";
            hasil4.style.color = "green";
        } else if(id4.value != 91.95){
            hasil4.innerHTML = "salah";
            hasil4.style.color = "red";
        }
    }
    function jawaban5(){
        if (id5.value == 91.95){
            hasil5.innerHTML = "Benar";
            hasil5.style.color = "green";
        } else if(id5.value != 91.95){
            hasil5.innerHTML = "salah";
            hasil5.style.color = "red";
        }
    }
    function jawaban6(){
        if (id6.value == 93.95){
            hasil6.innerHTML = "Benar";
            hasil6.style.color = "green";
        } else if(id6.value != 93.95){
            hasil6.innerHTML = "salah";
            hasil6.style.color = "red";
        }
    }


</script>
@endsection