<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.layouts.head-tag')
    @yield('head-tag')
</head>

<body class="dark-mode has-rtl nk-body ui-rounder has-sidebar">

    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content">
                    <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="{{ asset("admin-assets/images/logo/mini-mehradmall-logo.png") }}"
                                    srcset="{{ asset("admin-assets/images/logo/mini-mehradmall-logo.png") }}" alt="لوگو">
                                <img class="logo-dark logo-img logo-img-lg" src="{{ asset("admin-assets/images/logo/mini-mehradmall-logo.png") }}"
                                    srcset="{{ asset("admin-assets/images/logo/mini-mehradmall-logo.png") }}" alt="لوگوی تاریک">
                            </a>
                        </div>
                        <div class="card">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">ورود</h4>
                                     
                                    </div>
                                </div>
                                @yield('content')
                              
                           
                           
                            </div>
                        </div>
                    </div>
                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container wide-lg">
                            <div class="row g-3">
                              
                                <div class="col-lg-6">
                                    <div class="nk-block-content text-center text-lg-left">
                                        <div class="nk-footer-copyright">© تمام حقوق محفوظ است. طراحی و توسعه توسط  <a target="_blank" rel="nofollow" href="https://www.rtl-theme.com/author/farshid_tarnian">MehradMall-IT(پارسا خیاط زاده)</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    @yield('script')
    @include('Admin.alert.sweetalert.success')
    @include('Admin.alert.sweetalert.error')


</body>

</html>
