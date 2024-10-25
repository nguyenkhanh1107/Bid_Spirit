<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.header')
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container">
                <h1>Bid Details for Auction ID: {{ $auction->id }} - Item: {{ $auction->item->title }}</h1>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Bid ID</th>
                            <th>User ID</th>
                            <th>User Name</th>
                            <th>Bid Amount</th>
                            <th>Bid Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bids as $bid)
                            <tr>
                                <td>{{ $bid->id }}</td>
                                <td>{{ $bid->user->id }}</td>
                                <td>{{ $bid->user->name }}</td>
                                <td>{{ number_format($bid->bid_amount, 2) }} USD</td>
                                <td>{{ $bid->created_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <a href="{{ route('auctions.bidHistory') }}" class="btn btn-secondary">Back to Bid History</a>
            </div>
        </div>
    </div>

    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
</body>

</html>
