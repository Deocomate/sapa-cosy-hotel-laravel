<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = \DB::table("services")->get();
        return view('admin.modules.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.modules.services.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:1000',
            'thumbnail' => 'required|string|max:1000',
            'type' => 'required|string|max:1000',
            'description' => 'nullable|string',
            'price' => 'required|integer|min:0',
            'details' => 'nullable|string',
        ]);

        \DB::table('services')->insert($validated);

        return to_route('admin.services.index')->with('success', 'Dịch vụ đã được tạo thành công.');
    }

    public function edit($id)
    {
        $service = \DB::table("services")->find($id);

        return view('admin.modules.services.edit', compact('service'));
    }

    public function update($id, Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:1000',
            'thumbnail' => 'required|string|max:1000',
            'type' => 'required|string|max:1000',
            'description' => 'nullable|string',
            'price' => 'required|integer|min:0',
            'details' => 'nullable|string',
        ]);

        \DB::table("services")->where("id", $id)->update($validated);

        return to_route('admin.services.index')->with('success', 'Dịch vụ đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        \DB::table("services")->where("id", $id)->delete();

        return to_route('admin.services.index')->with('success', 'Dịch vụ đã được xóa thành công.');
    }
}
