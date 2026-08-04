<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Seed dữ liệu đánh giá của khách hàng về Sapa Cosy Hotel.
     */
    public function run(): void
    {
        DB::table('reviews')->delete();

        DB::table('reviews')->insert([
            [
                'customer_thumbnail' => '/userfiles/images/reviews/thumb1.jpg',
                'customer_name'      => 'Nguyễn Văn A',
                'customer_review'    => 'Khách sạn rất tuyệt vời, phòng ốc sạch đẹp và tầm nhìn hướng núi rực rỡ.',
                'customer_address'   => 'Hà Nội',
                'customer_rating'    => 5,
            ],
            [
                'customer_thumbnail' => '/userfiles/images/reviews/thumb2.jpg',
                'customer_name'      => 'Trần Thị B',
                'customer_review'    => 'Tôi rất hài lòng với dịch vụ tại Sapa Cosy Hotel, nhân viên cực kỳ nhiệt tình.',
                'customer_address'   => 'TP.HCM',
                'customer_rating'    => 5,
            ],
            [
                'customer_thumbnail' => '/userfiles/images/reviews/thumb3.jpg',
                'customer_name'      => 'Lê Văn C',
                'customer_review'    => 'Phòng ấm cúng, đồ ăn đặc sản ngon miệng, nhất định sẽ quay lại lần sau.',
                'customer_address'   => 'Đà Nẵng',
                'customer_rating'    => 5,
            ],
            [
                'customer_thumbnail' => '/userfiles/images/reviews/thumb4.jpg',
                'customer_name'      => 'Phạm Thị D',
                'customer_review'    => 'Không gian đẹp, vị trí thuận tiện di chuyển đến trung tâm thị xã và các bản làng.',
                'customer_address'   => 'Huế',
                'customer_rating'    => 4,
            ],
            [
                'customer_thumbnail' => '/userfiles/images/reviews/thumb5.jpg',
                'customer_name'      => 'Hoàng Văn E',
                'customer_review'    => 'Chủ khách sạn và lễ tân chu đáo, hỗ trợ đặt xe và tư vấn lịch trình rất chi tiết.',
                'customer_address'   => 'Nha Trang',
                'customer_rating'    => 5,
            ],
            [
                'customer_thumbnail' => '/userfiles/images/reviews/thumb6.jpg',
                'customer_name'      => 'Vũ Thị F',
                'customer_review'    => 'Cảnh quan tuyệt đẹp, không khí trong lành, trải nghiệm nghỉ dưỡng 10/10.',
                'customer_address'   => 'Hải Phòng',
                'customer_rating'    => 5,
            ],
            [
                'customer_thumbnail' => '/userfiles/images/reviews/thumb7.jpg',
                'customer_name'      => 'Đỗ Văn G',
                'customer_review'    => 'Giá cả hợp lý cho chất lượng phòng và dịch vụ xuất sắc như thế này.',
                'customer_address'   => 'Cần Thơ',
                'customer_rating'    => 5,
            ],
        ]);
    }
}
