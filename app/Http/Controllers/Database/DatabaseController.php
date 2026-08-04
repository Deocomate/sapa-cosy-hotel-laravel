<?php

namespace App\Http\Controllers\Database;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseController extends Controller
{
    /**
     * Hiển thị trình soạn thảo SQL.
     *
     * @return \Illuminate\View\View
     */
    public function editor()
    {
        return view("database.editor");
    }

    /**
     * Thực thi câu lệnh SQL được gửi từ trình soạn thảo.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function executeSQL(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'sql' => 'required|string',
        ]);

        $sql = $request->input("sql");

        try {
            // Thực thi câu lệnh SQL
            DB::statement($sql);

            // Chuyển hướng quay lại trình soạn thảo với thông báo thành công
            return redirect()->route('database.editor')->with('success', 'Câu lệnh SQL đã được thực thi thành công.');
        } catch (\Exception $e) {
            // Chuyển hướng quay lại trình soạn thảo với thông báo lỗi
            return redirect()->route('database.editor')->with('error', 'Lỗi khi thực thi SQL: ' . $e->getMessage());
        }
    }
}
