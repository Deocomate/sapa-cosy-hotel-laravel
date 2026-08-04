<footer class="rts__section rts__footer is__common__footer footer__background has__shape">
    <div class="container">
        <div class="row">
            <div class="footer__widget__wrapper">
                <!-- Widget 1: Info & Map -->
                <div class="rts__widget">
                    <p class="font-sm max-290 mt-20">
                        {{ $hotelInfo->title }}
                    </p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.4!2d103.8418!3d22.3362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36cd40be1d2fab35%3A0xabc123!2s458%20%C4%90i%E1%BB%87n%20Bi%E1%BB%87n%20Ph%E1%BB%A7%2C%20Sa%20Pa!5e0!3m2!1svi!2s!4v1722758400000!5m2!1svi!2s"
                        height="200" style="border:0;width: 100%" allowfullscreen="" loading="lazy"
                        title="Bản đồ Sapa Cosy Hotel"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <!-- Widget 2: Quick Links -->
                <div class="rts__widget">
                    <span class="widget__title">Liên kết nhanh</span>
                    <ul>
                        <li><a href="{{ route('client.trang_chu') }}" aria-label="footer__link">Trang chủ</a></li>
                        <li><a href="{{ route('client.phong_nghi') }}" aria-label="footer__link">Phòng nghỉ</a></li>
                        <li><a href="{{ route('client.dich_vu') }}" aria-label="footer__link">Dịch vụ</a></li>
                        <li><a href="{{ route('client.bai_viet') }}" aria-label="footer__link">Cẩm nang Sa Pa</a></li>
                        <li><a href="{{ route('client.bai_bao') }}" aria-label="footer__link">Bài báo</a></li>
                        <li><a href="{{ route('client.lien_he') }}" aria-label="footer__link">Liên hệ</a></li>
                    </ul>
                </div>

                <!-- Widget 3: Services -->
                <div class="rts__widget">
                    <span class="widget__title">Dịch vụ</span>
                    <ul>
                        <li>Phòng nghỉ & Ban công view núi</li>
                        <li>Nhà hàng & Quầy bar</li>
                        <li>Spa & Xông hơi</li>
                        <li>Xe đưa đón tận nơi</li>
                        <li>Bida & Giải trí</li>
                        <li>Bữa sáng Tây Bắc</li>
                    </ul>
                </div>

                <!-- Widget 4: Contact -->
                <div class="rts__widget">
                    <span class="widget__title">Liên hệ</span>
                    <ul>
                        <li>
                            <a aria-label="footer__contact" href="tel:{{$hotelInfo->contact_phone}}">
                                <i class="flaticon-phone-flip"></i>
                                {{$hotelInfo->contact_phone}}
                            </a>
                        </li>
                        @if(!empty($hotelInfo->contact_hotline))
                            <li>
                                <a aria-label="footer__contact" href="tel:{{$hotelInfo->contact_hotline}}">
                                    <i class="flaticon-phone-flip"></i>
                                    {{$hotelInfo->contact_hotline}}
                                </a>
                            </li>
                        @endif
                        <li>
                            <a aria-label="footer__contact" href="mailto:{{$hotelInfo->contact_email}}">
                                <i class="flaticon-envelope"></i> {{$hotelInfo->contact_email}}
                            </a>
                        </li>
                        <li>
                            <a aria-label="footer__contact" href="{{ $hotelInfo->map_link ?? '#' }}" target="_blank">
                                <i class="flaticon-marker"></i>
                                {{$hotelInfo->address}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="copyright__text">
        <div class="container">
            <div class="row">
                <div class="copyright__wrapper">
                    <p class="mb-0">Copyright © {{ date('Y') }} Sapa Cosy Hotel. All rights reserved.</p>
                    <div class="footer__social__link">
                        @if(!empty($hotelInfo->facebook_link))
                            <a href="{{$hotelInfo->facebook_link}}" target="_blank" rel="noopener" aria-label="footer__social" class="link__item">Facebook</a>
                        @endif
                        @if(!empty($hotelInfo->zalo_link))
                            <a href="{{$hotelInfo->zalo_link}}" target="_blank" rel="noopener" aria-label="footer__social" class="link__item ms-3">Zalo</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
