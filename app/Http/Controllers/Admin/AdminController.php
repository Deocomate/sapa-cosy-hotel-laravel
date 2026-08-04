<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.modules.password.index');
    }

    public function updatePassword(Request $request)
    {
        // Validate the request inputs
        $request->validate([
            'password_old' => 'required',
            'password_new' => 'required|min:8',
        ], [
            'password_old.required' => 'Vui lòng nhập mật khẩu cũ.',
            'password_new.required' => 'Vui lòng nhập mật khẩu mới.',
            'password_new.min' => 'Mật khẩu mới phải có ít nhất 8 ký tự.',
        ]);

        // Fetch the single user record (assuming there is only one user in the users table)
        $user = User::first();

        if (!$user) {
            return back()->withErrors(['error' => 'Không tìm thấy người dùng.']);
        }

        // Check if the old password matches the current password
        if (!Hash::check($request->input('password_old'), $user->password)) {
            return back()->withErrors(['password_old' => 'Mật khẩu cũ không đúng.']);
        }

        // Update the user's password
        $user->password = Hash::make($request->input('password_new'));
        $user->save();

        // Redirect back to the password reset page with a success message
        return redirect()->route('passwordReset')->with('success', 'Mật khẩu đã được cập nhật thành công.');
    }
}
