@extends('frondend.frontend')

@section('content')
<main>
    <div class="container my-5">
        <!-- Top bar: View dropdown and Sort button -->
        <div class="row mb-4">
            <div class="col-6">
                <div class="dropdown">
                    <label for="viewSelect" class="me-2">View</label>
                    <select class="form-select d-inline-block w-auto" id="viewSelect">
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div>
            <div class="col-6 text-end">
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="sortDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Sort
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                        <li><a class="dropdown-item" href="#">Price: Low to High</a></li>
                        <li><a class="dropdown-item" href="#">Price: High to Low</a></li>
                        <li><a class="dropdown-item" href="#">Newest First</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Artwork Grid -->
        <div class="row g-4">
            <!-- Row 1: No stagger -->
            <div class="col-md-3">
                <div class="artwork p-3 text-center">
                    <a href="{{route('detailspage')}}">
                        <img src="https://images.artnet.com/aoa_lot_images/142535/vik-muniz-dallas-mill-huntsville-1910-after-lewis-hine-from-pictures-of-paper-photographs-zoom_223_152.jpg"
                            alt="Artwork 1" class="img-fluid">
                        <div class="artwork-title">
                            <strong>Pablo Picasso</strong><br>
                            Joueur de diaul..., 1947<br>
                            12,000–18,000 USD<br>
                            <span class="text-muted">2 days remaining</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="artwork p-3 text-center">
                    <a href="{{route('detailspage')}}">
                        <img src="https://images.artnet.com/aoa_lot_images/142572/david-benjamin-sherry-cobalt-cliffs-oregon-photographs-zoom_223_272.jpg"
                            alt="Artwork 2" class="img-fluid">
                        <div class="artwork-title">
                            <strong>Pablo Picasso</strong><br>
                            Vieil homme con..., 1970<br>
                            2,000 USD<br>
                            <span class="text-muted">3 days remaining</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="artwork p-3 text-center">
                    <a href="{{route('detailspage')}}">
                        <img src="https://images.artnet.com/aoa_lot_images/142563/richard-misrach-november-21-2011-540pm-photographs-zoom_223_167.jpg"
                            alt="Artwork 3" class="img-fluid">
                        <div class="artwork-title">
                            <strong>Pablo Picasso</strong><br>
                            Danseuse tâchan..., 1970<br>
                            2,000 USD<br>
                            <span class="text-muted">3 days remaining</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="artwork p-3 text-center">
                    <a href="{{route('detailspage')}}">
                        <img src="https://images.artnet.com/aoa_lot_images/142591/vanessa-beecroft-rivoli-sister-project-photographs-zoom_223_173.jpg"
                            alt="Artwork 4" class="img-fluid">
                        <div class="artwork-title">
                            <strong>Pablo Picasso</strong><br>
                            Joueur de diaul..., 1956<br>
                            6,000–8,000 USD<br>
                            <span class="text-muted">3 days remaining</span>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Row 2: Staggered -->
            <div class="col-md-3">
                <div class="artwork stagger-down p-3 text-center">
                    <a href="{{route('detailspage')}}">
                        <img src="https://images.artnet.com/aoa_lot_images/142591/vanessa-beecroft-rivoli-sister-project-photographs-zoom_223_173.jpg"
                            alt="Artwork 5" class="img-fluid">
                        <div class="artwork-title">
                            <strong>Pablo Picasso</strong><br>
                            Femme au collier..., 1948<br>
                            10,000–15,000 USD<br>
                            <span class="text-muted">5 days remaining</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="artwork stagger-up p-3 text-center">
                    <a href="{{route('detailspage')}}">
                        <img src="https://images.artnet.com/aoa_lot_images/142545/edward-burtynsky-socar-oil-fields-6-baku-azerbaijan-photographs-zoom_223_144.jpg"
                            alt="Artwork 6" class="img-fluid">
                        <div class="artwork-title">
                            <strong>Pablo Picasso</strong><br>
                            Tête de femme..., 1961<br>
                            8,000 USD<br>
                            <span class="text-muted">4 days remaining</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="artwork stagger-down p-3 text-center">
                    <a href="{{route('detailspage')}}">
                        <img src="https://images.artnet.com/aoa_lot_images/142538/steve-mccurry-boat-covered-in-snow-in-sankei-en-gardens-photographs-zoom_223_149.jpg"
                            alt="Artwork 7" class="img-fluid">
                        <div class="artwork-title">
                            <strong>Pablo Picasso</strong><br>
                            L'homme au mouton..., 1952<br>
                            7,000–10,000 USD<br>
                            <span class="text-muted">6 days remaining</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="artwork stagger-up p-3 text-center">
                    <a href="{{route('detailspage')}}">
                        <img src="https://images.artnet.com/aoa_lot_images/142604/john-chiara-hunterbrook-at-baptist-photographs-zoom_223_236.jpg"
                            alt="Artwork 8" class="img-fluid">
                        <div class="artwork-title">
                            <strong>Pablo Picasso</strong><br>
                            Femme debout..., 1949<br>
                            9,000–12,000 USD<br>
                            <span class="text-muted">7 days remaining</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
