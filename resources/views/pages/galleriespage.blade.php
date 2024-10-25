@extends('layouts.main')

@section('content')
<main>
    <section id="auctions" class="py-5 bg-white">
        <div class="container mt-5">
            <h4 class="text-center mb-4">Featured Galleries</h4>

            <!-- Carousel -->
            <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner text-center">
                    @foreach($galleries->chunk(3) as $galleryChunk) <!-- Mỗi slide có 3 gallery -->
                        <div class="carousel-item @if($loop->first) active @endif">
                            <div class="row">
                                @foreach($galleryChunk as $gallery)
                                    <div class="col-md-4 gallery-item">
                                        <img src="{{ asset($gallery->image_path) }}" class="img-fluid" alt="{{ $gallery->title }}">
                                        <p class="gallery-title">{{ $gallery->title }}</p>
                                        <p class="gallery-location">{{ $gallery->category->name }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Điều khiển -->
                <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
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
                @foreach($galleries->chunk(3) as $galleryChunk)
                    <div class="carousel-item @if($loop->first) active @endif">
                        <div class="row">
                            @foreach($galleryChunk as $gallery)
                                <div class="col-md-4">
                                    <img src="{{ asset($gallery->image_path) }}" class="img-fluid small-img" alt="{{ $gallery->title }}">
                                    <h6 class="mt-2">{{ $gallery->title }}</h6>
                                    <p>{{ $gallery->category->name }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Điều khiển trái/phải -->
            <button class="carousel-control-prev" type="button" data-bs-target="#multiItemCarousel" data-bs-slide="prev">
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#multiItemCarousel" data-bs-slide="next">
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</main>
@endsection
