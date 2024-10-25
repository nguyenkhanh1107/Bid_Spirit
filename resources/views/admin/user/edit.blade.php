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
            <div class="container-fluid">
                <div class="container">
                    <h1>Edit User</h1>

                    <!-- Form chỉnh sửa user -->
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control"
                                value="{{ $user->first_name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control"
                                value="{{ $user->last_name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="usertype">User Type</label>
                            <select name="usertype" id="usertype" class="form-control" required>
                                <option value="user" {{ $user->usertype == 'user' ? 'selected' : '' }}>User</option>
                                <option value="admin" {{ $user->usertype == 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                value="{{ $user->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="date_of_birth">Date of Birth</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control"
                                value="{{ $user->date_of_birth }}">
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" name="country" id="country" class="form-control"
                                value="{{ $user->country }}">
                        </div>
                        <div class="form-group">
                            <label for="province">Province</label>
                            <input type="text" name="province" id="province" class="form-control"
                                value="{{ $user->province }}">
                        </div>
                        <div class="form-group">
                            <label for="district">District</label>
                            <input type="text" name="district" id="district" class="form-control"
                                value="{{ $user->district }}">
                        </div>
                        <div class="form-group">
                            <label for="ward">Ward</label>
                            <input type="text" name="ward" id="ward" class="form-control"
                                value="{{ $user->ward }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control"
                                value="{{ $user->address }}">
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" class="form-control"
                                value="{{ $user->phone_number }}">
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
