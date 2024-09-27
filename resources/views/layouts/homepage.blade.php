@extends('frondend.frontend')


@section('content')
<div class="hero-banner">
    <div class="container center-text">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h3 class="display-4 fw-bold">Discover Exquisite Art</h3>
                <p class="lead">Explore our curated collection of unique artworks from talented artists around the
                    world.</p>
                <a href="#auctions" class="btn btn-primary btn-text btn-lg">Browse Auctions</a>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1561214115-f2f134cc4912" class="img-fluid rounded"
                    alt="Art Auction Banner">
            </div>
        </div>
    </div>
</div>

<hr>

<main>
    <section id="artists" class="py-5">
        <div class="container center-text">
            <h2 class="text-center mb-4">Featured Artists</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 artist-card">
                        <img src="https://images.unsplash.com/photo-1502680390469-be75c86b636f" class="card-img-top"
                            alt="Artist 1">
                        <div class="card-body">
                            <h5 class="card-title">Jane Doe</h5>
                            <p class="card-text">Contemporary abstract painter known for vibrant colors.</p>
                            <a href="#" class="btn btn-primary btn-text">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 artist-card">
                        <img src="https://images.unsplash.com/photo-1460661419201-fd4cecdf8a8b" class="card-img-top"
                            alt="Artist 2">
                        <div class="card-body">
                            <h5 class="card-title">John Smith</h5>
                            <p class="card-text">Sculptor specializing in modern metal installations.</p>
                            <a href="#" class="btn btn-primary btn-text">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 artist-card">
                        <img src="https://images.unsplash.com/photo-1563089145-599997674d42" class="card-img-top"
                            alt="Artist 3">
                        <div class="card-body">
                            <h5 class="card-title">Emily Chen</h5>
                            <p class="card-text">Digital artist pushing boundaries of technology and art.</p>
                            <a href="#" class="btn btn-primary btn-text">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <!-- begin auctions -->
    <section id="auctions" class="py-5 bg-white">
        <div class="container center-text">
            <h2 class="text-center mb-4">Ongoing Auctions</h2>
            <div id="auctionCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5"
                                class="card-img-top" alt="Auction Item 1">
                            <div class="card-body">
                                <h5 class="card-title">Abstract Harmony</h5>
                                <p class="card-text">Starting Bid: $5000</p>
                                <p class="card-text">Time Left: 2d 5h 30m</p>
                                <a href="#" class="btn btn-primary btn-text">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card">
                            <img src="https://images.artnet.com/aoa_lot_images/Banners/7/BigShots-homepage-timeStamp638611302747054775_1164_579.jpg"
                                class="card-img-top" alt="Auction Item 2">
                            <div class="card-body">
                                <h5 class="card-title">Urban Landscape</h5>
                                <p class="card-text">Starting Bid: $3500</p>
                                <p class="card-text">Time Left: 1d 12h 45m</p>
                                <a href="#" class="btn btn-primary btn-text">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#auctionCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#auctionCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <hr>

    <!-- begin Galleries -->
    <section id="products" class="py-5">
        <div class="container center-text">
            <h2 class="text-center mb-4">Galleries</h2>
            <div class="row mb-3">
                <div class="col-md-3">
                    <select class="form-select" aria-label="Filter by category">
                        <option selected>All Categories</option>
                        <option value="1">Paintings</option>
                        <option value="2">Sculptures</option>
                        <option value="3">Digital Art</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select" aria-label="Filter by artist">
                        <option selected>All Artists</option>
                        <option value="1">Jane Doe</option>
                        <option value="2">John Smith</option>
                        <option value="3">Emily Chen</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select" aria-label="Filter by auction date">
                        <option selected>All Dates</option>
                        <option value="1">This Week</option>
                        <option value="2">This Month</option>
                        <option value="3">Next Month</option>
                    </select>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 product-card">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSt0XYCGEm17JaH3SUFJxDpmDTaoSCzmhlbKfafSUHjh7mRzVYB"
                            class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Serene Landscape</h5>
                            <p class="card-text">Artist: Jane Doe</p>
                            <p class="card-text">Current Bid: $2500</p>
                            <p class="card-text">Status: Active</p>
                            <button class="btn btn-primary btn-text" data-bs-toggle="modal"
                                data-bs-target="#bidModal">Place
                                Bid</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 product-card">
                        <img src="https://images.artnet.com/aoa_lot_images/Banners/7/BigShots-homepage-timeStamp638611302747054775_1164_579.jpg"
                            class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Modern Sculpture</h5>
                            <p class="card-text">Artist: John Smith</p>
                            <p class="card-text">Current Bid: $4000</p>
                            <p class="card-text">Status: Active</p>
                            <button class="btn btn-primary btn-text" data-bs-toggle="modal"
                                data-bs-target="#bidModal">Place
                                Bid</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 product-card">
                        <img src="https://images.unsplash.com/photo-1525909002-1b05e0c869d8" class="card-img-top"
                            alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title">Digital Dream</h5>
                            <p class="card-text">Artist: Emily Chen</p>
                            <p class="card-text">Current Bid: $1800</p>
                            <p class="card-text">Status: Active</p>
                            <button class="btn btn-primary btn-text" data-bs-toggle="modal"
                                data-bs-target="#bidModal">Place
                                Bid</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
