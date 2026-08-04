DROP TABLE IF EXISTS hotel_info;
CREATE TABLE IF NOT EXISTS hotel_info
(
    id              INT AUTO_INCREMENT PRIMARY KEY,
    name            varchar(1000),
    title           varchar(1000),
    description     longtext,
    video_link      varchar(1000),
    food_menu       longtext,
    address         varchar(1000),
    contact_email   varchar(1000),
    contact_phone   varchar(1000),
    contact_hotline varchar(1000),
    facebook_link   varchar(1000),
    zalo_link       varchar(1000),
    map_link        varchar(1000)
);

DROP TABLE IF EXISTS services;
CREATE TABLE IF NOT EXISTS services
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    title       varchar(1000),
    thumbnail   varchar(1000),
    type        varchar(1000),
    description longtext,
    price       bigint,
    details     longtext
);

DROP TABLE IF EXISTS rooms;
CREATE TABLE IF NOT EXISTS rooms
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    title       varchar(1000),
    thumbnail   varchar(1000),
    type        varchar(1000),
    description longtext,
    price       BIGINT,
    details     longtext
);

DROP TABLE IF EXISTS reviews;
CREATE TABLE IF NOT EXISTS reviews
(
    id                 INT AUTO_INCREMENT PRIMARY KEY,
    customer_thumbnail varchar(1000),
    customer_name      varchar(1000),
    customer_review    varchar(1000),
    customer_address   varchar(1000),
    customer_rating    INT
);

DROP TABLE IF EXISTS posts;
CREATE TABLE IF NOT EXISTS posts
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    title       varchar(1000),
    description longtext,
    thumbnail   varchar(1000),
    url         varchar(100),
    author      varchar(1000),
    created_at  timestamp
);

DROP TABLE IF EXISTS blogs;
CREATE TABLE IF NOT EXISTS blogs
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    title       varchar(1000),
    description longtext,
    thumbnail   varchar(1000),
    detail      longtext,
    author      varchar(1000),
    created_at  timestamp
);

DROP TABLE IF EXISTS locations;
CREATE TABLE IF NOT EXISTS locations
(
    id          INT AUTO_INCREMENT PRIMARY KEY,
    title       varchar(1000),
    description longtext,
    thumbnail   varchar(1000),
    price       int
);

-- Seeding Database

INSERT INTO rooms (title, thumbnail, type, description, price, details)
VALUES ('Phòng Đơn Tiêu Chuẩn (1 Giường Double)', '/userfiles/images/rooms/room-1bed.jpg', '1 Giường Đôi', 'Phòng đơn ấm cúng với 1 giường đôi lớn, tầm nhìn thoáng mát hướng núi rừng Sa Pa.', 500000, 'Đầy đủ tiện nghi: Điều hòa 2 chiều, Wifi tốc độ cao, TV màn hình phẳng, phòng tắm khép kín, máy sấy tóc, bình nóng lạnh, trà & cà phê miễn phí.'),
       ('Phòng Đôi Thượng Hạng (2 Giường Đơn)', '/userfiles/images/rooms/room-2bed.jpg', '2 Giường Đơn', 'Phòng đôi rộng rãi dành cho 2-3 người, trang bị 2 giường đơn êm ái cùng cửa sổ ngắm toàn cảnh thị xã.', 700000, 'Tiện nghi gồm 2 giường đơn cao cấp, phòng tắm riêng sang trọng, bàn làm việc, tủ quần áo, dép đi trong phòng, dịch vụ dọn phòng hàng ngày.'),
       ('Phòng Gia Đình Rộng Rãi (3 Giường)', '/userfiles/images/rooms/room-3bed.jpg', '3 Giường', 'Phòng gia đình không gian thoáng đãng với 3 giường thoải mái, lựa chọn lý tưởng cho nhóm bạn hoặc gia đình.', 950000, 'Thiết kế hiện đại, 3 giường rộng, view ngắm núi Hoàng Liên Sơn, bình đun nước siêu tốc, khăn tắm & đồ vệ sinh cá nhân miễn phí.'),
       ('Phòng Suite VIP View Núi Panorama', '/userfiles/images/rooms/room-vip.jpg', 'Phòng VIP', 'Phòng VIP đẳng cấp với ban công riêng ngắm mây và thung lũng Mường Hoa kỳ vĩ.', 1200000, 'Không gian cao cấp nhất Sapa Cosy Hotel, ban công view núi panorama, giường King size, khu vực tiếp khách sang trọng, minibar.');

