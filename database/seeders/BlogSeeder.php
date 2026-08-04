<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class BlogSeeder extends Seeder
{
    /**
     * Seed dữ liệu bài viết blog / cẩm nang du lịch của Sapa Cosy Hotel.
     */
    public function run(): void
    {
        DB::table('blogs')->delete();

        DB::table('blogs')->insert([
            [
                'id'          => 1,
                'title'       => 'Giao lưu văn hóa với đồng bào Sa Pa',
                'description' => 'Tìm hiểu về văn hóa và phong tục tập quán độc đáo của các dân tộc thiểu số tại địa phương.',
                'thumbnail'   => '/userfiles/images/posts/post1.jpg',
                'detail'      => '<p>Sa Pa là nơi hội tụ sinh sống của nhiều dân tộc thiểu số như H’Mông, Dao đỏ, Giáy, Tày, Xá Phó... Mỗi dân tộc mang một bản sắc văn hóa riêng biệt thể hiện qua trang phục, phong tục tập quán và lễ hội truyền thống.</p>

<p>Đến với Sapa Cosy Hotel, quý khách sẽ được hướng dẫn trải nghiệm thăm các bản làng cổ như Cát Cát, Tả Van, Tả Phìn, tham gia các buổi giao lưu văn hóa nghệ thuật, thưởng thức điệu múa khèn H’Mông và mua sắm các sản phẩm thổ cẩm thủ công tinh xảo.</p>

<h5>Một số điểm nhấn văn hóa không thể bỏ qua:</h5>
<ul>
    <li>Thăm bản Cát Cát của người H’Mông đen với các ngôi nhà trình tường cổ kính.</li>
    <li>Trải nghiệm tắm lá thuốc cổ truyền của người Dao đỏ tại bản Tả Phìn.</li>
    <li>Tham gia chợ phiên Sa Pa vào dịp cuối tuần để cảm nhận không khí nhộn nhịp rực rỡ sắc màu.</li>
</ul>',
                'author'      => 'Sapa Cosy Hotel',
                'created_at'  => Carbon::now()->subDays(7),
            ],
            [
                'id'          => 2,
                'title'       => 'Sa Pa mùa xuân: Sắc hoa rực rỡ',
                'description' => 'Bài viết về vẻ đẹp ngất ngây của hoa đào, hoa mận nở rộ rực rỡ khắp núi rừng Sa Pa vào mùa xuân.',
                'thumbnail'   => '/userfiles/images/posts/post1.jpg',
                'detail'      => '<p>Mùa xuân Sa Pa (từ tháng 2 đến tháng 4) là khoảng thời gian tuyệt đẹp khi đất trời Tây Bắc bừng tỉnh sau mùa đông giá lạnh. Khắp các sườn núi, bản làng và thung lũng được bao phủ bởi sắc hồng nhung của đào rồng, đào phai cùng sắc trắng tinh khôi của hoa mận, hoa lê.</p>

<p>Thời tiết mùa xuân Sa Pa vô cùng dễ chịu với không khí mát mẻ, nắng nhẹ ban ngày và không khí se lạnh mộng mơ về đêm. Đây là thời điểm tuyệt vời nhất để quý khách thực hiện những bộ ảnh check-in tuyệt đẹp tại Sapa Cosy Hotel và các điểm du lịch lân cận.</p>

<h5>Gợi ý địa điểm ngắm hoa xuân đẹp nhất:</h5>
<ul>
    <li>Đèo Ô Quy Hồ & Khu du lịch Sun World Fansipan Legend.</li>
    <li>Bản Cát Cát & Thung lũng Mường Hoa.</li>
    <li>Đồi hoa đèo Ô Quy Hồ & các vườn đào cổ thụ quanh thị xã.</li>
</ul>',
                'author'      => 'Sapa Cosy Hotel',
                'created_at'  => Carbon::now()->subDays(6),
            ],
            [
                'id'          => 3,
                'title'       => 'Kinh nghiệm chinh phục đỉnh Fansipan',
                'description' => 'Chia sẻ kinh nghiệm di chuyển, đi cáp treo và những lưu ý quan trọng khi chinh phục Nóc nhà Đông Dương Fansipan.',
                'thumbnail'   => '/userfiles/images/posts/post2.jpg',
                'detail'      => '<p>Nằm ở độ cao 3.143m so với mực nước biển, Fansipan là đỉnh núi cao nhất Việt Nam và toàn khu vực Đông Dương. Chinh phục Fansipan là hành trình không thể bỏ qua đối với bất kỳ du khách nào khi đến Sa Pa.</p>

<p>Nhờ hệ thống cáp treo Fansipan Legend hiện đại đạt kỷ lục thế giới, việc lên đỉnh Fansipan giờ đây trở nên vô cùng dễ dàng và thuận tiện cho mọi lứa tuổi. Chỉ mất khoảng 15 phút di chuyển trên cáp treo, du khách đã có thể chiêm ngưỡng trọn vẹn thung lũng Mường Hoa và dãy Hoàng Liên Sơn hùng vĩ từ trên cao.</p>

<h5>Kinh nghiệm bỏ túi khi đi Fansipan:</h5>
<ul>
    <li>Chuẩn bị áo ấm, khăn wool và giày thể thao vì nhiệt độ trên đỉnh núi thấp hơn thị xã 8-10 độ C.</li>
    <li>Nên đặt vé cáp treo trước thông qua lễ tân Sapa Cosy Hotel để không phải xếp hàng chờ đợi.</li>
    <li>Thời điểm ngắm mây và chụp ảnh đẹp nhất là vào buổi sáng từ 8h00 - 11h00.</li>
</ul>',
                'author'      => 'Sapa Cosy Hotel',
                'created_at'  => Carbon::now()->subDays(5),
            ],
            [
                'id'          => 4,
                'title'       => 'Top 5 món ăn ngon nhất định phải thử ở Sa Pa',
                'description' => 'Gợi ý các món ăn đặc sản ẩm thực Tây Bắc hấp dẫn mà bạn tuyệt đối không nên bỏ qua khi du lịch Sa Pa.',
                'thumbnail'   => '/userfiles/images/posts/post3.jpg',
                'detail'      => '<p>Ẩm thực Sa Pa mang hương vị độc đáo, đậm đà phong vị núi rừng Tây Bắc. Những món ăn thơm ngon nóng hổi trong không khí se lạnh sẽ để lại ấn tượng khó quên cho du khách.</p>

<h5>1. Lẩu Cá Tầm & Cá Hồi Sa Pa</h5>
<p>Cá tầm, cá hồi nuôi tại nước lạnh Sa Pa thịt chắc, ngọt thơm và không mỡ. Nước lẩu chua thanh nhẹ ăn kèm rau mầm đá, nấm tươi cực kỳ hợp vị.</p>

<h5>2. Đồ Nướng Sa Pa</h5>
<p>Dạo phố đêm Sa Pa và thưởng thức những xiên nướng than hồng: thịt lợn cắp nách nướng, cơm lam, bò cuốn cải mèo, trứng nướng...</p>

<h5>3. Thịt Lợn Cắp Nách</h5>
<p>Giống lợn thả rông của người dân bản địa thịt thơm, bì giòn sần sật, chế biến thành nhiều món như nướng nguyên con, hấp hay xào sả ớt.</p>

<h5>4. Thắng Cố</h5>
<p>Món ăn truyền thống của người H’Mông chế biến từ thịt và nội tạng ngựa kết hợp 12 loại gia vị thảo mộc núi rừng.</p>

<h5>5. Rau Mầm Đá & Rau Cải Mèo</h5>
<p>Các loại rau đặc sản chỉ có ở vùng núi cao Sa Pa, giòn ngọt tự nhiên và chứa nhiều dinh dưỡng.</p>',
                'author'      => 'Sapa Cosy Hotel',
                'created_at'  => Carbon::now()->subDays(4),
            ],
            [
                'id'          => 5,
                'title'       => 'Lịch trình 3 ngày 2 đêm khám phá Sa Pa',
                'description' => 'Gợi ý lịch trình du lịch Sa Pa 3 ngày 2 đêm chi tiết, tối ưu thời gian và chi phí cho gia đình hoặc nhóm bạn.',
                'thumbnail'   => '/userfiles/images/posts/post4.jpg',
                'detail'      => '<p>Bạn đang lên kế hoạch cho chuyến du lịch Sa Pa nhưng chưa biết sắp xếp lịch trình ra sao? Hãy tham khảo gợi ý lịch trình 3 ngày 2 đêm chuẩn nhất dưới đây từ Sapa Cosy Hotel!</p>

<h5>Ngày 1: Check-in Sapa Cosy Hotel - Bản Cát Cát - Dạo phố đêm</h5>
<ul>
    <li>Buổi sáng: Đến Sa Pa, nhận phòng nghỉ ngơi tại Sapa Cosy Hotel (458 Điện Biên Phủ).</li>
    <li>Buổi chiều: Khám phá bản Cát Cát, chụp ảnh với trang phục dân tộc và suối Hoa.</li>
    <li>Buổi tối: Thưởng thức lẩu cá tầm và dạo chợ đêm Sa Pa, Nhà thờ Đá.</li>
</ul>

<h5>Ngày 2: Chinh phục đỉnh Fansipan - Moana Sapa - Đèo Ô Quy Hồ</h5>
<ul>
    <li>Buổi sáng: Đi cáp treo lên đỉnh Fansipan, viếng quần thể tâm linh đỉnh núi.</li>
    <li>Buổi chiều: Check-in khu sống ảo Moana Sa Pa và đón hoàng hôn tuyệt đẹp trên đỉnh Đèo Ô Quy Hồ.</li>
    <li>Buổi tối: Thư giãn với dịch vụ tắm lá thuốc người Dao đỏ.</li>
</ul>

<h5>Ngày 3: Hồ Sa Pa - Thung lũng Mường Hoa - Mua quà lưu niệm</h5>
<ul>
    <li>Buổi sáng: Dạo bộ Hồ Sa Pa (cách khách sạn 350m), ngắm cảnh thung lũng Mường Hoa.</li>
    <li>Buổi trưa: Trả phòng, mua đặc sản thịt trâu gầy bếp, hạt dẻ rồng về làm quà.</li>
</ul>',
                'author'      => 'Sapa Cosy Hotel',
                'created_at'  => Carbon::now()->subDays(3),
            ],
            [
                'id'          => 6,
                'title'       => 'Sapa Cosy Hotel: Khách sạn nghỉ dưỡng ấn tượng',
                'description' => 'Giới thiệu khách sạn 3 sao có vị trí đắc địa tại 458 Điện Biên Phủ, tầm nhìn bao trọn núi rừng Sa Pa.',
                'thumbnail'   => '/userfiles/images/posts/post5.jpg',
                'detail'      => '<p>Sapa Cosy Hotel tọa lạc tại địa chỉ 458 Đường Điện Biên Phủ - ngay vị trí trung tâm thị xã Sa Pa, giúp du khách dễ dàng di chuyển đến Hồ Sa Pa (350m), Bến xe (600m), Nhà thờ Đá và các điểm du lịch nổi tiếng.</p>

<p>Khách sạn đạt tiêu chuẩn 3 sao với hệ thống phòng nghỉ hiện đại, trang bị đầy đủ điều hòa 2 chiều, TV màn hình phẳng, Wifi tốc độ cao và ban công view núi rừng tuyệt đẹp. Ngoài ra, Sapa Cosy Hotel còn cung cấp đầy đủ các tiện ích như Nhà hàng ẩm thực, Spa thư giãn, dịch vụ cho thuê xe và tư vấn đặt tour 24/7.</p>',
                'author'      => 'Sapa Cosy Hotel',
                'created_at'  => Carbon::now()->subDays(2),
            ],
            [
                'id'          => 7,
                'title'       => 'Chợ phiên Sa Pa: Nơi giao thoa văn hóa',
                'description' => 'Khám phá nét văn hóa đặc sắc tại các buổi chợ phiên và chợ tình truyền thống Sa Pa.',
                'thumbnail'   => '/userfiles/images/posts/post6.jpg',
                'detail'      => '<p>Chợ phiên Sa Pa từ lâu đã trở thành biểu tượng văn hóa độc đáo của vùng cao Tây Bắc. Đây không chỉ là nơi trao đổi hàng hóa nông sản, thổ cẩm mà còn là dịp để đồng bào các dân tộc gặp gỡ, giao lưu và bén duyên.</p>

<p>Vào các ngày cuối tuần, du khách sẽ được chìm đắm trong không gian ngập tràn sắc màu của các bộ váy áo thổ cẩm, thưởng thức tiếng khèn gọi bạn tình tha thiết và thưởng thức chén rượu ngô nồng ấm.</p>',
                'author'      => 'Sapa Cosy Hotel',
                'created_at'  => Carbon::now()->subDays(1),
            ],
        ]);
    }
}
