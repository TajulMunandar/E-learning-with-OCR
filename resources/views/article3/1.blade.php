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
        <h1 class="fw-bold">2. Histogram </h1>
        <p>Karena stemplot menampilkan nilai data yang sebenarnya, maka akan sulit dan tidak sesuai digunakan untuk
            menampilkan data berjumlah banyak.
            Ketika jumlah data yang ingin ditampilkan banyak (misalnya lebih dari 30 data), maka akan lebih sesuai
            ditampilkan dengan menggunakan histogram. </p>
        <p>Histogram merupakan grafik yang dapat digunakan untuk menampilkan bentuk distribusi data. Histogram khususnya
            berguna untuk jumlah data yang banyak.</p>

        <h2>Membuat Histogram</h2>
        <p>Untuk membuat histogram, maka terlebih dahulu data perlu ditampilkan ke dalam sebuah tabel, yang disebut
            dengan tabel distribusi frekuensi. </p>
        <p>Untuk membuat tabel distribusi frekuensi, rentang jumlah ayat dibagi menjadi beberapa interval yang disebut
           "Kelas
            <button type="button" class="btn btn-kuantatif p-0 " data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
                <h4>Interval"</h4>
            </button>
            Interval pertama 3 hingga 12,
            interval kedua dari 13 hingga 22, dst. Selanjutnya, jumlah surah yang memiliki jumlah ayat dalam setiap
            interval dihitung untuk memperoleh nilai frekuensinya.
            Ada 21 surah yang memiliki jumlah ayat dalam kelas interval pertama, 8 surah dalam kelas interval kedua,
            dst. </p>

        <p class="text-center fs-5 "><b>Tabel 2.7 </b>Tabel distribusi frekuensi jumlah ayat dari surah pada juz 30</p>
        <table class="table table-info table-striped mt-3 mb-5 m-auto" style="width:50% ;">
            <thead class="text-center">
                <tr>
                    <th scope="col">KELAS INTERVAL</th>
                    <th scope="col">FREKUENSI</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <th>3-12</th>
                    <th>21</th>
                </tr>
                <tr>
                    <th>13-22</th>
                    <th>8</th>
                </tr>
                <tr>
                    <th>23-32</th>
                    <th>4</th>
                </tr>
                <tr>
                    <th>33-42</th>
                    <th>3</th>
                </tr>
                <tr>
                    <th>43-52</th>
                    <th>1</th>
                </tr>
                <tr class="fw-bold">
                    <th>Total</th>
                    <th>37</th>
                </tr>
            </tbody>
        </table>

        <p>Panjang kelas interval yang dipilih akan menentukan jumlah kelas interval yang dihasilkan.
            Demikian juga pemilihan terhadap ujung bawah kelas pertama, dapat dipilih nilai minimum dari data atau nilai
            yang lebih kecil dari
            nilai minimum (misalnya kelas interval pertama untuk Tabel 4 diatas menjadi 1-10, 11-20, dst.). </p>

        <p>Pemilihan panjang kelas interval dan nilai ujung bawah kelas interval pertama akan mempengaruhi bentuk
            histogram. Cara pemilihan panjang kelas interval dibahas lebih
            <button type="button" class="btn btn-kuantatif p-0  ms-1" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop2">
                <h4>detil disini.</h4>
            </button>
        </p>




        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Catatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Kelas interval merupakan pembagian data untuk ditampilkan ke dalam histogram. </p>
                        <p>Contohnya, jika ada data nilai mahasiswa dalam rentang 45 sampai 100, maka nilai tersebut
                            dapat dibagi dalam kelas-kelas interval 41-50, 51-60, 61-70, 71-80, 81-90, dan 9-100. </p>
                        <p>Kelas interval dalam MS Excel dikenal sebagai “bin width”</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Catatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Terdapat beberapa aturan yang dapat membantu kita untuk memiliki panjang kelas yang sesuai.
                            Diantaranya adalah aturan Sturges, dimana memilih jumlah kelas interval yang mendekati nilai
                            1 + 3,3 log (n), dimana n merupakan banyaknya data. </p>
                        <p>Sehingga untuk data jumlah ayat dari surah pada juz 30, dengan nilai n = 37, maka banyaknya
                            kelas interval yang sesuai adalah: 1 + 3,3 log 37 = 6,18 atau 6 kelas interval. </p>
                        <p>Selain itu dapat juga digunakan Aturan Rice, yaitu: menentukan jumlah kelas interval sebanyak
                            2 x ∛n, dimana n merupakan banyaknya data.
                            Sehingga banyaknya kelas interval untuk data jumlah ayat dari surah pada juz 30 adalah 2 x
                            ∛37=2 x 3,33=6,66 ≈7 kelas interval.
                        </p>
                        <p>Jadi bagaimana sebaiknya cara yang digunakan untuk memilih jumlah kelas interval yang sesuai?
                            Cara terbaik adalah dengan mencoba membuat histogram dengan beberapa pilihan jumlah kelas
                            interval berbeda, kemudian memilih salah satu histogram yang menurut kita paling baik
                            menyampaikan bentuk distribusi data.
                        </p>
                        <p>Menurutmu, data jumlah ayat dari surah pada juz 30 lebih sesuai ditampilkan dengan berapa
                            kelas? </p>
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
        <li class="li"></li>
        <li class="li ms-5 ps-5 fw-bolder b"> {{ $articles[0]->nama_article }}</li>
        <li class="li">
            <form action="{{ route('call21') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi3 }}">
                <input type="hidden" name="materi3" value="{{ $articles[0]->id }}">
                <button type="submit" class="dropdown-item b">
                    {{ $articles[1]->nama_article }} <i class="bi bi-chevron-right"></i>
                </button>
            </form>
        </li>
    </ul>
</footer>
@endsection