INSERT INTO services (title, thumbnail, type, description, price, details)
VALUES ('Lễ Tân 24/7 & Hỗ Trợ Đặt Tour', '/userfiles/images/services/reception.jpg', 'Dịch vụ Lễ tân', 'Đội ngũ nhân viên thân thiện trực 24/7, sẵn sàng hỗ trợ tư vấn lịch trình, thuê xe máy và đặt vé tham quan.', 0, 'Hỗ trợ check-in/check-out nhanh chóng, gửi đồ miễn phí, tư vấn các địa điểm ăn uống & check-in hot nhất Sa Pa.'),
       ('Phòng Tắm & Vệ Sinh Tiêu Chuẩn', '/userfiles/images/services/sanitation.jpg', 'Tiện ích Phòng', 'Khu vực vệ sinh khép kín, luôn sạch sẽ và trang bị nước nóng lạnh 24/24 cùng đồ dùng cá nhân cao cấp.', 0, 'Cung cấp đầy đủ máy sấy, khăn tắm mềm mại, sữa tắm, dầu gội thiên nhiên.'),
       ('Ẩm Thực Đặc Sản Sa Pa', '/userfiles/images/services/dining.jpg', 'Ẩm thực', 'Phục vụ các món ăn đặc sản Tây Bắc như lẩu cá tầm, cá hồi tươi sống, lợn cắp nách, rau mầm đá.', 150000, 'Không gian dùng bữa ấm cúng, nguyên liệu tươi ngon được chế biến theo phong vị địa phương độc đáo.'),
       ('Không Gian Thư Giãn & View Ngắm Mây', '/userfiles/images/services/view.jpg', 'Thư giãn', 'Sảnh chờ và khu vực ban công với tầm nhìn bao trọn mây núi Sa Pa, vị trí chụp ảnh check-in tuyệt đẹp.', 0, 'Trang bị bàn ghế ngồi thưởng trà Shan tuyết cổ thụ, cà phê sapa ngắm mây vờn sườn núi.');

INSERT INTO reviews (customer_thumbnail, customer_name, customer_review, customer_address, customer_rating)
VALUES ('/userfiles/images/reviews/thumb1.jpg', 'Nguyễn Văn A', 'Khách sạn rất tuyệt vời, phòng ốc sạch đẹp và tầm nhìn hướng núi rực rỡ.', 'Hà Nội', 5),
       ('/userfiles/images/reviews/thumb2.jpg', 'Trần Thị B', 'Tôi rất hài lòng với dịch vụ tại Sapa Cosy Hotel, nhân viên cực kỳ nhiệt tình.', 'TP.HCM', 5),
       ('/userfiles/images/reviews/thumb3.jpg', 'Lê Văn C', 'Phòng ấm cúng, đồ ăn đặc sản ngon miệng, nhất định sẽ quay lại lần sau.', 'Đà Nẵng', 5),
       ('/userfiles/images/reviews/thumb4.jpg', 'Phạm Thị D', 'Không gian đẹp, vị trí thuận tiện di chuyển đến trung tâm thị xã và các bản làng.', 'Huế', 4),
       ('/userfiles/images/reviews/thumb5.jpg', 'Hoàng Văn E', 'Chủ khách sạn và lễ tân chu đáo, hỗ trợ đặt xe và tư vấn lịch trình rất chi tiết.', 'Nha Trang', 5),
       ('/userfiles/images/reviews/thumb6.jpg', 'Vũ Thị F', 'Cảnh quan tuyệt đẹp, không khí trong lành, trải nghiệm nghỉ dưỡng 10/10.', 'Hải Phòng', 5),
       ('/userfiles/images/reviews/thumb7.jpg', 'Đỗ Văn G', 'Giá cả hợp lý cho chất lượng phòng và dịch vụ xuất sắc như thế này.', 'Cần Thơ', 5);

INSERT INTO blogs (title, description, thumbnail, detail, author, created_at)
VALUES ('Giao lưu văn hóa với đồng bào Sa Pa', 'Tìm hiểu về văn hóa và phong tục tập quán của người dân địa phương.',
        '/userfiles/images/posts/post1.jpg',
        'Chi tiết về văn hóa độc đáo của các dân tộc H’Mông, Dao đỏ, Giáy tại Sa Pa.', 'Sapa Cosy Hotel', NOW());

