@extends('layouts.landing')
@section('content')

<section class="to-top-btn white-radius-hover position-fixed" id="to-top-btn">
    <i class="bi bi-arrow-up-circle text-white"></i>
</section>

<!------------------------------>
<!----- Hero Banner Start ------>
<!------------------------------>
<section class="hero-banner position-relative overflow-hidden">
    <div class="container searching-container d-flex justify-content-center">
    <div class="row d-flex justify-content-center w-100">
        <div class="col-12 text-center text-white px-0">
            <h4 class="text-capitalize lh-sm">badan perencanaan pembangunan daerah</h4>
            <h4 class="text-capitalize lh-sm mb-5">pemerintah provinsi kalimantan timur</h4>
            <h5 class="text-capitalize lh-sm mb-3">Dapatkan layanan publik di Bappeda Kaltim</h5>
            <form action="" class="input-search p-0">
                <input type="search" class="custom-form-control mx-0  my-0 py-0" placeholder="Ketik untuk mencari..">
                <i class="bi bi-search icon-search  my-0 py-0"></i>
                <input class="custom-btn  py-0 my-0" type="submit" value="Cari">
            </form>
        </div>
    </div>
    </div>
    <h1 class="text-province text-uppercase">kalimantan timur</h1>
    <!-- Swiper Banner -->
    <div class="swiper swiper-banner">
        <div class="swiper-wrapper swiper-banner-wrapper">
            <div class="swiper-slide swiper-banner-slide">
                <img src="{{ asset('assets/images/selayang-pandang-1.jpg')}}"/>
            </div>
            <div class="swiper-slide swiper-banner-slide">
                <img src="{{ asset('assets/images/selayang-pandang-2.jpg')}}"/>
            </div>
            <div class="swiper-slide swiper-banner-slide">
                <img src="{{ asset('assets/images/selayang-pandang-3.jpg')}}"/>
            </div>
        </div>
    </div>
    <!-- Swiper Banner End -->
</section>
<!----------------------------->
<!------ Hero Banner End ------>
<!----------------------------->

