@extends('admin.layouts.master')
@section('content')

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
                                <img src="assets/images/logo-sm.svg" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">فوداتکو</span>
                            </span>
                        </a>

                        <a href="index-2.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.svg" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">فوداتکو</span>
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
                                            <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="user-pic">
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
                                            <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
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
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
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




        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">داشبورد</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">داشبورد</li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">فوداتکو</a></li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">کیف پول من</span>
                                            <h4 class="mb-3">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate ">۴.</span>
                                            </h4>
                                        </div>

                                        <div class="col-6">
                                            <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                                        </div>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="badge bg-soft-success text-success ">۳۱</span>
                                        <span class="ms-1 text-muted font-size-13">ازهفته گذشته تاکنون</span>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">تعداد تراکنش ها</span>
                                            <h4 class="mb-3">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">۵۴.۳۸۱</span>
                                            </h4>
                                        </div>
                                        <div class="col-6">
                                            <div id="ordersChart" class="mt-md-3 mt-xl-0"></div>
                                        </div>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="badge bg-soft-danger text-danger">۲۴تراکنش</span>
                                        <span class="ms-1 text-muted font-size-13">ازهفته گذشته تاکنون</span>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col-->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">درامد</span>
                                            <h4 class="mb-3">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">۲۴.۳۸</span>
                                            </h4>
                                        </div>
                                        <div class="col-6">
                                            <div id="growthChart" class="mt-md-3 mt-xl-0"></div>
                                        </div>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="badge bg-soft-success text-success">۲۴.۳۸</span>
                                        <span class="ms-1 text-muted font-size-13">ازهفته گذشته تاکنون</span>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <!-- card -->
                            <div class="card card-h-100">
                                <!-- card body -->
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <span class="text-muted mb-3 lh-1 d-block text-truncate">سود خالص</span>
                                            <h4 class="mb-3">
                                                <span class="text-muted mb-3 lh-1 d-block text-truncate">۲۵۴.۳۸</span>
                                            </h4>
                                        </div>
                                        <div class="col-6">
                                            <div id="customersChart" class="mt-md-3 mt-xl-0"></div>
                                        </div>
                                    </div>
                                    <div class="text-nowrap">
                                        <span class="badge bg-soft-success text-success">۲۴.۳۸</span>
                                        <span class="ms-1 text-muted font-size-13">ازهفته گذشته تاکنون</span>
                                    </div>
                                </div><!-- end card body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row-->
                    <div class="row">
                        <div class="col-12 col-xl-12 grid-margin stretch-card">
                            <div class="card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                                        <h6 class="card-title mb-0">درآمد</h6>
                                        <div class="dropdown">
                                            <a type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">مشاهده</span></a>
                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">ویرایش</span></a>
                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">حذف</span></a>
                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">چاپ</span></a>
                                                <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">دانلود</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-start">
                                        <div class="col-md-7">
                                            <p class="text-muted tx-13 mb-3 mb-md-0">نمودار فعالیت های تجاری</p>
                                        </div>
                                        <div class="col-md-5 d-flex justify-content-md-end">
                                            <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-outline-primary">امروز</button>
                                                <button type="button" class="btn btn-outline-primary d-none d-md-block">هفته</button>
                                                <button type="button" class="btn btn-primary">ماه</button>
                                                <button type="button" class="btn btn-outline-primary">سال</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="revenueChartRTL"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row -->

                    <div class="row">

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">تراکنش ها</h4>
                                </div><!-- end card header -->

                                <div class="card-body px-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="transactions-all-tab" role="tabpanel">
                                            <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                                <table class="table align-middle table-nowrap table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">حسین نظری</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۹</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <button type="button" class="btn btn-rounded btn-outline-primary btn-sm">جزئیات</button>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۴۹.۸۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">تومان</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">فروش اتریوم</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۹</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">۰.۵۶ ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۳۹.۸۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">خرید لایت کوین</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۸</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">۱.۸۸ LTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۴۹.۸۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">خرید اتریوم</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۸</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.42 ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۲۹.۸۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">فروش بیت کوین</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۷</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۵۹.۹۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">خرید بیت کوین</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۷</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۷۹.۹۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">فروش اتریوم</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۷</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.56 ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۲۹.۲۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->
                                        <div class="tab-pane" id="transactions-buy-tab" role="tabpanel">
                                            <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                                <table class="table align-middle table-nowrap table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">خرید بیت کوین</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۷</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.016 BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۳۹.۸۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">خرید بیت کوین</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۶</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">0.018 BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۳۹.۸۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">خرید لایت کوین</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۶</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">1.88 LTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۲۹.۲۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">خرید اتریوم</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۶</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">۰.۵۶ ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۸۹.۲۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">خرید اتریوم</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۴</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">۰.۴۲ ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۹۴.۲۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">خرید اتریوم</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۴</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">۰.۵۶ ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۴۴.۲۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="font-size-22 text-success">
                                                                    <i class="bx bx-down-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">خرید بیت کوین</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۳</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">۰.۰۱۶ BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۴۴.۲۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->
                                        <div class="tab-pane" id="transactions-sell-tab" role="tabpanel">
                                            <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                                <table class="table align-middle table-nowrap table-borderless">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">فروش اتریوم</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۳</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">۰.۵۶ ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۷۴.۲۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">فروش بیت کوین</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۳</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">۰.۰۱۶ BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۷۴.۲۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">فروش بیت کوین</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۳</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">۰.۰۱۸ BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۸۴.۲۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">فروش اتریوم</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۲</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">۰.۵۶ ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۳۴.۲۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">فروش لایت کوین</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۱</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">۱.۸۸ LTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۹۴.۲۲</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">فروش اتریوم</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۱</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">۰.۴۲ ETH</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۷۱.۲۵</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>



                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="font-size-22 text-danger">
                                                                    <i class="bx bx-up-arrow-circle d-block"></i>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div>
                                                                    <h5 class="font-size-14 mb-1">فروش بیت کوین</h5>
                                                                    <p class="text-muted mb-0 font-size-12">۱۴۰۱/۰۴/۱۰</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 mb-0">۰.۰۱۶ BTC</h5>
                                                                    <p class="text-muted mb-0 font-size-12">ارزش</p>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="text-end">
                                                                    <h5 class="font-size-14 text-muted mb-0">۸۱.۲۵</h5>
                                                                    <p class="text-muted mb-0 font-size-12">مبلغ</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- end tab pane -->
                                    </div>
                                    <!-- end tab content -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">کامنت های اخیر</h4>
                                </div><!-- end card header -->

                                <div class="card-body px-0">
                                    <div class="px-3" data-simplebar style="max-height: 352px;">
                                        <ul class="list-unstyled activity-wid mb-0">
                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-md">
                                                    <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                        <i class="mdi mdi-account font-size-24"></i>
                                                    </span>
                                                </div>
                                                <div class="timeline-list-item">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                            <h5 class="font-size-14 mb-1">حسین نظری</h5>
                                                            <p class="text-truncate text-muted font-size-13">سلام امیدوارم حالون خوب باشه میخواستم بدونم</p>
                                                        </div>
                                                        <div class="flex-shrink-0 text-end me-3">
                                                            <h6 class="mb-1">۱۴۰۱/۰۴/۱۰</h6>
                                                            <div class="font-size-13">18:47</div>
                                                        </div>

                                                        <div class="flex-shrink-0 text-end">
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">عملیات</a>
                                                                    <a class="dropdown-item" href="#">دیگر</a>
                                                                    <a class="dropdown-item" href="#">یه چیز دیگه اینجا</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">لینک جدا شده</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="activity-list ">
                                                <div class="activity-icon avatar-md">
                                                    <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                        <i class="mdi mdi-account font-size-24"></i>
                                                    </span>
                                                </div>
                                                <div class="timeline-list-item">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                            <h5 class="font-size-14 mb-1">۱۴۰۱/۰۴/۱۰</h5>
                                                            <p class="text-truncate text-muted font-size-13">سلام امیدوارم حالون خوب باشه میخواستم بدونم</p>
                                                        </div>
                                                        <div class="flex-shrink-0 text-end me-3">
                                                            <h6 class="mb-1">فنی</h6>
                                                            <div class="font-size-13">18:47</div>
                                                        </div>

                                                        <div class="flex-shrink-0 text-end">
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">عملیات</a>
                                                                    <a class="dropdown-item" href="#">دیگر</a>
                                                                    <a class="dropdown-item" href="#">یه چیز دیگه اینجا</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">لینک جدا شده</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="activity-list ">
                                                <div class="activity-icon avatar-md">
                                                    <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                        <i class="mdi mdi-account font-size-24"></i>
                                                    </span>
                                                </div>
                                                <div class="timeline-list-item">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                            <h5 class="font-size-14 mb-1">۱۴۰۱/۰۴/۱۰</h5>
                                                            <p class="text-truncate text-muted font-size-13">سلام امیدوارم حالون خوب باشه میخواستم بدونم</p>
                                                        </div>
                                                        <div class="flex-shrink-0 text-end me-3">
                                                            <h6 class="mb-1">فنی</h6>
                                                            <div class="font-size-13">18:47</div>
                                                        </div>

                                                        <div class="flex-shrink-0 text-end">
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">عملیات</a>
                                                                    <a class="dropdown-item" href="#">دیگر</a>
                                                                    <a class="dropdown-item" href="#">یه چیز دیگه اینجا</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">لینک جدا شده</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="activity-list ">
                                                <div class="activity-icon avatar-md">
                                                    <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                        <i class="mdi mdi-account font-size-24"></i>
                                                    </span>
                                                </div>
                                                <div class="timeline-list-item">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                            <h5 class="font-size-14 mb-1">۱۴۰۱/۰۴/۱۰</h5>
                                                            <p class="text-truncate text-muted font-size-13">سلام امیدوارم حالون خوب باشه میخواستم بدونم</p>
                                                        </div>
                                                        <div class="flex-shrink-0 text-end me-3">
                                                            <h6 class="mb-1">فنی</h6>
                                                            <div class="font-size-13">18:47</div>
                                                        </div>

                                                        <div class="flex-shrink-0 text-end">
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">عملیات</a>
                                                                    <a class="dropdown-item" href="#">دیگر</a>
                                                                    <a class="dropdown-item" href="#">یه چیز دیگه اینجا</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">لینک جدا شده</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>



                                        </ul>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->



                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">بازخورد های اخیر</h4>
                                </div><!-- end card header -->

                                <div class="card-body px-0">
                                    <div class="px-3" data-simplebar style="max-height: 352px;">
                                        <ul class="list-unstyled activity-wid mb-0">
                                            <li class="activity-list activity-border">
                                                <div class="activity-icon avatar-md">
                                                    <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                        <i class="mdi mdi-account font-size-24"></i>
                                                    </span>
                                                </div>
                                                <div class="timeline-list-item">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                            <h5 class="font-size-14 mb-1">حسین نظری</h5>
                                                            <p class="text-truncate text-muted font-size-13">سلام امیدوارم حالون خوب باشه میخواستم بدونم</p>
                                                        </div>
                                                        <div class="flex-shrink-0 text-end me-3">
                                                            <h6 class="mb-1">۱۴۰۱/۰۴/۱۰</h6>
                                                            <div class="font-size-16 badge  badge-soft-danger">3.7</div>
                                                        </div>

                                                        <div class="flex-shrink-0 text-end">
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">عملیات</a>
                                                                    <a class="dropdown-item" href="#">دیگر</a>
                                                                    <a class="dropdown-item" href="#">یه چیز دیگه اینجا</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">لینک جدا شده</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="activity-list ">
                                                <div class="activity-icon avatar-md">
                                                    <span class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                        <i class="mdi mdi-account font-size-24"></i>
                                                    </span>
                                                </div>
                                                <div class="timeline-list-item">
                                                    <div class="d-flex">
                                                        <div class="flex-grow-1 overflow-hidden me-4">
                                                            <h5 class="font-size-14 mb-1">حسین نظری</h5>
                                                            <p class="text-truncate text-muted font-size-13">سلام امیدوارم حالون خوب باشه میخواستم بدونم</p>
                                                        </div>
                                                        <div class="flex-shrink-0 text-end me-3">
                                                            <h6 class="mb-1">۱۴۰۱/۰۴/۱۰</h6>
                                                            <div class="font-size-16 badge  badge-soft-success">۴.۶</div>
                                                        </div>

                                                        <div class="flex-shrink-0 text-end overflow-visible">
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-24" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">عملیات</a>
                                                                    <a class="dropdown-item" href="#">دیگر</a>
                                                                    <a class="dropdown-item" href="#">یه چیز دیگه اینجا</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">لینک جدا شده</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->


                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <span>
                                ۲۰۲۲
                            </span> © فوداتکو.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                طراحی وتوسعه با <a href="#!" class="text-decoration-underline">فوداتکو</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

@endsection
@section('style')

@endsection
@section('script')
    <!-- چارت -->
    <script src="{{ asset('admin/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
@endsection
