@extends('layouts.main')

@section('title', 'Beranda - Surya Citra Technology')

@section('content')

{{-- 1. HERO SECTION --}}
<section class="d-flex align-items-center text-white" 
         style="background: url('{{ asset('images/bg.jpg') }}'); 
                background-size: cover; 
                background-position: center; 
                min-height: 600px; 
                width: 100%;">
    
    <div class="container">
        <div class="row">
            {{-- Kolom dibuat Rata Kiri (text-start) --}}
            <div class="col-lg-8 text-start">
                
                {{-- Judul Utama --}}
                <h1 class="display-4 fw-bold mb-4">
                    Tingkatkan Performa Bisnis<br>dengan Teknologi Cerdas
                </h1>
                
                {{-- Deskripsi --}}
                <p class="lead mb-5 opacity-75" style="max-width: 700px; font-size: 1.1rem; line-height: 1.6;">
                    Kami menyediakan solusi sistem terintegrasi dan konsultasi IT untuk membantu 
                    perusahaan Anda berkembang lebih cepat, aman, dan efisien.
                </p>
                
                {{-- Tombol Tentang --}}
                <div>
                    <a href="/tentang" class="btn fw-bold px-5 py-3 rounded-4 shadow" 
                       style="background-color: #FDC367; color: #000; font-size: 1rem; border: none;">
                        Tentang
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 2. STATISTIK SINGKAT (Profil Singkat) --}}
<section class="py-5">
    <div class="container">
        
        <div class="text-center mb-4">
            <h2 class="fw-bold text-black">Tentang</h2>
        </div>

        <div class="p-5 rounded-4 text-center text-white" style="background-color: #00A894;">
   
            <h3 class="fw-bold mb-5">Profil Singkat</h3>

            <div class="row g-4 justify-content-center">
                {{-- Kolom 1 --}}
                <div class="col-md-3 col-6">
                    <h2 class="fw-bold display-4 mb-2">2022</h2>
                    <p class="mb-0" style="font-size: 1rem; line-height: 1.5;">
                        Tahun Berdiri<br>
                        (21 Februari 2022)
                    </p>
                </div>
                
                {{-- Kolom 2 --}}
                <div class="col-md-3 col-6">
                    <h2 class="fw-bold display-4 mb-2">3+</h2>
                    <p class="mb-0" style="font-size: 1rem; line-height: 1.5;">
                        Layanan Utama<br>
                        (SI, Manage Svc, HW)
                    </p>
                </div>

                {{-- Kolom 3 --}}
                <div class="col-md-3 col-6">
                    <h2 class="fw-bold display-4 mb-2">100%</h2>
                    <p class="mb-0" style="font-size: 1rem; line-height: 1.5;">
                        High Quality Service
                    </p>
                </div>

                {{-- Kolom 4 --}}
                <div class="col-md-3 col-6">
                    <h2 class="fw-bold display-4 mb-2">Gov</h2>
                    <p class="mb-0" style="font-size: 1rem; line-height: 1.5;">
                        Klien & Corporate
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- 3. MENGAPA KAMI --}}
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold display-6 text-black">Mengapa Memilih Kami?</h2>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                Kami mengutamakan kualitas, kecepatan, dan kepuasan klien dalam setiap solusi yang kami tawarkan.
            </p>
        </div>

        <div class="row align-items-center">
            
            <div class="col-lg-5 mb-5 mb-lg-0">
                <div class="position-relative pe-lg-4">
                    {{-- Kotak Background Hijau --}}
                    <div style="position: absolute; top: 30px; left: -24px; width: 100%; height: 100%; background-color: #00A894; border-radius: 20px; z-index: 0;"></div>
                    
                    {{-- Gambar Utama --}}
                    <div class="position-relative" style="z-index: 1;">
                        <img src="{{ asset('images/Mengapa.jfif') }}" 
                             alt="Why Choose Us" 
                             class="img-fluid rounded-4 shadow" 
                             style="width: 100%; aspect-ratio: 1 / 1; object-fit: cover;">
                    </div>
                </div>
            </div>

            {{-- KOLOM KANAN: LIST ITEM --}}
            <div class="col-lg-7 ps-lg-5">
                
                {{-- Item 1 --}}
                <div class="card border-0 shadow-sm mb-4 rounded-4">
                    <div class="card-body p-3 d-flex align-items-center">
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-3" 
                             style="width: 60px; height: 60px; background-color: #00A894;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#FDC367" class="bi bi-stopwatch-fill" viewBox="0 0 16 16">
                                <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07A7.001 7.001 0 0 0 8 16a7 7 0 0 0 5.29-11.584.531.531 0 0 0 .013-.012l.354-.354.353.354a.5.5 0 1 0 .707-.707l-1.414-1.415a.5.5 0 1 0-.707.707l.354.354-.354.354a.717.717 0 0 0-.012.012A6.973 6.973 0 0 0 9 2.071V1h.5a.5.5 0 0 0 0-1h-3zm2 5.6V9a.5.5 0 0 1-.5.5H4.5a.5.5 0 0 1 0-1h3V5.6a.5.5 0 0 1 1 0z"/>
                            </svg>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="fw-bold mb-1">On-Time & Within Budget</h6>
                            <p class="text-muted small mb-0">Memberikan apa yang disepakati dengan jangka waktu tepat dan harga yang sesuai dengan kualitas barang</p>
                        </div>
                    </div>
                </div>

                {{-- Item 2 --}}
                <div class="card border-0 shadow-sm mb-4 rounded-4">
                    <div class="card-body p-3 d-flex align-items-center">
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-3" 
                             style="width: 60px; height: 60px; background-color: #00A894;">
                             <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#FDC367" class="bi bi-cpu-fill" viewBox="0 0 16 16">
                                <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/>
                                <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5"/>
                              </svg>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="fw-bold mb-1">All About Technologies</h6>
                            <p class="text-muted small mb-0">Update dengan perkembangan teknologi dari segala arah</p>
                        </div>
                    </div>
                </div>

                {{-- Item 3 --}}
                <div class="card border-0 shadow-sm mb-4 rounded-4">
                    <div class="card-body p-3 d-flex align-items-center">
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-3" 
                             style="width: 60px; height: 60px; background-color: #00A894;">
                             <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#FDC367" class="bi bi-trophy-fill" viewBox="0 0 16 16">
                                <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.531.255L13.167 15h.833a.5.5 0 0 1 0 1H2a.5.5 0 0 1 0-1h.833l1.712-1.279a1.984 1.984 0 0 0 .531-.255l1.425-.356V10.93c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5"/>
                              </svg>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="fw-bold mb-1">Our Experience</h6>
                            <p class="text-muted small mb-0">Berpengalaman dalam sistem integrasi dan perangkat komputer serta memiliki sertifikasi pada bidangnya</p>
                        </div>
                    </div>
                </div>

                {{-- Item 4 --}}
                <div class="card border-0 shadow-sm mb-4 rounded-4">
                    <div class="card-body p-3 d-flex align-items-center">
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-3" 
                             style="width: 60px; height: 60px; background-color: #00A894;">
                             <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#FDC367" class="bi bi-grid-fill" viewBox="0 0 16 16">
                                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5z"/>
                              </svg>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="fw-bold mb-1">Easy to Customize</h6>
                            <p class="text-muted small mb-0">Mudah dalam menyesuaikan kebutuhan pelanggan sesuai spesifikasi dengan mudah dan cepat</p>
                        </div>
                    </div>
                </div>

                {{-- Item 5 --}}
                <div class="card border-0 shadow-sm mb-4 rounded-4">
                    <div class="card-body p-3 d-flex align-items-center">
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-3" 
                             style="width: 60px; height: 60px; background-color: #00A894;">
                             <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#FDC367" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l6 1.382A1 1 0 0 1 16 2.6V6a1 1 0 0 1-1 1h-3.36a1.5 1.5 0 0 0-1.483.977l-5 13.532a1 1 0 0 1-1.653-1.003l.5-4.506a2.5 2.5 0 0 0-2.493-2.738h-2.14a2.5 2.5 0 0 0-2.484 2.217l-.5 4.5a2.5 2.5 0 0 0 2.492 2.739h2.14a1.5 1.5 0 0 0 1.483-1.272l.5-4.506a1 1 0 0 1 1.653-.327l5 13.532a.5.5 0 0 0 .93-.242l-.5-4.506a2.5 2.5 0 0 0-2.493-2.738H1"/>
                             </svg>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="fw-bold mb-1">High Quality Service</h6>
                            <p class="text-muted small mb-0">Memberikan layanan yang efisien, cepat, ramah, serta membangun hubungan yang kuat dengan pelanggan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 4. PRODUK KAMI (Slider/Carousel) --}}
