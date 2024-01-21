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

    <!-- preloader css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/preloader.min.css') }}" type="text/css" />

    <!-- table search -->
    <link href="{{ asset('admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">

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

    <link rel="shortcut icon" href="{{ asset('admin/style/images/favicon.png') }}" />
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

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index-2.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('admin/assets/images/logo-sm.svg') }}" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('admin/assets/images/logo-sm.svg') }}" alt="" height="24"> <span class="logo-txt">فوداتکو</span>
                            </span>
                        </a>

                        <a href="index-2.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('admin/assets/images/logo-sm.svg') }}" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('admin/assets/images/logo-sm.svg') }}" alt="" height="24"> <span class="logo-txt">فوداتکو</span>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="جستجو ...">
                            <button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>
                        </div>
                    </form>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="search" class="icon-lg"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="جستجو ..." aria-label="Search Result">

                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>



                    <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item" id="mode-setting-btn">
                            <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                            <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block me-lg-3">
                        <button type="button" class="btn header-item noti-icon position-relative" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="bell" class="icon-lg"></i>
                            <span class="badge bg-danger rounded-pill">۴</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0">اعلانات</h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small text-reset text-decoration-underline">۴ پیام خوانده نشده</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="{{ asset('admin/assets/images/users/avatar-3.jpg') }}" class="rounded-circle avatar-sm" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1"></h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1"></p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>۵۸ دقیقه پیش</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-sm me-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="bx bx-cart"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">سفارش شما ثبت شد</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1"></p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>۴۸ دقیقه پیش</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 avatar-sm me-3">
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="bx bx-badge-check"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">سفارش شما ارسال شد</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1"></p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>۳ دقیقه پیش</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="{{ asset('admin/assets/images/users/avatar-6.jpg') }}" class="rounded-circle avatar-sm" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">مختار مینائی</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1"></p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>۴۵ دقیقه پیش</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i> <span>مشاهده همه</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{ asset('admin/assets/images/users/avatar-1.jpg') }}" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium">ادمین</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i>پروفایل</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i>قفل صفحه</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i>خروج</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <!-- <li class="menu-title" data-key="t-menu">منو</li> -->

                        <li>
                            <a href="index.html">
                                <i data-feather="home"></i>
                                <span data-key="t-dashboard">داشبورد</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="briefcase"></i>
                                <span data-key="t-components">محصولات</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ui-alerts.html" data-key="t-alerts">افزودن محصول جدید</a></li>
                                <li><a href="ui-buttons.html" data-key="t-buttons">لیست محصولات</a></li>
                                <li><a href="ui-buttons.html" data-key="t-buttons">دسته بندی ها</a></li>
                                <li><a href="ui-buttons.html" data-key="t-buttons">برند ها</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="gift"></i>
                                <span data-key="t-ui-elements">تخفیفات</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="extended-sweet-alert.html" data-key="t-sweet-alert">افزودن تخفیف جدید</a></li>
                                <li><a href="extended-sweet-alert.html" data-key="t-sweet-alert">لیست تخفیفات</a></li>
                            </ul>
                        </li>



                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="users"></i>
                                <span data-key="t-authentication">کاربران</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pages-login.html" data-key="t-login">لیست کاربران</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="shopping-cart"></i>
                                <span data-key="t-pages">سفارشات</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pages-starter.html" data-key="t-starter-page">سفارشات</a></li>
                                <li><a href="pages-timeline.html" data-key="t-timeline">لغو شده</a></li>
                                <li><a href="pages-maintenance.html" data-key="t-maintenance">پرداخت شده</a></li>
                                <li><a href="pages-timeline.html" data-key="t-timeline">تحویل داده شده</a></li>
                                <li><a href="pages-timeline.html" data-key="t-timeline">مرجوع شده</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="index.html">
                                <i data-feather="mail"></i>
                                <span data-key="t-dashboard">تیکت ها</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <i data-feather="message-square"></i>
                                <span data-key="t-dashboard">کامنت ها</span>
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <i data-feather="thumbs-up"></i>
                                <span data-key="t-dashboard">بازخورد ها</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="unlock"></i>
                                <span data-key="t-pages">مدیریت دسترسی ها</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pages-starter.html" data-key="t-starter-page">نویسندگان</a></li>
                                <li><a href="pages-maintenance.html" data-key="t-maintenance">تحویل دهندگان</a></li>
                                <li><a href="pages-timeline.html" data-key="t-timeline">مدیران سیستم</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="user"></i>
                                <span data-key="t-pages">تغییر اطلاعات فردی</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pages-starter.html" data-key="t-starter-page">مشخصات</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="settings"></i>
                                <span data-key="t-pages">تنظیمات</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pages-starter.html" data-key="t-starter-page">عمومی</a></li>
                            </ul>
                        </li>





