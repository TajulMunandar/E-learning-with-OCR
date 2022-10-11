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

<div class="container pt-3 pb-3">
    <article class="p-5">
        <h1 class="fw-bold">B. Penyajian data variabel kuantitatif </h1>
        <p>Alquran merupakan Kalamullah yang diturunkan kepada umat Islam melalui Nabi Muhammad SAW
            sekaligus merupakan salah satu mukjizat beliau. Alquran berisi petunjuk dan juga mengandung banyak
            sekali ilmu pengetahuan yang bermanfaat untuk manusia, serta memiliki berbagai keajaiban.
            Keajaiban-keajaiban alquran telah banyak dikaji oleh para ilmuwan sejak jaman dahulu hingga sekarang,
            baik di bidang sains, sejarah, matematika dan lain-lain. Salah satu keajaiban alquran yang pernah dikaji
            ilmuwan adalah keindahan susunan ayat dan makna alquran (Contoh: Botani, 2012).
            Tabel berikut menampilkan data jumlah ayat untuk setiap surah yang ada dalam Juz 30.</p>

        <p class="text-center fs-5"><b>Tabel 2.6 </b>Jumlah ayat untuk setiap surah dalam juz 30</p>

        <table class="table table-info table-striped mt-3">
            <thead class="text-center">
                <tr>
                    <th scope="col">NO SURAH</th>
                    <th scope="col">NAMA SURAH</th>
                    <th scope="col">JUMLAH AYAT</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <th>78</th>
                    <th>An-Naba’</th>
                    <th>40</th>
                </tr>
                <tr>
                    <th>79</th>
                    <th>An-Nazi’at</th>
                    <th>46</th>
                </tr>
                <tr>
                    <th>80</th>
                    <th>‘Abasa</th>
                    <th>42</th>
                </tr>
                <tr>
                    <th>81</th>
                    <th>At-Takwir</th>
                    <th>29</th>
                </tr>
                <tr>
                    <th>82</th>
                    <th>Al-Infithar</th>
                    <th>19</th>
                </tr>
                <tr>
                    <th>83</th>
                    <th>Al-Muthaffifin</th>
                    <th>36</th>
                </tr>
                <tr>
                    <th>84</th>
                    <th>Al-Insyiqaq</th>
                    <th>25</th>
                </tr>
                <tr>
                    <th>85</th>
                    <th>Al-Buruj</th>
                    <th>22</th>
                </tr>
                <tr>
                    <th>86</th>
                    <th>Ath-Thariq</th>
                    <th>17</th>
                </tr>
                <tr>
                    <th>87</th>
                    <th>Al-A’laa</th>
                    <th>19</th>
                </tr>
                <tr>
                    <th>88</th>
                    <th>Al-Ghasyiah</th>
                    <th>26</th>
                </tr>
                <tr>
                    <th>89</th>
                    <th>Al-Fajr</th>
                    <th>30</th>
                </tr>
                <tr>
                    <th>90</th>
                    <th>Al-Balad</th>
                    <th>20</th>
                </tr>
                <tr>
                    <th>91</th>
                    <th>Asy-Syam</th>
                    <th>15</th>
                </tr>
                <tr>
                    <th>92</th>
                    <th>Al-Lail</th>
                    <th>21</th>
                </tr>
                <tr>
                    <th>93</th>
                    <th>ad-Dhuha</th>
                    <th>11</th>
                </tr>
                <tr>
                    <th>94</th>
                    <th>Asy-Syarh</th>
                    <th>8</th>
                </tr>
                <tr>
                    <th>95</th>
                    <th>At-Tin</th>
                    <th>8</th>
                </tr>
                <tr>
                    <th>96</th>
                    <th>Al-’Alaq</th>
                    <th>19</th>
                </tr>
                <tr>
                    <th>97</th>
                    <th>Al-Qadr</th>
                    <th>5</th>
                </tr>
                <tr>
                    <th>98</th>
                    <th>Al-Bayyinah</th>
                    <th>8</th>
                </tr>
                <tr>
                    <th>99</th>
                    <th>Az-Zalzalah</th>
                    <th>8</th>
                </tr>
                <tr>
                    <th>100</th>
                    <th>Al-’Aadiyah</th>
                    <th>11</th>
                </tr>
                <tr>
                    <th>101</th>
                    <th>Al-Qari’ah</th>
                    <th>11</th>
                </tr>
                <tr>
                    <th>102</th>
                    <th>At-Takatsur</th>
                    <th>8</th>
                </tr>
                <tr>
                    <th>103</th>
                    <th>Al-’Ashr</th>
                    <th>3</th>
                </tr>
                <tr>
                    <th>104</th>
                    <th>Al-Humazah</th>
                    <th>9</th>
                </tr>
                <tr>
                    <th>105</th>
                    <th>Al-Fiil</th>
                    <th>5</th>
                </tr>
                <tr>
                    <th>106</th>
                    <th>Quraisy</th>
                    <th>4</th>
                </tr>
                <tr>
                    <th>107</th>
                    <th>Al-Ma’un</th>
                    <th>7</th>
                </tr>
                <tr>
                    <th>108</th>
                    <th>Al-Kautsar</th>
                    <th>3</th>
                </tr>
                <tr>
                    <th>109</th>
                    <th>Al-Kafirun</th>
                    <th>6</th>
                </tr>
                <tr>
                    <th>110</th>
                    <th>An-Nashr</th>
                    <th>3</th>
                </tr>
                <tr>
                    <th>111</th>
                    <th>Al-Lahab</th>
                    <th>5</th>
                </tr>
                <tr>
                    <th>112</th>
                    <th>Al-Ikhlas</th>
                    <th>4</th>
                </tr>
                <tr>
                    <th>113</th>
                    <th>Al-Falaq</th>
                    <th>5</th>
                </tr>
                <tr>
                    <th>114</th>
                    <th>An-Nas</th>
                    <th>6</th>
                </tr>
            </tbody>
        </table>

        <p>Dari tabel tersebut terlihat bahwa susunan jumlah ayat al-Quran dalam Juz 30 bervariasi dalam rentang 3
            ayat sampai 46 ayat, dimana beberapa surah terakhir memiliki jumlah ayat yang lebih sedikit dibandingkan
            jumlah ayat pada surah-surah di bagian awal juz. Bentuk atau pola distribusi jumlah ayat
            dalam surah yang ada dalam Juz 30 tersebut akan lebih mudah terlihat jika ditampilkan dalam bentuk grafik.
        </p>
        <p>Beberapa jenis grafik yang dapat digunakan untuk menampilkan data
            <button type="button" class="btn btn-kuantatif " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <h4>Kuantitatif</h4>
            </button>
            diantaranya stemplot, histogram,dan poligon frekuensi. Pada bagian ini kita
            akan membahas ketiga grafik tersebut.</p>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Catatan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Variabel kuantitatif merupakan variabel yang diukur dalam bentuk skala numerik.
                            Contohnya Tinggi, berat, temperatur, dan skor ujian. </p>
                        <p>Variabel kuantitatif berbeda dengan variabel kategori (kualitatif) seperti warna favorit,
                            agama, tempat lahir, dimana tidak ada pengurutan atau pengukuran yang terlibat </p>
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
            <form action="{{ route('call11') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi2 }}">
                <input type="hidden" name="materi2" value="{{ $articles[0]->id }}">
                <button type="submit" class="dropdown-item b">
                    {{ $articles[1]->nama_article }} <i class="bi bi-chevron-right"></i>
                </button>
            </form>
        </li>
    </ul>
</footer>
@endsection