<section class="py-5" style="background-color: #E9ECEF;">
    <div class="container py-4">
        <div class="row align-items-center">

            <div class="col-lg-3 mb-5 mb-lg-0 text-center text-lg-start">
                <h2 class="fw-bold text-black mb-3" style="font-size: 1.9rem; line-height: 1.2;">
                    Produk Kami
                </h2>
                <div>
                    <a href="/price-list" class="btn fw-bold px-3 py-2 rounded-4 shadow" 
                       style="background-color: #00A894; color: #FFF; font-size: 1.2rem; width: 70%;">
                       Lihat Produk
                    </a>
                </div>
            </div>

            <div class="col-lg-9">
                <div id="produkCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                    <div class="carousel-inner">
                        
                        {{-- SLIDE 1 --}}
                        <div class="carousel-item active">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="card h-100 border-0 rounded-4 shadow-sm p-3 text-center">
                                        <img src="{{ asset('images/Access Point.jpg') }}" class="img-fluid mb-3" alt="Access Point" style="height: 150px; object-fit: contain;">
                                        <h5 class="fw-bold mb-3">Access Point</h5>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card h-100 border-0 rounded-4 shadow-sm p-3 text-center">
                                        <img src="{{ asset('images/SFP Card.png') }}" class="img-fluid mb-3" alt="SFP Card" style="height: 150px; object-fit: contain;">
                                        <h5 class="fw-bold mb-3">SFP Card</h5>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card h-100 border-0 rounded-4 shadow-sm p-3 text-center">
                                        <img src="{{ asset('images/switch.jpg') }}" class="img-fluid mb-3" alt="Switch" style="height: 150px; object-fit: contain;">
                                        <h5 class="fw-bold mb-3">Switch</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- SLIDE 2 --}}
                        <div class="carousel-item">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="card h-100 border-0 rounded-4 shadow-sm p-3 text-center">
                                        <img src="{{ asset('images/Server Rack.jpg') }}" class="img-fluid mb-3" alt="Server Rack" style="height: 150px; object-fit: contain;">
                                        <h5 class="fw-bold mb-3">Server Rack</h5>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card h-100 border-0 rounded-4 shadow-sm p-3 text-center">
                                        <img src="{{ asset('images/Router Board.PNG') }}" class="img-fluid mb-3" alt="Router Board" style="height: 150px; object-fit: contain;">
                                        <h5 class="fw-bold mb-3">Router Board</h5>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card h-100 border-0 rounded-4 shadow-sm p-3 text-center">
                                        <img src="{{ asset('images/Fiber Optic Cabke.jpeg') }}" class="img-fluid mb-3" alt="Fiber Optic" style="height: 150px; object-fit: contain;">
                                        <h5 class="fw-bold mb-3">Fiber Optic</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#produkCarousel" data-bs-slide="prev" style="width: 5%; margin-left: -5%;">
                        <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true" style="padding: 15px; background-size: 50%;"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#produkCarousel" data-bs-slide="next" style="width: 5%; margin-right: -5%;">
                        <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true" style="padding: 15px; background-size: 50%;"></span>
                    </button>

                </div>
            </div>

        </div>
    </div>
