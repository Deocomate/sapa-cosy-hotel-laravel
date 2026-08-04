@extends("client.layouts.layout")
@section("title", "Bài báo & Truyền thông - Sapa Cosy Hotel")

@section("content")
    <!-- Luxury Hero Banner -->
    <section class="luxury-hero-banner jarallax" style="background-image: url('{{ asset('/client/assets/fixed-images/banner.jpg') }}');">
        <div class="container text-center wow fadeInUp" data-wow-delay=".2s">
            <nav class="breadcrumb-custom" aria-label="Breadcrumb">
                <a href="{{ route('client.trang_chu') }}">Trang chủ</a>
                <span class="separator">/</span>
                <span class="active-page">Bài báo</span>
            </nav>
            <h1>Báo Chí & Truyền Thông Nổi Bật</h1>
            <p>Tổng hợp các bài viết, đánh giá từ các trang báo và tạp chí du lịch dành cho Sapa Cosy Hotel.</p>
        </div>
    </section>

    <!-- News Section -->
    <section class="py-5" style="background-color: var(--cream-bg);">
        <div class="container py-4">
            <div class="row g-4">
                <!-- Main Press Posts List -->
                <div class="col-lg-8">
                    <div class="d-flex flex-column gap-4">
                        @foreach($posts as $blog)
                            <div class="luxury-card flex-row flex-wrap flex-md-nowrap overflow-hidden wow fadeInUp" data-wow-delay="{{ 0.2 + ($loop->index % 3) * 0.1 }}s">
                                <div class="img-zoom-wrapper luxury-card-horizontal-img">
                                    <a href="{{ $blog->url }}" target="_blank" rel="noopener">
                                        <img src="{{ $blog->thumbnail }}" alt="{{ $blog->title }}">
                                    </a>
                                </div>
                                <div class="luxury-card-body p-4">
                                    <div class="d-flex align-items-center gap-3 font-xs text-muted mb-2">
                                        <span><i class="flaticon-user text-gold me-1"></i>{{ $blog->author ?? 'Nguồn báo chí' }}</span>
                                        <span><i class="flaticon-calendar text-gold me-1"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}</span>
                                    </div>
                                    <a href="{{ $blog->url }}" target="_blank" rel="noopener" class="luxury-card-title h5">
                                        {{ $blog->title }} <i class="flaticon-external-link font-xs text-muted ms-1"></i>
                                    </a>
                                    <p class="text-muted font-sm mb-3" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; line-height: 1.6;">
                                        {{ $blog->description }}
                                    </p>
                                    <div class="mt-auto">
                                        <a href="{{ $blog->url }}" target="_blank" rel="noopener" class="btn-gold-outline py-1 px-3 font-sm">
                                            Đọc bài viết gốc <i class="flaticon-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Sidebar Latest Press Posts -->
                <div class="col-lg-4">
                    <div class="p-4 bg-white rounded-1 border shadow-sm sticky-top wow fadeInUp" data-wow-delay=".4s" style="top: 100px;">
                        <h2 class="h5 fw-bold mb-4 border-bottom pb-2" style="color: var(--heading-color);">Tin tức nổi bật</h2>
                        <div class="d-flex flex-column gap-3">
                            @foreach($posts->take(4) as $latestPost)
                                <div class="d-flex align-items-center gap-3 pb-3 border-bottom">
                                    <div class="img-zoom-wrapper rounded-1" style="width: 80px; height: 70px; flex-shrink: 0;">
                                        <a href="{{ $latestPost->url }}" target="_blank" rel="noopener">
                                            <img src="{{ $latestPost->thumbnail }}" alt="{{ $latestPost->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="{{ $latestPost->url }}" target="_blank" rel="noopener" class="text-dark font-sm fw-semibold text-decoration-none hover-gold" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                            {{ $latestPost->title }}
                                        </a>
                                        <small class="text-muted font-xs d-block mt-1">
                                            <i class="flaticon-calendar text-gold me-1"></i>{{ \Carbon\Carbon::parse($latestPost->created_at)->format('d/m/Y') }}
                                        </small>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
