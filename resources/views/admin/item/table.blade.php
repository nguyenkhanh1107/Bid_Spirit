<div class="container">
    <h1>Item Management</h1>

    <!-- Hiển thị thông báo thành công -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Bảng hiển thị danh sách items -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="width: 5%;">ID</th>
                <th style="width: 10%;">Title</th>
                <th style="width: 35%;">Description</th>
                <th style="width: 10%;">Starting Price</th>
                <th style="width: 10%;">Category</th>
                <th style="width: 15%;">Image Path</th>
                <th style="width: 15%;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->starting_price }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->image_path }}</td>
                    <td>
                        <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('items.destroy', $item->id) }}" method="POST"
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

    <!-- Nút thêm item -->
    <div style="display: flex; justify-content: flex-end; margin-top: 10px;">
        <button id="addItemBtn" class="btn btn-success">Add Item</button>
    </div>

    <!-- Form thêm mới item, sẽ ẩn ban đầu -->
    <div id="addItemForm" style="display:none; margin-top: 20px;">
        <form action="{{ route('items.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="starting_price">Starting Price</label>
                <input type="number" name="starting_price" id="starting_price" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                            <label for="image_path">Image Path</label>
                            <input type="text" name="image_path" id="image_path" class="form-control" 
                            placeholder="images/(your image's name)" required>
                        </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>

<!-- JS để hiển thị form khi bấm nút Add Item -->
<script>
    document.getElementById('addItemBtn').addEventListener('click', function() {
        document.getElementById('addItemForm').style.display = 'block';
    });
</script>
