<div class="nk-header is-light nk-header-fixed is-light">
    <div class="container-xl wide-xl">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ms-n1 me-3">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="html/index.html" class="logo-link">
                    <img class="logo-light logo-img" src="{{ asset("admin-assets/images/logo/mini-mehradmall-logo.png") }}" srcset="{{ asset("admin-assets/images/logo/mini-mehradmall-logo.png") }} 2x" alt="لوگو" />
                    <img class="logo-dark logo-img" src="{{ asset("admin-assets/images/logo/mini-mehradmall-logo.png") }}" srcset="{{ asset("admin-assets/images/logo/mini-mehradmall-logo.png") }}" alt="لوگوی تاریک" />
                </a>
            </div>
            <!-- .nk-header-brand -->
        
            <!-- .nk-header-menu -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                   
                    <li class="dropdown notification-dropdown">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">اطلاع رسانی ها</span>
                                <a href="#">علامت گذاری همه به عنوان خوانده شده</a>
                            </div>
                            <div class="dropdown-body">
                                <div class="nk-notification">
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-primary-dim ni ni-share"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">مهرداد <span>Dashlite-v2</span> را با شما به اشتراک گذاشت.</div>
                                            <div class="nk-notification-time">هم اکنون</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-info-dim ni ni-edit"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">مهرداد شما را به ویرایش پوشه <span>DashLite</span> <span>دعوت</span> کرد</div>
                                            <div class="nk-notification-time">2 ساعت پیش</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-primary-dim ni ni-share"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">شما <span>پروژه نسخه 2</span> را با مجید به اشتراک گذاشتید.</div>
                                            <div class="nk-notification-time">7 روز پیش</div>
                                        </div>
                                    </div>
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-success-dim ni ni-spark"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text"><span>اشتراک</span> شما با موفقیت تمدید شد.</div>
                                            <div class="nk-notification-time">2 ماه پیش</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .nk-notification -->
                            </div>
                            <!-- .nk-dropdown-body -->
                            <div class="dropdown-foot center">
                                <a href="#">مشاهده همه</a>
                            </div>
                        </div>
                    </li>
                
                    <!-- .dropdown -->
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>ف‌ت</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">فرشید ترنیان</span>
                                        <span class="sub-text">your@email.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>مشاهده پروفایل</span></a>
                                    </li>
                                    <li>
                                        <a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>تنظیمات حساب</span></a>
                                    </li>
                                    <li>
                                        <a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>فعالیت ورود</span></a>
                                    </li>
                                    <li>
                                        <a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>حالت تاریک</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <a href="#"><em class="icon ni ni-signout"></em><span>خروج</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <section class="toast-wrapper flex-row-reverse">
                    @include('Admin.alert.toast.success')
                    @include('Admin.alert.toast.error')
                </section>
            </div>
           
            <!-- .nk-header-tools -->

          
        </div>
        <!-- .nk-header-wrap -->
        
    </div>
    
    <!-- .container-fliud -->
</div>