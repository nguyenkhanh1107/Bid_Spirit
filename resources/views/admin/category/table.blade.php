<div class="container">
    <h1>Category Management</h1>

    <!-- Hiển thị thông báo thành công nếu có -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Bảng hiển thị danh sách categories -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 5%;">ID</th>
                <th style="width: 15%;">Name</th>
                <th style="width: 65%;">Description</th>
                <th style="width: 15%;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                        {{ $category->name }}
                    </td>
                    <td style="max-width: 600px; white-space: normal; text-overflow: ellipsis;">
                        {{ $category->description }}
                    </td>
                    <td style="text-align: center;">
                        <!-- Nút sửa -->
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <!-- Nút xóa -->
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST"
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

    <!-- Nút thêm category -->
    <div style="display: flex; justify-content: flex-end; margin-top: 10px;">
        <button id="addCategoryBtn" class="btn btn-success">Add Category</button>
    </div>


    <!-- Form thêm mới category, sẽ ẩn ban đầu -->
    <div id="addCategoryForm" style="display:none; margin-top: 20px;">
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- JS để hiển thị form khi bấm nút Add Category -->
<script>
    document.getElementById('addCategoryBtn').addEventListener('click', function() {
        document.getElementById('addCategoryForm').style.display = 'block';
    });
</script>
