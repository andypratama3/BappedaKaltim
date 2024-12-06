@extends('layouts.landing')
@section('content')
<section class="breadcrumb-section position-relative d-flex justify-content-center">
    <div class="container custom-container">
        <div class="breadcrumb-container d-flex align-items-center gap-2 fs-8 mb-3">
            <a href="/" class="breadcrumb-link text-capitalize text-decoration-none fw-500 m-0 p-0">beranda</a>
            <i class="bi bi-chevron-right text-white m-0 p-0"></i>
            <p class="breadcrumb-active text-capitalize text-white fw-500 m-0 p-0">berita</p>
        </div>
        <div class="title-content">
            <h4 class="title text-capitalize fw-bold mb-3">
                berita bappeda
            </h4>
        </div>
    </div>
</section>
<section class="over-top-section post-section position-relative d-flex justify-content-center my-0">
    <div class="container over-top-container m-0 p-0">
        <div class="post-category-container border-bottom mb-4 pb-3">
            <!-- Swiper -->
            <div class="swiper swiper-post-category" id="swiper-post-category">
                <div class="swiper-wrapper">
                    <div class="swiper-slide post-category-slide d-flex align-items-center justify-content-center p-0">
                        <a href="postingan-artikel.html" class="category text-decoration-none text-center text-grey fw-500 fs-9 m-0">
                            Artikel
                        </a>
                    </div>
                    <div class="swiper-slide post-category-slide d-flex align-items-center justify-content-center p-0 active">
                        <a href="postingan-berita.html" class="category text-decoration-none text-center text-grey fw-500 fs-9 m-0">
                            Berita Bappeda
                        </a>
                    </div>
                    <div class="swiper-slide post-category-slide d-flex align-items-center justify-content-center p-0">
                        <a href="postingan-informasi.html" class="category text-decoration-none text-center text-grey fw-500 fs-9 m-0">
                            Informasi
                        </a>
                    </div>
                    <div class="swiper-slide post-category-slide d-flex align-items-center justify-content-center p-0">
                        <a href="postingan-kpk.html" class="category text-decoration-none text-center text-grey fw-500 fs-9 m-0">
                            Kinerja Pembangunan Kaltim
                        </a>
                    </div>
                    <div class="swiper-slide post-category-slide d-flex align-items-center justify-content-center p-0">
                        <a href="postingan-berita-nasional.html" class="category text-decoration-none text-center text-grey fw-500 fs-9 m-0">
                            Berita Nasional
                        </a>
                    </div>
                    <div class="swiper-slide post-category-slide d-flex align-items-center justify-content-center p-0">
                        <a href="postingan-social-media.html" class="category text-decoration-none text-center text-grey fw-500 fs-9 m-0">
                            Social Media
                        </a>
                    </div>
                </div>
            </div>
            <!-- Swiper News Item End -->
        </div>
        <div class="row m-0 p-0">
            <div class="col-12 col-lg-7 m-0 mb-5 mb-lg-0 p-0">
                <div class="row m-0 p-0">
                    @foreach($beritas as $index => $berita)
                    @if($index === 0)
                    <div class="col-12 m-0 p-0">
                        <div class="post-container position-relative m-0 p-0">
                            <div class="img-container position-relative">
                                <img src="{{ asset('storage/post/' .$berita->image) }}" alt="post-img">
                            </div>
                            <div class="about-content p-3">
                                <p class="category text-white text-uppercase fs-8 fw-500 mb-2">Postingan Berita</p>
                                <p class="title text-white fw-bold text-capitalize mb-2">{{ $berita->title }}</p>
                                <div class="d-flex align-items-center mb-2">
                                    <p class="date text-white text-capitalize m-0 p-0">
                                        {{ \Carbon\Carbon::parse($berita->created_at)->locale('id')->translatedFormat('l, d F Y') }}
                                    </p>
                                    <p class="text-white mx-2 m-0 p-0">|</p>
                                    <p class="author text-white text-capitalize m-0 p-0">
                                        {{ $berita->user->name }}
                                    </p>
                                </div>
                                <p class="description text-white">
                                    {!! Str::substr(strip_tags($berita->description), 0, 300) !!} ....
                                </p>

                                <a href="{{ route('berita.show', $berita->slug . '.' . Str::slug($berita->title)) }}" class="detail-post-btn d-flex align-items-center justify-content-center text-capitalize text-decoration-none text-white gap-3">
                                    baca selengkapnya
                                    <i class="bi bi-box-arrow-up-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-12 m-0 p-0">
                        <a href="{{ route('berita.show', $berita->slug . '.' . Str::slug($berita->title)) }}" class="row post-other-content text-decoration-none text-black mt-4 mx-0 p-0">
                            <div class="col-3 m-0 p-0">
                                <div class="img-container">
                                    <img src="{{ asset('storage/post/' .$berita->image) }}" alt="post-img">
                                </div>
                            </div>
                            <div class="col-9 m-0 p-0 py-2 ps-3">
                                <div class="about-content d-flex flex-column justify-content-between m-0">
                                    <p class="category text-uppercase fs-8 fw-500 mb-2">
                                        Postingan Berita

                                    </p>
                                    <p class="title fw-bold text-capitalize mb-2">
                                        {{ $berita->title }}
                                    </p>
                                    <div class="d-flex align-items-center mb-2">
                                        <p class="date text-capitalize m-0 p-0">
                                            {{ \Carbon\Carbon::parse($berita->created_at)->locale('id')->translatedFormat('l, d F Y') }}

                                        </p>
                                        <p class="mx-2 m-0 p-0">|</p>
                                        <p class="author text-capitalize m-0 p-0">
                                            Administrator
                                        </p>
                                    </div>
                                    <p class="description m-0 p-0">
                                        {!! Str::substr(strip_tags($berita->description), 0, 300) !!} ....
                                    </p>

                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>
                <div class="col-md-12 mt-4">
                    <ul class="pagination">
                        {{ $beritas->links() }}
                    </ul>

                </div>
            </div>
            <div class="col-12 col-lg-5 m-0 mb-0 p-0 ps-0 ps-lg-4">
                <div class="row m-0 p-0">
                    <div class="col-12 m-0 mb-5 p-0">
                        <div class="post-searching-container post-sidebar-container position-relative px-3 py-4">
                            <div class="title-content d-flex align-items-center justify-content-between mb-3">
                                <p class="title fs-4 m-0 p-0">Pencarian Berita</p>
                                <hr class="hr-title-black flex-grow-1 ms-3">
                            </div>
                            <form action="" class="input-search position-relative">
                                <input type="search" class="custom-form-control m-0 p-2 w-100" placeholder="Masukkan Keyword...">
                                <i class="bi bi-search icon-search m-0 p-0"></i>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 m-0 mb-5 p-0">
                        <div class="post-content-item post-sidebar-container position-relative px-3 py-4">
                            <div class="title-content d-flex align-items-center justify-content-between">
                                <p class="title fs-4 m-0 p-0">Postingan Lainnya</p>
                                <hr class="hr-title-black flex-grow-1 ms-3">
                            </div>
                            <a href="postingan-berita-detail.html" class="d-flex gap-3 text-decoration-none text-black mt-4 p-1">
                                <div class="img-container m-0 p-0">
                                    <img src="https://bappeda.kaltimprov.go.id/storage/posts-news/November2024/5Zc0ixLHXQ1J5Y3G7LUs.jpg" alt="img-post">
                                </div>
                                <div class="about-content d-flex flex-column m-0 p-0">
                                    <div class="title fs-8 lh-sm m-0 mb-2 p-0">
                                        Rapat Evaluasi Kegiatan dan Kinerja Sekretariat Bappeda Provinsi Kaltim
                                    </div>
                                    <div class="d-flex gap-2 align-items-center text-grey">
                                        <p class="author text-capitalize m-0 p-0">
                                            berita
                                        </p>
                                        <p class="m-0 p-0">|</p>
                                        <p class="date text-capitalize m-0 p-0">
                                            Jumat, 08 November 2024
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="postingan-berita-detail.html" class="d-flex gap-3 text-decoration-none text-black mt-4 p-1">
                                <div class="img-container m-0 p-0">
                                    <img src="https://bappeda.kaltimprov.go.id/storage/posts-news/November2024/5Zc0ixLHXQ1J5Y3G7LUs.jpg" alt="img-post">
                                </div>
                                <div class="about-content d-flex flex-column m-0 p-0">
                                    <div class="title fs-8 lh-sm m-0 mb-2 p-0">
                                        Rapat Evaluasi Kegiatan dan Kinerja Sekretariat Bappeda Provinsi Kaltim
                                    </div>
                                    <div class="d-flex gap-2 align-items-center text-grey">
                                        <p class="author text-capitalize m-0 p-0">
                                            berita
                                        </p>
                                        <p class="m-0 p-0">|</p>
                                        <p class="date text-capitalize m-0 p-0">
                                            Jumat, 08 November 2024
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="postingan-berita-detail.html" class="d-flex gap-3 text-decoration-none text-black mt-4 p-1">
                                <div class="img-container m-0 p-0">
                                    <img src="https://bappeda.kaltimprov.go.id/storage/posts-news/November2024/5Zc0ixLHXQ1J5Y3G7LUs.jpg" alt="img-post">
                                </div>
                                <div class="about-content d-flex flex-column m-0 p-0">
                                    <div class="title fs-8 lh-sm m-0 mb-2 p-0">
                                        Rapat Evaluasi Kegiatan dan Kinerja Sekretariat Bappeda Provinsi Kaltim
                                    </div>
                                    <div class="d-flex gap-2 align-items-center text-grey">
                                        <p class="author text-capitalize m-0 p-0">
                                            berita
                                        </p>
                                        <p class="m-0 p-0">|</p>
                                        <p class="date text-capitalize m-0 p-0">
                                            Jumat, 08 November 2024
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="postingan-berita-detail.html" class="d-flex gap-3 text-decoration-none text-black mt-4 p-1">
                                <div class="img-container m-0 p-0">
                                    <img src="https://bappeda.kaltimprov.go.id/storage/posts-news/November2024/5Zc0ixLHXQ1J5Y3G7LUs.jpg" alt="img-post">
                                </div>
                                <div class="about-content d-flex flex-column m-0 p-0">
                                    <div class="title fs-8 lh-sm m-0 mb-2 p-0">
                                        Rapat Evaluasi Kegiatan dan Kinerja Sekretariat Bappeda Provinsi Kaltim
                                    </div>
                                    <div class="d-flex gap-2 align-items-center text-grey">
                                        <p class="author text-capitalize m-0 p-0">
                                            berita
                                        </p>
                                        <p class="m-0 p-0">|</p>
                                        <p class="date text-capitalize m-0 p-0">
                                            Jumat, 08 November 2024
                                        </p>
                                    </div>
                                </div>
                            </a>
                            <a href="postingan-berita-detail.html" class="d-flex gap-3 text-decoration-none text-black mt-4 p-1">
                                <div class="img-container m-0 p-0">
                                    <img src="https://bappeda.kaltimprov.go.id/storage/posts-news/November2024/5Zc0ixLHXQ1J5Y3G7LUs.jpg" alt="img-post">
                                </div>
                                <div class="about-content d-flex flex-column m-0 p-0">
                                    <div class="title fs-8 lh-sm m-0 mb-2 p-0">
                                        Rapat Evaluasi Kegiatan dan Kinerja Sekretariat Bappeda Provinsi Kaltim
                                    </div>
                                    <div class="d-flex gap-2 align-items-center text-grey">
                                        <p class="author text-capitalize m-0 p-0">
                                            berita
                                        </p>
                                        <p class="m-0 p-0">|</p>
                                        <p class="date text-capitalize m-0 p-0">
                                            Jumat, 08 November 2024
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 m-0 p-0">
                        <div class="post-date-content post-sidebar-container position-relative px-3 py-4">
                            <div class="title-content d-flex align-items-center justify-content-between mb-4">
                                <p class="title fs-4 m-0 p-0">Arsip Postingan</p>
                                <hr class="hr-title-black flex-grow-1 ms-3">
                            </div>
                            <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none text-black fs-8 fw-light py-3 border-bottom">
                                <p class="m-0 p-0">Januari 2024</p>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none text-black fs-8 fw-light py-3 border-bottom">
                                <p class="m-0 p-0">Februari 2024</p>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none text-black fs-8 fw-light py-3 border-bottom">
                                <p class="m-0 p-0">Maret 2024</p>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none text-black fs-8 fw-light py-3 border-bottom">
                                <p class="m-0 p-0">April 2024</p>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none text-black fs-8 fw-light py-3 border-bottom">
                                <p class="m-0 p-0">Mei 2024</p>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none text-black fs-8 fw-light py-3 border-bottom">
                                <p class="m-0 p-0">Juni 2024</p>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none text-black fs-8 fw-light py-3 border-bottom">
                                <p class="m-0 p-0">Juli 2024</p>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none text-black fs-8 fw-light py-3 border-bottom">
                                <p class="m-0 p-0">Agustus 2024</p>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none text-black fs-8 fw-light py-3 border-bottom">
                                <p class="m-0 p-0">September 2024</p>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none text-black fs-8 fw-light py-3 border-bottom">
                                <p class="m-0 p-0">Oktober 2024</p>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none text-black fs-8 fw-light py-3 border-bottom">
                                <p class="m-0 p-0">November 2024</p>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none text-black fs-8 fw-light py-3 border-bottom">
                                <p class="m-0 p-0">Desember 2024</p>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
