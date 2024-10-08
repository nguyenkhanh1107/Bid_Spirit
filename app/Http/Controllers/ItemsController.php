<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class ItemsController extends Controller
{
    // Hiển thị danh sách items
    public function index()
    {
        $items = Item::with('category')->get(); // Lấy tất cả items và category liên quan
        $categories = Category::all(); // Lấy tất cả categories
        return view('admin.item.index', compact('items', 'categories'));
    }

    // Thêm mới item
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'starting_price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id'
        ]);

        Item::create($request->all());

        return redirect()->route('items.index')->with('success', 'Item added successfully!');
    }

    // Hiển thị form chỉnh sửa item
    public function edit($id)
    {
        $item = Item::findOrFail($id);
        $categories = Category::all(); // Lấy tất cả categories để lựa chọn
        return view('admin.item.edit', compact('item', 'categories'));
    }

    // Cập nhật item
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'starting_price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id'
        ]);

        $item = Item::findOrFail($id);
        $item->update($request->all());

        return redirect()->route('items.index')->with('success', 'Item updated successfully!');
    }

    // Xóa item
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->route('items.index')->with('success', 'Item deleted successfully!');
    }
}
