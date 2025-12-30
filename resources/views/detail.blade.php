@extends('layouts.main')
{{-- Judul Tab Browser --}}
@section('title', $product->name . ' - Detail Produk') 

@section('content')

<style>
    /* Reset & Variabel */
    :root {
        --sct-yellow: #FDC367;
        --sct-teal: #00A894;
        --sct-black: #212529;
        --sct-gray-bg: #F8F9FA; 
        --sct-text-muted: #6C757D;
    }

    body {
        background-color: #fff; 
    }

    /* HEADER & BACK BUTTON */
    .detail-header {
        display: flex;
        align-items: center;
        margin-top: 50px;
        margin-bottom: 40px;
        gap: 20px;
    }
    
    .back-btn-icon {
        width: 30px;
        height: 30px;
        cursor: pointer;
        transition: transform 0.2s;
        fill: black; 
    }
    .back-btn-icon:hover {
        transform: scale(1.1);
        fill: var(--sct-teal);
    }

    .product-title {
        font-size: 2rem;
        font-weight: 700;
        color: #000;
        margin: 0;
    }

    /* KONTEN KIRI: GAMBAR */
    .img-box {
        border: 1px solid #EAEAEA; 
        border-radius: 20px;
        padding: 40px; 
        background: white;
        box-shadow: 0 4px 20px rgba(0,0,0,0.03); 
        display: flex;
        align-items: center;
        justify-content: center;
        height: 500px; 
        position: relative;
        overflow: hidden;
    }
    
    .img-product {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        transition: transform 0.3s ease;
    }
    
    .img-box:hover .img-product {
        transform: scale(1.05);
    }

    /* KONTEN KANAN: DESKRIPSI */
    .product-desc {
        font-size: 1rem;
        line-height: 1.8;
        color: #4a4a4a;
        margin-bottom: 40px;
    }

    /* SPECIFICATIONS TABLE */
    .spec-container {
        margin-bottom: 30px; 
    }

    .spec-row {
        display: flex;          
        align-items: stretch;   
        margin-bottom: 12px;    
        border-radius: 12px;   
        overflow: hidden;     
        border: 1px solid #f0f0f0; 
        transition: box-shadow 0.2s;
    }

    .spec-row:hover {
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    
    .spec-label {
        width: 35%;             
        background-color: #f8f9fa; 
        color: #495057;     
        padding: 15px 20px;     
        font-weight: 600;
        border-right: 1px solid #f0f0f0; 
        display: flex;          
        align-items: center;    
        text-transform: capitalize; 
    }
    
    .spec-value {
        width: 65%;     
        background-color: white;
        color: #000;            
        padding: 15px 20px;     
        font-weight: 700;     
        display: flex;         
        align-items: center;
    }
</style>

<div class="container pb-5">
    <div class="detail-header">
        <a href="{{ route('price-list') }}" class="text-decoration-none" title="Kembali ke Daftar Produk">
            <svg xmlns="http://www.w3.org/2000/svg" class="back-btn-icon" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
            </svg>
        </a>
        
        <h1 class="product-title">{{ $product->name }}</h1>
    </div>

    <div class="row g-5">
        <div class="col-lg-5">
            <div class="img-box">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" class="img-product" alt="{{ $product->name }}">
                @else
                    <div class="text-muted">Tidak ada gambar</div>
                @endif
            </div>
        </div>

        <div class="col-lg-7 ps-lg-5">
            
            @php
                $specs = $product->specifications ?? [];
                $modelValue = null;
                $otherSpecs = [];

                foreach($specs as $key => $value) {
                    // Cek jika key mengandung kata "model"
                    if (stripos($key, 'model') !== false) {
                        $modelValue = $value;
                    } else {
                        // Masukkan ke sisa spesifikasi
                        $otherSpecs[$key] = $value;
                    }
                }
            @endphp

            {{-- 1. TAMPILKAN MODEL (TEKS BIASA) --}}
            @if($modelValue)
                <div class="mb-4">
                    <h5 class="fw-bold" style="color: #555; font-size: 1.1rem;">
                        Model : <span class="text-black">{{ $modelValue }}</span>
                    </h5>
                </div>
            @endif

            {{-- 2. DESKRIPSI PRODUK --}}
            <div class="product-desc">
                {!! $product->description !!}
            </div>

            {{-- 3. SISA SPESIFIKASI (TABEL) --}}
            @if(count($otherSpecs) > 0)
                <div class="spec-container">
                    @foreach($otherSpecs as $key => $value)
                        <div class="spec-row">
                            <div class="spec-label">{{ str_replace('_', ' ', $key) }}</div>
                            <div class="spec-value">{{ $value }}</div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
</div>

@endsection