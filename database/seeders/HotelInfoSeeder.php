<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelInfoSeeder extends Seeder
{
    /**
     * Seed dữ liệu thông tin cơ bản của Sapa Cosy Hotel.
     */
    public function run(): void
    {
        DB::table('hotel_info')->delete();

        DB::table('hotel_info')->insert([
            [
                'name'            => 'Sapa Cosy Hotel',
                'title'           => 'Sapa Cosy Hotel - Khách sạn 3 sao nghỉ dưỡng cao cấp tại Sa Pa',
                'description'     => 'Sapa Cosy Hotel tọa lạc tại 458 Đường Điện Biên Phủ, trung tâm thị xã Sa Pa, tỉnh Lào Cai. Khách sạn 3 sao cung cấp chỗ nghỉ có khu vườn, chỗ đậu xe riêng miễn phí, phòng chờ chung và sân hiên. Một số phòng có ban công với view thành phố và núi rừng Sa Pa tuyệt đẹp. Cách Trạm cáp treo Fansipan 5.4 km, Hồ Sa Pa 350 m và Ham Rong Garden 1.2 km.',
                'video_link'      => 'https://youtube.com/example_video',
                'food_menu'       => 'Thực đơn nhà hàng phục vụ ẩm thực Mỹ, Ý, Nhật, Mexico, Tứ Xuyên, Thái, Châu Á. Phục vụ bữa sáng, bữa trưa, bữa xế và bữa tối. Có thực đơn chay và Halal theo yêu cầu. Đặc sản Sa Pa: Lẩu cá tầm, cá hồi tươi sống, lợn cắp nách, thắng cố, rau mầm đá.',
                'address'         => '458 Đường Điện Biên Phủ, Sa Pa, Lào Cai, Việt Nam',
                'contact_email'   => 'contact@sapacosyhotel.com',
                'contact_phone'   => '0987654321',
                'contact_hotline' => '0123456789',
                'facebook_link'   => 'https://facebook.com/sapacosyhotel',
                'zalo_link'       => 'https://zalo.me/0987654321',
                'map_link'        => 'https://maps.app.goo.gl/4DUXf8PATqR8HNwj6',
            ],
        ]);
    }
}
