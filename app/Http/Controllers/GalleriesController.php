<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item; // Sử dụng model Item
use App\Models\Category; // Sử dụng model Category

class GalleriesController extends Controller
{
    public function index()
    {
        // Lấy danh sách các gallery (items) cùng với category
        $galleries = Item::with('category')->get();

        // Truyền dữ liệu sang view 'pages.galleriespage'
        return view('pages.galleriespage', compact('galleries'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('admin.galleries.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'starting_price' => 'required|numeric',
            'image_path' => 'required|string',
        ]);

        Item::create($request->all());

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery created successfully.');
    }

    public function edit(Item $gallery)
    {
        $categories = Category::all();
        return view('admin.galleries.edit', compact('gallery', 'categories'));
    }

    public function update(Request $request, Item $gallery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'starting_price' => 'required|numeric',
            'image_path' => 'required|string',
        ]);

        $gallery->update($request->all());

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery updated successfully.');
    }

    public function destroy(Item $gallery)
    {
        $gallery->delete();
        return redirect()->route('admin.galleries.index')->with('success', 'Gallery deleted successfully.');
    }
}


