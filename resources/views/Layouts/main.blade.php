<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Surya Citra Technology')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .text-sct { color: #00A651 !important; }
        .bg-sct { background-color: #00A651 !important; color: white; }
        .btn-sct { background-color: #FFC107; color: white; font-weight: bold; }
        body { font-family: sans-serif; }
    </style>
  </head>
  <body class="d-flex flex-column min-vh-100">

    @include('Layouts.navbar')
    
    {{-- @include('Layouts.navMobile') --}} 

    <main class="flex-grow-1">
        @yield('content')
    </main>

    @include('Layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>