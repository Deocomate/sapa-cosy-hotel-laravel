@extends("client.layouts.layout")
@section("title", $blog->title . " - Sapa Cosy Hotel")

@section("content")
    <!-- Luxury Hero Banner -->
    <section class="luxury-hero-banner jarallax" style="background-image: url('{{ $blog->thumbnail }}');">
        <div class="container text-center max-800 wow fadeInUp" data-wow-delay=".2s">
            <nav class="breadcrumb-custom" aria-label="Breadcrumb">
                <a href="{{ route('client.trang_chu') }}">Trang chủ</a>
                <span class="separator">/</span>
                <a href="{{ route('client.bai_viet') }}">Cẩm nang Sa Pa</a>
                <span class="separator">/</span>
                <span class="active-page">Bài viết</span>
            </nav>
            <h1>{{ $blog->title }}</h1>
            <div class="d-flex align-items-center justify-content-center gap-3 font-sm opacity-90 mt-3">
                <span><i class="flaticon-user me-1" style="color: var(--gold-primary);"></i>{{ $blog->author ?? 'Sapa Cosy Hotel' }}</span>
                <span>•</span>
                <span><i class="flaticon-calendar me-1" style="color: var(--gold-primary);"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}</span>
            </div>
        </div>
    </section>

    <!-- Article Content Section -->
    <section class="py-5" style="background-color: #ffffff;">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10 wow fadeInUp" data-wow-delay=".3s">
                    <div class="img-zoom-wrapper shadow-lg mb-4" style="border-radius: 4px; overflow: hidden; max-height: 460px;">
                        <img src="{{ $blog->thumbnail }}" alt="{{ $blog->title }}" style="width: 100%; height: 460px; object-fit: cover;">
                    </div>

                    <!-- Article Lead Summary -->
                    @if(!empty($blog->description))
                        <div class="p-4 rounded-1 bg-light border-start border-4 mb-4" style="border-left-color: var(--gold-primary) !important;">
                            <p class="lead fst-italic text-dark mb-0" style="line-height: 1.8;">
                                {{ $blog->description }}
                            </p>
                        </div>
                    @endif

                    <!-- Detailed Article Body -->
                    <div class="article-body-content fs-6 text-secondary mb-5" style="line-height: 1.9;">
                        {!! $blog->detail !!}
                    </div>

                    <!-- Author and Tags Bar -->
                    <div class="p-4 bg-light rounded-1 border d-flex flex-wrap align-items-center justify-content-between gap-3 mb-5">
                        <div class="d-flex align-items-center gap-3">
                            <div class="p-3 bg-white rounded-circle shadow-sm border text-gold">
                                <i class="flaticon-user fs-4" style="color: var(--gold-primary);"></i>
                            </div>
                            <div>
                                <h3 class="h6 fw-bold mb-0 text-dark">Tác giả: {{ $blog->author ?? 'Sapa Cosy Hotel' }}</h3>
                                <small class="text-muted">Đăng ngày {{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}</small>
                            </div>
                        </div>

                        <a href="{{ route('client.bai_viet') }}" class="btn-gold-outline py-2 px-4 font-sm">
                            <i class="flaticon-arrow-left me-2"></i>Quay lại cẩm nang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
