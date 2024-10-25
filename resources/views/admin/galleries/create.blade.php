@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Create New Gallery</h1>

    <form action="{{ route('admin.galleries.store') }}" method="POST">
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
            <input type="text" name="image_path" id="image_path" class="form-control" placeholder="images/(your image's name)" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
