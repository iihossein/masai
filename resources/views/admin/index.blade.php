@extends('admin.layouts.master')
@section('content')

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
