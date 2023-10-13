<!doctype html>
<html lang="en" dir="rtl">


<!-- Mirrored from fudademo.ir/foap/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2023 02:49:33 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Dashboard | پنل مدیریت فوداتکو</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/core/core.css') }}">
    <!-- endinject -->

    <!-- preloader css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/preloader.min.css') }}" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/assets/css/bootstrap-rtl.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/assets/css/app-rtl.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/flatpickr/flatpickr.min.css') }}">
    <!-- inject:css -->

    <!-- <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css"> -->
    <!-- endinject -->
    <link rel="stylesheet" href="{{ asset('admin/style/css/style-rtl.min.css') }}">
    <!-- Layout styles -->

    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{ asset('style/images/favicon.png') }}" />
    @yield('style')
</head>
<style type="text/css">
    /* <blade font|-face%20%7B>font-family: "iransans";
    src: url("style/fonts/IRANSansWeb_Light.html") format("woff2");
    src: url("style/fonts/IRANSansWeb_Light.woff") format("woff");
    } */

    *body {
        font-family: iransans;

    }
</style>

<body>
    @yield('content')
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center bg-dark p-3">

                <h5 class="m-0 me-2 text-white">سفارشی سازی تم</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="m-0" />

            <div class="p-4">
                <h6 class="mb-3">چیدمان</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-vertical" value="vertical">
                    <label class="form-check-label" for="layout-vertical">عمومی</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-horizontal" value="horizontal">
                    <label class="form-check-label" for="layout-horizontal">افقی</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">حالت چیدمان</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light" value="light">
                    <label class="form-check-label" for="layout-mode-light">روشن</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
                    <label class="form-check-label" for="layout-mode-dark">تاریک</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">عرض طرح بندی</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    <label class="form-check-label" for="layout-width-fuild">کامل</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    <label class="form-check-label" for="layout-width-boxed">باکس</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">طرح بندی</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-position" id="layout-position-fixed" value="fixed" onchange="document.body.setAttribute('data-layout-scrollable', 'false')">
                    <label class="form-check-label" for="layout-position-fixed">ثابت</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-position" id="layout-position-scrollable" value="scrollable" onchange="document.body.setAttribute('data-layout-scrollable', 'true')">
                    <label class="form-check-label" for="layout-position-scrollable">اسکرول</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">رنگ تاب بار</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                    <label class="form-check-label" for="topbar-color-light">روشن</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                    <label class="form-check-label" for="topbar-color-dark">تاریک</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">اندازه سایدبار</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                    <label class="form-check-label" for="sidebar-size-default">پیش فرض</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                    <label class="form-check-label" for="sidebar-size-compact">فشرده</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                    <label class="form-check-label" for="sidebar-size-small">کوچک</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">رنگ سایدبار</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                    <label class="form-check-label" for="sidebar-color-light">روشن</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                    <label class="form-check-label" for="sidebar-color-dark">تاریک</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                    <label class="form-check-label" for="sidebar-color-brand">برند</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">جهت نمایش</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr" value="ltr">
                    <label class="form-check-label" for="layout-direction-ltr">چپ چین</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl" value="rtl">
                    <label class="form-check-label" for="layout-direction-rtl">راست چین</label>
                </div>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>



    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- منوی کشویی  -->
    <script src="{{ asset('admin/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <!-- اسکرول بار زیبا -->
    <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>



    <!-- pace js  نوار لودینگ بالا  -->
    <!-- <script src="assets/libs/pace-js/pace.min.js"></script> -->
    <!-- ایکون -->
    <script src="{{ asset('admin/assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
    <!-- endinject -->
    <script src="{{ asset('admin/style/js/dashboard-light.js') }}"></script>
    <!-- ایکون منو -->
    <script src="{{ asset('admin/assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('admin/style/js/template.html') }}"></script>

    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    @yield('script')

</body>


<!-- Mirrored from fudademo.ir/foap/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2023 02:49:55 GMT -->

</html>
