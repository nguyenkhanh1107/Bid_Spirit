<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArtAuction - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('demo/css/galleries.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/detail.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/categories.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/css/auctions.css') }}">
    <link rel="stylesheet" href="{{ asset('demo/assets/themify-icons-font/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
<header class="bg-white"><a class="nav-link" href="{{ route('homepage') }}"><div class="container logo">
    <h1 class="display-4" >ArtAuction</h1>
</div></a>

</header>
<!-- begin navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
<div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('homepage') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('auctionspage')}}">Auctions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('galleriespage')}}">Galleries</a>
            </li>
        </ul>
        <!-- Search Bar -->
        <div class="search-icon ti-search" onclick="toggleSearch()"></div>
        <div class="search-container" id="search-container">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn" type="submit">Search</button>
            </form>
        </div>
    </div>
</div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="{{ asset('demo/js/index.js') }}"></script>
<script src="{{ asset('demo/js/detail.js') }}"></script>
<script src="{{ asset('demo/js/auctions.js')}}"></script>
</body>

</html>
