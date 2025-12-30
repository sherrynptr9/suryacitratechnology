@extends('layouts.main')
@section('title', 'Produk - Surya Citra Technology')
@section('content')

<style>
    :root {
        --sct-yellow: #fdc367;
        --sct-teal: #00a894;
        --sct-black: #00000;
        --sct-white: #fffff;
    }
    .hero-produk {
        background: url('{{ asset('images/Produk.jpg') }}');
        background-size: cover;
        background-position: center;
        height: 400px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
        padding-bottom: 80px;
    }
    .partner-box {
        background: white;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        padding: 30px;
        margin-top: -60px;
        z-index: 10;
        text-align: center;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }
    .search-container {
        max-width: 800px;
        margin: 50px auto;
        position: relative;
    }
    .search-input {
        border-radius: 50px;
        padding: 15px 30px;
        width: 100%;
        padding-left: 50px;
        border: 1px solid #ddd;
        outline: none;
    }
    .search-icon {
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        color: #aaa;
    }
    .product-card {
        border: 1px solid #f0f0f0;
        border-radius: 15px;
        padding: 30px 20px;
        text-align: center;
        background: white;
        height: 100%;
        transition: transform 0.3s;
        box-shadow: 0 5px 15px rgba(0,0,0,0.02); 
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }
    .product-card:hover {
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        transform: translateY(-5px);
    }
    .btn-detail {
        background-color: #e6b035;
        color: white;
        font-weight: 600;
        border-radius: 50px;
        padding: 8px 25px;
        border: none;
        font-size: 0.9rem;
        transition: all 0.3s;
        margin-top: auto;
    }
    .btn-detail:hover {
        background-color: #d4a029 !important;
        color: white !important;
    }
    .btn-close-custom:focus {
        outline: none;
        box-shadow: none;
    }
    .cta-product {
        background-color: var(--sct-yellow);
        border-radius: 20px;
        padding: 50px;
        margin-top: 80px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }
</style>

{{-- 1. HERO SECTION --}}
<div class="container-fluid p-0">
    <div class="hero-produk">
        <h1 class="fw-bold display-4 mb-2">Solusi Hardware</h1>
        <p class="lead opacity-90 fw-light mx-auto" style="max-width: 600px; font-size: 1rem;">
            Penyediaan perangkat keras berkualitas tinggi dengan standar enterprise dan mitra global terpercaya untuk performa bisnis maksimal.
        </p>
    </div>
</div>

{{-- 2. PARTNER SECTION --}}
<div class="container px-4">
    <div class="partner-box">
        <h5 class="fw-bold mb-5 text-black" style="font-size: 1.1rem;">Partner Kami</h5>
        <div id="partnerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center align-items-center g-5">
                         <div class="col-4 col-md-3"><img src="{{ asset('images/Ruckus Commscope.png') }}" alt="Ruckus" class="img-fluid" style="max-height: 70px; object-fit: contain;"></div>
                         <div class="col-4 col-md-3"><img src="{{ asset('images/Sophos.png') }}" alt="Sophos" class="img-fluid" style="max-height: 30px; object-fit: contain;"></div>
                         <div class="col-4 col-md-3"><img src="{{ asset('images/EnGenius.png') }}" alt="EnGenius" class="img-fluid" style="max-height: 60px; object-fit: contain;"></div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <button type="button" data-bs-target="#partnerCarousel" data-bs-slide-to="0" class="active bg-secondary rounded-circle border-0" style="width: 10px; height: 10px;" aria-current="true"></button>
            </div>
        </div>
    </div>
</div>

{{-- 3. SEARCH BAR --}}
<div class="container">
    <div class="search-container">
        <i class="bi bi-search search-icon"></i>
        <input 
            type="text" 
            id="searchInput" 
            class="search-input" 
            placeholder="Ketik untuk mencari produk..." 
            value="{{ request('search') }}"
            autocomplete="off"
        >
    </div>
</div>

{{-- 4. PRODUCT GRID CONTAINER --}}
<div class="container mb-5" id="productContainer">
    @include('partials.product-grid')
</div>

{{-- 5. CTA --}}
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
    </div>
</section>

