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
        <h1 class="fw-bold">Materi Tingkat Lanjut (Advanced)</h1>
        <p class="fw-bold">Stemplot Dua Arah (back-to-back Stemplot) </p>
        <p>Stemplot dua arah merupakan jenis stemplot yang berguna untuk menampilkan distribusi dari dua kelompok data
            dan dapat membandingkan distribusi dengan cepat. Salah satu kelompok data diletakkan pada bagian depan
            batang
            dan kelompok data lainnya diletakkan pada bagian belakang batang.</p>
        <h1>Contoh 2.7 </h1>
            <p>Berikut adalah data Ujian Akhir Semester pada Mata Kuliah Statistika dari dua kelas berbeda.</p>
        <p>Kelas A: </p>
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

        <p>Kelas B: </p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">70</th>
                    <th scope="col">70</th>
                    <th scope="col">73</th>
                    <th scope="col">73</th>
                    <th scope="col">75</th>
                    <th scope="col">76</th>
                    <th scope="col">78</th>
                    <th scope="col">78</th>
                    <th scope="col">78</th>
                    <th scope="col">79</th>
                    <th scope="col">80</th>
                    <th scope="col">81</th>
                </tr>
                <tr>
                    <th scope="col">81</th>
                    <th scope="col">82</th>
                    <th scope="col">82</th>
                    <th scope="col">83</th>
                    <th scope="col">84</th>
                    <th scope="col">85</th>
                    <th scope="col">87</th>
                    <th scope="col">87</th>
                    <th scope="col">88</th>
                    <th scope="col">91</th>
                    <th scope="col">92</th>
                    <th scope="col"></th>
                </tr>
            </thead>
        </table>

        <p>Nilai ujian dari kedua kelas tersebut dapat dibandingkan dengan menggunakan stemplot dua arah sebagai
            berikut:</p>
        <img src="img/materi2/stemplot2.png" alt="" class="d-block m-auto">
        <p class="text-center fs-5"><span class="fw-bold">Gambar 2.6 </span>Stemplot dua arah nilai ujian akhir semester pada Mata Kuliah Statistika</p>
    
        <p>Stemplot pada Gambar 2.6 membandingkan nilai mahasiswa dari Kelas A dan Kelas B. Batangnya berada di kolom
            tengah dan daun yang bagian kiri merupakan nilai mahasiswa dari Kelas A, sementara daun sebelah kiri
            menampilkan nilai mahasiswa dari Kelas B. Misalnya, baris kedua terakhir menunjukkan bahwa ada dua mahasiswa
            dari Kelas A yang mendapat nilai 90 dan ada mahasiswa di Kelas B yang mendapat nilai 91 dan 92.
            Dari stemplot pada Gambar 2.6 kita dapat melihat bahwa kedua kelas memiliki distribusi yang hampir sama, hanya
            saja Kelas A nilainya lebih tersebar dibanding Kelas B.
        </p>
        <p>Ada dua hal yang membuat data nilai mahasiswa tersebut mudah ditampilkan dengan stemplot. Pertama, datanya
            berbentuk bilangan bulat yang dapat ditampilkan satu digit batang dan satu digit daun. Kedua, semua data
            bernilai positif. Jika data data terdiri dari bilangan dengan tiga digit atau lebih, atau bentuk desimal,
            maka data dapat dibulatkan dalam digit terdekat.</p>
        <p>Distribusi jumlah ayat pada surah dalam Juz 29 dan Juz 30. </p>

        <table class="table">
            <thead class="fw-bold text-center">
                <tr>
                    <th scope="col">No Surah</th>
                    <th scope="col">Nama Surah</th>
                    <th scope="col">Jumlah Ayat</th>
                    <th scope="col">No Surah</th>
                    <th scope="col">Nama Surah</th>
                    <th scope="col">Jumlah Ayat</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <th>58</th>
                    <th>Al-Mujadila</th>
                    <th>22</th>
                    <th>67</th>
                    <th>Al-Mulk</th>
                    <th>30</th>
                </tr>
                <tr>
                    <th>59</th>
                    <th>Al-Hashr</th>
                    <th>24</th>
                    <th>68</th>
                    <th>Al-Qalam</th>
                    <th>52</th>
                </tr>
                <tr>
                    <th>60</th>
                    <th>Al-Mumtahanah</th>
                    <th>13</th>
                    <th>69</th>
                    <th>Al-Haqqah</th>
                    <th>52</th>
                </tr>
                <tr>
                    <th>61</th>
                    <th>As-Saf</th>
                    <th>14</th>
                    <th>70</th>
                    <th>Al-Ma’arij</th>
                    <th>44</th>
                </tr>
                <tr>
                    <th>62</th>
                    <th>Al-Jumu’ah</th>
                    <th>11</th>
                    <th>71</th>
                    <th>Nuh</th>
                    <th>28</th>
                </tr>
                <tr>
                    <th>63</th>
                    <th>Al-Munafiqun</th>
                    <th>11</th>
                    <th>72</th>
                    <th>Al-Jinn</th>
                    <th>28</th>
                </tr>
                <tr>
                    <th>64</th>
                    <th>At-Taghabun</th>
                    <th>18</th>
                    <th>73</th>
                    <th>Al-Muzzammil</th>
                    <th>20</th>
                </tr>
                <tr>
                    <th>65</th>
                    <th>At-Talaq</th>
                    <th>12</th>
                    <th>74</th>
                    <th>Al-Muddaththir</th>
                    <th>56</th>
                </tr>
                <tr>
                    <th>66</th>
                    <th>At-Tahrim</th>
                    <th>12</th>
                    <th>75</th>
                    <th>Al-Qiyamah</th>
                    <th>40</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>76</th>
                    <th>Al-Insan</th>
                    <th>31</th>
                </tr>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>77</th>
                    <th>Al-Mursalat </th>
                    <th>50</th>
                </tr>
            </tbody>
        </table>

        <p>Dari stemplot yang dihasilkan maka dapat dilihat perbandingan sebaran
            jumlah ayat dari surah-surah yang ada pada juz 28 dan juz 29. Beberapa diantaranya adalah sebagai berikut:</p>

            <ul class="fs-4">
                <li>Jumlah surah pada juz 29 lebih banyak daripada jumlah surah pada juz 28. </li>
                <li>Surah pada juz 29 berkisar antara 20 sampai 50an ayat, sementara surah pada juz 28 berkisar antara 10 sampai 20an ayat</li>
                <li>Pada juz 28 kebanyakan surahnya memiliki sekitar 10an ayat, sementara pada juz 29 kebanyakan surahnya memiliki sekitar 50an ayat. </li>
            </ul>

            <p><i>Thinking:</i></p>
            <p>Apakah kamu pernah mengikuti program tahfizul-Quran? Menurutmu, diantara juz 28 dan juz 29, yang mana yang lebih mudah untuk dihafal? Mengapa? </p>
    </article>
</div>

<footer>
    <hr>
    <ul class=" ul d-flex">
        <li class="li">
            <form action="{{ route('call12') }}" method="post">
                @csrf
                <button type="submit" class="dropdown-item b">
                    <i class="bi bi-chevron-left"></i> {{ $articles[2]->nama_article }}

                </button>
            </form>
        </li>
        <li class="li fw-bolder b"> {{ $articles[3]->nama_article }}</li>
        <li class="li">
            <form action="{{ route('call14') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="materi" value="{{ auth()->user()->materi2 }}">
                <input type="hidden" name="materi2" value="{{ $articles[3]->id }}">
                <button type="submit" class="dropdown-item b">
                    {{ $articles[4]->nama_article }} <i class="bi bi-chevron-right"></i>
                </button>
            </form>
        </li>
    </ul>
</footer>
@endsection
