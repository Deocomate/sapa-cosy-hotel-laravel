@extends("client.layouts.layout")
@section("title", "Liên hệ - Sapa Cosy Hotel")

@section("content")
    <!-- Luxury Hero Banner -->
    <section class="luxury-hero-banner jarallax" style="background-image: url('/client/assets/images/pages/header__bg.webp');">
        <div class="container text-center wow fadeInUp" data-wow-delay=".2s">
            <nav class="breadcrumb-custom" aria-label="Breadcrumb">
                <a href="{{ route('client.trang_chu') }}">Trang chủ</a>
                <span class="separator">/</span>
                <span class="active-page">Liên hệ</span>
            </nav>
            <h1>Liên Hệ Với Chúng Tôi</h1>
            <p>Hãy gửi tin nhắn hoặc gọi ngay hotline để nhận tư vấn phòng và ưu đãi mới nhất từ Sapa Cosy Hotel.</p>
        </div>
    </section>

    <!-- Contact Info & Form Section -->
    <section class="py-5" style="background-color: var(--cream-bg);">
        <div class="container py-4">
            <div class="row g-5 align-items-stretch">
                <!-- Contact Info Cards -->
                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".3s">
                    <div class="p-4 p-md-5 bg-white rounded-1 border shadow-sm h-100 d-flex flex-column justify-content-between">
                        <div>
                            <span class="luxury-badge mb-3">Kết nối trực tiếp</span>
                            <h2 class="h3 fw-bold mb-4" style="color: var(--heading-color);">Sapa Cosy Hotel</h2>

                            <div class="d-flex flex-column gap-4 mb-4">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="p-3 bg-light rounded-circle border text-gold" style="color: var(--gold-primary);">
                                        <i class="flaticon-marker fs-4"></i>
                                    </div>
                                    <div>
                                        <strong class="d-block text-dark font-sm mb-1">Địa chỉ khách sạn:</strong>
                                        <span class="text-muted font-sm">{{ $hotelInfo->address }}</span>
                                    </div>
                                </div>

                                <div class="d-flex align-items-start gap-3">
                                    <div class="p-3 bg-light rounded-circle border text-gold" style="color: var(--gold-primary);">
                                        <i class="flaticon-phone-flip fs-4"></i>
                                    </div>
                                    <div>
                                        <strong class="d-block text-dark font-sm mb-1">Số điện thoại đặt phòng:</strong>
                                        <a href="tel:{{ $hotelInfo->contact_phone }}" class="text-dark fw-bold text-decoration-none hover-gold font-sm d-block">{{ $hotelInfo->contact_phone }}</a>
                                        @if(!empty($hotelInfo->contact_hotline))
                                            <a href="tel:{{ $hotelInfo->contact_hotline }}" class="text-dark fw-bold text-decoration-none hover-gold font-sm d-block">{{ $hotelInfo->contact_hotline }}</a>
                                        @endif
                                    </div>
                                </div>

                                <div class="d-flex align-items-start gap-3">
                                    <div class="p-3 bg-light rounded-circle border text-gold" style="color: var(--gold-primary);">
                                        <i class="flaticon-envelope fs-4"></i>
                                    </div>
                                    <div>
                                        <strong class="d-block text-dark font-sm mb-1">Email hỗ trợ khách hàng:</strong>
                                        <a href="mailto:{{ $hotelInfo->contact_email }}" class="text-muted text-decoration-none hover-gold font-sm">{{ $hotelInfo->contact_email }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 border-top">
                            <strong class="d-block text-dark font-sm mb-2">Theo dõi mạng xã hội:</strong>
                            <div class="d-flex align-items-center gap-2">
                                @if(!empty($hotelInfo->facebook_link))
                                    <a href="{{ $hotelInfo->facebook_link }}" target="_blank" rel="noopener" class="btn-gold-outline py-2 px-3 font-xs">
                                        Facebook Page
                                    </a>
                                @endif
                                @if(!empty($hotelInfo->zalo_link))
                                    <a href="{{ $hotelInfo->zalo_link }}" target="_blank" rel="noopener" class="btn-gold-outline py-2 px-3 font-xs">
                                        Zalo Official
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-7 wow fadeInUp" data-wow-delay=".5s">
                    <div class="p-4 p-md-5 bg-white rounded-1 border shadow-sm h-100">
                        <span class="luxury-badge mb-2">Gửi phản hồi</span>
                        <h2 class="h3 fw-bold mb-4" style="color: var(--heading-color);">Gửi thông tin cho chúng tôi</h2>

                        <form action="#" method="post" id="contact-form">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="contact_name" class="form-label font-sm fw-semibold">Họ và tên của bạn <span class="text-danger">*</span></label>
                                    <input type="text" id="contact_name" name="name" class="form-control p-3 font-sm" placeholder="Nguyễn Văn A" autocomplete="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="contact_email" class="form-label font-sm fw-semibold">Địa chỉ Email <span class="text-danger">*</span></label>
                                    <input type="email" id="contact_email" name="email" class="form-control p-3 font-sm" placeholder="example@gmail.com" autocomplete="email" spellcheck="false" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="contact_phone_input" class="form-label font-sm fw-semibold">Số điện thoại liên hệ <span class="text-danger">*</span></label>
                                    <input type="tel" id="contact_phone_input" name="phone" class="form-control p-3 font-sm" placeholder="0912345678" autocomplete="tel" inputmode="tel" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="contact_msg" class="form-label font-sm fw-semibold">Nội dung tin nhắn <span class="text-danger">*</span></label>
                                    <textarea id="contact_msg" name="msg" class="form-control p-3 font-sm" rows="5" placeholder="Nhập câu hỏi hoặc yêu cầu hỗ trợ của bạn..." required></textarea>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <button type="submit" class="btn-gold w-100 py-3 fs-6">
                                        <i class="flaticon-envelope me-2"></i>Gửi thông tin liên hệ
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Google Map -->
            <div class="row mt-5 wow fadeInUp" data-wow-delay=".6s">
                <div class="col-12">
                    <div class="rounded-1 overflow-hidden border shadow-sm bg-white p-2">
                        <iframe class="w-100 rounded-1" height="450"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.8!2d103.8417!3d22.3363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36cd40be1d2fab35%3A0x1d4a4a4b4d5c6e7f!2sSAPA%20COSY%20HOTEL!5e0!3m2!1svi!2s!4v1722758400000!5m2!1svi!2s"
                                style="border:0;" allowfullscreen="" loading="lazy" title="Bản đồ chỉ đường Sapa Cosy Hotel"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
