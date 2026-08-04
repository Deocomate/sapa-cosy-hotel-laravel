<!-- Top header info bar -->
<div class="header__top py-2 border-bottom" style="background-color: var(--dark-navy); color: rgba(255,255,255,0.85); font-size: 0.875rem;">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-7 col-md-8">
                <div class="d-flex align-items-center flex-wrap gap-4">
                    <a class="text-white text-decoration-none d-inline-flex align-items-center gap-2" href="tel:{{$hotelInfo->contact_phone}}">
                        <i class="flaticon-phone-flip" style="color: var(--gold-primary);"></i>
                        <span>{{$hotelInfo->contact_phone}}</span>
                    </a>
                    <a class="text-white text-decoration-none d-inline-flex align-items-center gap-2" href="mailto:{{$hotelInfo->contact_email}}">
                        <i class="flaticon-envelope" style="color: var(--gold-primary);"></i>
                        <span>{{$hotelInfo->contact_email}}</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-md-4 text-md-end d-none d-md-block">
                <div class="location">
                    <a class="text-white text-decoration-none d-inline-flex align-items-center gap-2" href="{{$hotelInfo->map_link ?? '#'}}" target="_blank" rel="noopener">
                        <i class="flaticon-marker" style="color: var(--gold-primary);"></i>
                        <span class="text-truncate" style="max-width: 320px;">{{$hotelInfo->address}}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main navigation header -->
<header class="main__header sticky-top py-3 shadow-sm">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <!-- Brand Logo -->
            <div class="logo">
                <a href="{{ route('client.trang_chu') }}" class="d-flex align-items-center text-decoration-none">
                    <img src="{{ asset('/client/assets/fixed-images/logo-white.png') }}" alt="Sapa Cosy Hotel" style="height: 48px; width: auto;" class="d-block">
                </a>
            </div>

            <!-- Main Menu (Desktop) -->
            <div class="main__nav d-none d-lg-block">
                @include("client.components.menu")
            </div>

            <!-- Header Right Actions -->
            <div class="main__right d-flex align-items-center gap-3">
                <button class="btn btn-outline-dark d-lg-none p-2 border-0" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-label="Mở menu điều hướng">
                    <img src="/client/assets/images/icon/menu-icon.svg" width="24" height="24" alt="Menu">
                </button>
                <button type="button" data-bs-toggle="modal" data-bs-target="#bookRoomModal"
                        class="btn-gold">
                    <i class="flaticon-calendar me-1"></i>
                    <span>Đặt phòng ngay</span>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Offcanvas Menu -->
<div class="offcanvas offcanvas-start" id="offcanvasRight" tabindex="-1" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-bottom" style="background: var(--dark-navy); color: #fff;">
        <div class="d-flex align-items-center gap-2">
            <img src="{{asset('/client/assets/fixed-images/logo-white.png')}}" style="height: 38px;" alt="Sapa Cosy Hotel Logo">
        </div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Đóng menu"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-between p-4" style="background: #ffffff;">
        <nav class="navigation__menu" id="mobile__menu" aria-label="Menu di động">
            <ul class="list-unstyled d-flex flex-column gap-3 fs-5 fw-medium">
                <li><a href="{{ route('client.trang_chu') }}" class="text-dark text-decoration-none py-1 d-block">Trang chủ</a></li>
                <li><a href="{{ route('client.phong_nghi') }}" class="text-dark text-decoration-none py-1 d-block">Phòng nghỉ</a></li>
                <li><a href="{{ route('client.dich_vu') }}" class="text-dark text-decoration-none py-1 d-block">Dịch vụ</a></li>
                <li><a href="{{ route('client.bai_viet') }}" class="text-dark text-decoration-none py-1 d-block">Cẩm nang Sa Pa</a></li>
                <li><a href="{{ route('client.bai_bao') }}" class="text-dark text-decoration-none py-1 d-block">Bài báo liên quan</a></li>
                <li><a href="{{ route('client.lien_he') }}" class="text-dark text-decoration-none py-1 d-block">Liên hệ</a></li>
            </ul>
        </nav>
        
        <div class="offcanvase__bottom border-top pt-3 mt-4">
            <div class="d-flex flex-column gap-2 text-muted font-sm">
                <div><strong class="text-dark">Hotline:</strong> <a href="tel:{{$hotelInfo->contact_phone}}" class="text-gold text-decoration-none">{{$hotelInfo->contact_phone}}</a></div>
                <div><strong class="text-dark">Email:</strong> <a href="mailto:{{$hotelInfo->contact_email}}" class="text-muted text-decoration-none">{{$hotelInfo->contact_email}}</a></div>
                <div><strong class="text-dark">Địa chỉ:</strong> <span class="text-muted">{{$hotelInfo->address}}</span></div>
            </div>
        </div>
    </div>