</section>

{{-- 5. LAYANAN UTAMA --}}
<section class="py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold display-5 text-black mb-3">Layanan</h2>
        <p class="text-muted fs-5">Layanan yang kami tawarkan untuk anda.</p>
    </div>

    <div class="container">
        <div class="row g-4">
            {{-- Card 1 --}}
            <div class="col-md-4">
                <div class="card h-100 border-0 rounded-4 overflow-hidden shadow-sm">
                    <div style="height: 220px;">
                        <img src="{{ asset('images/IT Service.jpg') }}" alt="IT Service" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <div class="card-body p-4 d-flex flex-column justify-content-between text-start" style="background-color: #00A894;">
                        <div class="text-white">
                            <h3 class="fw-bold mb-3">IT Service</h3>
                            <p class="card-text mb-4" style="font-size: 1rem; opacity: 0.9; line-height: 1.5;">layanan end to end IT services untuk optimalisasi bisnis anda.</p>
                        </div>
                        <div class="mt-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#FDC367" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="col-md-4">
                <div class="card h-100 border-0 rounded-4 overflow-hidden shadow-sm">
                    <div style="height: 220px;">
                        <img src="{{ asset('images/network.jpg') }}" alt="Network Cyber" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <div class="card-body p-4 d-flex flex-column justify-content-between text-start" style="background-color: #00A894;">
                        <div class="text-white">
                            <h3 class="fw-bold mb-3">Network Cyber</h3>
                            <p class="card-text mb-4" style="font-size: 1rem; opacity: 0.9; line-height: 1.5;">one stop solution cyber dan network untuk industri anda.</p>
                        </div>
                        <div class="mt-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#FDC367" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="col-md-4">
                <div class="card h-100 border-0 rounded-4 overflow-hidden shadow-sm">
                    <div style="height: 220px;">
                        <img src="{{ asset('images/IT Solution.jpg') }}" alt="IT Solution" class="w-100 h-100" style="object-fit: cover;">
                    </div>
                    <div class="card-body p-4 d-flex flex-column justify-content-between text-start" style="background-color: #00A894;">
                        <div class="text-white">
                            <h3 class="fw-bold mb-3">IT Solution</h3>
                            <p class="card-text mb-4" style="font-size: 1rem; opacity: 0.9; line-height: 1.5;">penyedia solusi B2B IT service untuk mendukung kebutuhan dalam pemeliharaan sistem IT yang efisien dan efektif.</p>
                        </div>
                        <div class="mt-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#FDC367" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 5.5. CYBER SECURITY (Special Section) --}}
