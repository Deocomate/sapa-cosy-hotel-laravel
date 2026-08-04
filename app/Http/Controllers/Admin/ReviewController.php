<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = \DB::table("reviews")->get();
        return view('admin.modules.reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('admin.modules.reviews.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_thumbnail' => 'required|string|max:1000',
            'customer_name' => 'required|string|max:1000',
            'customer_review' => 'required|string|max:1000',
            'customer_address' => 'required|string|max:1000',
            'customer_rating' => 'required|integer|min:1|max:5',
        ]);

        \DB::table('reviews')->insert($validated);
        return to_route('admin.reviews.index')->with('success', 'Đánh giá đã được tạo thành công.');
    }


    public function edit($id)
    {
        $review = \DB::table("reviews")->find($id);
        return view('admin.modules.reviews.edit', compact('review'));
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'customer_thumbnail' => 'required|string|max:1000',
            'customer_name' => 'required|string|max:1000',
            'customer_review' => 'required|string|max:1000',
            'customer_address' => 'required|string|max:1000',
            'customer_rating' => 'required|integer|min:1|max:5',
        ]);

        \DB::table("reviews")->where("id", $id)->update($validated);

        return to_route('admin.reviews.index')->with('success', 'Đánh giá đã được cập nhật thành công.');
    }


    public function destroy($id)
    {
        \DB::table("reviews")->where("id", $id)->delete();
        return to_route('admin.reviews.index')->with('success', 'Đánh giá đã được xóa thành công.');
    }
}
