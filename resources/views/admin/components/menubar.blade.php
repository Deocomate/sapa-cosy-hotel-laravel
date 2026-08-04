<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('admin.index') }}" class="brand-link">
        <img src="{{asset("/admin/dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Site</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">ADMIN ACTION</li>
                <li class="nav-item">
                    <a href="{{route("admin.index")}}" class="nav-link">
                        <i class="bi bi-speedometer"></i>
                        <p>Home<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("admin.index")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trang chủ</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route("admin.hotel-info.index")}}" class="nav-link">
                        <i class="bi bi-info-circle"></i>
                        <p>Thông tin Khách sạn<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("admin.hotel-info.index")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Quản lý thông tin khách sạn</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route("admin.services.index")}}" class="nav-link">
                        <i class="bi bi-list-stars"></i>
                        <p>Dịch Vụ<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("admin.services.index")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách dịch vụ</p>
                            </a>
                            <a href="{{route("admin.services.create")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm dịch vụ mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route("admin.rooms.index")}}" class="nav-link">
                        <i class="bi bi-house-fill"></i>
                        <p>Phòng<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("admin.rooms.index")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách phòng</p>
                            </a>
                            <a href="{{route("admin.rooms.create")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm phòng mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route("admin.reviews.index")}}" class="nav-link">
                        <i class="bi bi-chat-left-text-fill"></i>
                        <p>Đánh giá<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("admin.reviews.index")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách đánh giá</p>
                            </a>
                            <a href="{{route("admin.reviews.create")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm đánh giá mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route("admin.posts.index")}}" class="nav-link">
                        <i class="bi bi-file-earmark-post-fill"></i>
                        <p>Bài viết<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("admin.posts.index")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách bài viết</p>
                            </a>
                            <a href="{{route("admin.posts.create")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm bài viết mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route("admin.blogs.index")}}" class="nav-link">
                        <i class="bi bi-journal-richtext"></i>
                        <p>Blogs<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("admin.blogs.index")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách blogs</p>
                            </a>
                            <a href="{{route("admin.blogs.create")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm blog mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route("admin.locations.index")}}" class="nav-link">
                        <i class="bi bi-map"></i>
                        <p>Địa điểm tham quan<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("admin.locations.index")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh sách</p>
                            </a>
                            <a href="{{route("admin.locations.create")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm địa điểm mới</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route("admin.passwordReset")}}" class="nav-link">
                        <i class="bi bi-key"></i>
                        <p>Quản lý tài khoản<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("admin.passwordReset")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Đổi mật khẩu</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>

@push('scripts')
    <script>
        /*** add active class and stay opened when selected ***/
        var url = window.location;
        console.log(url.href)

        // for sidebar menu entirely but not cover treeview
        $('ul.nav-sidebar a').filter(function () {
            if (this.href) {
                return this.href === url.href;
            }
        }).addClass('active');

        // for the treeview
        $('ul.nav-treeview a').filter(function () {
            if (this.href) {
                return this.href === url.href;
            }
        }).parentsUntil(" .nav-sidebar> .nav-treeview").addClass('menu-open').prev('a').addClass('active');
    </script>
@endpush