<section class="py-5 position-relative" style="background-color: #020a14; overflow: hidden;">
    
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 2; 
     background-image: url('{{ asset('images/cyber.png') }}'); 
     background-size: cover; 
     background-position: center;
     background-repeat: no-repeat;">
</div>

    <div class="container py-4 position-relative" style="z-index: 2;">
        <div class="text-center mb-5 text-white">
            <h2 class="fw-bold display-5 mb-2">Cyber Security</h2>
            <p class="text-white-50 fs-5">Layanan keamanan siber terpercaya</p>
        </div>

        {{-- Cards Container --}}
        <div class="row g-4 justify-content-center">
            
            {{-- Kartu 1: Penetration Testing --}}
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-4 d-flex align-items-center h-100 shadow-lg" 
                     style="border-radius: 50px; transition: transform 0.3s;">
        
                    <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle" 
                         style="width: 65px; height: 65px; background-color: #0b131a;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#00d2be" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            <path d="M12 8v4"/><path d="M12 16h.01"/>
                            <rect x="8" y="11" width="8" height="6" rx="1"/>
                            <path d="M10 11V9a2 2 0 1 1 4 0v2"/>
                        </svg>
                    </div>

                    {{-- Text --}}
                    <div class="ms-4">
                        <h5 class="fw-bold mb-0 text-black" style="line-height: 1.2;">Penetration<br>Testing</h5>
                    </div>
                </div>
            </div>

            {{-- Kartu 2: Network & Server --}}
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-4 d-flex align-items-center h-100 shadow-lg" 
                     style="border-radius: 50px; transition: transform 0.3s;">
                    
                    {{-- Icon Circle --}}
                    <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle" 
                         style="width: 65px; height: 65px; background-color: #0b131a;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#00d2be" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="8" rx="2" ry="2"/>
                            <rect x="2" y="14" width="20" height="8" rx="2" ry="2"/>
                            <line x1="6" y1="6" x2="6.01" y2="6"/>
                            <line x1="6" y1="18" x2="6.01" y2="18"/>
                            <path d="M12 10v4"/>
                            <path d="M12 12h8"/>
                            <path d="M20 10v4"/>
                        </svg>
                    </div>

                    {{-- Text --}}
                    <div class="ms-4">
                        <h5 class="fw-bold mb-0 text-black" style="line-height: 1.2;">Network and Server<br>Enviroment Testing</h5>
                    </div>
                </div>
            </div>

            {{-- Kartu 3: Vulnerability --}}
            <div class="col-lg-4 col-md-6">
                <div class="bg-white p-4 d-flex align-items-center h-100 shadow-lg" 
                     style="border-radius: 50px; transition: transform 0.3s;">
                    
                    {{-- Icon Circle --}}
                    <div class="flex-shrink-0 d-flex align-items-center justify-content-center rounded-circle" 
                         style="width: 65px; height: 65px; background-color: #0b131a;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#00d2be" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            <circle cx="12" cy="12" r="3"/>
                            <line x1="12" y1="2" x2="12" y2="4"/>
                            <line x1="12" y1="20" x2="12" y2="22"/>
                            <line x1="2" y1="12" x2="4" y2="12"/>
                            <line x1="20" y1="12" x2="22" y2="12"/>
                        </svg>
                    </div>

                    {{-- Text --}}
                    <div class="ms-4">
                        <h5 class="fw-bold mb-0 text-black" style="line-height: 1.2;">Vulnerability<br>Assessment</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- 6. PARTNER KAMI --}}
