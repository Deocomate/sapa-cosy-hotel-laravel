<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Seed dữ liệu các dịch vụ tiện ích của Sapa Cosy Hotel (theo thực tế trên Booking.com).
     */
    public function run(): void
    {
        DB::table('services')->delete();

        DB::table('services')->insert([
            [
                'title'       => 'Lễ Tân 24/7 & Hỗ Trợ Đặt Tour',
                'thumbnail'   => '/userfiles/images/services/reception.jpg',
                'type'        => 'Dịch vụ Lễ tân',
                'description' => 'Đội ngũ nhân viên thân thiện trực 24/7, sẵn sàng hỗ trợ tư vấn lịch trình, đặt tour, thuê xe máy, đặt vé tham quan và thu đổi ngoại tệ.',
                'price'       => 0,
                'details'     => 'Check-in/check-out nhanh chóng. Giữ hành lý miễn phí. Tủ khóa. Bàn bán tour. Thu đổi ngoại tệ. Lễ tân 24 giờ. Tư vấn các địa điểm ăn uống & check-in hot nhất Sa Pa.',
            ],
            [
                'title'       => 'Nhà Hàng & Ẩm Thực Đa Quốc Gia',
                'thumbnail'   => '/userfiles/images/services/dining.jpg',
                'type'        => 'Ẩm thực',
                'description' => 'Nhà hàng trong khuôn viên phục vụ ẩm thực Mỹ, Ý, Nhật, Mexico, Tứ Xuyên, Thái và Châu Á. Phục vụ từ bữa sáng đến bữa tối, có thực đơn chay và Halal.',
                'price'       => 150000,
                'details'     => 'Bầu không khí hiện đại và lãng mạn. Phục vụ bữa sáng (chay/Halal/mang đi), bữa trưa, bữa xế, bữa tối. Đặc sản Sa Pa: lẩu cá tầm, cá hồi, lợn cắp nách, thắng cố, rau mầm đá. Có thực đơn trẻ em.',
            ],
            [
                'title'       => 'Spa & Trung Tâm Chăm Sóc Sức Khỏe',
                'thumbnail'   => '/userfiles/images/services/view.jpg',
                'type'        => 'Spa & Thư giãn',
                'description' => 'Trung tâm spa với dịch vụ massage, phòng xông hơi ướt và hiệu làm đẹp. Trải nghiệm thư giãn sau những chuyến tham quan mệt mỏi tại Sa Pa.',
                'price'       => 200000,
                'details'     => 'Massage thư giãn, chăm sóc da mặt, phòng xông hơi ướt, hiệu cắt tóc/làm đẹp. Đặt lịch trước để được phục vụ tốt nhất. Phụ phí áp dụng cho các dịch vụ cao cấp.',
            ],
            [
                'title'       => 'Xe Đưa Đón Sân Bay & Tour Du Lịch',
                'thumbnail'   => '/userfiles/images/services/sanitation.jpg',
                'type'        => 'Di chuyển',
                'description' => 'Dịch vụ xe đưa đón sân bay Nội Bài - Sa Pa chuyên nghiệp và an toàn. Tổ chức tour tham quan các địa điểm nổi tiếng quanh Sa Pa theo yêu cầu.',
                'price'       => 500000,
                'details'     => 'Xe đưa đón sân bay Nội Bài. Tour đi bộ, tour xe đạp, tour văn hóa địa phương, lớp dạy nấu ăn đặc sản. Sự kiện thể thao truyền hình trực tiếp. Đặt trước để có giá tốt.',
            ],
        ]);
    }
}
