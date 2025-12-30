@extends('layouts.main')
@section('title', 'Tentang Kami - Surya Citra Technology')
@section('content')

<style>
    :root {
        --sct-yellow: #FDC367;
        --sct-teal: #00A894;
        --sct-black: #000000;
        --sct-white: #FFFFFF;
    }

    /* Utilitas Warna */
    .text-teal { color: var(--sct-teal) !important; }
    .bg-teal { background-color: var(--sct-teal) !important; }
    .bg-yellow { background-color: var(--sct-yellow) !important; }
    
    /* 1. HERO SECTION IMAGE */
    .hero-about {
        background: url('{{asset('images/tentang.jpg')}}');
        background-size: cover;
        background-position: center;
        height: 500px; 
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        padding-bottom: 50px; 
    }

    /* 2. FLOATING BOX (Profil Singkat) */
    .floating-box {
        margin-top: -80px;
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        position: relative;
        z-index: 10;
        padding: 40px 20px;
    }

    /* 3. VISI MISI CARDS */
    .visimisi-card {
        background-color: var(--sct-teal);
        color: white;
        border-radius: 15px;
        padding: 50px 30px 30px 30px;
        height: 100%;
        position: relative;
        box-shadow: 0 5px 15px rgba(0, 168, 148, 0.3);
    }

    .visimisi-label {
        background-color: var(--sct-yellow);
        color: var(--sct-black);
        font-weight: bold;
        font-size: 1.1rem;
        padding: 10px 40px;
        border-radius: 10px 10px 0 0; 
        border-radius: 50px;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%, -50%); 
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
</style>

{{-- 1. HERO SECTION --}}
<div class="container-fluid p-0">
    <div class="hero-about">
        <div class="container">
            <h1 class="fw-bold display-5 mb-3">Solusi Teknologi Terintegrasi<br>Untuk Masa Depan Bisnis</h1>
            <p class="lead fw-light opacity-75 mx-auto" style="max-width: 700px;">
                Membantu perusahaan Anda berkembang lebih cepat, aman, dan <br> 
                efisien dengan standar layanan berkualitas tinggi.
            </p>
        </div>
    </div>
</div>

{{-- 2. PROFIL SINGKAT (Floating Box) --}}
<section class="py-5">
    <div class="container">
        <div class="p-5 rounded-4 text-center text-white" style="background-color: #00A894;">
            
            {{-- Judul Di Dalam Kotak --}}
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

{{-- 3. DETAIL TENTANG KAMI (BARU DITAMBAHKAN) --}}
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h2 class="fw-bold mb-4 text-black">Tentang Kami</h2>
                <div class="text-secondary" style="font-size: 1.05rem; line-height: 1.8; text-align: justify;">
                    <p class="mb-3">
                        PT. Surya Citra Technology yang dikenal dengan merek dagang SCT, Perusahaan Surya Citra Technology 
                        bergerak di bidang penjualan produk komputer meliputi System Integration, Manage Service, dan perangkat 
                        komputer. PT. Surya Citra Technology berdiri pada tanggal 21 Februari 2022.
                    </p>
                    <p class="mb-3">
                        Target pelanggan perusahaan kami adalah seluruh kalangan dari perkantoran hingga pemerintah pusat. 
                        Layanan yang akan kami berikan mulai dari membangun, memperbaiki, hingga mengembangkan sistem komputerisasi. 
                    </p>
                    <p class="mb-0">
                        Dalam upaya menjawab semua kebutuhan konsumen, kami akan melayani dengan High Quality Service sehingga 
                        konsumen mendapatkan kepuasan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- 4. VISI & MISI --}}
<div class="container my-5 pb-5">
    <div class="row g-5">
        
        <div class="col-md-6 mt-5"> {{-- mt-5 agar ada jarak untuk tombol floating --}}
            <div class="visimisi-card">
                <div class="visimisi-label">Visi</div>
                <p class="text-center mt-3">
                    Menjadi pioneer dalam bidang perangkat internet dengan memberikan nilai 
                    kepuasan terbaik bagi pelanggan dengan pelayanan dan produk yang berkualitas.
                </p>
            </div>
        </div>

        <div class="col-md-6 mt-5">
            <div class="visimisi-card">
                <div class="visimisi-label">Misi</div>
                <ul class="mt-2 small" style="list-style-position: outside; padding-left: 1rem;">
                    <li class="mb-2">Berorientasi kepada kepuasan pelanggan.</li>
                    <li class="mb-2">Mengembangkan mutu dan kualitas produk dengan standar yang tinggi dan memuaskan.</li>
                    <li>SCT memberikan beragam jenis produk untuk kebutuhan perangkat internet dengan harga terjangkau.</li>
                </ul>
            </div>
        </div>

    </div>
</div>

@endsection