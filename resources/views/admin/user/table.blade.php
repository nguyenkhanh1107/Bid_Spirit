<div class="container">
    <h1>User Management</h1>

    <!-- Hiển thị thông báo thành công -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Bảng hiển thị danh sách users -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="5%">ID</th>
                <th style="5%">First Name</th>
                <th style="5%">Last Name</th>
                <th style="10%">Email</th>
                <th style="10%">Date of Birth</th>
                <th style="10%">Country</th>
                <th style="10%">Province/ City</th>
                <th style="5%">District</th>
                <th style="5%">Ward</th>
                <th style="10%">Address</th>
                <th style="10%">Phone Number</th>
                <th style="15%">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->date_of_birth }}</td>
                    <td>{{ $user->country }}</td>
                    <td>{{ $user->province }}</td>
                    <td>{{ $user->district }}</td>
                    <td>{{ $user->ward }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->phone_number }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Nút thêm user -->
    <div style="display: flex; justify-content: flex-end; margin-top: 10px;">
        <button id="addUserBtn" class="btn btn-success">Add User</button>
    </div>

    <!-- Form thêm mới user, sẽ ẩn ban đầu -->
    <div id="addUserForm" style="display:none; margin-top: 20px;">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" name="country" id="country" class="form-control">
            </div>
            <div class="form-group">
                <label for="province">Province</label>
                <input type="text" name="province" id="province" class="form-control">
            </div>
            <div class="form-group">
                <label for="district">District</label>
                <input type="text" name="district" id="district" class="form-control">
            </div>
            <div class="form-group">
                <label for="ward">Ward</label>
                <input type="text" name="ward" id="ward" class="form-control">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- JS để hiển thị form khi bấm nút Add User -->
<script>
    document.getElementById('addUserBtn').addEventListener('click', function() {
        document.getElementById('addUserForm').style.display = 'block';
    });
</script>
