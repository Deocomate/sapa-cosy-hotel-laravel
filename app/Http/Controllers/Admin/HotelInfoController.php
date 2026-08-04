<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelInfoController extends Controller
{
    public function index()
    {
        $hotelInfo = DB::table('hotel_info')->first();

        if (!$hotelInfo) {
            DB::table('hotel_info')->insert([
                'name' => '',
                'title' => '',
                'description' => '',
                'video_link' => '',
                'food_menu' => '',
                'address' => '',
                'contact_email' => '',
                'contact_phone' => '',
                'contact_hotline' => '',
                'facebook_link' => '',
                'zalo_link' => '',
                'map_link' => '',
            ]);
            $hotelInfo = DB::table('hotel_info')->first();
        }
        return view("admin.modules.hotel-info.index", compact('hotelInfo'));
    }


    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:1000',
            'title' => 'required|string|max:1000',
            'description' => 'nullable|string',
            'video_link' => 'nullable|string|max:1000',
            'food_menu' => 'nullable|string',
            'address' => 'required|string|max:1000',
            'contact_email' => 'nullable|email|max:1000',
            'contact_phone' => 'nullable|string|max:1000',
            'contact_hotline' => 'nullable|string|max:1000',
            'facebook_link' => 'nullable|string|max:1000',
            'zalo_link' => 'nullable|string|max:1000',
            'map_link' => 'nullable|string|max:1000',
        ]);

        DB::table('hotel_info')->update($validated);

        return to_route('admin.hotel-info.index')->with('success', 'Thông tin đã được cập nhật thành công');
    }
}
