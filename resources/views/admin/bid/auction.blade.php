<div class="container">
    <h1>Bid History</h1>

    <!-- Hiển thị thông báo thành công nếu có -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Bảng hiển thị danh sách auctions -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Item</th>
                <th>Status</th>
                <th>Start Price</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($auctions as $auction)
                <tr>
                    <td>{{ $auction->id }}</td>
                    <td>{{ $auction->item->title }}</td>
                    <td>{{ ucfirst($auction->status) }}</td>
                    <td>{{ number_format($auction->start_price, 2) }} USD</td>
                    <td>{{ $auction->start_date }}</td>
                    <td>{{ $auction->end_date }}</td>
                    <td>
                        <a href="{{ route('auctions.bidDetails', $auction->id) }}" class="btn btn-info">Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>