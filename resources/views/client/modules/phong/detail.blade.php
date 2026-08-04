@extends("client.layouts.layout")
@section("title", $room->title . " - Sapa Cosy Hotel")

@section("content")
    <!-- Luxury Hero Banner -->
    <section class="luxury-hero-banner jarallax" style="background-image: url('{{ $room->thumbnail }}');">
        <div class="container text-center wow fadeInUp" data-wow-delay=".2s">
            <nav class="breadcrumb-custom" aria-label="Breadcrumb">
                <a href="{{ route('client.trang_chu') }}">Trang chủ</a>
                <span class="separator">/</span>
                <a href="{{ route('client.phong_nghi') }}">Phòng nghỉ</a>
                <span class="separator">/</span>
                <span class="active-page">{{ $room->title }}</span>
            </nav>
            <h1>{{ $room->title }}</h1>
            <p>Trải nghiệm không gian nghỉ dưỡng ấm cúng với đầy đủ tiện nghi hiện đại tại Sapa Cosy Hotel.</p>
        </div>
    </section>

    <!-- Room Details Section -->
    <section class="py-5" style="background-color: #ffffff;">
        <div class="container py-4">
            <div class="row g-5">
                <!-- Main Room Content -->
                <div class="col-lg-8 wow fadeInUp" data-wow-delay=".3s">
                    <div class="img-zoom-wrapper shadow-lg mb-4" style="border-radius: 4px; overflow: hidden; max-height: 480px;">
                        <img src="{{ $room->thumbnail }}" alt="{{ $room->title }}" style="width: 100%; height: 480px; object-fit: cover;">
                    </div>

                    <!-- Amenities and Specs Row -->
                    <div class="p-4 bg-light rounded-1 mb-4 border d-flex flex-wrap align-items-center justify-content-between gap-3">
                        <div class="d-flex align-items-center gap-2">
                            <i class="flaticon-user fs-3" style="color: var(--gold-primary);"></i>
                            <div>
                                <span class="d-block text-muted font-xs">Loại phòng / Sức chứa</span>
                                <strong class="text-dark">{{ $room->type }}</strong>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="flaticon-wifi fs-3" style="color: var(--gold-primary);"></i>
                            <div>
                                <span class="d-block text-muted font-xs">Kết nối Wifi</span>
                                <strong class="text-dark">Tốc độ cao miễn phí</strong>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <i class="flaticon-coffee fs-3" style="color: var(--gold-primary);"></i>
                            <div>
                                <span class="d-block text-muted font-xs">Bữa sáng</span>
                                <strong class="text-dark">Đã bao gồm</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Room Description -->
                    <div class="room-description mb-5">
                        <h2 class="h4 fw-bold mb-3" style="color: var(--heading-color);">Giới thiệu tổng quan</h2>
                        <p class="text-secondary fs-6" style="line-height: 1.8;">{{ $room->description }}</p>
                    </div>

                    <!-- Detailed Content -->
                    <div class="room-details-rich">
                        <h2 class="h4 fw-bold mb-3" style="color: var(--heading-color);">Chi tiết tiện nghi & Dịch vụ đi kèm</h2>
                        <div class="p-4 rounded-1 border bg-white shadow-sm" style="line-height: 1.8;">
                            {!! $room->details !!}
                        </div>
                    </div>
                </div>

                <!-- Sidebar Booking Form / Action -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                    <div class="sticky-sidebar-card">
                        <span class="luxury-badge mb-2">Thông tin đặt phòng</span>
                        <div class="mb-3">
                            <span class="text-muted font-xs d-block">Giá niêm yết</span>
                            <span class="luxury-price-tag" style="font-size: 2rem;">{{ number_format($room->price, 0, ',', '.') }}₫</span>
                            <span class="text-muted font-sm"> / đêm</span>
                        </div>

                        <ul class="list-unstyled d-flex flex-column gap-2 font-sm text-secondary mb-4">
                            <li class="d-flex align-items-center gap-2"><i class="flaticon-check text-gold"></i> Miễn phí hủy trước 48 giờ</li>
                            <li class="d-flex align-items-center gap-2"><i class="flaticon-check text-gold"></i> Nhận phòng: 14:00 - Trả phòng: 12:00</li>
                            <li class="d-flex align-items-center gap-2"><i class="flaticon-check text-gold"></i> Hỗ trợ đặt xe đưa đón tận nơi</li>
                        </ul>

                        <button type="button" data-bs-toggle="modal" data-bs-target="#bookRoomModal" class="btn-gold w-100 py-3 mb-3 fs-6">
                            <i class="flaticon-calendar me-2"></i>Đánh giá & Đặt phòng
                        </button>

                        <div class="p-3 rounded-1 bg-light border text-center">
                            <small class="text-muted d-block mb-1">Cần tư vấn trực tiếp?</small>
                            <a href="tel:{{ $hotelInfo->contact_phone }}" class="fw-bold text-dark text-decoration-none">
                                <i class="flaticon-phone-flip text-gold me-1"></i>{{ $hotelInfo->contact_phone }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
