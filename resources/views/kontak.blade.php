@extends('layouts.main')
@section('title', 'Layanan - Surya Citra Technology')
@section('content')

<style>
    :root {
        --sct-yellow: #FDC367;
        --sct-teal: #00A894;
        --sct-black: #0000;
        --sct-white: #FFFF;
    }
    /*hero section*/
    .hero-kontak {
        background: url('{{ asset('images/kontak.jpg')}}');
        background-size: cover;
        background-position: center;
        height: 450px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
        padding-bottom: 100px;
    }

    .form-box {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        padding: 30px;
        margin-top: -100px;
        z-index: 10;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }


    /*form*/
    .form {
        background: white;
        border-radius: 20px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        padding: 50px;
        margin-top: -100px;
        position: relative;
        z-index: 10;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }

    /*input field*/
    .form-control {
        border-radius: 20px;
        padding: 12px 15px;
        border: 1px solid #dee2e6;
        background-color: #fcfcfc;
    }

    .form-control:focus {
        border-color: var(--sct-teal);
        box-shadow: 0 0 0 0.25rem rgba(0, 168, 148, 0.15);   
    }
    
    /* Style tambahan untuk Error State */
    .form-control.is-invalid {
        border-color: #dc3545;
        background-image: none; 
    }

    .form-label {
        font-weight: bold;
        font-size: 0.9rem;
        margin-bottom: 8px;
    }

    /*submit button*/
    .btn-submit {
        background-color: var(--sct-teal);
        color: white;
        font-weight: bold;
        border-radius: 10px;
        border: none;
        width: 100%;
        font-size: 1.1rem;
        transition: background 0.3s;
        padding: 12px;
    }

    .btn-submit:hover {
        background-color: #008c7a;
        color: white;
    }

    /*info section*/
    .contact-icon { 
        color: var(--sct-teal);
        font-size: 1.5rem;
        margin-right: 15px;
        width: 30px;
        text-align: center;
    }

    .contact-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 30px;
    }

    .contact-label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
        color: black;
    }

    .contact-value {
        color: #6c757d;
        font-size: 0.95rem;
        line-height: 1.6;
    }

    /*maps*/
    .maps-container {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        height: 100%;
        min-height: 300px;
    }
</style>

{{--hero secrtion--}}
<div class="container-fluid p-0">
    <div class="hero-kontak">
        <h1 class="fw-bold display-4 mb-3">Hubungi Kami</h1>
        <p class="lead opacity-90 fw-light mx-auto px-3" style="max-width: 700px;">Konsultasikan infrastruktur IT dan Keamanan Siber <br> Anda dengan tim ahli kami</p>
    </div>
</div>

{{--form--}}
<div class="container px-3 mb-5">
    <div class="form-box">
        
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                <strong>Terjadi Kesalahan!</strong> Silakan periksa kembali isian formulir Anda.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="mb-4">
            <h3 class="fw-bold">Kirim Pesan</h3>
            <p class="text-muted">Silakan isi formulir di bawah ini, tim kami akan segera menghubungi Anda.</p>
        </div>

        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="nama" name="name" value="{{ old('name') }}" placeholder="" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="telepon" class="form-label">Nomor Telephone</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="telepon" name="phone" value="{{ old('phone') }}" placeholder="" required>
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control @error('message') is-invalid @enderror" id="pesan" name="message" rows="5" placeholder="" required>{{ old('message') }}</textarea>
                @error('message')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- --- BAGIAN CAPTCHA --- --}}
<div class="mb-4">
    <label class="form-label">Verifikasi Keamanan</label>
    <div class="row align-items-center">
        {{-- Kolom Kiri: Gambar Captcha --}}
        <div class="col-md-4 mb-2 mb-md-0">
            <div class="d-flex align-items-center">
                <span class="captcha-image" style="display: inline-block;">
                    <style scoped> .captcha-image img { width: 200px; height: auto; } </style>
                    {!! captcha_img('math') !!}
                </span>
                
                <button type="button" class="btn btn-light border ms-2" id="reload-captcha" title="Ganti Gambar">
                    <i class="bi bi-arrow-clockwise"></i> &#x21bb;
                </button>
            </div>
        </div>

        <div class="col-md-8">
            <input type="text" class="form-control @error('captcha') is-invalid @enderror" name="captcha" placeholder="Masukkan kode karakter di samping" required>
            
            @error('captcha')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

           <div class="d-flex align-items-start mt-2 text-muted">
        <i class="bi bi-info-circle-fill me-2 mt-1" style="font-size: 0.8rem;"></i>
        <small style="line-height: 1.4;">
            Hitung penjumlahan angka pada gambar, lalu isi hasilnya di atas.
        </small>
    </div>
        </div>
    </div>
</div>

<button type="submit" class="btn-submit shadow">Kirim Pesan Sekarang</button>
        </form>
    </div>
</div>

{{--informasi & map--}}
<div class="container my-5 pt-4">
    <div class="row g-5 align-items-center">
        
        <div class="col-md-5">
            <div class="ps-md-4">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div>
                        <span class="contact-label">Alamat</span>
                        <span class="contact-value">
                            Graha STK/Graha PGD <br>
                            Jl. Taman Margasatwa Raya No.3 <br>
                            Kec. Pasar Minggu, Jakarta Selatan 12540
                        </span>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div>
                        <span class="contact-label">Telephone</span>
                        <span class="contact-value">0811-1902-5202</span>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div>
                        <span class="contact-label">Email</span>
                        <span class="contact-value">marketing@suryacitratechno.id</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="maps-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5464.5689459346695!2d106.81944942571116!3d-6.2915218271233195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3db329442e9%3A0x971ff03c52e7eab1!2sGraha%20PGD!5e0!3m2!1sid!2sid!4v1766049625705!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

    </div>
</div>

{{-- SCRIPT LOAD JQUERY & CAPTCHA RELOAD --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#reload-captcha').click(function () {
            $.ajax({
                type: 'GET',
                url: '{{ route('reload-captcha') }}', 
                success: function (data) {
                    $(".captcha-image").html(data.captcha);
                },
                error: function (error) {
                    console.log('Error reloading captcha', error);
                }
            });
        });
    });
</script>

@endsection