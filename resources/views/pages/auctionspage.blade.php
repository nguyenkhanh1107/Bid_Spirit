@extends('layouts.main')

@section('content')
    <main>
        <!-- Slider Banner -->
    <div class="container mt-5">
        <div id="mainCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.artnet.com/aoa_lot_images/Banners/8/consignment-tab-timeStamp638616572623160306_1164_579.jpg"
                        class="d-block w-100" alt="Slider Image 1">
                    <div class="carousel-caption">
                        <h5>GEMS: COLLECTING POST-WAR & CONTEMPORARY ART</h5>
                        <p>September 10 - 24</p>
                        <a href="#" class="btn btn-primary">BID NOW</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.artnet.com/aoa_lot_images/Banners/9/Homepage-AOA-timeStamp638623464952029916_1164_579.jpg"
                        class="d-block w-100" alt="Slider Image 2">
                    <div class="carousel-caption">
                        <h5>Big Shots</h5>
                        <p>September 12 - 26</p>
                        <a href="#" class="btn btn-primary">BID NOW</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Thumbnails Slider -->
        <div class="container mt-5">
            <div id="thumbnailCarousel" class="carousel slide thumbnail-slider mt-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-6 col-md-3">
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.artnet.com/aoa_lot_images/Banners/6/Untitled-design-3-timeStamp638629513130831664_130_73.jpg"
                                            class="thumbnail-img" alt="Thumbnail 1">
                                        <div class="thumbnail-caption ms-2">
                                            <h7 class="fw-normal">Live for Bidding</h7>
                                            <h6 class="mb-0">Premier Prints & Multiples</h6>
                                            <p class="text-muted">Ends October 10</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-6 col-md-3">
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.artnet.com/aoa_lot_images/Banners/6/Untitled-design-3-timeStamp638629513130831664_130_73.jpg"
                                            class="thumbnail-img" alt="Thumbnail 2">
                                        <div class="thumbnail-caption ms-2">
                                            <h7 class="fw-normal">Live for Bidding</h7>
                                            <h6 class="mb-0">Contemporary Art</h6>
                                            <p class="text-muted">Ends October 16</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-6 col-md-3">
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.artnet.com/aoa_lot_images/Banners/84/Untitled-design-2-timeStamp638629512078174578_130_73.jpg"
                                            class="thumbnail-img" alt="Thumbnail 3">
                                        <div class="thumbnail-caption ms-2">
                                            <h7 class="fw-normal">Upcoming Sale</h7>
                                            <h6 class="mb-0">Important Photographs</h6>
                                            <p class="text-muted">October 3 - 17</p>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-6 col-md-3">
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <img src="https://images.artnet.com/aoa_lot_images/Banners/8/consignment-tab-timeStamp638616572623160306_147_73.jpg"
                                            class="thumbnail-img" alt="Thumbnail 4">
                                        <div class="thumbnail-caption ms-2">
                                            <h7 class="fw-normal">Consign Now</h7>
                                            <h6 class="mb-0">Sell with Artnet</h6>
                                            <p class="text-muted">Submit artworks now</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Bạn có thể thêm các carousel-item khác nếu cần -->
                </div>
            </div>
        </div>
        <hr class="hr-top">
          <!-- Auction Categories -->
    <div class="container category-container">
        <h3 class="category-title">All Auction Categories</h3>
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 category-item">
                <a href="{{route('categoriespage')}}">
                    <img src="https://bidspirit-images.global.ssl.fastly.net/vintage/cloned-images/24347/001/a_ignore_q_80_w_1000_c_limit_001.jpg" alt="Pablo Picasso" class="featured-category">
                    <h6> Antique</h6>
                </a>
            </div>
            <div class="col-12 col-md-4 category-item">
                <a href="{{route('categoriespage')}}">
                    <img src="https://bidspirit-images.global.ssl.fastly.net/bidgoldstandard/cloned-images/437292/001/a_ignore_q_80_w_1000_c_limit_001.jpg" alt="Photographs" class="featured-category">
                    <h6>Coins</h6>
                </a>
            </div>
            <div class="col-12 col-md-4 category-item">
                <a href="{{route('categoriespage')}}">
                    <img src="https://images.artnet.com/aoa_lot_images/Banners/30/jeff-koons-balloon-dog-blue-prints-and-multiples-zoom-668-500-timeStamp638627808738825213_414_310.jpg" alt="All Artworks" class="featured-category">
                    <h6>All Artworks</h6>
                </a>
            </div>
        </div>
    </div>

    <hr class="hr-top">
    <!-- Trending Artworks -->

    <div class="trending-artworks-section">
        <div class="trending-artworks-container">
            <h3>Trending Artworks</h3>
            <div class="mt-magin">
                <span>Most Bids</span>
            </div>
            <div class="slider-wrapper">
                <button class="prev">&#10094;</button> <!-- Mũi tên trái -->
                <div class="artworks-gallery-wrapper">
                    <div class="artworks-gallery">
                        <!-- Thêm 8 ảnh -->
                        <a href="{{route('detailspage')}}" class="artwork-item">
                            <div class="artwork-image">
                                <img src="https://images.artnet.com/aoa_lot_images/142607/andy-warhol-bald-eagle-from-endangered-species-prints-and-multiples-zoom_360_360.jpg"
                                    alt="Roy Lichtenstein">
                            </div>
                            <div class="artwork-details">
                                <p class="artist-name">Roy Lichtenstein</p>
                                <p class="artwork-title"><em>I Love Liberty, 1982</em></p>
                                <p class="artwork-price">42,000 USD (2 bids)</p>
                            </div>
                        </a>

                        <a href="{{route('detailspage')}}" class="artwork-item">
                            <div class="artwork-image">
                                <img src="https://images.artnet.com/aoa_lot_images/142629/andy-warhol-mickey-mouse-from-myths-prints-and-multiples-zoom_360_363.jpg"
                                    alt="Ed Ruscha">
                            </div>
                            <div class="artwork-details">
                                <p class="artist-name">Ed Ruscha</p>
                                <p class="artwork-title"><em>Drops, 1971</em></p>
                                <p class="artwork-price">10,000 USD (2 bids)</p>
                            </div>
                        </a>

                        <a href="{{route('detailspage')}}" class="artwork-item">
                            <div class="artwork-image">
                                <img src="https://images.artnet.com/aoa_lot_images/142663/andy-warhol-golden-mushroom-from-campbells-soup-ii-prints-and-multiples-zoom_360_552.jpg"
                                    alt="Damien Hirst">
                            </div>
                            <div class="artwork-details">
                                <p class="artist-name">Damien Hirst</p>
                                <p class="artwork-title"><em>Canon, 2015</em></p>
                                <p class="artwork-price">5,500 USD (2 bids)</p>
                            </div>
                        </a>

                        <a href="{{route('detailspage')}}" class="artwork-item">
                            <div class="artwork-image">
                                <img src="https://images.artnet.com/aoa_lot_images/142629/andy-warhol-mickey-mouse-from-myths-prints-and-multiples-zoom_360_363.jpg"
                                    alt="Ed Ruscha">
                            </div>
                            <div class="artwork-details">
                                <p class="artist-name">Ed Ruscha</p>
                                <p class="artwork-title"><em>Drops, 1971</em></p>
                                <p class="artwork-price">10,000 USD (2 bids)</p>
                            </div>
                        </a>

                        <!-- 4 ảnh mới thêm -->
                        <a href="{{route('detailspage')}}" class="artwork-item">
                            <div class="artwork-image">
                                <img src="https://images.artnet.com/aoa_lot_images/142607/andy-warhol-bald-eagle-from-endangered-species-prints-and-multiples-zoom_360_360.jpg"
                                    alt="Andy Warhol">
                            </div>
                            <div class="artwork-details">
                                <p class="artist-name">Andy Warhol</p>
                                <p class="artwork-title"><em>Dollar Sign, 1981</em></p>
                                <p class="artwork-price">30,000 USD (4 bids)</p>
                            </div>
                        </a>

                        <a href="{{route('detailspage')}}" class="artwork-item">
                            <div class="artwork-image">
                                <img src="https://images.artnet.com/aoa_lot_images/142607/andy-warhol-bald-eagle-from-endangered-species-prints-and-multiples-zoom_360_360.jpg"
                                    alt="Pablo Picasso">
                            </div>
                            <div class="artwork-details">
                                <p class="artist-name">Pablo Picasso</p>
                                <p class="artwork-title"><em>Femme au Chapeau, 1962</em></p>
                                <p class="artwork-price">50,000 USD (6 bids)</p>
                            </div>
                        </a>

                        <a href="{{route('detailspage')}}" class="artwork-item">
                            <div class="artwork-image">
                                <img src="https://images.artnet.com/aoa_lot_images/142626/roy-lichtenstein-i-love-liberty-prints-and-multiples-zoom_360_513.jpg"
                                    alt="Vincent van Gogh">
                            </div>
                            <div class="artwork-details">
                                <p class="artist-name">Vincent van Gogh</p>
                                <p class="artwork-title"><em>Sunflowers, 1889</em></p>
                                <p class="artwork-price">120,000 USD (10 bids)</p>
                            </div>
                        </a>

                        <a href="{{route('detailspage')}}" class="artwork-item">
                            <div class="artwork-image">
                                <img src="https://images.artnet.com/aoa_lot_images/142624/damien-hirst-canon-prints-and-multiples-zoom_360_426.jpg"
                                    alt="Jackson Pollock">
                            </div>
                            <div class="artwork-details">
                                <p class="artist-name">Jackson Pollock</p>
                                <p class="artwork-title"><em>Number 31, 1949</em></p>
                                <p class="artwork-price">95,000 USD (8 bids)</p>
                            </div>
                        </a>
                    </div>
                </div>
                <button class="next">&#10095;</button> <!-- Mũi tên phải -->
            </div>
            <a href="{{route('categoriespage')}}" class="view-all">View All Artworks</a>
        </div>
    </div>
    </main>

@endsection

