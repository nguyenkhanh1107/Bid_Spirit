<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    // Hiển thị danh sách người dùng
    public function index()
    {
        $users = User::all(); // Lấy tất cả users
        return view('admin.user.index', compact('users'));
    }

    // Thêm mới người dùng
    public function store(Request $request)
    {
        dd($request->all());

        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'date_of_birth' => 'nullable|date',
            'country' => 'nullable|max:255',
            'province' => 'nullable|max:255',
            'district' => 'nullable|max:255',
            'ward' => 'nullable|max:255',
            'address' => 'nullable|max:255',
            'phone_number' => 'nullable|max:20',
        ]);

        // Tạo người dùng mới
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Mã hóa mật khẩu
            'date_of_birth' => $request->date_of_birth,
            'country' => $request->country,
            'province' => $request->province,
            'district' => $request->district,
            'ward' => $request->ward,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
        ]);

        return redirect()->route('users.index')->with('success', 'User added successfully!');
    }

    // Hiển thị form chỉnh sửa người dùng
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    // Cập nhật thông tin người dùng
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'usertype' => 'required|in:user,admin', // Validation cho usertype
            'email' => 'required|email|unique:users,email,' . $id,
            'date_of_birth' => 'nullable|date',
            'country' => 'nullable|max:255',
            'province' => 'nullable|max:255',
            'district' => 'nullable|max:255',
            'ward' => 'nullable|max:255',
            'address' => 'nullable|max:255',
            'phone_number' => 'nullable|max:20',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'usertype' => $request->usertype, // Cập nhật usertype
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'country' => $request->country,
            'province' => $request->province,
            'district' => $request->district,
            'ward' => $request->ward,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
        ]);

        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }

    // Xóa người dùng
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }
}
