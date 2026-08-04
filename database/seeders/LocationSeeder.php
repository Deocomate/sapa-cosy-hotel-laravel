<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Seed dữ liệu các địa điểm du lịch nổi bật quanh Sa Pa (theo thực tế Booking.com).
     */
    public function run(): void
    {
        DB::table('locations')->delete();

        DB::table('locations')->insert([
            [
                'title'       => 'Hồ Sa Pa',
                'description' => 'Hồ Sa Pa nằm ngay trung tâm thị xã, cách khách sạn chỉ 350 m. Điểm dạo bộ lý tưởng với khung cảnh lãng mạn và view núi tuyệt đẹp.',
                'thumbnail'   => '/userfiles/images/locations/loc-1.jpg',
                'price'       => 0,
            ],
            [
                'title'       => 'Ham Rong Garden - Núi Hàm Rồng',
                'description' => 'Vườn hoa và núi Hàm Rồng cách khách sạn 1.2 km. Điểm tham quan nổi tiếng với vườn hoa đá, tầm nhìn bao quát thị trấn Sa Pa và dãy Hoàng Liên Sơn.',
                'thumbnail'   => '/userfiles/images/locations/loc-2.jpg',
                'price'       => 70000,
            ],
            [
                'title'       => 'Đỉnh Fansipan - Cáp Treo',
                'description' => 'Nóc nhà Đông Dương cao 3.143m, cách khách sạn 5.4 km. Chinh phục đỉnh núi bằng cáp treo hiện đại hoặc trekking dã ngoại đầy thử thách.',
                'thumbnail'   => '/userfiles/images/locations/loc-3.jpg',
                'price'       => 800000,
            ],
            [
                'title'       => 'Bến Xe Sa Pa',
                'description' => 'Bến xe Sa Pa cách khách sạn 600 m, kết nối dễ dàng đến các điểm du lịch, bản làng và các tỉnh thành lân cận.',
                'thumbnail'   => '/userfiles/images/locations/loc-4.jpg',
                'price'       => 0,
            ],
            [
                'title'       => 'Vườn Treo Sapa',
                'description' => 'Vườn treo Sapa nằm ngay cạnh khách sạn chỉ 50 m, điểm check-in xanh mát với không gian nghỉ ngơi và ngắm cảnh lý tưởng.',
                'thumbnail'   => '/userfiles/images/locations/loc-1.jpg',
                'price'       => 0,
            ],
            [
                'title'       => 'Thác Bạc (Silver Waterfall)',
                'description' => 'Thác Bạc hùng vĩ cách khách sạn 12 km, là điểm tham quan thiên nhiên hoang sơ và đẹp mắt nhất tại Sa Pa, thu hút hàng nghìn du khách mỗi năm.',
                'thumbnail'   => '/userfiles/images/locations/loc-2.jpg',
                'price'       => 50000,
            ],
        ]);
    }
}