INSERT INTO posts (title, description, thumbnail, url, author, created_at)
VALUES ('Sa Pa mùa xuân: Sắc hoa rực rỡ', 'Bài viết về vẻ đẹp của hoa đào, hoa mận nở rộ ở Sa Pa vào mùa xuân.',
        '/userfiles/images/posts/post1.jpg', '/sa-pa-mua-xuan', 'Sapa Cosy Hotel', NOW()),
       ('Kinh nghiệm chinh phục đỉnh Fansipan', 'Chia sẻ kinh nghiệm leo núi và đi cáp treo chinh phục đỉnh Fansipan.',
        '/userfiles/images/posts/post2.jpg', '/chinh-phuc-fansipan', 'Sapa Cosy Hotel', NOW()),
       ('Top 5 món ăn ngon nhất định phải thử ở Sa Pa', 'Gợi ý các món ăn đặc sản của Sa Pa mà bạn không nên bỏ qua.',
        '/userfiles/images/posts/post3.jpg', '/mon-ngon-sa-pa', 'Sapa Cosy Hotel', NOW()),
       ('Lịch trình 3 ngày 2 đêm khám phá Sa Pa', 'Gợi ý lịch trình chi tiết cho chuyến đi Sa Pa 3 ngày 2 đêm.',
        '/userfiles/images/posts/post4.jpg', '/lich-trinh-sa-pa', 'Sapa Cosy Hotel', NOW()),
       ('Sapa Cosy Hotel: Khách sạn nghỉ dưỡng ấn tượng', 'Giới thiệu khách sạn có vị trí đắc địa, tầm nhìn ngắm trọn núi rừng Sa Pa.',
        '/userfiles/images/posts/post5.jpg', '/sapa-cosy-hotel', 'Sapa Cosy Hotel', NOW()),
       ('Chợ phiên Sa Pa: Nơi giao thoa văn hóa', 'Khám phá nét văn hóa đặc sắc tại chợ phiên Sa Pa.',
        '/userfiles/images/posts/post6.jpg', '/cho-phien-sa-pa', 'Sapa Cosy Hotel', NOW()),
       ('Mùa săn mây đẹp nhất ở Sa Pa', 'Chia sẻ kinh nghiệm săn mây và thời điểm săn mây lý tưởng ở Sa Pa.',
        '/userfiles/images/posts/post7.jpg', '/san-may-sa-pa', 'Sapa Cosy Hotel', NOW());

INSERT INTO locations (title, description, thumbnail, price)
VALUES ('Đỉnh Fansipan', 'Nóc nhà Đông Dương với độ cao 3.143m, điểm đến không thể bỏ qua khi tới Sa Pa.',
        '/userfiles/images/locations/loc-1.jpg', 800000),
       ('Bản Cát Cát', 'Bản làng cổ kính của người H’Mông mang nét đẹp văn hóa đặc sắc.',
        '/userfiles/images/locations/loc-2.jpg', 150000),
       ('Thung lũng Mường Hoa', 'Thung lũng sở hữu những thửa ruộng bậc thang kỳ vĩ và bãi đá cổ Sa Pa.',
        '/userfiles/images/locations/loc-3.jpg', 100000),
       ('Đèo Ô Quy Hồ', 'Một trong tứ đại đỉnh đèo của Tây Bắc, điểm săn mây và ngắm hoàng hôn tuyệt đẹp.',
        '/userfiles/images/locations/loc-4.jpg', 50000);

INSERT INTO hotel_info (name, title, description, video_link, food_menu, address, contact_email, contact_phone, contact_hotline, facebook_link, zalo_link, map_link)
VALUES ('Sapa Cosy Hotel', 'Sapa Cosy Hotel - Khách sạn nghỉ dưỡng cao cấp tại Sa Pa', 'Sapa Cosy Hotel tọa lạc tại trung tâm thị xã Sa Pa, tỉnh Lào Cai. Khách sạn sở hữu không gian thiết kế sang trọng, hiện đại kết hợp nét văn hóa bản địa độc đáo, mang đến cho quý khách trải nghiệm nghỉ dưỡng ấm cúng và trọn vẹn nhất.', 'https://youtube.com/example_video', 'Thực đơn gồm các món đặc sản Sa Pa: Lẩu cá tầm, cá hồi, thịt lợn cắp nách, thắng cố, rau mầm đá...', 'Thị xã Sa Pa, Tỉnh Lào Cai, Việt Nam', 'contact@sapacosyhotel.com', '0987654321', '0123456789', 'https://facebook.com/sapacosyhotel', 'https://zalo.me/0987654321', 'https://goo.gl/maps/example');
