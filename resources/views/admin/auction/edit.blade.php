<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    @include('admin.header')
    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div class="container">
                    <h1>Edit Auction</h1>

                    <!-- Form chỉnh sửa auction -->
                    <form action="{{ route('auctions.update', $auction->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category_id" id="category" class="form-control" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $auction->category_id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="item">Item</label>
                            <select name="item_id" id="item" class="form-control" required>
                                @foreach($items as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $auction->item_id ? 'selected' : '' }}>
                                        {{ $item->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="start_price">Start Price</label>
                            <input type="number" name="start_price" id="start_price" class="form-control"
                                value="{{ $auction->start_price }}" required>
                        </div>

                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="datetime-local" name="start_date" id="start_date" class="form-control"
                                value="{{ \Carbon\Carbon::parse($auction->start_date)->format('Y-m-d\TH:i') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="end_date">End Date</label>
                            <input type="datetime-local" name="end_date" id="end_date" class="form-control"
                                value="{{ \Carbon\Carbon::parse($auction->end_date)->format('Y-m-d\TH:i') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="upcoming" {{ $auction->status == 'upcoming' ? 'selected' : '' }}>Upcoming</option>
                                <option value="ongoing" {{ $auction->status == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                                <option value="completed" {{ $auction->status == 'completed' ? 'selected' : '' }}>Completed</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="end_price">End Price</label>
                            <input type="number" name="end_price" id="end_price" class="form-control"
                                value="{{ $auction->end_price }}" readonly>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
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
