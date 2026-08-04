<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        // Đặt độ dài mặc định cho kiểu string, hữu ích nếu nhiều cột varchar có cùng độ dài không chuẩn
        // Schema::defaultStringLength(1000); // Dòng này có thể không cần thiết nếu bạn chỉ định độ dài cụ thể cho từng cột

        // Tạo bảng hotel_info
        Schema::create('hotel_info', function (Blueprint $table) {
            $table->id(); // Tương đương INT AUTO_INCREMENT PRIMARY KEY
            $table->string('name', 1000)->nullable();
            $table->string('title', 1000)->nullable();
            $table->longText('description')->nullable();
            $table->string('video_link', 1000)->nullable();
            $table->longText('food_menu')->nullable();
            $table->string('address', 1000)->nullable();
            $table->string('contact_email', 1000)->nullable();
            $table->string('contact_phone', 1000)->nullable();
            $table->string('contact_hotline', 1000)->nullable();
            $table->string('facebook_link', 1000)->nullable();
            $table->string('zalo_link', 1000)->nullable();
            $table->string('map_link', 1000)->nullable();
            // Laravel tự động thêm cột created_at và updated_at nếu bạn sử dụng $table->timestamps();
            // Nếu không muốn, bạn có thể bỏ qua hoặc thêm thủ công nếu cần
        });

        // Tạo bảng services
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title', 1000)->nullable();
            $table->string('thumbnail', 1000)->nullable();
            $table->string('type', 1000)->nullable();
            $table->longText('description')->nullable();
            $table->bigInteger('price')->nullable();
            $table->longText('details')->nullable();
            // $table->timestamps(); // Tùy chọn: thêm created_at và updated_at
        });

        // Tạo bảng rooms
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('title', 1000)->nullable();
            $table->string('thumbnail', 1000)->nullable();
            $table->string('type', 1000)->nullable();
            $table->longText('description')->nullable();
            $table->bigInteger('price')->nullable();
            $table->longText('details')->nullable();
            // $table->timestamps(); // Tùy chọn: thêm created_at và updated_at
        });

        // Tạo bảng reviews
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('customer_thumbnail', 1000)->nullable();
            $table->string('customer_name', 1000)->nullable();
            $table->string('customer_review', 1000)->nullable(); // Xem xét sử dụng text() hoặc longText() nếu review dài
            $table->string('customer_address', 1000)->nullable();
            $table->integer('customer_rating')->nullable();
            // $table->timestamps(); // Tùy chọn: thêm created_at và updated_at
        });

        // Tạo bảng posts
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 1000)->nullable();
            $table->longText('description')->nullable();
            $table->string('thumbnail', 1000)->nullable();
            $table->string('url', 100)->nullable(); // Độ dài 100 cho url
            $table->string('author', 1000)->nullable();
            $table->timestamp('created_at')->nullable(); // Chỉ created_at theo yêu cầu
            // Nếu muốn cả updated_at, sử dụng $table->timestamps(); và bỏ $table->timestamp('created_at');
        });

        // Tạo bảng blogs
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 1000)->nullable();
            $table->longText('description')->nullable();
            $table->string('thumbnail', 1000)->nullable();
            $table->longText('detail')->nullable();
            $table->string('author', 1000)->nullable();
            $table->timestamp('created_at')->nullable(); // Chỉ created_at theo yêu cầu
            // Nếu muốn cả updated_at, sử dụng $table->timestamps(); và bỏ $table->timestamp('created_at');
        });

        // Tạo bảng locations
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('title', 1000)->nullable();
            $table->longText('description')->nullable();
            $table->string('thumbnail', 1000)->nullable();
            $table->integer('price')->nullable();
            // $table->timestamps(); // Tùy chọn: thêm created_at và updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_info');
        Schema::dropIfExists('services');
        Schema::dropIfExists('rooms');
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('blogs');
        Schema::dropIfExists('locations');
    }
};
