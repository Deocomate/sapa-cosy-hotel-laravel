<nav class="navigation__menu" id="main__menu" aria-label="Menu chính">
    <ul class="list-unstyled d-flex align-items-center gap-4 mb-0">
        <li class="navigation__menu--item {{ request()->routeIs('client.trang_chu') ? 'active' : '' }}">
            <a href="{{ route('client.trang_chu') }}" class="navigation__menu--item__link">
                Trang chủ
            </a>
        </li>
        <li class="navigation__menu--item {{ request()->routeIs('client.phong_nghi*') || request()->routeIs('client.chi_tiet_phong') ? 'active' : '' }}">
            <a href="{{ route('client.phong_nghi') }}" class="navigation__menu--item__link">
                Phòng nghỉ
            </a>
        </li>
        <li class="navigation__menu--item {{ request()->routeIs('client.dich_vu*') ? 'active' : '' }}">
            <a href="{{ route('client.dich_vu') }}" class="navigation__menu--item__link">
                Dịch vụ
            </a>
        </li>
        <li class="navigation__menu--item {{ request()->routeIs('client.bai_viet*') ? 'active' : '' }}">
            <a href="{{ route('client.bai_viet') }}" class="navigation__menu--item__link">
                Cẩm nang Sa Pa
            </a>
        </li>
        <li class="navigation__menu--item {{ request()->routeIs('client.bai_bao*') ? 'active' : '' }}">
            <a href="{{ route('client.bai_bao') }}" class="navigation__menu--item__link">
                Bài báo
            </a>
        </li>
        <li class="navigation__menu--item {{ request()->routeIs('client.lien_he') ? 'active' : '' }}">
            <a href="{{ route('client.lien_he') }}" class="navigation__menu--item__link">
                Liên hệ
            </a>
        </li>
    </ul>
</nav>
