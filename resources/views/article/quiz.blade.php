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
    <h1 class="fw-bold">Quiz</h1>
    <p>Pengimpor buah-buahan ke Indonesia. Indonesia merupakan negara agraris yang memiliki berbagai kekayaan alam termasuk beragam jenis buah-buahan. Namun demikian, data dari BPS menunjukkan bahwa setiap tahun, Indonesia mengimpor berbagai jenis buah-buahan dari luar negeri dengan volume yang fantastis. Beberapa negara utama yang menjadi pengimpor 
        buah-buahan ke Indonesia diantaranya adalah Tiongkok dan Amerika Serikat (Tabel 2.5).</p>
        <p class="text-center fs-5"><b>Tabel 2.5</b>  Volume (dalam satuan 1000 Kg) Impor Buah-buahan di Indonesia menurut Negara Asal Utama pada Tahun 2010-2020</p>
       
        <img src="img/data-latihan.png" alt="" class="d-block m-auto mt-4 mb-5">
    
         <i class=" fs-5">Data ini diakses di <a href="https://www.bps.go.id/statictable/2019/02/14/2010/impor-buah-buahan-menurut-negara-asal-utama-2010-2019.html"> bps.go.id</a></i>
        
    <div class="soal">
        <h2 class="mt-4">1.Menampilkan Data Presentase.</h2>
        <p>Tabel berikut menampilkan data volume impor buah-buahan menurut negara asal utama khusus pada Tahun 2020.
            Dengan menggunakan kalkulator atau MS Excel, hitunglah nilai persentase volume impor untuk setiap negara
            dan lengkapi kolom persentase pada Tabel berikut dengan nilai persentase yang benar (Gunakan satu digit angka setelah koma).</p>

        <table class="table">
            <thead class=" mt-5">
                <tr class="text-center">
                    <th scope="col">Negara Asal</th>
                    <th scope="col">Volume Impor (x 1000 kg)</th>
                    <th scope="col">Persentase</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <tbody class="table-group-divider text-center">
                <tr>
                    <th scope="row">Tiongkok</th>
                    <th scope="row">441.922,60</th>
                    <th scope="row">69.2</th>
                    <th scope="row">Nilai Presentase Benar</th>
                </tr>
                <tr>
                    <th scope="row">Amerika Serikat</th>
                    <th scope="row">33.375,40</th>
                    <th scope="row"><input type="number" id="amerika" onchange="jawaban()"></th>
                    <th scope="row" id="hasil">Nilai Presentase Salah</th>
                </tr>
                <tr>
                    <th scope="row">Thailand</th>
                    <th scope="row">35.134,80</th>
                    <th scope="row"><input type="number" id="thailand" onchange="jawaban1()"></th>
                    <th scope="row" id="hasil1">Nilai Presentase Salah</th>
                </tr>  
                <tr>
                    <th scope="row">Australia</th>
                    <th scope="row">25.964,80</th>
                    <th scope="row"><input type="number" id="australia" onchange="jawaban2()"></th>
                    <th scope="row" id="hasil2">Nilai Presentase Salah</th>
                </tr>  
                <tr>
                    <th scope="row">Pakistan</th>
                    <th scope="row">16.807,00</th>
                    <th scope="row"><input type="number" id="pakistan" onchange="jawaban3()"></th>
                    <th scope="row" id="hasil3">Nilai Presentase Salah</th>
                </tr> 
                <tr>
                    <th scope="row">Mesir</th>
                    <th scope="row">25.164,50</th>
                    <th scope="row"><input type="number" id="mesir" onchange="jawaban4()"></th>
                    <th scope="row" id="hasil4">Nilai Presentase Salah</th>
                </tr> 
                <tr>
                    <th scope="row">Afrika Selatan</th>
                    <th scope="row">8.223,00</th>
                    <th scope="row"><input type="number" id="afrika" onchange="jawaban5()"></th>
                    <th scope="row" id="hasil5">Nilai Presentase Salah</th>
                </tr>
                <tr>
                    <th scope="row">Selandia Baru</th>
                    <th scope="row">6.616,20</th>
                    <th scope="row"><input type="number" id="selandia" onchange="jawaban6()"></th>
                    <th scope="row" id="hasil6">Nilai Presentase Salah</th>
                </tr> 
                <tr>
                    <th scope="row">Vietnam</th>
                    <th scope="row">1.797,40</th>
                    <th scope="row"><input type="number" id="vietnam" onchange="jawaban7()"></th>
                    <th scope="row" id="hasil7">Nilai Presentase Salah</th>
                </tr> 
                <tr>
                    <th scope="row">Peru</th>
                    <th scope="row">1.361,30</th>
                    <th scope="row"><input type="number" id="peru" onchange="jawaban8()"></th>
                    <th scope="row" id="hasil8">Nilai Presentase Salah</th>
                </tr> 
                <tr>
                    <th scope="row">lainnya</th>
                    <th scope="row">42.207,30</th>
                    <th scope="row"><input type="number" id="lainnya" onchange="jawaban9()"></th>
                    <th scope="row" id="hasil9">Nilai Presentase Salah</th>
                </tr>
                <tr>
                    <th scope="row">Jumlah</th>
                    <th scope="row">638.556,30</th>
                    <th scope="row">100%</th>
                    <th scope="row"></th>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="soal mt-3">
        <h2 class="mt-4">2.Membandingkan Grafik Persentase.</h2>
        <p>Data persentase volume impor buah-buahan pada Tahun 2020 ditampilkan dalam tiga grafik berikut.
            Grafik yang mana yang menurutmu paling tepat untuk menampilkan data tersebut? Klik salah satu grafik.</p>
        <div class="row">
            <div class="col btn" id="benar"><img src="img/quiz/diagrambatang_imp06.png" style=" width: 300px;" alt=""></div>
            <div class="col btn" id="salah"><img src="img/quiz/diagrampie_impor04.png" style=" width: 300px;" alt=""></div>
            <div class="col btn" id="salah"><img src="img/quiz/diagramplot_impor03.png" style=" width: 300px;" alt=""></div>
        </div>
    </div>

    <div class="soal mt-3">
        <h2 class="mt-4">3.Membandingkan Grafik Data Tahun 2010-2020.</h2>
        <p>Tabel berikut menampilkan data total volume impor buah-buahan menurut negara asal utama pada tahun 2010 sampai dengan Tahun 2020.</p>
         <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tahun</th>
                    <th scope="col">2010</th>
                    <th scope="col">2011</th>
                    <th scope="col">2012</th>
                    <th scope="col">2013</th>
                    <th scope="col">2014</th>
                    <th scope="col">2015</th>
                    <th scope="col">2016</th>
                    <th scope="col">2017</th>
                    <th scope="col">2018</th>
                    <th scope="col">2019</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">Volume</th>
                    <td>667.287,5</td>
                    <td>807.076,6</td>
                    <td>789.571,1</td>
                    <td>507.348,2</td>
                    <td>548.402,7</td>
                    <td>435.004,1</td>
                    <td>480.528,8</td>
                    <td>663.810,7</td>
                    <td>662.753,2</td>
                    <td>724.131,1</td>

                </tr>
            </tbody>
        </table>
        <p>Grafik yang manakah yang menurutmu paling sesuai
            untuk menampilkan data total volume impor
            buah-buahan menurut negara asal utama pada tahun 2010 sampai dengan Tahun 2020? Klik salah satu grafik berikut.</p>
        <div class="row">
            <div class="col btn " id="salah"><img src="img/quiz/diagrambatang_tah01.png" style=" width: 320px;" alt=""></div>
            <div class="col btn " id="benar"><img src="img/quiz/diagramgaris_tahun01.png" style=" width: 320px;" alt=""></div>
            <div class="col btn " id="salah1"><img src="img/quiz/diagrampie_tahun01.png" style=" width: 300px;" alt=""></div>
        </div>
    </section>