<!----------------------------->
<!----- Content Hub Start ----->
<!----------------------------->
<section class="over-top-section content-hub-section position-relative d-flex justify-content-center my-0">
    <div class="container over-top-container">
        <div class="row m-0 p-0">
            <div class="col-12 overview-container d-flex justify-content-center w-100 position-relative text-white mb-5 py-3 py-lg-4">
                <div class="row m-0 p-0">
                    <div class="col-6 col-lg-3 left-content position-relative d-flex align-items-center justify-content-center p-0 m-0 mb-4 mb-lg-0">
                        <div class="image-container">
                            <img src="{{ asset('assets/images/kepala-bappeda.jpg')}}" alt="Kepala Bappeda">
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 flex-column justify-content-center align-items-center right-content mx-0 px-3 my-0 py-0">
                        <div class="title-content d-flex align-items-center justify-content-between mb-3">
                            <p class="tagline text-uppercase fw-bold py-0">selayang pandang</p>
                            <hr class="hr-title-white flex-grow-1 ms-3">
                        </div>
                        <div class="description d-flex flex-column justify-content-between my-0">
                            <h4 class="title text-capitalize py-0">badan perencanaan pembangunan daerah</h4>
                            <p class="about lh-sm my-0">Selamat datang di Website Resmi Bappeda Provinsi Kalimantan Timur. Website ini merupakan platform informasi yang menyediakan berbagai data dan gambaran tentang Bappeda dalam melaksanakan tugas perencanaan dan pengembangan daerah. Kami berkomitmen untuk memberikan pelayanan yang transparan dan akuntabel kepada masyarakat, serta mendukung upaya pembangunan yang berkelanjutan di Provinsi Kalimantan Timur.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 news-container position-relative m-0 mb-5 p-0">
                <div class="row">
                    <div class="col-12 col-lg-9 mb-4 mb-lg-0">
                        <div class="row">
                            <div class="col-12">
                                    <div class="title-content title-section d-flex align-items-center justify-content-between mb-3">
                                        <p class="text-title text-capitalize lh-sm my-0 py-0">berita terkini</p>
                                        <hr class="hr-title-black flex-grow-1 mx-3">
                                        <a href="#" class="all-news-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none lh-sm gap-3 fw-500">
                                            lihat semua berita
                                            <i class="bi bi-box-arrow-up-right"></i>
                                        </a>
                                    </div>
                            </div>
                            <div class="col-12 col-md-4 order-3 oder-md-2 mb-4 mb-md-0">
                                <div id="gpr-kominfo-widget-container"></div>
                            </div>
                            <div class="col-12 col-md-8 order-2 order-md-3 mb-4 mb-md-0">
                                <!-- swiper-news -->
                                <div class="swiper swiper-news swiper-primary swiper-primary-hover" id="swiper-news">
                                    <div class="swiper-wrapper swiper-primary-wrapper">
                                        <div class="swiper-slide swiper-primary-slide">
                                            <img src="https://bappeda.kaltimprov.go.id/storage/posts-news/October2024/lXcmhTKxKduzw6UgLHf0.jpg')}}"/>
                                            <div class="primary-slide-content pb-4">
                                                <p class="title text-white fw-bold text-capitalize mb-2">
                                                    Rapat Asistensi Rencana Kerja Tahunan Program Forest Carbon Partnership Facility-Carbon Fund (PFCP-CF)
                                                </p>
                                                <p class="date text-white text-capitalize mb-2">
                                                    Rabu, 30 Oktober 2024
                                                </p>
                                                <p class="description text-white">
                                                    Dalam upaya mengoptimalkan implementasi program penurunan emisi Gas Rumah Kaca (GRK) di Kalimantan Timur, Bappeda Kaltim menggelar rapat asistensi Rencana Kerja Tahunan (Annual Work Plan/AWP) untuk Program Forest Carbon Partnership Facility-Carbon Fund (FCPF-CF) pada hari ini. Acara ini berlangsung di Ruang Rapat Poldas, Kantor Bappeda Provinsi Kalimantan Timur.
                                                </p>
                                                <a href="#" class="detail-primary-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none text-white gap-3">
                                                    baca selengkapnya
                                                    <i class="bi bi-box-arrow-up-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-primary-slide">
                                            <img src="https://bappeda.kaltimprov.go.id/storage/posts-news/October2024/atK2yZJ2EWO6FHuTn7g5.jpg')}}" />
                                            <div class="primary-slide-content pb-4">
                                                <p class="title text-white fw-bold text-capitalize mb-2">
                                                    Kepala Bappeda Kaltim Bahas Transformasi Ekonomi Berkelanjutan dalam Dialog Publika TVRI Kaltim
                                                </p>
                                                <p class="date text-white text-capitalize mb-2">
                                                    Jumat, 25 oktober 2024
                                                </p>
                                                <p class="description text-white">
                                                    Kalimantan Timur terus mempersiapkan diri menghadapi transformasi ekonomi yang menjadi agenda nasional dan daerah tahun 2025-2045. Dalam acara Dialog Publik yang dihadiri oleh Kepala Bappeda Kaltim, Yusliando, berbagai langkah strategis untuk memastikan Kaltim mampu beradaptasi dengan perubahan di masa mendatang.
                                                </p>
                                                <a href="#" class="detail-primary-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none text-white gap-3">
                                                    baca selengkapnya
                                                    <i class="bi bi-box-arrow-up-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-primary-slide">
                                            <img src="https://bappeda.kaltimprov.go.id/storage/posts-news/November2024/xYjdQPtOhaqEwmKbYiwx.png')}}" />
                                            <div class="primary-slide-content pb-4">
                                                <p class="title text-white fw-bold text-capitalize mb-2">
                                                    Kepala Bappeda Kaltim Tekankan Pentingnya Forum Konsultasi Daerah dalam FGD GESIT dan GER
                                                </p>
                                                <p class="date text-white text-capitalize mb-2">
                                                    senin, 04 november 2024
                                                </p>
                                                <p class="description text-white">
                                                    Kementerian PPN/Bappenas bersama Kementerian Federal Jerman untuk Kerja Sama Ekonomi dan Pembangunan (BMZ) menyelenggarakan Diskusi Kelompok Terpumpun (FGD) di Hotel Fugo Samarinda, Senin (04/11).
                                                </p>
                                                <a href="#" class="detail-primary-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none text-white gap-3">
                                                    baca selengkapnya
                                                    <i class="bi bi-box-arrow-up-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-primary-slide">
                                            <img src="https://bappeda.kaltimprov.go.id/storage/posts-news/November2024/4pJvrWlPzh5w2dDBkikS.png')}}" />
                                            <div class="primary-slide-content pb-4">
                                                <p class="title text-white fw-bold text-capitalize mb-2">
                                                    Sukses Ikuti Pelatihan Kepemimpinan Nasional Tingkat II Kepala Bappeda Raih Penghargaan
                                                </p>
                                                <p class="date text-white text-capitalize mb-2">
                                                    jumat, 01 november 2024
                                                </p>
                                                <p class="description text-white">
                                                    Kepala Bappeda Provinsi Kalimantan Timur, Yusliando mengikuti Seminar Policy Brief dan Mendapatkan penghargaan dalam rangkaian kegiatan Pelatihan Kepemimpinan Nasional Tingkat II Angkatan XXIV Tahun 2024. Dalam Seminar Policy Brief yang diadakan di Aula Utama BPSDM Provinsi Kalimantan Timur (31/10/2024)
                                                </p>
                                                <a href="#" class="detail-primary-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none text-white gap-3">
                                                    baca selengkapnya
                                                    <i class="bi bi-box-arrow-up-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-primary-slide">
                                            <img src="https://bappeda.kaltimprov.go.id/storage/posts-news/November2024/50l0UvpqYz37HtOgAptA.png')}}" />
                                            <div class="primary-slide-content pb-4">
                                                <p class="title text-white fw-bold text-capitalize mb-2">Tampil Memukau dalam Fashion Show HUT KORPRI ke-53: Bappeda Kaltim Juara</p>
                                                <p class="date text-white text-capitalize mb-2">
                                                    kamis, 31 oktober 2024
                                                </p>
                                                <p class="description text-white">
                                                    Pemerintah Provinsi Kalimantan Timur merayakan HUT Korps Pegawai Republik Indonesia (KORPRI) ke-53 dengan serangkaian acara meriah, salah satunya Fashion Show Seragam Batik Korpri yang digelar di Halaman Kantor Gubernur Kaltim pada Kamis, 31 Oktober 2024. Acara ini diikuti oleh 46 pasang peserta perwakilan dari seluruh Organisasi Perangkat Daerah (OPD) di lingkungan Pemprov Kaltim, termasuk Badan Perencanaan Pembangunan Daerah (Bappeda) Kaltim.
                                                </p>
                                                <a href="#" class="detail-primary-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none text-white gap-3">
                                                    baca selengkapnya
                                                    <i class="bi bi-box-arrow-up-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-primary-slide">
                                            <img src="https://bappeda.kaltimprov.go.id/storage/posts-news/October2024/FvAddHa3Qsx7M9ujZFez.png')}}" />
                                            <div class="primary-slide-content pb-4">
                                                <p class="title text-white fw-bold text-capitalize mb-2">
                                                    Mini Expo dan Seminar Proyek Perubahan Kolabora.sie
                                                </p>
                                                <p class="date text-white text-capitalize mb-2">
                                                    Rabu, 30 Oktober 2024
                                                </p>
                                                <p class="description text-white">
                                                    Samarinda, (30/10/2024), Kepala Bappeda Provinsi Kalimantan Timur, Bapak Yusliando menampilkan Proyek Perubahan Strategi Percepatan Transformasi Ekonomi Berbasis Kolaborasi (kolabora.sie) dalam Mini Expo serta Seminar dalam rangkaian Pelatihan Kepemimpinan Nasional Tingkat II Angkatan XXIV Tahun 2024 di BPSDM Provinsi Kalimantan Timur.
                                                </p>
                                                <a href="#" class="detail-primary-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none text-white gap-3">
                                                    baca selengkapnya
                                                    <i class="bi bi-box-arrow-up-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-primary-pagination position-absolute d-flex align-items-center justify-content-between">
                                        <i class="bi bi-chevron-left btn-prev text-white fs-9"></i>
                                        <i class="bi bi-chevron-right btn-next text-white fs-9"></i>
                                        <div class="swiper-pagination d-flex align-items-center justify-content-between gap-2 fs-9"></div>
                                    </div>
                                </div>
                                <!-- Swiper News End -->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="d-flex flex-column">
                            <div class="news-category-btn d-flex align-items-center justify-content-between mb-3">
                                <p class="text-center fs-8 text-uppercase m-0 px-0 py-2 w-100 active">
                                    terbaru
                                </p>
                                <p class="text-center fs-8 text-uppercase m-0 px-0 py-2 w-100">
                                    terpopuler
                                </p>
                            </div>
                            <div class="news-item-content">
                                <!-- Swiper -->
                                <div class="swiper swiper-news-item">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide news-item-slide mb-3 px-2 py-2">
                                            <p class="title  mx-0 py-0">
                                                Seminar Awal Penyusunan Grand Desain Ketahanan Pangan Tahun 2025-2045 Provinsi Kaltim
                                            </p>
                                            <p class="date  my-0 py-0">Jumat, 08 November 2024</p>
                                        </div>
                                        <div class="swiper-slide news-item-slide mb-3 px-2 py-2">
                                            <p class="title  mx-0 py-0">
                                                Sinkronisasi Program Pengembangan Masyarakat dengan Rencana Pembangunan Daerah Kalimantan Timur
                                            </p>
                                            <p class="date  my-0 py-0">Kamis, 07 November 2024</p>
                                        </div>
                                        <div class="swiper-slide news-item-slide mb-3 px-2 py-2">
                                            <p class="title  mx-0 py-0">
                                                Rakor Dukungan Peta Kerawanan Narkoba (PEKA) melalui Informasi Geospasial
                                            </p>
                                            <p class="date  my-0 py-0">Rabu, 06 November 2024</p>
                                        </div>
                                        <div class="swiper-slide news-item-slide mb-3 px-2 py-2">
                                            <p class="title  mx-0 py-0">
                                                Bappeda Kaltim Sabet Juara I dan III dalam Ajang Lomba Lari 5000 Meter HUT KORPRI ke 53
                                            </p>
                                            <p class="date  my-0 py-0">Rabu, 06 November 2024</p>
                                        </div>
                                        <div class="swiper-slide news-item-slide mb-3 px-2 py-2">
                                            <p class="title  mx-0 py-0">
                                                Bhumandala Award 2024: Pemprov Kaltim Raih Penghargaan Bhumandala Rajata
                                            </p>
                                            <p class="date  my-0 py-0">Selasa, 05 November 2024</p>
                                        </div>
                                        <div class="swiper-slide news-item-slide mb-3 px-2 py-2">
                                            <p class="title  mx-0 py-0">
                                                Bhumandala Award 2024: Pemprov Kaltim Raih Penghargaan Bhumandala Rajata
                                            </p>
                                            <p class="date  my-0 py-0">Selasa, 05 November 2024</p>
                                        </div>
                                        <div class="swiper-slide news-item-slide mb-3 px-2 py-2">
                                            <p class="title  mx-0 py-0">
                                                Bhumandala Award 2024: Pemprov Kaltim Raih Penghargaan Bhumandala Rajata
                                            </p>
                                            <p class="date  my-0 py-0">Selasa, 05 November 2024</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Swiper News Item End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 info-container position-relative m-0 mb-5 p-0">
                <div class="row">
                    <div class="col-lg-8 col-md-12 left-content position-relative mb-5 mb-lg-0">
                        <div class="title-content title-section d-flex align-items-center justify-content-between mb-3">
                            <p class="text-title text-capitalize lh-sm my-0 py-0">informasi terkini</p>
                            <hr class="hr-title-black flex-grow-1 ms-3">
                        </div>
                        <!-- Swiper Information -->
                        <div class="swiper swiper-information">
                            <div class="swiper-wrapper swiper-information-wrapper">
                                <div class="swiper-slide swiper-information-slide">
                                    <img src="{{ asset('assets/images/informasi-1.png')}}" />
                                </div>
                                <div class="swiper-slide swiper-information-slide">
                                    <img src="{{ asset('assets/images/informasi-2.png')}}" />
                                </div>
                                <div class="swiper-slide swiper-information-slide">
                                    <img src="{{ asset('assets/images/informasi-3.png')}}" />
                                </div>
                            </div>
                            <div class="pagination-slide-content">
                                <div class="bottom-mid-pagination position-absolute d-flex align-items-center justify-content-between">
                                    <i class="bi bi-chevron-left btn-prev text-white fs-9"></i>
                                    <i class="bi bi-chevron-right btn-next text-white fs-9"></i>
                                    <div class="swiper-pagination d-flex align-items-center justify-content-between gap-2 fs-9"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Swiper Information End -->
                    </div>
                    <div class="col-lg-4 col-md-12 right-content d-flex align-items-start justify-content-start position-relative  ps-0 ps-lg-3">
                        <div class="right-content-container position-relative">
                            <div class="top-content position-relative">
                                <p class="title text-uppercase fw-bold px-0 mx-0">agenda bappeda kaltim</p>
                                <p class="text-ajakan px-0 mx-0">Ikuti agenda terkini dari Bappeda Kaltim</p>
                            </div>
                            <div class="main-content">
                                <p class="text-month text-capitalize mb-4 py-0">november 2024</p>
                                <!-- <p class="text-week mb-4 py-0">Minggu ke 1</p> -->
                                <!-- Swiper Date-->
                                <div class="swiper swiper-date d-flex justify-content-center mb-4" id="swiper-date">
                                    <div class="swiper-date-prev d-flex align-items-center justify-content-start">
                                        <i class="bi bi-chevron-left icon-chevron-left text-black"></i>
                                    </div>
                                    <div class="swiper-wrapper swiper-date-wrapper">
                                        <div class="swiper-slide swiper-date-slide py-2 active">
                                            <div class="date-day-content d-flex flex-column align-items-center justify-content-center">
                                                <p class="text-day text-uppercase mb-1 py-0">sen</p>
                                                <p class="text-date my-0 py-0">11</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-date-slide py-2">
                                            <div class="date-day-content d-flex flex-column align-items-center justify-content-center">
                                                <p class="text-day text-uppercase mb-1 py-0">sel</p>
                                                <p class="text-date my-0 py-0">12</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-date-slide py-2">
                                            <div class="date-day-content d-flex flex-column align-items-center justify-content-center">
                                                <p class="text-day text-uppercase mb-1 py-0">rab</p>
                                                <p class="text-date my-0 py-0">13</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-date-slide py-2">
                                            <div class="date-day-content d-flex flex-column align-items-center justify-content-center">
                                                <p class="text-day text-uppercase mb-1 py-0">kam</p>
                                                <p class="text-date my-0 py-0">14</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-date-slide py-2">
                                            <div class="date-day-content d-flex flex-column align-items-center justify-content-center">
                                                <p class="text-day text-uppercase mb-1 py-0">jum</p>
                                                <p class="text-date my-0 py-0">15</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-date-slide py-2">
                                            <div class="date-day-content d-flex flex-column align-items-center justify-content-center">
                                                <p class="text-day text-uppercase mb-1 py-0">sab</p>
                                                <p class="text-date my-0 py-0">16</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-date-slide py-2">
                                            <div class="date-day-content d-flex flex-column align-items-center justify-content-center">
                                                <p class="text-day text-uppercase mb-1 py-0">min</p>
                                                <p class="text-date my-0 py-0">17</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-date-next d-flex align-items-center justify-content-end">
                                        <i class="bi bi-chevron-right icon-chevron-right text-black"></i>
                                    </div>
                                </div>
                                <!-- Swiper Date End -->
                                <div class="detail-agenda-container">
                                    <div class="agenda-content">
                                        <p class="title">
                                            Narasumber Dialog Publik Masyarakat Adat Provinsi Kalimantan Timur Tahun 2024
                                        </p>
                                        <p class="location">Hotel Mercure Samarinda</p>
                                        <div class="bottom-content d-flex align-items-end justify-content-between">
                                            <p class="time">08.00 WITA s.d. Selesai</p>
                                            <p class="status text-capitalize">telah selesai</p>
                                        </div>
                                    </div>
                                    <div class="agenda-content">
                                        <p class="title">
                                            FGD II Penyusunan Insentif dan Disinsentif Pemanfaatan Ruang Daerah Prorinsi Kalimantan Timur
                                        </p>
                                        <p class="location">Hotel Fugo Samarinda</p>
                                        <div class="bottom-content d-flex align-items-end justify-content-between">
                                            <p class="time">08.00 WITA s.d. Selesai</p>
                                            <p class="status text-capitalize">telah selesai</p>
                                        </div>
                                    </div>
                                    <div class="agenda-content">
                                        <p class="title">
                                            FGD II Penyusunan Insentif dan Disinsentif Pemanfaatan Ruang Daerah Prorinsi Kalimantan Timur
                                        </p>
                                        <p class="location">Hotel Fugo Samarinda</p>
                                        <div class="bottom-content d-flex align-items-end justify-content-between">
                                            <p class="time">08.00 WITA s.d. Selesai</p>
                                            <p class="status text-capitalize">telah selesai</p>
                                        </div>
                                    </div>
                                    <div class="agenda-content">
                                        <p class="title">
                                            FGD II Penyusunan Insentif dan Disinsentif Pemanfaatan Ruang Daerah Prorinsi Kalimantan Timur
                                        </p>
                                        <p class="location">Hotel Fugo Samarinda</p>
                                        <div class="bottom-content d-flex align-items-end justify-content-between">
                                            <p class="time">08.00 WITA s.d. Selesai</p>
                                            <p class="status text-capitalize">telah selesai</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 award-maps-container position-relative m-0 mb-3 mb-lg-5 p-0">
                <div class="row g-3">
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0 ps-0">
                        <div class="m-0 p-0">
                            <div class="title-content title-section d-flex align-items-center justify-content-between mb-3">
                                <p class="text-title text-capitalize lh-sm my-0 py-0">penghargaan</p>
                                <hr class="hr-title-black flex-grow-1 mx-3">
                                <a href="#" class="all-news-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none gap-3 fw-500">
                                    lihat semua Penghargaan
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>
                            </div>
                            <!-- Swiper Award -->
                            <div class="swiper swiper-award swiper-award-maps swiper-primary-hover">
                                <div class="swiper-wrapper swiper-primary-wrapper">
                                    <div class="swiper-slide swiper-primary-slide">
                                        <img src="https://bappeda.kaltimprov.go.id/storage/posts/7hD2l7nr.jpg')}}"/>
                                        <div class="primary-slide-content pb-4">
                                            <p class="title text-white fw-bold text-capitalize mb-2">
                                                Rapat Asistensi Rencana Kerja Tahunan Program Forest Carbon Partnership Facility-Carbon Fund (PFCP-CF)
                                            </p>
                                            <p class="description text-white">
                                                Dalam upaya mengoptimalkan implementasi program penurunan emisi Gas Rumah Kaca (GRK) di Kalimantan Timur, Bappeda Kaltim menggelar rapat asistensi Rencana Kerja Tahunan (Annual Work Plan/AWP) untuk Program Forest Carbon Partnership Facility-Carbon Fund (FCPF-CF) pada hari ini. Acara ini berlangsung di Ruang Rapat Poldas, Kantor Bappeda Provinsi Kalimantan Timur.
                                            </p>
                                            <a href="#" class="detail-primary-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none text-white gap-3">
                                                baca selengkapnya
                                                <i class="bi bi-box-arrow-up-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-primary-slide">
                                        <img src="https://bappeda.kaltimprov.go.id/storage/posts/DikxW91J.jpg')}}"/>
                                        <div class="primary-slide-content pb-4">
                                            <p class="title text-white fw-bold text-capitalize mb-2">
                                                Terbaik II Tata Kelola Kearsipan lingkup SKPD Kaltim, 2015
                                            </p>
                                            <p class="description text-white">
                                                Terbaik II Tata Kelola Kearsipan lingkup SKPD Kaltim, 2015
                                            </p>
                                            <a href="#" class="detail-primary-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none text-white gap-3">
                                                baca selengkapnya
                                                <i class="bi bi-box-arrow-up-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-primary-pagination position-absolute d-flex align-items-center justify-content-between">
                                    <i class="bi bi-chevron-left btn-prev text-white fs-9"></i>
                                    <i class="bi bi-chevron-right btn-next text-white fs-9"></i>
                                    <div class="swiper-pagination d-flex align-items-center justify-content-between gap-2 fs-9"></div>
                                </div>
                            </div>
                            <!-- Swiper Awar End -->
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 pe-0">
                        <div class="m-0 p-0">
                            <div class="row">
                                <div class="col-12 order-2 order-lg-1">
                                    <!-- Swiper Maps -->
                                    <div class="swiper swiper-maps swiper-award-maps swiper-primary-hover mb-3">
                                        <div class="swiper-wrapper swiper-primary-wrapper">
                                            <div class="swiper-slide swiper-primary-slide">
                                                <img src="https://bappeda.kaltimprov.go.id/storage/maps/February2021/svwqEYJ8c7RRTzZVNx1H.jpg')}}"/>
                                                <div class="primary-slide-content pb-4">
                                                    <p class="title text-white fw-bold text-capitalize mb-2">
                                                        Peta Kawasan Strategis Provinsi
                                                    </p>
                                                    <p class="description text-white">
                                                        Peta RTRW
                                                    </p>
                                                    <a href="#" class="detail-primary-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none text-white gap-3">
                                                        baca selengkapnya
                                                        <i class="bi bi-box-arrow-up-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="swiper-slide swiper-primary-slide">
                                                <img src="https://bappeda.kaltimprov.go.id/storage/maps/February2021/FdaC24dQBrtB8ALCjHoT.jpg')}}"/>
                                                <div class="primary-slide-content pb-4">
                                                    <p class="title text-white fw-bold text-capitalize mb-2">
                                                        Peta Rawan Bencana Alam
                                                    </p>
                                                    <p class="description text-white">
                                                        Peta RTRW
                                                    </p>
                                                    <a href="#" class="detail-primary-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none text-white gap-3">
                                                        baca selengkapnya
                                                        <i class="bi bi-box-arrow-up-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-primary-pagination position-absolute d-flex align-items-center justify-content-between">
                                            <i class="bi bi-chevron-left btn-prev text-white fs-9"></i>
                                            <i class="bi bi-chevron-right btn-next text-white fs-9"></i>
                                            <div class="swiper-pagination d-flex align-items-center justify-content-between gap-2 fs-9"></div>
                                        </div>
                                    </div>
                                    <!-- Swiper News End -->
                                </div>
                                <div class="col-12 order-1 order-lg-2">
                                    <div class="title-content title-section d-flex align-items-center justify-content-between">
                                        <p class="text-title text-capitalize my-0 py-0">peta</p>
                                        <hr class="hr-title-black flex-grow-1 mx-3">
                                        <a href="#" class="all-news-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none gap-3 fw-500">
                                            lihat semua peta
                                            <i class="bi bi-box-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------------------------------->
