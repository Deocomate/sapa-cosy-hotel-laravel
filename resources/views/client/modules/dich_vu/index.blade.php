@extends("client.layouts.layout")
@section("title", "Dịch vụ & Tiện ích - Sapa Cosy Hotel")

@section("content")
    <!-- Luxury Hero Banner -->
    <section class="luxury-hero-banner jarallax" style="background-image: url('{{ asset('/client/assets/fixed-images/banner.jpg') }}');">
        <div class="container text-center wow fadeInUp" data-wow-delay=".2s">
            <nav class="breadcrumb-custom" aria-label="Breadcrumb">
                <a href="{{ route('client.trang_chu') }}">Trang chủ</a>
                <span class="separator">/</span>
                <span class="active-page">Dịch vụ</span>
            </nav>
            <h1>Dịch Vụ & Tiện Ích Đẳng Cấp</h1>
            <p>Trải nghiệm dịch vụ chăm sóc tận tâm, nâng tầm kỳ nghỉ dưỡng của bạn tại Sapa Cosy Hotel.</p>
        </div>
    </section>

    <!-- Services List Section -->
    <section class="py-5" style="background-color: var(--cream-bg);">
        <div class="container py-4">
            <div class="d-flex flex-column gap-5">
                @foreach($services as $service)
                    <div class="p-4 p-md-5 bg-white rounded-1 shadow-sm border wow fadeInUp" data-wow-delay="{{ 0.2 + ($loop->index % 2) * 0.2 }}s">
                        <div class="row align-items-center g-4 {{ $loop->index % 2 == 1 ? 'flex-row-reverse' : '' }}">
                            <div class="col-lg-6">
                                <div class="img-zoom-wrapper jarallax" style="height: 340px; border-radius: 4px;">
                                    <img class="jarallax-img" src="{{ $service->thumbnail }}" alt="{{ $service->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="service-content ps-lg-3">
                                    <span class="luxury-badge mb-2">{{ $service->type }}</span>
                                    <h2 class="h2 fw-bold text-dark mb-3" style="font-family: 'Playfair Display', serif;">{{ $service->title }}</h2>
                                    <p class="text-muted font-sm mb-4" style="line-height: 1.8;">
                                        {{ $service->description }}
                                    </p>
                                    <div class="d-flex align-items-center justify-content-between pt-3 border-top">
                                        <div>
                                            <span class="font-xs text-muted d-block">Mức giá tham khảo</span>
                                            <span class="luxury-price-tag">{{ number_format($service->price, 0, ',', '.') }}₫</span>
                                        </div>
                                        <a href="{{ route('client.dich_vu_chi_tiet', $service->id) }}" class="btn-gold">
                                            Xem chi tiết dịch vụ
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
