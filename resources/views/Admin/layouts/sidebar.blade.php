<div class="nk-sidebar nk-sidebar-fixed is-light" data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('admin.home') }}" class="logo-link nk-sidebar-logo text-center">
                <img class="logo-light logo-img" src="{{ asset('admin-assets/images/logo/mini-mehradmall-logo.png') }}"
                    srcset="{{ asset('admin-assets/images/logo/mini-mehradmall-logo.png') }}" alt="لوگو" />
                <img class="logo-dark logo-img" src="{{ asset('admin-assets/images/logo/mini-mehradmall-logo.png') }}"
                    srcset="{{ asset('admin-assets/images/logo/mini-mehradmall-logo.png') }}" alt="لوگوی تاریک" />
                <img class="logo-small logo-img logo-img-small"
                    src="{{ asset('admin-assets/images/logo/mini-mehradmall-logo.png') }}"
                    srcset="{{ asset('admin-assets/images/logo/mini-mehradmall-logo.png') }}" alt="لوگوی کوچک" />
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
        </div>
    </div>
    <!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">

                    <!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">داشبوردها</h6>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route("list.index") }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-growth"></em></span>
                            <span class="nk-menu-text">لیست کلی</span>
                        </a>
                    </li>

                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route("phone.index") }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-presentation"></em></span>
                            <span class="nk-menu-text">تلفن ها </span>
                        </a>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route("vlan.index") }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-cc-alt2"></em></span>
                            <span class="nk-menu-text">ویلن ها</span>
                        </a>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route("ip.index") }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                            <span class="nk-menu-text">ایپی استاتیک ها</span>
                        </a>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route("router.index") }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-bitcoin-cash"></em></span>
                            <span class="nk-menu-text">روتر</span>
                        </a>
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="html/index-crypto.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-bitcoin-cash"></em></span>
                            <span class="nk-menu-text">کارت های پارکینگ</span>
                        </a>
                    </li>




                </ul>
                <!-- .nk-menu -->
            </div>
            <!-- .nk-sidebar-menu -->
        </div>
        <!-- .nk-sidebar-content -->
    </div>
    <!-- .nk-sidebar-element -->
</div>