<!------- Content Hub End ---------->
<!---------------------------------->

<!---------------------------------->
<!------ Banner Data Center -------->
<!---------------------------------->
<section class="banner-dc-section position-relative d-flex justify-content-center m-0 mb-5 p-0 pt-3">
    <div class="container custom-container position-relative d-flex justify-content-center m-0 p-0">
        <div class="banner-container">
            <div class="text-content d-flex flex-column m-0 p-0">
                <p class="text-white fs-6 lh-sm m-0 mb-4 p-0">
                    Mau Tau Informasi Program Prioritas Pembangunan Daerah di Kalimantan Timur pada Tahun 2024?
                </p>
                <h2 class="text-white text-uppercase fw-light lh-sm mb-4">
                    Informasi Prioritas Daerah Provinsi Kalimantan Timur
                </h2>
                <div class="detail-btn d-flex">
                    <a href="#">Klik Disini</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------------------------------->
<!---- Banner Data Center End ------>
<!---------------------------------->

<!---------------------------------->
<!--------- Bappeda Apps ----------->
<!---------------------------------->
<section class="app-bappeda-section position-relative d-flex justify-content-center m-0 mb-5 p-0">
    <div class="container custom-container position-relative m-0 p-0">
        <div class="row m-0 p-0">
            <div class="col-12 app-bappeda-container position-relative m-0 p-0">
                <div class="title-content title-section d-flex align-items-center justify-content-between mb-3">
                    <p class="text-title text-capitalize lh-sm my-0 py-0">Aplikasi Bappeda Provinsi Kalimantan Timur</p>
                    <hr class="hr-title-black flex-grow-1 ms-3">
                </div>
                <div class="swiper swiper-app-bappeda" id="swiper-app-bappeda">
                    <div class="swiper-wrapper swiper-app-bappeda-wrapper">
                        <a href="#" class="swiper-slide app-bappeda-slide text-decoration-none d-flex flex-column justify-content-center align-items-center p-3">
                            <div class="title-contain mb-3">
                                <p class="title text-white text-wrap fw-bold lh-sm m-0 p-0">
                                    PORTAL PANTAU KEGIATAN BAPPEDA KALTIM
                                </p>
                            </div>
                            <div class="img-container d-flex align-items-center justify-content-center p-3">
                                <img src="https://bappeda.kaltimprov.go.id/storage/egovs/February2023/L9g7YOoKAnmY1mIvPzy0.png')}}" alt="">
                            </div>
                        </a>
                        <a href="#" class="swiper-slide app-bappeda-slide text-decoration-none d-flex flex-column justify-content-center align-items-center p-3">
                            <div class="title-container mb-3">
                                <p class="title text-white text-wrap fw-bold lh-sm m-0 p-0">
                                    EVALUASI
                                </p>
                            </div>
                            <div class="img-container d-flex align-items-center justify-content-center p-3">
                                <img src="https://bappeda.kaltimprov.go.id/storage/egovs/December2021/HdLntT3qHn8YCTe10wxC.png')}}" alt="">
                            </div>
                        </a>
                        <a href="#" class="swiper-slide app-bappeda-slide text-decoration-none d-flex flex-column justify-content-center align-items-center p-3">
                            <div class="title-container mb-3">
                                <p class="title text-white text-wrap fw-bold lh-sm m-0 p-0">
                                    SIDIK BAPPEDA
                                </p>
                            </div>
                            <div class="img-container d-flex align-items-center justify-content-center p-3">
                                <img src="https://bappeda.kaltimprov.go.id/storage/egovs/October2021/5LlyhmYqvBNQMFhmxEJP.png')}}" alt="">
                            </div>
                        </a>
                        <a href="#" class="swiper-slide app-bappeda-slide text-decoration-none d-flex flex-column justify-content-center align-items-center p-3">
                            <div class="title-container w-100 mb-3">
                                <p class="title text-white text-wrap fw-bold lh-sm m-0 p-0">
                                    SP4N LAPOR
                                </p>
                            </div>
                            <div class="img-container d-flex align-items-center justify-content-center p-3">
                                <img src="https://bappeda.kaltimprov.go.id/storage/egovs/October2021/PO9GF63Jj3Zo7Amgs2Xq.png')}}" alt="">
                            </div>
                        </a>
                        <a href="#" class="swiper-slide app-bappeda-slide text-decoration-none d-flex flex-column justify-content-center align-items-center p-3">
                            <div class="title-container w-100 mb-3">
                                <p class="title text-white text-wrap fw-bold lh-sm m-0 p-0">
                                    PION
                                </p>
                            </div>
                            <div class="img-container d-flex align-items-center justify-content-center p-3">
                                <img src="https://bappeda.kaltimprov.go.id/storage/egovs/February2023/3QI6UFhIci6n7WtGN2zV.jpeg" alt="">
                            </div>
                        </a>
                        <a href="#" class="swiper-slide app-bappeda-slide text-decoration-none d-flex flex-column justify-content-center align-items-center p-3">
                            <div class="title-container w-100 mb-3">
                                <p class="title text-white text-wrap fw-bold lh-sm m-0 p-0">
                                    CLOUD STORAGE KEGIATAN BAPPEDA
                                </p>
                            </div>
                            <div class="img-container d-flex align-items-center justify-content-center p-3">
                                <img src="https://bappeda.kaltimprov.go.id/storage/egovs/June2023/mRTkxeveNF0Xte93Rlzc.png')}}" alt="">
                            </div>
                        </a>
                        <a href="#" class="swiper-slide app-bappeda-slide text-decoration-none d-flex flex-column justify-content-center align-items-center p-3">
                            <div class="title-container w-100 mb-3">
                                <p class="title text-white text-wrap fw-bold lh-sm m-0 p-0">
                                    WHISTLEBLOWER'S SYSTEM (WBS)
                                </p>
                            </div>
                            <div class="img-container d-flex align-items-center justify-content-center p-3">
                                <img src="https://bappeda.kaltimprov.go.id/storage/egovs/September2024/TgN82DbCcUnYo6O6fRxj.png')}}" alt="">
                            </div>
                        </a>
                        <a href="#" class="swiper-slide app-bappeda-slide text-decoration-none d-flex flex-column justify-content-center align-items-center p-3">
                            <div class="title-container w-100 mb-3">
                                <p class="title text-white text-wrap fw-bold lh-sm m-0 p-0">
                                    RUANG PENGADUAN INSPEKTORAT DAERAH
                                </p>
                            </div>
                            <div class="img-container d-flex align-items-center justify-content-center p-3">
                                <img src="https://bappeda.kaltimprov.go.id/storage/egovs/September2024/RZ6lkET8XoHiMnTxE4T1.png')}}" alt="">
                            </div>
                        </a>
                        <a href="#" class="swiper-slide app-bappeda-slide text-decoration-none d-flex flex-column justify-content-center align-items-center p-3">
                            <div class="title-container w-100 mb-3">
                                <p class="title text-white text-wrap fw-bold lh-sm m-0 p-0">
                                    SIPD KEMENDAGRI
                                </p>
                            </div>
                            <div class="img-container d-flex align-items-center justify-content-center p-3">
                                <img src="https://bappeda.kaltimprov.go.id/storage/egovs/July2024/K3XLmu9YLSoic9Wmb92w.png')}}" alt="">
                            </div>
                        </a>
                        <a href="#" class="swiper-slide app-bappeda-slide text-decoration-none d-flex flex-column justify-content-center align-items-center p-3">
                            <div class="title-container w-100 mb-3">
                                <p class="title text-white text-wrap fw-bold lh-sm m-0 p-0">
                                    ELIB
                                </p>
                            </div>
                            <div class="img-container d-flex align-items-center justify-content-center p-3">
                                <img src="https://bappeda.kaltimprov.go.id/storage/egovs/June2021/W0zC53jahELL985Mzk7I.png')}}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------------------------------->
