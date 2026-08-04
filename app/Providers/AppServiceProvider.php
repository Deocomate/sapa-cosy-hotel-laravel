<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        $hotelInfo = null;

        if (Schema::hasTable("hotel_info")) {
            $hotelInfo = \DB::table("hotel_info")->first();
        } elseif (Schema::hasTable("homestay_info")) {
            $hotelInfo = \DB::table("homestay_info")->first();
        }

        if (!$hotelInfo) {
            $hotelInfo = (object) [
                'id' => 1,
                'name' => 'Sapa Cosy Hotel',
                'title' => 'Sapa Cosy Hotel - Khách sạn nghỉ dưỡng cao cấp tại Sa Pa',
                'description' => 'Sapa Cosy Hotel tọa lạc tại trung tâm thị xã Sa Pa, tỉnh Lào Cai.',
                'video_link' => '',
                'food_menu' => '',
                'address' => 'Thị xã Sa Pa, Tỉnh Lào Cai, Việt Nam',
                'contact_email' => 'contact@sapacosyhotel.com',
                'contact_phone' => '0987654321',
                'contact_hotline' => '0123456789',
                'facebook_link' => 'https://facebook.com/sapacosyhotel',
                'zalo_link' => 'https://zalo.me/0987654321',
                'map_link' => ''
            ];
        }

        \View::share("hotelInfo", $hotelInfo);
        \View::share("homestayInfo", $hotelInfo);
    }
}
