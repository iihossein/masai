@extends('admin.layouts.master')
@section('content')

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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">فوداتکو</a></li>
                                <li class="breadcrumb-item active">داشبورد</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->














            <div class="row">
                <div class="col-md-12  grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">لیست تخفیفات</h6>
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table">
                                    <thead>
                                        <tr>
                                            <th>کد محصول</th>
                                            <th>نام محصول</th>
                                            <th>درصد تخفیف</th>
                                            <th>تاریخ شروع</th>
                                            <th>تاریخ پایان</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td class="">D2314M54132</td>
                                            <td>لپ تاپ 13.3 اینچی اپل مدل MacBook Air MGN63 2020 LLA</td>
                                            <td>26%</td>
                                            <td>1396/08/17</td>
                                            <td>1396/12/17</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-info dropdown-toggle p-1 py-0 font-size-12"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false">عملیات<i
                                                            class="mdi mdi-chevron-down"></i></button>
                                                    <div class="dropdown-menu font-size-10">
                                                        <a class="dropdown-item" href="#">ویرایش</a>
                                                        <a class="dropdown-item text-danger"
                                                            href="#">جذف</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td class="">موبایل</td>
                                            <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت </td>
                                            <td>کالای دیجیتال</td>
                                            <td>1396/08/17</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-info dropdown-toggle p-1 py-0 font-size-12"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false">عملیات<i
                                                            class="mdi mdi-chevron-down"></i></button>
                                                    <div class="dropdown-menu font-size-10">
                                                        <a class="dropdown-item" href="#">ویرایش</a>
                                                        <a class="dropdown-item text-danger"
                                                            href="#">جذف</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td class="">موبایل</td>
                                            <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت </td>
                                            <td>کالای دیجیتال</td>
                                            <td>1396/08/17</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-info dropdown-toggle p-1 py-0 font-size-12"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false">عملیات<i
                                                            class="mdi mdi-chevron-down"></i></button>
                                                    <div class="dropdown-menu font-size-10">
                                                        <a class="dropdown-item" href="#">ویرایش</a>
                                                        <a class="dropdown-item text-danger"
                                                            href="#">جذف</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td class="">موبایل</td>
                                            <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت </td>
                                            <td>کالای دیجیتال</td>
                                            <td>1396/08/17</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-info dropdown-toggle p-1 py-0 font-size-12"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false">عملیات<i
                                                            class="mdi mdi-chevron-down"></i></button>
                                                    <div class="dropdown-menu font-size-10">
                                                        <a class="dropdown-item" href="#">ویرایش</a>
                                                        <a class="dropdown-item text-danger"
                                                            href="#">جذف</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td class="">موبایل</td>
                                            <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت </td>
                                            <td>کالای دیجیتال</td>
                                            <td>1396/08/17</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-info dropdown-toggle p-1 py-0 font-size-12"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false">عملیات<i
                                                            class="mdi mdi-chevron-down"></i></button>
                                                    <div class="dropdown-menu font-size-10">
                                                        <a class="dropdown-item" href="#">ویرایش</a>
                                                        <a class="dropdown-item text-danger"
                                                            href="#">جذف</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td class="">موبایل</td>
                                            <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت </td>
                                            <td>کالای دیجیتال</td>
                                            <td>1396/08/17</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-info dropdown-toggle p-1 py-0 font-size-12"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false">عملیات<i
                                                            class="mdi mdi-chevron-down"></i></button>
                                                    <div class="dropdown-menu font-size-10">
                                                        <a class="dropdown-item" href="#">ویرایش</a>
                                                        <a class="dropdown-item text-danger"
                                                            href="#">جذف</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td class="">موبایل</td>
                                            <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت </td>
                                            <td>کالای دیجیتال</td>
                                            <td>1396/08/17</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button"
                                                        class="btn btn-info dropdown-toggle p-1 py-0 font-size-12"
                                                        data-bs-toggle="dropdown"
                                                        aria-expanded="false">عملیات<i
                                                            class="mdi mdi-chevron-down"></i></button>
                                                    <div class="dropdown-menu font-size-10">
                                                        <a class="dropdown-item" href="#">ویرایش</a>
                                                        <a class="dropdown-item text-danger"
                                                            href="#">جذف</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>










                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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


@endsection
