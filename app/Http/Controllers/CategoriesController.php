<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('pages.categoriespage');
    }


    public function store(Request $request)
    {
        // Validate dữ liệu nhập vào
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        // Lưu category mới vào database
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        // Chuyển hướng lại với thông báo thành công
        return redirect()->back()->with('success', 'Category added successfully!');
    }

    // Hiển thị danh sách categories
    public function show()
    {
        $categories = Category::all(); // Lấy tất cả categories từ database
        return view('admin.category.index', compact('categories')); // Truyền dữ liệu categories đến view
    }

    // Xóa một category
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.categories')->with('success', 'Category deleted successfully');
    }

    // Hiển thị form chỉnh sửa category
    public function edit($id)
    {
        $category = Category::findOrFail($id); // Lấy category theo id
        return view('admin.category.edit', compact('category')); // Trả về view với dữ liệu category
    }

    // Cập nhật dữ liệu category
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.categories')->with('success', 'Category updated successfully!');
    }
}
