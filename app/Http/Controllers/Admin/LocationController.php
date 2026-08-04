<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = \DB::table("locations")->get();
        return view("admin.modules.locations.index", compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.locations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:1000',
            'description' => 'nullable|string',
            'thumbnail' => 'required|string|max:1000',
            'price' => 'required|integer',
        ]);

        \DB::table('locations')->insert($validated);
        return to_route('admin.locations.index')->with('success', 'Địa điểm đã được tạo thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Not needed for this example
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $location = \DB::table("locations")->find($id);
        return view('admin.modules.locations.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:1000',
            'description' => 'nullable|string',
            'thumbnail' => 'required|string|max:1000',
            'price' => 'required|integer',
        ]);

        \DB::table("locations")->where("id", $id)->update($validated);
        return to_route('admin.locations.index')->with('success', 'Địa điểm đã được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        \DB::table("locations")->where("id", $id)->delete();
        return to_route('admin.locations.index')->with('success', 'Địa điểm đã được xóa thành công.');
    }
}
