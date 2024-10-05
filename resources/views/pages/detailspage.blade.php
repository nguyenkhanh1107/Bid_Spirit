@extends('layouts.main')

@section('content')
    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <!-- Navigation -->
            <div class="col-md-8">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="nav-buttons">
                        <a href="#" class="text-muted">&larr; PREVIOUS<br>{{ $item->title }}</a>
                    </div>
                    <div class="text-center">
                        <h6 class="fw-bold mb-0">{{ $item->title }}</h6>
                        <p class="text-muted mb-0">Auction live through {{ \Carbon\Carbon::parse($item->auction->end_date)->format('F j, Y') }}</p>
                    </div>
                    <div class="nav-buttons text-end">
                        <a href="#" class="text-muted">NEXT &rarr;</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Art Image -->
            <div class="col-md-5">
                <img src="{{ asset($item->image_path) }}" class="art-image" alt="{{ $item->title }}">
                <div class="text-center mt-3">
                    <a href="#" class="btn btn-outline-dark text-decoration-none" data-bs-toggle="modal" data-bs-target="#imageModal">
                        <i class="bi bi-image"></i> VIEW IMAGES (5)
                    </a>
                </div>
            </div>

            <!-- Art Details -->
            <div class="col-md-5 art-details">
                <h5><a href="#" class="text-dark">{{ $item->title }}</a></h5>
                <p class="text-muted">{{ $item->category->name }}</p>
                <hr class="hr-1px">
                <h6><em>{{ $item->description }}</em></h6>
                <p>
                    Starting Price: {{ number_format($item->starting_price, 2) }} USD<br>
                    Current Bid: {{ $item->auction ? number_format($item->auction->end_price, 2) : 'N/A' }} USD<br>
                    Auction Status: {{ $item->auction->status }}
                </p>
                <p>Ending: <span>{{ \Carbon\Carbon::parse($item->auction->end_date)->diffForHumans() }}</span></p>
                <hr class="hr-1px">
                <p>Estimate: <span>{{ number_format($item->auction->start_price, 2) }}—{{ number_format($item->auction->end_price, 2) }} USD</span></p>
                <hr class="hr-1px">
                <p>Current Bid: <span>{{ number_format($item->auction->end_price, 2) }} USD ({{ $item->auction->bid_count }} bids, reserve not met)</span></p>

                <!-- Bid Section -->
                <div class="bid-section">
                    <label for="bidAmount" class="form-label">Choose your maximum bid*</label>

                    <!-- Trigger the modal -->
                    <a href="#" data-bs-toggle="modal" data-bs-target="#biddingGuideModal">
                        <label for="bidAmount" class="form-label from-magin-left">How bidding works</label>
                    </a>

                    <select id="bidAmount" class="form-select">
                        <option selected>Select amount</option>
                        <option value="6000">6,000 USD</option>
                        <option value="7000">7,000 USD</option>
                        <option value="8000">8,000 USD</option>
                    </select>
                    <p class="mt-2 text-muted" style="font-size: 12px;">
                        * This amount excludes shipping fees, applicable taxes and will have a Buyer's Premium based on
                        the hammer price of the lot. <a href="#">Buyer's Premium</a>.
                    </p>
                </div>

                <!-- Action Buttons -->
                <div class="action-buttons">
                    <button class="btn btn-dark w-100 mb-2">PLACE BID</button>
                </div>

                <hr class="hr-1px">

                <!-- Contact Section -->
                <div class="d-flex align-items-center contact-section">
                    <img src="https://via.placeholder.com/50" alt="Susanna Wenniger" class="rounded-circle">
                    <div>
                        <p class="mb-0"><strong>Susanna Wenniger</strong></p>
                        <p class="text-muted mb-0">Head Of Photographs</p>
                        <a href="#" class="text-dark">MESSAGE SUSANNA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
