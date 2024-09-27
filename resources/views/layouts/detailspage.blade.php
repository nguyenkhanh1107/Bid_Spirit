@extends('frondend.frontend')

@section('content')
      <!-- Main Content -->
      <div class="container mt-5">
        <div class="row justify-content-center">
            <!-- Navigation -->
            <div class="col-md-8">
                <div class="d-flex justify-content-between mb-3">
                    <div class="nav-buttons">
                        <a href="#" class="text-muted">&larr; PREVIOUS<br>David Yarrow</a>
                    </div>
                    <div class="text-center">
                        <h6 class="fw-bold">Big Shots</h6>
                        <p class="text-muted">Live now through September 26, 2024</p>
                    </div>
                    <div class="nav-buttons text-end">
                        <a href="#" class="text-muted">NEXT &rarr;<br>Vanessa Beecroft</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <!-- Art Image -->
            <div class="col-md-5">
                <img src="https://images.artnet.com/aoa_lot_images/142469/flip-schulke-ali-underwater-photographs-zoom_550_800.jpg"
                    class="art-image" alt="Art Image">
                    <div class="text-center mt-3">
                        <a href="#" class="btn btn-outline-dark text-decoration-none" data-bs-toggle="modal" data-bs-target="#imageModal">
                            <i class="bi bi-image"></i> VIEW IMAGES (5)
                        </a>
                    </div>
            </div>

            <!-- Art Details -->
            <div class="col-md-5 art-details">
                <h5><a href="#" class="text-dark">Alex Prager</a></h5>
                <p class="text-muted">American, b. 1979</p>
                <div class="divider"></div>
                <h6><em>Nancy, 2008</em></h6>
                <p>Chromogenic print (c-print)<br>
                    24.1 x 25.5 in. (61.21 x 64.77 cm)<br>
                    Frame: 24.9 x 25.4 x 2 in. (63.25 x 64.52 x 5.08 cm)<br>
                    Signed, titled, numbered and dated "Alex Prager 'Nancy'<br> 2008 1AP" on verso
                    AP from an edition of 7 + 2APs
                </p>
                <p>Ending: <span>1 day, 12 hours, 47 mins</span></p>
                <div class="divider"></div>
                <p>Estimate: <span>6,000—8,000 USD</span></p>
                <div class="divider"></div>
                <p>Current Bid: <span>4,800 USD (1 bid, reserve not met)</span></p>

                <!-- Bid Section -->
                <div class="bid-section">
                    <label for="bidAmount" class="form-label">Choose your maximum bid*</label>
                    
                  <!-- Trigger the modal bằng cách nhấp vào thẻ a -->
                <a href="#" data-bs-toggle="modal" data-bs-target="#biddingGuideModal">
                     <label for="bidAmount" class="form-label">How bidding works</label>
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
                    <button class="btn btn-outline-dark w-100">ADD TO WATCH LIST</button>
                </div>

                <!-- Divider -->
                <div class="divider"></div>

                <!-- Contact Section -->
                <div class="d-flex align-items-center contact-section">
                    <img src="https://via.placeholder.com/50" alt="Susanna Wenniger" class="rounded-circle">
                    <div>
                        <p class="mb-0"><strong>Susanna Wenniger</strong></p>
                        <p class="text-muted mb-0">Head Of Photographs</p>
                        <a href="#" class="text-dark">MESSAGE SUSANNA</a>
                    </div>
                </div>

                <!-- Social Icons -->
                <div class="social-icons mt-3">
                    <a href="#"><i class="bi bi-facebook ti-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter ti-twitter-alt"></i></a>
                    <a href="#"><i class="bi bi-pinterest ti-pinterest"></i></a>
                    <a href="#"><i class="bi bi-envelope ti-instagram"></i></a>
                </div>

                <!-- Divider -->
                <div class="divider"></div>

                <!-- Sell Similar Work -->

            </div>

        </div>
    </div>


    <!-- Modal View images -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center align-items-center">
                    <div id="imageCarousel" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images.artnet.com/aoa_lot_images/142603/alex-prager-nancy-photographs-zoom-2_375_500.jpg?d44901fc1def44158129c58540819222"
                                    class="d-block w-100" alt="Image 1">
                                <div class="image-description text-center mt-2">
                                    <h6><em>Nancy, 2008</em></h6>
                                    <p>Chromogenic print (c-print)<br>
                                        24.1 x 25.5 in. (61.21 x 64.77 cm)<br>
                                        Frame: 24.9 x 25.4 x 2 in. (63.25 x 64.52 x 5.08 cm)<br>
                                        Signed, titled, numbered and dated "Alex Prager 'Nancy' 2008 1AP" on verso<br>
                                        AP from an edition of 7 + 2APs
                                    </p>
                                    <p>This is a detailed description of the first image. It can include information
                                        about the artwork, artist, and other relevant details.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.artnet.com/aoa_lot_images/142603/alex-prager-nancy-photographs-zoom-3_375_500.jpg?90e15cbb5de1464fa2a3401d9fcb9b9b"
                                    class="d-block w-100" alt="Image 2">
                                <div class="image-description text-center mt-2">
                                    <h6><em>Nancy, 2008</em></h6>
                                    <p>Chromogenic print (c-print)<br>
                                        24.1 x 25.5 in. (61.21 x 64.77 cm)<br>
                                        Frame: 24.9 x 25.4 x 2 in. (63.25 x 64.52 x 5.08 cm)<br>
                                        Signed, titled, numbered and dated "Alex Prager 'Nancy' 2008 1AP" on verso<br>
                                        AP from an edition of 7 + 2APs
                                    </p>
                                    <p>This is a detailed description of the second image. It can include information
                                        about the artwork, artist, and other relevant details.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.artnet.com/aoa_lot_images/142603/alex-prager-nancy-photographs-zoom-4_375_500.jpg?f21cd488e8484aa799b0edfc70ccd9e5"
                                    class="d-block w-100" alt="Image 3">
                                <div class="image-description text-center mt-2">
                                    <h6><em>Nancy, 2008</em></h6>
                                    <p>Chromogenic print (c-print)<br>
                                        24.1 x 25.5 in. (61.21 x 64.77 cm)<br>
                                        Frame: 24.9 x 25.4 x 2 in. (63.25 x 64.52 x 5.08 cm)<br>
                                        Signed, titled, numbered and dated "Alex Prager 'Nancy' 2008 1AP" on verso<br>
                                        AP from an edition of 7 + 2APs
                                    </p>
                                    <p>This is a detailed description of the third image. It can include information
                                        about the artwork, artist, and other relevant details.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal mô tả đấu giá-->