</div>

<!-- Booking Modal Redesign -->
<div class="modal fade modal-luxury" id="bookRoomModal" tabindex="-1" aria-labelledby="bookRoomModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <form id="bookingForm" action="{{ route('client.booking') }}" method="post">
                @csrf
                <div class="modal-header">
                    <div class="d-flex align-items-center gap-2">
                        <i class="flaticon-calendar text-gold fs-4"></i>
                        <h2 class="modal-title fs-5 mb-0" id="bookRoomModalLabel">Đặt phòng tại Sapa Cosy Hotel</h2>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng cửa sổ"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="checkInDate" class="form-label">Ngày nhận phòng <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="checkInDate" name="checkInDate" min="{{ date('Y-m-d') }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="checkOutDate" class="form-label">Ngày trả phòng <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="checkOutDate" name="checkOutDate" min="{{ date('Y-m-d', strtotime('+1 day')) }}" required>
                        </div>
                        <div class="col-md-12">
                            <label for="fullName" class="form-label">Họ và tên <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Ví dụ: Nguyễn Văn A" autocomplete="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phoneNumber" class="form-label">Số điện thoại <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="0912345678" autocomplete="tel" inputmode="tel" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email liên hệ <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" autocomplete="email" spellcheck="false" required>
                        </div>
                        <div class="col-md-6">
                            <label for="adults" class="form-label">Số người lớn</label>
                            <input type="number" class="form-control" id="adults" name="adults" min="1" max="10" value="1" required>
                        </div>
                        <div class="col-md-6">
                            <label for="children" class="form-label">Số trẻ em</label>
                            <input type="number" class="form-control" id="children" name="children" min="0" max="10" value="0" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light border-top-0 px-4 py-3">
                    <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn-gold">Xác nhận đặt phòng</button>
                </div>
            </form>
        </div>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0 m-4 shadow-lg"
         style="z-index: 2000; border-left: 5px solid #28a745;" role="alert" aria-live="polite">
        <strong>Thành công!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Đóng thông báo"></button>
    </div>
@endif

@push("scripts")
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const bookingForm = document.getElementById("bookingForm");
            if (bookingForm) {
                bookingForm.addEventListener("submit", function (event) {
                    let isValid = true;
                    const phoneNumber = document.getElementById("phoneNumber");
                    const checkInDate = document.getElementById("checkInDate");
                    const checkOutDate = document.getElementById("checkOutDate");

                    phoneNumber.classList.remove("is-invalid");
                    checkInDate.classList.remove("is-invalid");
                    checkOutDate.classList.remove("is-invalid");

                    const phoneRegex = /^0[0-9]{9}$/;
                    if (!phoneRegex.test(phoneNumber.value.trim())) {
                        phoneNumber.classList.add("is-invalid");
                        isValid = false;
                    }

                    if (checkInDate.value && checkOutDate.value) {
                        const checkIn = new Date(checkInDate.value);
                        const checkOut = new Date(checkOutDate.value);
                        if (checkOut <= checkIn) {
                            checkOutDate.classList.add("is-invalid");
                            isValid = false;
                        }
                    }

                    if (!isValid) {
                        event.preventDefault();
                        alert("Vui lòng kiểm tra lại thông tin ngày nhận/trả phòng và số điện thoại hợp lệ!");
                    }
                });
            }
        });
    </script>
@endpush
