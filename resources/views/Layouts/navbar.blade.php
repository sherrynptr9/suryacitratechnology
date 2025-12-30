<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3 sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" height="60" class="me-2 d-inline-block align-text-top">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-4">
                <li class="nav-item">
                    <a class="nav-link text-dark fw-medium {{ Request::is('') ? 'active fw-bold text-primary' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-medium {{ Request::is('tentang') ? 'active fw-bold text-primary' : '' }}" href="/tentang">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-medium {{ Request::is('layanan') ? 'active fw-bold text-primary' : '' }}" href="/layanan">Layanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('price-list') }}">Produk</a>
                </li>
            </ul>

            <a href="/kontak" class="btn text-white fw-bold px-4 rounded-pill" 
               style="background-color: #FBBF58; border: none;">
                Kontak
            </a>
        </div>
    </div>
</nav>