<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
     
    {{-- Lightbox --}}
    <link rel="stylesheet" href="/lightbox/dist/css/lightbox.min.css">

    <title>Fahira Jaya Aspal</title>
  </head>
  <body id="home">

    {{-- Jumbotron --}}
    @yield('jumbotron')
    {{-- End Jumbotron --}}

    {{-- Navbar --}}
    @include('layouts.navbar')
    {{-- End Navbar --}}

    {{-- Page --}}
    @yield('page')
    {{-- End Page --}}

    {{-- Footer --}}
    @include('layouts.footer')
    {{-- End Footer --}}

    <script src="/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    <script src="/lightbox/dist/js/lightbox-plus-jquery.min.js"></script>
    <script src="/js/script.js"></script>
</body>
</html>