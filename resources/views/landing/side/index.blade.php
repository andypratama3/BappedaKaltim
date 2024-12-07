<div class="col-12 col-lg-5 order-3 order-lg-2 m-0 mb-5 p-0 ps-0 ps-lg-4">
    <div class="row m-0 p-0">
        <div class="col-12 m-0 mb-5 p-0">
            <div class="post-searching-container post-sidebar-container position-relative px-3 py-4">
                <div class="title-content d-flex align-items-center justify-content-between mb-3">
                    <p class="title fs-4 m-0 p-0">Pencarian Berita</p>
                    <hr class="hr-title-black flex-grow-1 ms-3">
                </div>
                <form action="{{ route('berita.index') }}" method="GET" class="input-search position-relative">
                    <input type="search" name="search" class="custom-form-control m-0 p-2 w-100" placeholder="Masukkan Keyword...">
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
                @forelse($posts as $post)
                <a href="{{ route('lainnya.show', $post->slug . '.' . Str::slug($post->title)) }}" class="d-flex gap-3 text-decoration-none text-black mt-4 p-1">
                    <div class="img-container m-0 p-0">
                        <img src="{{ asset('storage/post/' . $post->image) }}" alt="img-post">
                    </div>
                    <div class="about-content d-flex flex-column m-0 p-0">
                        <div class="title fs-8 lh-sm m-0 mb-2 p-0">
                            {{ $post->title }}
                        </div>
                        <div class="d-flex gap-2 align-items-center text-grey">
                            <p class="author text-capitalize m-0 p-0">
                                {{ $post->category->name }}
                            </p>
                            <p class="m-0 p-0">|</p>
                            <p class="date text-capitalize m-0 p-0">
                                {{ \Carbon\Carbon::parse($post->created_at)->locale('id')->translatedFormat('l, d F Y') }}
                            </p>
                        </div>
                    </div>
                </a>
                @empty

                @endforelse
            </div>
        </div>
        <div class="col-12 m-0 p-0">
            <div class="post-date-content post-sidebar-container position-relative px-3 py-4">
                <div class="title-content d-flex align-items-center justify-content-between mb-4">
                    <p class="title fs-4 m-0 p-0">Arsip Postingan</p>
                    <hr class="hr-title-black flex-grow-1 ms-3">
                </div>
                @forelse ($arsip as $item)

                <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none text-black fs-8 fw-light py-3 border-bottom">
                    <p class="m-0 p-0">Tahun {{ $item->year }}</p>
                    <i class="bi bi-chevron-right"></i>
                </a>

                @empty

                @endforelse

            </div>
        </div>
    </div>
</div>
