@extends('layouts.main')
@section('title', 'Layanan - Surya Citra Technology')
@section('content')

<style>
    :root {
        --sct-yellow: #FDC367;
        --sct-teal: #00A894;
        --sct-black: #000000;
        --sct-white: #FFFFFF;
    }

    /* HERO SECTION */
    .hero-layanan {
        background: url('{{ asset('images/Layanan.jpg') }}');
        background-size: cover;
        background-position: center;
        height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        position: relative;
    }

    /* CARDS SECTION */
    .card-layanan {
        background-color: var(--sct-teal);
        color: white;
        border: none;
        border-radius: 15px;
        overflow: hidden;
        height: 100%;
        position: relative;
        display: flex;
        flex-direction: column;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    
    .card-layanan-img {
        height: 200px;
        width: 100%;
        object-fit: cover;
    }

    .arrow-icon {
        font-size: 1.5rem;
        color: var(--sct-yellow);
        opacity: 0.8;
    }

    /* CYBER SECURITY SECTION */
    .cyber-item {
        background: white;
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        padding: 30px;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        transition: transform 0.2s;
    }
    
    .cyber-item:hover {
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }
    
    .cyber-icon {
        width: 70px;
        height: 70px;
        background-color: #000;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        color: var(--sct-teal);
        flex-shrink: 0;
    }
</style>

{{-- 1. HERO SECTION --}}
<div class="container-fluid p-0">
    <div class="hero-layanan">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    {{-- Ikon Perisai --}}
                    <div class="mb-3 d-inline-block">
                    </div>
                    
                    <h1 class="fw-bold display-4 mb-3">Layanan IT Terintegrasi</h1>
                    <p class="lead fw-light opacity-90 mx-auto" style="max-width: 800px;">
                        Kami menyediakan solusi end-to-end mulai dari infrastruktur jaringan, <br>
                        keamanan siber, hingga pemeliharaan sistem untuk optimalisasi bisnis Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 2. CARDS SECTION --}}
<div class="container my-5">
    <div class="row g-4">
        {{-- Card 1: IT Service --}}
        <div class="col-md-4">
            <div class="card-layanan">
                <img src="{{ asset('images/IT Service.jpg') }}" class="card-layanan-img" alt="IT Service">
                <div class="p-4 d-flex flex-column h-100">
                    <h4 class="fw-bold mb-3">IT Service</h4>
                    <p class="small opacity-90 mb-4" style="line-height: 1.6;">
                        layanan end to end IT services untuk optimalisasi bisnis anda.
                    </p>
                    <div class="mt-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#FDC367" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </div>
                    <div class="mt-auto text-end">
                        <i class="bi bi-arrow-right arrow-icon"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 2: Network Cyber --}}
        <div class="col-md-4">
            <div class="card-layanan">
                <img src="{{ asset('images/network.jpg') }}" class="card-layanan-img" alt="Network Cyber">
                <div class="p-4 d-flex flex-column h-100">
                    <h4 class="fw-bold mb-3">Network Cyber</h4>
                    <p class="small opacity-90 mb-4" style="line-height: 1.6;">
                        one stop solution cyber dan network untuk industri anda.
                    </p>
                    <div class="mt-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#FDC367" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </div>
                    <div class="mt-auto text-end">
                        <i class="bi bi-arrow-right arrow-icon"></i>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 3: IT Solution --}}
        <div class="col-md-4">
            <div class="card-layanan">
                <img src="{{ asset('images/IT Solution.jpg') }}" class="card-layanan-img" alt="IT Solution">
                <div class="p-4 d-flex flex-column h-100">
                    <h4 class="fw-bold mb-3">IT Solution</h4>
                    <p class="small opacity-90 mb-4" style="line-height: 1.6;">
                        penyedia solusi B2B IT service untuk mendukung kebutuhan dalam pemeliharaan sistem IT yang efisien dan efektif.
                    </p>
                    <div class="mt-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#FDC367" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                            </svg>
                        </div>
                    <div class="mt-auto text-end">
                        <i class="bi bi-arrow-right arrow-icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 3. CYBER SECURITY SECTION --}}
<div class="container my-6 pt-6 pb-6">
    <div class="text-center mb-9">
        <h2 class="fw-bold display-6 mb-2">Cyber Security</h2>
        <p class="text-muted fs-5">Layanan keamanan siber terpercaya</p>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            {{-- Item 1: Penetration Testing --}}
            <div class="cyber-item">
                <div class="cyber-icon me-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                        <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                    </svg>
                </div>
                <div>
                    <h5 class="fw-bold mb-2">Penetration Testing</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.6;">
                        Tim kami adalah pemimpin dalam praktik pengujian penetrasi, berpengalaman dalam berbagai jenis serangan siber termasuk skill brute force dan peretasan.
                    </p>
                </div>
            </div>

            {{-- Item 2: Network & Server Testing --}}
            <div class="cyber-item">
                <div class="cyber-icon me-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-hdd-network" viewBox="0 0 16 16">
                        <path d="M4.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM3 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8.5v3a1.5 1.5 0 0 1 1.5 1.5h5.5a.5.5 0 0 1 0 1H10A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5H.5a.5.5 0 0 1 0-1H6A1.5 1.5 0 0 1 7.5 10V7H2a2 2 0 0 1-2-2V4zm1 0v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1zm6 7.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5z"/>
                    </svg>
                </div>
                <div>
                    <h5 class="fw-bold mb-2">Network and Server Enviroment Testing</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.6;">
                        Mencegah lebih baik daripada mengobati. Kami akan melakukan tes untuk mengidentifikasi celah keamanan dan kesalahan dalam konfigurasi jaringan dan server. Serta memastikan bahwa semua perangkat dan aplikasi yang terhubung ke jaringan dan server dapat beroperasi dengan baik dan saling berkomunikasi.
                    </p>
                </div>
            </div>

            {{-- Item 3: Vulnerability Assessment --}}
            <div class="cyber-item">
                <div class="cyber-icon me-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
                        <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                        <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                </div>
                <div>
                    <h5 class="fw-bold mb-2">Vulneralbility Assessment</h5>
                    <p class="text-muted small mb-0" style="line-height: 1.6;">
                        Pengujian kerentanan adalah proses menentukan bagian mana dari jaringan, aplikasi, atau bisnis Anda yang rentan terhadap serangan siber. Beberapa cara kami menilai kerentanan sistem Anda mencakup layanan ini.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection