<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function trang_chu()
    {
        $services  = \DB::table("services")->limit(12)->get();
        $rooms     = \DB::table("rooms")->get();
        $reviews   = \DB::table("reviews")->get();
        $locations = \DB::table("locations")->get();
        return view("client.modules.trang_chu.index", compact(["services", "rooms", "reviews", "locations"]));
    }

    public function bai_viet()
    {
        $blogs = \DB::table("blogs")->get();
        Debugbar::info($blogs);
        return view("client.modules.bai_viet.index", compact(["blogs"]));
    }

    public function bai_viet_chi_tiet($id)
    {
        $blog = \DB::table("blogs")->find($id);
        if (!$blog) {
            abort(404, 'Bài viết không tồn tại.');
        }
        Debugbar::info($blog);
        return view("client.modules.bai_viet.detail", compact(["blog"]));
    }

    public function dich_vu()
    {
        $services = \DB::table("services")->get();
        Debugbar::info($services);
        return view("client.modules.dich_vu.index", compact(["services"]));
    }

    public function dich_vu_chi_tiet($id)
    {
        $service = \DB::table("services")->find($id);
        if (!$service) {
            abort(404, 'Dịch vụ không tồn tại.');
        }
        Debugbar::info($service);
        return view("client.modules.dich_vu.detail", compact(["service"]));
    }

    public function bai_bao()
    {
        $posts = \DB::table("posts")->get();
        Debugbar::info($posts);
        return view("client.modules.bai_bao.index", compact(["posts"]));
    }

    public function phong_nghi()
    {
        $rooms = \DB::table("rooms")->get();
        Debugbar::info($rooms);
        return view("client.modules.phong.index", compact(["rooms"]));
    }

    public function chi_tiet_phong($id)
    {
        $room = \DB::table("rooms")->find($id);
        if (!$room) {
            abort(404, 'Phòng không tồn tại.');
        }
        return view("client.modules.phong.detail", compact(["room"]));
    }
}
