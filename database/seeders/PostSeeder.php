<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PostSeeder extends Seeder
{
    /**
     * Seed dữ liệu bài đăng tin tức / bài báo về Sapa Cosy Hotel.
     */
    public function run(): void
    {
        DB::table('posts')->delete();

        DB::table('posts')->insert([
            [
                'id'          => 1,
                'title'       => 'Sa Pa mùa xuân: Sắc hoa rực rỡ',
                'description' => 'Bài viết báo chí về vẻ đẹp của hoa đào, hoa mận nở rộ ở Sa Pa vào mùa xuân.',
                'thumbnail'   => '/userfiles/images/posts/post1.jpg',
                'url'         => '/bai-viet-chi-tiet/2',
                'author'      => 'Sapa Cosy Hotel',
                'created_at'  => Carbon::now()->subDays(6),
            ],
            [
                'id'          => 2,
                'title'       => 'Kinh nghiệm chinh phục đỉnh Fansipan',
                'description' => 'Chia sẻ kinh nghiệm leo núi và đi cáp treo chinh phục đỉnh Fansipan từ góc nhìn du khách.',
                'thumbnail'   => '/userfiles/images/posts/post2.jpg',
                'url'         => '/bai-viet-chi-tiet/3',
                'author'      => 'Sapa Cosy Hotel',
                'created_at'  => Carbon::now()->subDays(5),
            ],
            [
                'id'          => 3,
                'title'       => 'Top 5 món ăn ngon nhất định phải thử ở Sa Pa',
                'description' => 'Gợi ý các món ăn đặc sản của Sa Pa mà bạn không nên bỏ qua khi tới nghỉ dưỡng.',
                'thumbnail'   => '/userfiles/images/posts/post3.jpg',
                'url'         => '/bai-viet-chi-tiet/4',
                'author'      => 'Sapa Cosy Hotel',
                'created_at'  => Carbon::now()->subDays(4),
            ],
            [
                'id'          => 4,
                'title'       => 'Lịch trình 3 ngày 2 đêm khám phá Sa Pa',
                'description' => 'Gợi ý lịch trình chi tiết cho chuyến đi Sa Pa 3 ngày 2 đêm cùng gia đình.',
                'thumbnail'   => '/userfiles/images/posts/post4.jpg',
                'url'         => '/bai-viet-chi-tiet/5',
                'author'      => 'Sapa Cosy Hotel',
                'created_at'  => Carbon::now()->subDays(3),
            ],
            [
                'id'          => 5,
                'title'       => 'Sapa Cosy Hotel: Khách sạn nghỉ dưỡng ấn tượng',
                'description' => 'Giới thiệu khách sạn có vị trí đắc địa, tầm nhìn ngắm trọn núi rừng Sa Pa.',
                'thumbnail'   => '/userfiles/images/posts/post5.jpg',
                'url'         => '/bai-viet-chi-tiet/6',
                'author'      => 'Sapa Cosy Hotel',
                'created_at'  => Carbon::now()->subDays(2),
            ],
            [
                'id'          => 6,
                'title'       => 'Chợ phiên Sa Pa: Nơi giao thoa văn hóa',
                'description' => 'Khám phá nét văn hóa đặc sắc tại chợ phiên Sa Pa.',
                'thumbnail'   => '/userfiles/images/posts/post6.jpg',
                'url'         => '/bai-viet-chi-tiet/7',
                'author'      => 'Sapa Cosy Hotel',
                'created_at'  => Carbon::now()->subDays(1),
            ],
            [
                'id'          => 7,
                'title'       => 'Giao lưu văn hóa với đồng bào Sa Pa',
                'description' => 'Tìm hiểu về văn hóa và phong tục tập quán của người dân địa phương.',
                'thumbnail'   => '/userfiles/images/posts/post1.jpg',
                'url'         => '/bai-viet-chi-tiet/1',
                'author'      => 'Sapa Cosy Hotel',
                'created_at'  => Carbon::now(),
            ],
        ]);
    }
}