<div class="modal fade" id="biddingGuideModal" tabindex="-1" aria-labelledby="biddingGuideModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="biddingGuideModalLabel">How Bidding Works</h5>
      </div>
      <div class="modal-body">
        <!-- Nội dung của modal -->
        <h3 id="biddingGuideHeader">How Bidding Works</h3>
        <p>The bid you select from the dropdown will be your <strong>maximum bid amount</strong>.</p>
        <p>All lots offered have a reserve price that must be met in order for the work to sell.<strong>*</strong> If the amount you select is greater than or equal to the reserve, your bid will automatically meet the reserve. We will continue to bid on your behalf up to your maximum bid only if there are competing bidders on the lot.</p>
        <p>We will <strong>never exceed</strong> your maximum bid amount, and you may raise it at any time.</p>
        <p>If a bid is placed within the last five minutes of the auction, the end time will extend by an additional five minutes allowing for final bids.</p>
        <h4>Bid Increments</h4>
        <table class="bidding-guide-table">
          <tbody>
            <tr>
              <td>Below 2,000 USD</td>
              <td>100 USD</td>
            </tr>
            <tr>
              <td>2,000–4,999 USD</td>
              <td>200 USD</td>
            </tr>
            <tr>
              <td>5,000–9,999 USD</td>
              <td>500 USD</td>
            </tr>
            <tr>
              <td>10,000–19,999 USD</td>
              <td>1,000 USD</td>
            </tr>
            <tr>
              <td>20,000–49,999 USD</td>
              <td>2,000 USD</td>
            </tr>
            <tr>
              <td>50,000–99,999 USD</td>
              <td>5,000 USD</td>
            </tr>
            <tr>
              <td>100,000–199,999 USD</td>
              <td>10,000 USD</td>
            </tr>
            <tr>
              <td>200,000–499,999 USD</td>
              <td>20,000 USD</td>
            </tr>
            <tr>
              <td>500,000–999,999 USD</td>
              <td>50,000 USD</td>
            </tr>
            <tr>
              <td>1,000,000 and above</td>
              <td>100,000 USD</td>
            </tr>

          </tbody>
        </table>
        <p><em>*A reserve price is the minimum value the seller will accept for the work. In order for the lot to sell, the reserve price must be met. You will see a notification whether or not the current bid has met the reserve.</em></p>
      </div>
    </div>
  </div>
  <!-- Icon đóng nằm ngoài modal -->
  <button type="button" class="btn-close outside-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>

@endsection
