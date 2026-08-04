@extends("client.layouts.layout")
@section("title", $service->title . " - Sapa Cosy Hotel")

@section("content")
    <!-- Luxury Hero Banner -->
    <section class="luxury-hero-banner jarallax" style="background-image: url('{{ $service->thumbnail }}');">
        <div class="container text-center wow fadeInUp" data-wow-delay=".2s">
            <nav class="breadcrumb-custom" aria-label="Breadcrumb">
                <a href="{{ route('client.trang_chu') }}">Trang chủ</a>
                <span class="separator">/</span>
                <a href="{{ route('client.dich_vu') }}">Dịch vụ</a>
                <span class="separator">/</span>
                <span class="active-page">{{ $service->title }}</span>
            </nav>
            <h1>{{ $service->title }}</h1>
            <p>Trải nghiệm dịch vụ cao cấp được thiết kế riêng cho quý khách tại Sapa Cosy Hotel.</p>
        </div>
    </section>

    <!-- Service Detail Content -->
    <section class="py-5" style="background-color: #ffffff;">
        <div class="container py-4">
            <div class="row g-5">
                <!-- Main Service Description -->
                <div class="col-lg-8 wow fadeInUp" data-wow-delay=".3s">
                    <div class="img-zoom-wrapper shadow-lg mb-4" style="border-radius: 4px; overflow: hidden; max-height: 460px;">
                        <img src="{{ $service->thumbnail }}" alt="{{ $service->title }}" style="width: 100%; height: 460px; object-fit: cover;">
                    </div>

                    <div class="service-intro mb-5">
                        <span class="luxury-badge mb-2">{{ $service->type }}</span>
                        <h2 class="h3 fw-bold mb-3" style="color: var(--heading-color);">Mô tả dịch vụ</h2>
                        <p class="text-secondary fs-6" style="line-height: 1.8;">{{ $service->description }}</p>
                    </div>

                    <div class="service-details-rich">
                        <h2 class="h4 fw-bold mb-3" style="color: var(--heading-color);">Nội dung chi tiết</h2>
                        <div class="p-4 rounded-1 border bg-white shadow-sm" style="line-height: 1.8;">
                            {!! $service->details !!}
                        </div>
                    </div>
                </div>

                <!-- Sidebar Action Card -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay=".5s">
                    <div class="sticky-sidebar-card">
                        <span class="luxury-badge mb-2">Đăng ký dịch vụ</span>
                        <div class="mb-3">
                            <span class="text-muted font-xs d-block">Giá dịch vụ</span>
                            <span class="luxury-price-tag" style="font-size: 2rem;">{{ number_format($service->price, 0, ',', '.') }}₫</span>
                        </div>

                        <div class="p-3 bg-light rounded-1 mb-4 border">
                            <strong class="d-block font-sm text-dark mb-1">Loại hình dịch vụ:</strong>
                            <span class="text-muted font-sm">{{ $service->type }}</span>
                        </div>

                        <button type="button" data-bs-toggle="modal" data-bs-target="#bookRoomModal" class="btn-gold w-100 py-3 mb-3 fs-6">
                            <i class="flaticon-calendar me-2"></i>Đặt dịch vụ ngay
                        </button>

                        <div class="p-3 rounded-1 bg-light border text-center">
                            <small class="text-muted d-block mb-1">Hỗ trợ nhanh 24/7</small>
                            <a href="tel:{{ $hotelInfo->contact_phone }}" class="fw-bold text-dark text-decoration-none font-sm">
                                <i class="flaticon-phone-flip text-gold me-1"></i>{{ $hotelInfo->contact_phone }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
