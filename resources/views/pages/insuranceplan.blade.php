@extends('layouts.main')

@section('content')
<main>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Insurance Plan</h2>

        <section class="insurance-content">
            <p style="text-align: justify; font-size: 18px;">
                Our **Bid Spirit** is committed to providing a secure and transparent bidding experience for all participants.
                To ensure the safety of transactions and mitigate risks, we offer a comprehensive **Auction Insurance Plan** for every transaction on our platform. Below are the policies and benefits included.
            </p>

            <h4 class="mt-4">Coverage of the Insurance Plan</h4>
            <ul style="font-size: 18px;">
                <li><strong>Bid Protection:</strong> If any fraudulent bids are detected, the transaction will be voided, and participants will be notified.</li>
                <li><strong>Seller Guarantee:</strong> All sellers are verified to prevent counterfeit products or misrepresentations.</li>
                <li><strong>Payment Security:</strong> Secure payment gateways are used to ensure your payments are safe and traceable.</li>
                <li><strong>Delivery Insurance:</strong> We offer optional insurance during shipment to ensure the item reaches the buyer safely and intact.</li>
            </ul>

            <h4 class="mt-4">Terms and Conditions</h4>
            <ul style="font-size: 18px;">
                <li><strong>Reserve Price:</strong> A minimum price set by the seller must be met for the item to be sold.</li>
                <li><strong>Bid Increment:</strong> Each auction has predefined increments to maintain fairness.</li>
                <li><strong>Buyer's Premium:</strong> A buyer’s premium will be applied to every successful bid, calculated based on the final sale price.</li>
                <li><strong>Disputes:</strong> Any disputes will be mediated by our customer support team within 30 days of the auction closing.</li>
            </ul>

            <h4 class="mt-4">Buyer's Premium Structure</h4>
            <p style="font-size: 18px;">
                The buyer's premium is added to the final price of every auction lot. This fee ensures smooth operation and management of the auction platform.
            </p>
            <ul style="font-size: 18px;">
                <li><strong>Below $500,000:</strong> 25% of the final price</li>
                <li><strong>$500,001 to $1,000,000:</strong> 20% of the final price</li>
                <li><strong>Above $1,000,001:</strong> 15% of the final price</li>
            </ul>

            <h4 class="mt-4">How to File a Claim</h4>
            <p style="font-size: 18px;">
                If you experience any issues during or after the auction, you can file a claim through our customer support team. We are committed to resolving all disputes fairly and efficiently.
            </p>
            <ul style="font-size: 18px;">
                <li>Email: support@auctionplatform.com</li>
                <li>Phone: +84 123 456 789</li>
                <li>Address: 123 Main Street, Hanoi, Vietnam</li>
            </ul>
        </section>
    </div>
</main>
@endsection
