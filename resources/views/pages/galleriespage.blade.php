@extends('layouts.main')

@section('content')
    <main>
        <section id="auctions" class="py-5 bg-white">
            <div class="container mt-5">
                <h4 class="text-center mb-4">Featured Galleries</h4>

                <!-- Carousel -->
                <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4 gallery-item">
                                    <img src="https://via.placeholder.com/300x300" class="img-fluid" alt="Image 1">
                                    <p class="gallery-title">Sprüth Magers</p>
                                    <p class="gallery-location">Berlin and 3 more locations</p>
                                </div>
                                <div class="col-md-4 gallery-item">
                                    <img src="https://via.placeholder.com/300x300" class="img-fluid" alt="Image 2">
                                    <p class="gallery-title">Pace Gallery</p>
                                    <p class="gallery-location">New York and 7 more locations</p>
                                </div>
                                <div class="col-md-4 gallery-item">
                                    <img src="https://via.placeholder.com/300x300" class="img-fluid" alt="Image 3">
                                    <p class="gallery-title">Michael Werner Gallery</p>
                                    <p class="gallery-location">New York and 5 more locations</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 gallery-item">
                                    <img src="https://via.placeholder.com/300x300" class="img-fluid" alt="Image 4">
                                    <p class="gallery-title">Gallery 4</p>
                                    <p class="gallery-location">Location 4</p>
                                </div>
                                <div class="col-md-4 gallery-item">
                                    <img src="https://via.placeholder.com/300x300" class="img-fluid" alt="Image 5">
                                    <p class="gallery-title">Gallery 5</p>
                                    <p class="gallery-location">Location 5</p>
                                </div>
                                <div class="col-md-4 gallery-item">
                                    <img src="https://via.placeholder.com/300x300" class="img-fluid" alt="Image 6">
                                    <p class="gallery-title">Gallery 6</p>
                                    <p class="gallery-location">Location 6</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <hr>

        <section class="container text-center mt-5">
            <h5>Frieze Seoul</h5>

            <div id="multiItemCarousel" class="carousel slide mt-4 bootom_hr" data-bs-ride="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="http://images.artnet.com/SiteCms/GALLDISCOVERY/com/GalleryCategories/13/Screenshot%202024-09-04%20at%2011.jpg"
                                    class="img-fluid small-img" alt="Pace Gallery">
                                <h6 class="mt-2">Pace Gallery</h6>
                                <p>New York và 7 địa điểm khác</p>
                            </div>
                            <div class="col-md-4">
                                <img src="http://images.artnet.com/SiteCms/GALLDISCOVERY/com/GalleryCategories/14/Screenshot%202024-09-04%20at%2011.jpg"
                                    class="img-fluid small-img" alt="Michael Werner Gallery">
                                <h6 class="mt-2">Michael Werner Gallery</h6>
                                <p>New York và 5 địa điểm khác</p>
                            </div>
                            <div class="col-md-4">
                                <img src="http://images.artnet.com/SiteCms/GALLDISCOVERY/com/GalleryCategories/15/Screenshot%202024-09-04%20at%2011.jpg"
                                    class="img-fluid small-img" alt="Galleria Continua">
                                <h6 class="mt-2">Galleria Continua</h6>
                                <p>San Gimignano và 7 địa điểm khác</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <hr>
        <!--  -->
        <section class="container text-center mt-5">
            <h5>Independent 20th Century</h5>

            <div id="multiItemCarousel" class="carousel slide mt-4 bootom_hr" data-bs-ride="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="http://images.artnet.com/SiteCms/GALLDISCOVERY/com/GalleryCategories/33/Screenshot%202024-09-04%20at%2012.jpg"
                                    class="img-fluid small-img" alt="Pace Gallery">
                                <h6 class="mt-2">Pace Gallery</h6>
                                <p>New York và 7 địa điểm khác</p>
                            </div>
                            <div class="col-md-4">
                                <img src="http://images.artnet.com/SiteCms/GALLDISCOVERY/com/GalleryCategories/44/Screenshot%202024-09-04%20at%2012.jpg"
                                    class="img-fluid small-img" alt="Michael Werner Gallery">
                                <h6 class="mt-2">Michael Werner Gallery</h6>
                                <p>New York và 5 địa điểm khác</p>
                            </div>
                            <div class="col-md-4">
                                <img src="http://images.artnet.com/SiteCms/GALLDISCOVERY/com/GalleryCategories/35/Screenshot%202024-09-04%20at%2012.jpg"
                                    class="img-fluid small-img" alt="Galleria Continua">
                                <h6 class="mt-2">Galleria Continua</h6>
                                <p>San Gimignano và 7 địa điểm khác</p>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
        <hr>

        <section class="container text-center mt-5">
            <h5>The Armory Show</h5>

            <div id="multiItemCarousel" class="carousel slide mt-4 bootom_hr" data-bs-ride="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="http://images.artnet.com/SiteCms/GALLDISCOVERY/com/GalleryCategories/13/Screenshot%202024-09-04%20at%2011.jpg"
                                    class="img-fluid small-img" alt="Pace Gallery">
                                <h6 class="mt-2">Pace Gallery</h6>
                                <p>New York và 7 địa điểm khác</p>
                            </div>
                            <div class="col-md-4">
                                <img src="http://images.artnet.com/SiteCms/GALLDISCOVERY/com/GalleryCategories/14/Screenshot%202024-09-04%20at%2011.jpg"
                                    class="img-fluid small-img" alt="Michael Werner Gallery">
                                <h6 class="mt-2">Michael Werner Gallery</h6>
                                <p>New York và 5 địa điểm khác</p>
                            </div>
                            <div class="col-md-4">
                                <img src="http://images.artnet.com/SiteCms/GALLDISCOVERY/com/GalleryCategories/15/Screenshot%202024-09-04%20at%2011.jpg"
                                    class="img-fluid small-img" alt="Galleria Continua">
                                <h6 class="mt-2">Galleria Continua</h6>
                                <p>San Gimignano và 7 địa điểm khác</p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="http://images.artnet.com/SiteCms/GALLDISCOVERY/com/GalleryCategories/11/Screenshot%202024-09-04%20at%2011.jpg"
                                    class="img-fluid small-img" alt="Gallery 4">
                                <h6 class="mt-2">Gallery 4</h6>
                                <p>Thông tin địa điểm</p>
                            </div>
                            <div class="col-md-4">
                                <img src="http://images.artnet.com/SiteCms/GALLDISCOVERY/com/GalleryCategories/23/Screenshot%202024-09-04%20at%2011.jpg"
                                    class="img-fluid small-img" alt="Gallery 5">
                                <h6 class="mt-2">Gallery 5</h6>
                                <p>Thông tin địa điểm</p>
                            </div>
                            <div class="col-md-4">
                                <img src="http://images.artnet.com/SiteCms/GALLDISCOVERY/com/GalleryCategories/24/Screenshot%202024-09-04%20at%2011.jpg"
                                    class="img-fluid small-img" alt="Gallery 6">
                                <h6 class="mt-2">Gallery 6</h6>
                                <p>Thông tin địa điểm</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Điều khiển trái/phải bằng icon mũi tên -->
                <button class="carousel-control-prev" type="button" data-bs-target="#multiItemCarousel"
                    data-bs-slide="prev">
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#multiItemCarousel"
                    data-bs-slide="next">
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

    </main>
@endsection
