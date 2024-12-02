<!DOCTYPE html>
<html lang="en">

<head>
    @include('Admin.layouts.head-tag')
    @yield('head-tag')
</head>

<body class="dark-mode has-rtl nk-body ui-rounder has-sidebar">

    <div class="nk-app-root">
        <div class="nk-main">
            @include('Admin.layouts.sidebar')
            <div class="nk-wrap">
                @include('Admin.layouts.header')
               
                <div class="nk-content nk-content-fluid">
                    @yield('content')
                </div>
                @include('Admin.layouts.footer')
            </div>
        </div>
       
    </div>

    @include('Admin.layouts.scripts')
    @yield('script')
    @include("Admin.alert.sweetalert.success")
    @include("Admin.alert.sweetalert.error")


</body>

</html>
