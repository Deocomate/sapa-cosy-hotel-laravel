<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = \DB::table("blogs")->get();
        return view('admin.modules.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.modules.blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:1000',
            'description' => 'nullable|string',
            'thumbnail' => 'required|string|max:1000',
            'detail' => 'required|string',
            'author' => 'required|string|max:1000',
        ]);

        \DB::table('blogs')->insert($validated);
        return to_route('admin.blogs.index')->with('success', 'Blog đã được tạo thành công.');
    }


    public function edit($id)
    {
        $blog = \DB::table("blogs")->find($id);
        return view('admin.modules.blogs.edit', compact('blog'));
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:1000',
            'description' => 'nullable|string',
            'thumbnail' => 'required|string|max:1000',
            'detail' => 'required|string',
            'author' => 'required|string|max:1000',
        ]);
        \DB::table("blogs")->where("id", $id)->update($validated);
        return to_route('admin.blogs.index')->with('success', 'Blog đã được cập nhật thành công.');
    }

    public function destroy($id)
    {
        \DB::table("blogs")->where("id", $id)->delete();
        return to_route('admin.blogs.index')->with('success', 'Blog đã được xóa thành công.');
    }
}