<!------- Bappeda Apps End ===------>
<!---------------------------------->

<!---------------------------------->
<!------------ Maps ---------------->
<!---------------------------------->
<section class="maps-section position-relative d-flex justify-content-center m-0 mb-5 p-0">
    <div class="container custom-container position-relative d-flex justify-content-center m-0 p-0">
        <div class="row d-flex align-items-center justify-content-center m-0 p-0 w-100">
            <div class="col-12 m-0 p-0 w-100">
                <div class="title-content title-section d-flex align-items-center justify-content-between mb-3">
                    <p class="text-title text-capitalize lh-sm my-0 py-0">Lokasi BAPPEDA Provinsi Kalimantan Timur</p>
                    <hr class="hr-title-black flex-grow-1 mx-3">
                </div>
                <div class="maps-content ">
                    <!-- sementara pakai img nanti pakai API -->
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d484.5116310768901!2d117.15023381229987!3d-0.4917341374364053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f9e3a5b4857%3A0x1095dd7216e92f7e!2sBappeda%20Kaltim!5e0!3m2!1sen!2sid!4v1699926426178!5m2!1sen!2sid"
                    width="1240"
                    height="450"
                    allowfullscreen=""
                    loading="lazy"
                    class="location"
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------------------------------->
<!---------- Maps End -------------->
<!---------------------------------->
<!--
<script src="https://static.elfsight.com/platform/platform.js" async></script>
<div class="container custom-container">
    <div class="elfsight-app-217a6d6a-9059-4d8e-8ffa-d566a5d0bdbd" data-elfsight-app-lazy></div>
