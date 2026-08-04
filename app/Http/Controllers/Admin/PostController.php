<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = \DB::table("posts")->get();
        return view('admin.modules.posts.index', compact('posts'));
    }


    public function create()
    {
        return view('admin.modules.posts.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:1000',
            'description' => 'nullable|string',
            'thumbnail' => 'required|string|max:1000',
            'url' => 'required|string|max:100',
            'author' => 'required|string|max:1000',
        ]);

        \DB::table('posts')->insert($validated);

        return to_route('admin.posts.index')->with('success', 'Bài viết đã được tạo thành công.');
    }


    public function edit($id)
    {
        $post = \DB::table("posts")->find($id);
        return view('admin.modules.posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:1000',
            'description' => 'nullable|string',
            'thumbnail' => 'required|string|max:1000',
            'url' => 'required|string|max:100',
            'author' => 'required|string|max:1000',
        ]);

        \DB::table("posts")->where("id", $id)->update($validated);
        return to_route('admin.posts.index')->with('success', 'Bài viết đã được cập nhật thành công.');
    }


    public function destroy($id)
    {
        \DB::table("posts")->where("id", $id)->delete();
        return to_route('admin.posts.index')->with('success', 'Bài viết đã được xóa thành công.');
    }
}