</article>
</div>


<footer>
    <hr>
    <ul class=" ul d-flex">
        <li class="li">
            <form action="{{ route('call6') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item submit">
                <i class="bi bi-chevron-left"></i>{{ $articles[6]->nama_article }}
                </button>
            </form>
        </li>
        <li class="li fw-bolder b"> {{ $articles[7]->nama_article }} </li>
        <li class="li">
            <form action="{{ route('call8') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi1 }}">
                <input type="hidden" name="materi1" value="{{ $articles[7]->id }}">
                <button type="submit" class="dropdown-item submit" >
                {{ $articles[8]->nama_article }} <i class="bi bi-chevron-right"></i>
                </button>
            </form>
        </li>
    </ul>
</footer>
</article>

<script>
    const buttons = document.querySelectorAll('#salah');
    for (const button of buttons) {
        button.addEventListener('click', function() {
            Swal.fire({
                title: 'Kurang Sesuai!!! ',
                text: 'Fluktuasi data Seiring Waktu tidak sesuai dengan Diagram Batang',
                icon: 'error',
                confirmButtonText: 'OK'
            })
        })
    }

    const buttons = document.querySelectorId('salah1');
    for (const button of buttons) {
        button.addEventListener('click', function() {
            Swal.fire({
                title: 'Kurang Sesuai!!! ',
                text: 'Fluktuasi data Seiring Waktu tidak sesuai dengan Diagram Lingkaran',
                icon: 'error',
                confirmButtonText: 'OK'
            })
        })

    }

    const buttonb = document.querySelectorAll('#benar');
    for (const button of buttonb) {
        button.addEventListener('click', function() {
            Swal.fire({
                title: 'Benar',
                text: '',
                icon: 'success',
                confirmButtonText: 'OK'
            })
        })

    }

    var amerika = document.getElementById('amerika');
    var thailand = document.getElementById('thailand');
    var australia = document.getElementById('australia');
    var pakistan = document.getElementById('pakistan');
    var mesir = document.getElementById('mesir');
    var afrika = document.getElementById('afrika');
    var selandia = document.getElementById('selandia');
    var vietnam = document.getElementById('vietnam');
    var peru = document.getElementById('peru');
    var lainnya = document.getElementById('lainnya');
    var benar = document.getElementById("hasil");
    var benar1 = document.getElementById("hasil1");
    var benar2 = document.getElementById("hasil2");
    var benar3 = document.getElementById("hasil3");
    var benar4 = document.getElementById("hasil4");
    var benar5 = document.getElementById("hasil5");
    var benar6 = document.getElementById("hasil6");
    var benar7 = document.getElementById("hasil7");
    var benar8 = document.getElementById("hasil8");
    var benar9 = document.getElementById("hasil9");
 

    function jawaban(){
        if (amerika.value == 5.23){
            benar.innerHTML = "Nilai Presentase Benar";
            benar.style.color = "green";
        } else if(amerika.value != 5.23){
            benar.innerHTML = "Nilai Presentase salah";
            benar.style.color = "black";
        }
    }

    function jawaban1(){
        if (thailand.value == 5.50){
            benar1.innerHTML = "Nilai Presentase Benar";
            benar1.style.color = "green";
        } else if(thailand.value != 5.50){
            benar1.innerHTML = "Nilai Presentase salah";
            benar1.style.color = "black";
        }
    }

    function jawaban2(){
        if (australia.value == 4.07){
            benar2.innerHTML = "Nilai Presentase Benar";
            benar2.style.color = "green";
        } else if(australia.value != 4.07){
            benar2.innerHTML = "Nilai Presentase salah";
            benar2.style.color = "black";
        }
    }

    function jawaban3(){
        if (pakistan.value == 2.63){
            benar3.innerHTML = "Nilai Presentase Benar";
            benar3.style.color = "green";
        } else if(pakistan.value != 2.63){
            benar3.innerHTML = "Nilai Presentase salah";
            benar3.style.color = "black";
        }
    }

    function jawaban4(){
        if (mesir.value == 3.94){
            benar4.innerHTML = "Nilai Presentase Benar";
            benar4.style.color = "green";
        } else if(mesir.value != 3.93){
            benar4.innerHTML = "Nilai Presentase salah";
            benar4.style.color = "black";
        }
    }

    function jawaban5(){
        if (afrika.value == 1.29){
            benar5.innerHTML = "Nilai Presentase Benar";
            benar5.style.color = "green";
        } else if(afrika.value != 1.29){
            benar5.innerHTML = "Nilai Presentase salah";
            benar5.style.color = "black";
        }
    }

    function jawaban6(){
        if (selandia.value == 1.04){
            benar6.innerHTML = "Nilai Presentase Benar";
            benar6.style.color = "green";
        } else if(selandia.value != 1.04){
            benar6.innerHTML = "Nilai Presentase salah";
            benar6.style.color = "black";
        }
    }

    function jawaban7(){
        if (vietnam.value == 0.28){
            benar7.innerHTML = "Nilai Presentase Benar";
            benar7.style.color = "green";
        } else if(vietnam.value != 0.28){
            benar7.innerHTML = "Nilai Presentase salah";
            benar7.style.color = "black";
        }
    }

    function jawaban8(){
        if (peru.value == 0.21){
            benar8.innerHTML = "Nilai Presentase Benar";
            benar8.style.color = "green";
        } else if(peru.value != 0.21){
            benar8.innerHTML = "Nilai Presentase salah";
            benar8.style.color = "black";
        }
    }

    function jawaban9(){
        if (lainnya.value == 6.61){
            benar9.innerHTML = "Nilai Presentase Benar";
            benar9.style.color = "green";
        } else if(lainnya.value != 6.61){
            benar9.innerHTML = "Nilai Presentase salah";
            benar9.style.color = "black";
        }
    }
    
</script>

@endsection