<section class="py-5">
    <div class="container text-center">
        <h5 class="fw-bold mb-5 text-black" style="font-size: 1.1rem;">Partner Kami</h5>
        <div id="partnerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center align-items-center g-5">
                        <div class="col-4 col-md-3">
                            <img src="{{ asset('images/Ruckus Commscope.png') }}" alt="Ruckus" class="img-fluid" style="max-height: 70px; object-fit: contain;">
                        </div>
                        <div class="col-4 col-md-3">
                            <img src="{{ asset('images/Sophos.png') }}" alt="Sophos" class="img-fluid" style="max-height: 30px; object-fit: contain;">
                        </div>
                        <div class="col-4 col-md-3">
                            <img src="{{ asset('images/EnGenius.png') }}" alt="EnGenius" class="img-fluid" style="max-height: 60px; object-fit: contain;">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center align-items-center g-5">
                        <div class="col-4 col-md-3">
                            <img src="{{ asset('images/Dell Technologies.png') }}" alt="Dell Techno" class="img-fluid" style="max-height: 40px; object-fit: contain;">
                        </div>
                        <div class="col-4 col-md-3">
                            <img src="{{ asset('images/HP Hewlett Packard.png') }}" alt="HP Hewlett Packard" class="img-fluid" style="max-height: 100px; object-fit: contain;">
                        </div>
                        <div class="col-4 col-md-3">
                            <img src="{{ asset('images/Fujitsu.png') }}" alt="Fujitsu" class="img-fluid" style="max-height: 40px; object-fit: contain;">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center align-items-center g-5">
                        <div class="col-4 col-md-3">
                            <img src="{{ asset('images/Huawei.jfif') }}" alt="Huawei" class="img-fluid" style="max-height: 70px; object-fit: contain;">
                        </div>
                        <div class="col-4 col-md-3">
                            <img src="{{ asset('images/Mikrotik.jpg') }}" alt="Mikrotik" class="img-fluid" style="max-height: 100px; object-fit: contain;">
                        </div>
                        <div class="col-4 col-md-3">
                            <img src="{{ asset('images/Raisecom.jfif') }}" alt="Raiscom" class="img-fluid" style="max-height: 30px; object-fit: contain;">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center align-items-center g-5">
                        <div class="col-4 col-md-3">
                            <img src="{{ asset('images/Dell Technologies.png') }}" alt="Ruijie" class="img-fluid" style="max-height: 40px; object-fit: contain;">
                        </div>
                        <div class="col-4 col-md-3">
                            <img src="{{ asset('images/HP Hewlett Packard.png') }}" alt="FiberHome" class="img-fluid" style="max-height: 100px; object-fit: contain;">
                        </div>
                        <div class="col-4 col-md-3">
                            <img src="{{ asset('images/Fujitsu.png') }}" alt="Cisco" class="img-fluid" style="max-height: 40px; object-fit: contain;">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center align-items-center g-5">
                        <div class="col-4 col-md-3">
                            <img src="{{ asset('images/Dell Technologies.png') }}" alt="Ubiquiti" class="img-fluid" style="max-height: 40px; object-fit: contain;">
                        </div>
                        <div class="col-4 col-md-3">
                            <img src="{{ asset('images/HP Hewlett Packard.png') }}" alt="Hikvision" class="img-fluid" style="max-height: 100px; object-fit: contain;">
                        </div>
                        <div class="col-4 col-md-3">
                            <img src="{{ asset('images/Fujitsu.png') }}" alt="Juniper" class="img-fluid" style="max-height: 40px; object-fit: contain;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <button type="button" data-bs-target="#partnerCarousel" data-bs-slide-to="0" class="active bg-secondary rounded-circle border-0" style="width: 10px; height: 10px;" aria-current="true"></button>
                <button type="button" data-bs-target="#partnerCarousel" data-bs-slide-to="1" class="bg-secondary rounded-circle border-0 ms-2" style="width: 10px; height: 10px;"></button>
                <button type="button" data-bs-target="#partnerCarousel" data-bs-slide-to="2" class="bg-secondary rounded-circle border-0 ms-2" style="width: 10px; height: 10px;"></button>
                <button type="button" data-bs-target="#partnerCarousel" data-bs-slide-to="3" class="bg-secondary rounded-circle border-0 ms-2" style="width: 10px; height: 10px;"></button>
            </div>
        </div>
    </div>
</section>

{{-- 7. CTA (Call To Action) --}}
<section>
    <div class="container">
        <div class="text-center mb-4">
        <div class="p-5 rounded-5 d-flex flex-column flex-lg-row align-items-center justify-content-between shadow-lg position-relative mb-n5" 
             style="background-color: #FDC367; z-index: 10;">
            <div class="text-center text-lg-start mb-4 mb-lg-0">
                <h2 class="fw-bold text-black mb-2">Ada pertanyaan seputar produk?</h2>
                <p class="mb-0 fw-medium" style="color: #000; font-size: 0.95rem;">
                    Konsultasikan kebutuhan infrastruktur IT Anda dengan tim ahli kami
                </p>
            </div>
            <div>
                <a href="/kontak" class="btn text-white fw-bold px-5 py-2 rounded-3" 
                   style="background-color: #00A894; border: none; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>

@endsection