</div> -->

<!---------------------------------->
<!----------- Youtube -------------->
<!---------------------------------->
<section class="youtube-section position-relative d-flex justify-content-center py-5">
    <div class="container custom-container ">
        <div class="row  d-flex align-items-center justify-content-center">
            <div class="col-12 ">
                <div class="video-container mx-0">
                    <!-- sementara pakai img nanti pakai API -->
                    <img src="{{ asset('assets/images/youtube.jpeg')}}" alt="youtube">
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-6 col-md-12  d-flex flex-column align-items-start">
                <div class="subscriber-container d-flex align-items-center ">
                    <img src="https://yt3.ggpht.com/QGy7EQetWM80rBfAZKnggapwsYhp_DO5v74_VfzYn_ayBAWWVXKa7YBV1jfvSJHsSsjRZ7yNlYo=s176-c-k-c0x00ffffff-no-rj-mo" alt="youtube image">
                    <div class="subscriber-content d-flex flex-column align-items-start mx-3">
                        <p class="name text-white">Bappeda Kaltim</p>
                        <p class="subscribers text-white">@bappedakaltim1650 • 29 Subscribers</p>
                    </div>
                </div>
                <h4 class="text-connect-youtube text-white fw-bold mx-0 mt-3 p-0">Terhubung dengan Bappeda Provinsi Kalimantan Timur</h4>
            </div>
            <div class="col-lg-6 col-md-12 ">
                <!-- Swiper Youtube -->
                <div class="swiper swiper-youtube" id="swiper-youtube">
                    <div class="swiper-wrapper swiper-youtube-wrapper">
                        <div class="swiper-slide swiper-youtube-slide d-flex flex-column align-items-center justify-content-center">
                            <img src="https://i.ytimg.com/vi/X6Llwq3QP0c/default.jpg" />
                            <p class="title-content text-white text-justify">MUSRENBANG Rencana Kerja Pemerintah Daerah (RKPD) Provinsi Kalimantan Timur Tahun 2024 Part II</p>
                        </div>
                        <div class="swiper-slide swiper-youtube-slide d-flex flex-column align-items-center justify-content-center">
                            <img src="https://i.ytimg.com/vi/LBffVvsc2zM/default.jpg" />
                            <p class="title-content text-white text-justify">MUSRENBANG Rencana Kerja Pemerintah Daerah (RKPD) Provinsi Kalimantan Timur Tahun 2024 Part I</p>
                        </div>
                        <div class="swiper-slide swiper-youtube-slide d-flex flex-column align-items-center justify-content-center">
                            <img src="https://i.ytimg.com/vi/czs7LFNLHS0/default.jpg" />
                            <p class="title-content text-white text-justify">Strategi Perencanaan Transformasi Ekonomi berbasis Kolaborasi | kolabora.sie</p>
                        </div>
                        <div class="swiper-slide swiper-youtube-slide d-flex flex-column align-items-center justify-content-center">
                            <img src="https://i.ytimg.com/vi/StDECnTidM4/default.jpg" />
                            <p class="title-content text-white text-justify">Forum Konsultasi Publik Rancangan Awal RPJPD Provinsi Kalimantan Timur Tahun 2025-2045</p>
                        </div>
                        <div class="swiper-slide swiper-youtube-slide d-flex flex-column align-items-center justify-content-center">
                            <img src="https://i.ytimg.com/vi/BA-HxXsYgeE/default.jpg" />
                            <p class="title-content text-white text-justify">Keluarga Besar Bappeda Prov. Kaltim Mengucapkan Selamat Hari Raya Idul Fitri 1 Syawal 1444 H</p>
                        </div>
                    </div>
                </div>
                <!-- Swiper Youtube -->
            </div>
        </div>
    </div>
</section>
<!---------------------------------->
<!--------- Youtube End ------------>
<!---------------------------------->

@endsection
