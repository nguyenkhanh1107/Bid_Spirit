@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Manage Galleries</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('admin.galleries.create') }}" class="btn btn-success mb-3">Add New Gallery</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Category</th>
                <th>Description</th>
                <th>Starting Price</th>
                <th>Image Path</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galleries as $gallery)
                <tr>
                    <td>{{ $gallery->id }}</td>
                    <td>{{ $gallery->title }}</td>
                    <td>{{ $gallery->category->name }}</td>
                    <td>{{ $gallery->description }}</td>
                    <td>${{ number_format($gallery->starting_price, 2) }}</td>
                    <td>{{ $gallery->image_path }}</td>
                    <td>
                        <a href="{{ route('admin.galleries.edit', $gallery->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.galleries.destroy', $gallery->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
