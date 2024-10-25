@extends('layouts.main')

@section('content')
    <div class="hero-banner">
        <div class="container center-text">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h3 class="display-4 fw-bold">Discover Exquisite Art</h3>
                    <p class="lead">Explore our curated collection of unique artworks from talented artists around the world.</p>
                    <a href="#auctions" class="btn btn-primary btn-text btn-lg">Browse Auctions</a>
                </div>
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1561214115-f2f134cc4912" class="img-fluid rounded" alt="Art Auction Banner">
                </div>
            </div>
        </div>
    </div>

    <hr>

    <main>
        <!-- Begin Categories Section -->
        <section id="artists" class="py-5">
            <div class="container center-text">
                <h2 class="text-center mb-4">Categories</h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Loop through categories -->
                    <div class="col">
                        <div class="card h-100 artist-card">
                            <img src="https://i.guim.co.uk/img/static/sys-images/Guardian/Archive/Search/2011/8/19/1313751621542/Van-Goghs-Starry-Night-007.jpg?width=465&dpr=1&s=none" class="card-img-top" alt="Artworks">
                            <div class="card-body">
                                <h5 class="card-title">Artworks</h5>
                                <a href="{{ route('maincategoriespage', ['category' => 'artwork']) }}" class="btn btn-primary btn-text">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 artist-card">
                            <img src="https://i.vietgiaitri.com/2011/12/3/dong-xu-co-co-gia-66-ty-dong-9d5dfd.jpg" class="card-img-top" alt="Coins">
                            <div class="card-body">
                                <h5 class="card-title">Coins</h5>
                                <a href="{{ route('maincategoriespage', ['category' => 'coins']) }}" class="btn btn-primary btn-text">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 artist-card">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQGXhsllAuuQStoV2VO110sXz1gyPl-T6vp3A&s" class="card-img-top" alt="Antiques">
                            <div class="card-body">
                                <h5 class="card-title">Antiques</h5>
                                <a href="{{ route('maincategoriespage', ['category' => 'antique']) }}" class="btn btn-primary btn-text">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>

        <!-- Begin Auctions Section -->
        <section id="auctions" class="py-5 bg-white">
            <div class="container center-text">
                <h2 class="text-center mb-4">Some Auctions</h2>
                <div id="auctionCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($auctions as $index => $auction)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <div class="card">
                                    <img src="{{ asset($auction->item->image_path) }}" class="card-img-top"
                                        alt="{{ $auction->item->title }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $auction->item->title }}</h5>
                                        <p class="card-text">Starting Bid: {{ number_format($auction->start_price, 2) }} USD</p>
                                        <p class="card-text">Time Left: {{ \Carbon\Carbon::parse($auction->end_date)->diffForHumans() }}</p>
                                        <a href="{{ route('detailspage', ['id' => $auction->item->id]) }}" class="btn btn-primary btn-text">View Details</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Carousel navigation buttons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#auctionCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#auctionCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
    </main>
@endsection
