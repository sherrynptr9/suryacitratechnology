<div class="row g-4">
    @if($products->count() > 0)
        @foreach($products as $product)
            @php
                $specs = $product->specifications ?? [];
            @endphp

            <div class="col-md-4">
                <div class="product-card">
                    {{-- Gambar --}}
                    <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid mb-3" alt="{{ $product->name }}" style="height: 150px; object-fit: contain;">
                    
                    <h5 class="fw-bold mb-3">{{ $product->name }}</h5>
                    
                    <button class="btn btn-detail" 
                        data-bs-toggle="modal" 
                        data-bs-target="#productModal"
                        data-slug="{{ $product->slug }}" 
                        data-title="{{ $product->name }}"
                        data-img="{{ asset('storage/' . $product->image) }}"
                        {{-- UPDATE: Menambahkan data description --}}
                        data-description="{{ $product->description }}" 
                        data-specs='{{ json_encode($specs) }}'> 
                        Lihat Spesifikasi
                    </button>
                </div>
            </div>
        @endforeach
    @else
        <div class="col-12 text-center py-5">
            <h4 class="text-muted">Produk tidak ditemukan.</h4>
        </div>
    @endif
</div>

<div class="d-flex justify-content-center mt-5">
    {{ $products->appends(request()->input())->links() }}
</div>