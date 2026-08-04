@extends("client.layouts.layout")
@section("title", "Các loại phòng nghỉ - Sapa Cosy Hotel")

@section("content")
    <!-- Luxury Hero Banner -->
    <section class="luxury-hero-banner jarallax" style="background-image: url('{{ asset('/client/assets/fixed-images/banner.jpg') }}');">
        <div class="container text-center wow fadeInUp" data-wow-delay=".2s">
            <nav class="breadcrumb-custom" aria-label="Breadcrumb">
                <a href="{{ route('client.trang_chu') }}">Trang chủ</a>
                <span class="separator">/</span>
                <span class="active-page">Phòng nghỉ</span>
            </nav>
            <h1>Không Gian Nghỉ Dưỡng Sang Trọng</h1>
            <p>Khám phá hệ thống phòng nghỉ ấm cúng, thiết kế tinh tế với tầm nhìn tuyệt đẹp ra núi rừng Sa Pa.</p>
        </div>
    </section>

    <!-- Rooms List Section -->
    <section class="py-5" style="background-color: var(--cream-bg);">
        <div class="container py-4">
            <div class="row g-4">
                @foreach($rooms as $room)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.2 + ($loop->index % 3) * 0.1 }}s">
                        <div class="luxury-card">
                            <div class="img-zoom-wrapper position-relative" style="height: 250px;">
                                <img src="{{ $room->thumbnail }}" alt="{{ $room->title }}" style="height: 100%; object-fit: cover;">
                                <span class="position-absolute top-0 end-0 m-3 px-3 py-1 bg-dark text-white font-xs rounded-pill opacity-90">
                                    <i class="flaticon-user me-1" style="color: var(--gold-primary);"></i>{{ $room->type }}
                                </span>
                            </div>
                            <div class="luxury-card-body">
                                <a href="{{ route('client.chi_tiet_phong', $room->id) }}" class="luxury-card-title h5">
                                    {{ $room->title }}
                                </a>
                                <p class="text-muted font-sm mb-3" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; line-height: 1.6;">
                                    {{ $room->description }}
                                </p>
                                
                                <div class="d-flex flex-wrap gap-2 mb-3">
                                    <span class="amenity-chip font-xs py-1 px-2"><i class="flaticon-wifi text-gold"></i> Wifi tốc độ cao</span>
                                    <span class="amenity-chip font-xs py-1 px-2"><i class="flaticon-coffee text-gold"></i> Bữa sáng miễn phí</span>
                                </div>

                                <div class="mt-auto d-flex align-items-center justify-content-between pt-3 border-top">
                                    <div>
                                        <small class="text-muted d-block font-xs">Giá phòng</small>
                                        <span class="luxury-price-tag">{{ number_format($room->price, 0, ',', '.') }}₫ <span class="font-xs fw-normal text-muted">/ đêm</span></span>
                                    </div>
                                    <a href="{{ route('client.chi_tiet_phong', $room->id) }}" class="btn-gold py-2 px-3 font-sm">
                                        Chi tiết & Đặt
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