{{-- 6. MODAL POPUP STRUCTURE --}}
<div class="modal fade" id="productModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 700px;">
        <div class="modal-content border-0" style="border-radius: 20px; overflow: hidden;">
            <div class="modal-body p-4 position-relative">
                {{-- Tombol Back --}}
                <button type="button" class="btn-close-custom" data-bs-dismiss="modal" style="position: absolute; top: 15px; left: 15px; border: none; background: none; cursor: pointer; z-index: 10;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                    </svg>
                </button>

                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="p-3 border rounded-4 d-flex align-items-center justify-content-center" style="height: 200px; border-color: #eee !important;">
                            <img id="modalImage" src="" class="img-fluid" alt="Produk" style="max-height: 100%; object-fit: contain;">
                        </div>
                    </div>
                    
                    <div class="col-md-8 ps-md-4">
                        <h4 class="fw-bold mb-3 mt-3 mt-md-0" id="modalTitle">Access Point</h4>
                        
                        <div class="table-responsive mb-3">
                            <table class="table table-borderless align-middle mb-0">
                                <tbody id="modalSpecsBody" style="font-size: 0.95rem;">
                                </tbody>
                            </table>
                            <p id="noSpecsMessage" class="text-center text-muted d-none mt-3">Belum ada info spesifikasi detail.</p>
                        </div>

                        <hr class="my-3 text-muted opacity-25">
                        <div class="d-flex align-items-start mb-4 px-2"> 
                            <div class="text-secondary fw-medium" style="width: 30%; font-size: 0.95rem; flex-shrink: 0;">
                                Deskripsi
                            </div>
                            {{-- Width 70% untuk isi, sama seperti tabel --}}
                            <div class="text-muted" style="width: 70%; font-size: 0.9rem; line-height: 1.5;">
                                <div id="modalDescription"></div>
                            </div>
                        </div>

                        <div class="text-end mt-4">
                            <a href="#" id="btnToDetailPage" class="btn px-4 py-2 fw-bold rounded-pill shadow-sm" style="background-color: #FDC367; color: #333; border: none; font-size: 0.9rem;">Lihat Detail Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- 7. JAVASCRIPT LOGIC --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        
        const searchInput = document.getElementById('searchInput');
        const productContainer = document.getElementById('productContainer');
        let timeout = null;

        searchInput.addEventListener('input', function() {
            const keyword = this.value;
            clearTimeout(timeout);

            timeout = setTimeout(() => {
                if (keyword.length >= 3 || keyword.length === 0) {
                    productContainer.style.opacity = '0.5';
                    const url = "{{ route('price-list') }}?search=" + encodeURIComponent(keyword);
                    
                    fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
                    .then(response => response.text())
                    .then(html => {
                        productContainer.innerHTML = html;
                        productContainer.style.opacity = '1';
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        productContainer.style.opacity = '1';
                    });
                }
            }, 500);
        });

        var productModal = document.getElementById('productModal');
        
        productModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var slug = button.getAttribute('data-slug');
            var title = button.getAttribute('data-title');
            var img = button.getAttribute('data-img');
            var descriptionRaw = button.getAttribute('data-description');
            var specsRaw = button.getAttribute('data-specs');
            
            var specs = null;
            try {
                specs = JSON.parse(specsRaw);
                if (typeof specs === 'string') { specs = JSON.parse(specs); }
            } catch (error) {
                console.error("Gagal parsing JSON specs:", error);
                specs = {};
            }

            var finalDescription = '-';
            if (descriptionRaw) {
                var tempDiv = document.createElement('div');
                tempDiv.innerHTML = descriptionRaw;
                var firstParagraph = tempDiv.querySelector('p');
                if (firstParagraph) {
                    finalDescription = firstParagraph.outerHTML;
                } else {
                    finalDescription = descriptionRaw; 
                }
            }

            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalImage').src = img;
            document.getElementById('modalDescription').innerHTML = finalDescription;

            var tableBody = document.getElementById('modalSpecsBody');
            var noSpecsMsg = document.getElementById('noSpecsMessage');
            
            tableBody.innerHTML = '';

            function createRow(label, value) {
                var row = document.createElement('tr');
                var th = document.createElement('td');
            
                th.width = "30%"; 
                
                th.classList.add('text-secondary', 'py-2', 'text-capitalize');
                th.textContent = label.replace(/_/g, ' '); 
                
                var td = document.createElement('td');
                
                
                td.classList.add('fw-normal', 'py-2');
                td.textContent = value;
                
                row.appendChild(th);
                row.appendChild(td);
                tableBody.appendChild(row);
            }

            var hasData = false;
            if (specs) {
                if (Array.isArray(specs)) {
                    if (specs.length > 0) {
                        hasData = true;
                        specs.slice(0, 2).forEach(item => {
                            var values = Object.values(item);
                            if (values.length >= 1) {
                                var label = values.length > 1 ? values[0] : 'Info';
                                var val   = values.length > 1 ? values[1] : values[0];
                                createRow(label, val);
                            }
                        });
                    }
                } 
                else if (typeof specs === 'object') {
                    var entries = Object.entries(specs);
                    if (entries.length > 0) {
                        hasData = true;
                        entries.slice(0, 2).forEach(([key, value]) => {
                            createRow(key, value);
                        });
                    }
                }
            }

            if (hasData) {
                if (noSpecsMsg) noSpecsMsg.classList.add('d-none');
            } else {
                if (noSpecsMsg) noSpecsMsg.classList.remove('d-none');
            }

            var btnDetail = document.getElementById('btnToDetailPage');
            if(btnDetail) btnDetail.href = "/produk/" + slug;
        });
    });
</script>

@endsection