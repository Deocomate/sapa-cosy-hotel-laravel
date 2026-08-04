<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Seed dữ liệu các loại phòng của Sapa Cosy Hotel (chính xác theo thông tin từ Booking.com).
     */
    public function run(): void
    {
        DB::table('rooms')->delete();

        DB::table('rooms')->insert([
            [
                'id'          => 1,
                'title'       => 'Phòng có giường cỡ King nhìn ra cảnh núi non',
                'thumbnail'   => '/userfiles/images/rooms/room-vip.jpg',
                'type'        => '1 Giường Đôi Cực Lớn',
                'description' => 'Phòng cao cấp 30 m² với 1 giường đôi cực lớn (King size), ban công ngắm núi, hồ và thành phố.',
                'price'       => 450000,
                'details'     => '30 m², Ban công, Nhìn ra hồ, Nhìn ra hồ bơi, Nhìn ra núi, Nhìn ra địa danh, Nhìn ra thành phố, Máy điều hòa, Sân trong, Phòng tắm riêng trong phòng, TV màn hình phẳng, Cách âm, Sân hiên, Minibar.',
            ],
            [
                'id'          => 2,
                'title'       => 'Phòng 2 Giường Đôi',
                'thumbnail'   => '/userfiles/images/rooms/room-2bed.jpg',
                'type'        => '2 Giường Đôi Lớn',
                'description' => 'Phòng 30 m² rộng rãi trang bị 2 giường đôi lớn, ban công thoáng mát ngắm núi và thành phố.',
                'price'       => 550000,
                'details'     => '30 m², Ban công, Nhìn ra hồ, Nhìn ra hồ bơi, Nhìn ra núi, Nhìn ra địa danh, Nhìn ra thành phố, Máy điều hòa, Sân trong, Phòng tắm riêng trong phòng, TV màn hình phẳng, Cách âm, Sân hiên, Minibar.',
            ],
            [
                'id'          => 3,
                'title'       => 'Phòng 3 Người Nhìn Ra Núi',
                'thumbnail'   => '/userfiles/images/rooms/room-3bed.jpg',
                'type'        => '3 Giường Đôi',
                'description' => 'Phòng 30 m² trang bị 3 giường đôi rộng rãi, ban công tầm nhìn ngắm núi và thung lũng Sa Pa.',
                'price'       => 650000,
                'details'     => '30 m², Ban công, Nhìn ra hồ, Nhìn ra hồ bơi, Nhìn ra núi, Nhìn ra địa danh, Nhìn ra thành phố, Máy điều hòa, Sân trong, Phòng tắm riêng trong phòng, TV màn hình phẳng, Cách âm, Sân hiên, Minibar.',
            ],
        ]);
    }
}
