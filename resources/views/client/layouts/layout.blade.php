<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="{{ $hotelInfo->description ?? 'Sapa Cosy Hotel - Thiên đường nghỉ dưỡng giữa lòng Sa Pa' }}">
    <meta name="keywords" content="{{ $hotelInfo->title ?? 'Sapa Cosy Hotel' }}, Khách sạn Sa Pa, Du lịch Sa Pa, Đặt phòng Sa Pa">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Social Media -->
    <meta property="og:title" content="{{ $hotelInfo->title ?? 'Sapa Cosy Hotel' }}">
    <meta property="og:description" content="{{ $hotelInfo->description ?? 'Khách sạn nghỉ dưỡng ấm cúng, sang trọng tại Sa Pa' }}">
    <meta property="og:type" content="website">
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/client/assets/icons/hotel-icon.ico') }}" type="image/x-icon">
    
    <!-- Page Title -->
    <title>@yield('title', 'Sapa Cosy Hotel')</title>

    @include('client.components.styles')
    @stack('styles')
</head>

<body>
    <!-- Accessibility Skip Link -->
    <a href="#main-content" class="skip-link">Chuyển đến nội dung chính</a>

    <!-- Header Component -->
    @include('client.components.header')

    <!-- Main Content Container -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- Footer Component -->
    @include('client.components.footer')

    <!-- Back to Top Button -->
    <div id="rts-back-to-top" class="back-to-top-btn" aria-label="Trở về đầu trang" role="button" tabindex="0">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 15 12 9 6 15"></polyline>
        </svg>
    </div>

    @include('client.components.scripts')

    <script>
        // Native Back to Top Scroll Event Fallback
        document.addEventListener('DOMContentLoaded', function() {
            const backBtn = document.getElementById('rts-back-to-top');
            if (backBtn) {
                window.addEventListener('scroll', function() {
                    if (window.scrollY > 150) {
                        backBtn.classList.add('show');
                    } else {
                        backBtn.classList.remove('show');
                    }
                });
                backBtn.addEventListener('click', function() {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
            }
        });
    </script>

    @stack('scripts')
</body>
</html>