<!--
                        <li class="menu-title mt-2" data-key="t-components">المنت ها</li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="briefcase"></i>
                                <span data-key="t-components">کامپوننت ها</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="ui-alerts.html" data-key="t-alerts">هشدارها</a></li>
                                <li><a href="ui-buttons.html" data-key="t-buttons">دکمه ها</a></li>
                                <li><a href="ui-cards.html" data-key="t-cards">کاردها</a></li>
                                <li><a href="ui-carousel.html" data-key="t-carousel">اسلایدر</a></li>
                                <li><a href="ui-dropdowns.html" data-key="t-dropdowns">دراپ داون</a></li>
                                <li><a href="ui-grid.html" data-key="t-grid">بخش بندی</a></li>
                                <li><a href="ui-images.html" data-key="t-images">تصاویر</a></li>
                                <li><a href="ui-modals.html" data-key="t-modals">مدال ها</a></li>
                                <li><a href="ui-offcanvas.html" data-key="t-offcanvas">کانونس</a></li>
                                <li><a href="ui-progressbars.html" data-key="t-progress-bars">پراگرس بار</a></li>
                                <li><a href="ui-tabs-accordions.html" data-key="t-tabs-accordions">تب ها</a></li>
                                <li><a href="ui-typography.html" data-key="t-typography">تایپو گرافی</a></li>
                                <li><a href="ui-video.html" data-key="t-video">ویدئو</a></li>
                                <li><a href="ui-general.html" data-key="t-general">کلیات</a></li>
                                <li><a href="ui-colors.html" data-key="t-colors">رنگ ها</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="gift"></i>
                                <span data-key="t-ui-elements">المان ها</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">

                                <li><a href="extended-sweet-alert.html" data-key="t-sweet-alert">سوئیت الرت2</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i data-feather="box"></i>
                                <span class="badge rounded-pill bg-soft-danger text-danger float-end">۷</span>
                                <span data-key="t-forms">فرم ها</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="form-elements.html" data-key="t-form-elements">فرم ساده</a></li>

                                <li><a href="form-advanced.html" data-key="t-form-advanced">پلاگین های پیشرفته</a></li>
                                <li><a href="form-editors.html" data-key="t-form-editors">ادیتور ها</a></li>
                                <li><a href="form-uploads.html" data-key="t-form-upload">اپلود فایل</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="sliders"></i>
                                <span data-key="t-tables">جداول</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="tables-basic.html" data-key="t-basic-tables">جدول ساده</a></li>
                                <li><a href="tables-datatable.html" data-key="t-data-tables">دیتا تیبل</a></li>
                                <li><a href="tables-responsive.html" data-key="t-responsive-table">ریسپانسیو</a></li>

                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="pie-chart"></i>
                                <span data-key="t-charts">نمودارها</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">

                                <li><a href="charts-chartjs.html" data-key="t-chartjs-charts">چارت جی اس</a></li>
                                <li><a href="charts-flot.html" data-key="t-knob-charts">فلوت</a></li>
                                <li><a href="charts-sparkline.html" data-key="t-sparkline-charts">اسپارک لاین</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="cpu"></i>
                                <span data-key="t-icons">ایکون ها</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="icons-boxicons.html" data-key="t-boxicons">باکس ایکون</a></li>
                                <li><a href="icons-materialdesign.html" data-key="t-material-design">جزئیات طراحی</a></li>
                                <li><a href="icons-dripicons.html" data-key="t-dripicons">دریپ ایکون</a></li>
                                <li><a href="icons-fontawesome.html" data-key="t-font-awesome">فونت اوسام</a></li>
                            </ul>
                        </li>



                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="share-2"></i>
                                <span data-key="t-multi-level">چند سطحی</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" data-key="t-level-1-1">سطح 1-1-1</a></li>
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow" data-key="t-level-1-2">سطح 1-1-2</a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        <li><a href="javascript: void(0);" data-key="t-level-2-1">سطح 1-2-1</a></li>
                                        <li><a href="javascript: void(0);" data-key="t-level-2-2">سطح 1-2-2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->

                    </ul>

                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->




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
    {{-- table search --}}
    <script src="{{ asset('admin/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('admin/style/js/data-table.js') }}"></script>

    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    <script>

        $('#dataTableExample').DataTable({
            columnDefs: [
                // { width: '2%', targets: 1 },

            // و غیره...
        ]
    });
    </script>
    @yield('script')

</body>


<!-- Mirrored from fudademo.ir/foap/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2023 02:49:55 GMT -->

</html>
