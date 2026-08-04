<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class RoomController extends Controller
{
    public function index()
    {
        $rooms = \DB::table("rooms")->get();
        return view('admin.modules.rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('admin.modules.rooms.create');
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

        \DB::table('rooms')->insert($validated);

        return to_route('admin.rooms.index')->with('success', 'Phòng đã được tạo thành công.');
    }


    public function edit($id)
    {
        $room = \DB::table("rooms")->find($id);
        return view('admin.modules.rooms.edit', compact('room'));
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:1000',
            'thumbnail' => 'required|string|max:1000',
            'type' => 'required|string|max:1000',
            'description' => 'nullable|string',
            'price' => 'required|integer|min:0',
            'details' => 'nullable|string',
        ]);
        \DB::table("rooms")->where("id", $id)->update($validated);

        return to_route('admin.rooms.index')->with('success', 'Phòng đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        \DB::table("rooms")->where("id", $id)->delete();
        return to_route('admin.rooms.index')->with('success', 'Phòng đã được xóa thành công.');
    }
}
