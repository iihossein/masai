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













            <div class="row d-flex justify-content-center">
                <div class="col-md-10 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <h6 class="card-title">افزودن برند</h6>

                            <form class="forms-sample" action="" enctype="multipart/form-data">
                                <div class="mb-3 col-3">
                                    <label for="exampleInputUsername1" class="form-label">نام برند</label>
                                    <input type="text" class="form-control" id="exampleInputUsername1"
                                        autocomplete="off" placeholder="نام برند">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">توضیحات</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                </div>
                                <div>
                                    <input type="file" class="filepond" name="image" id="" multiple credits="false">
                                </div>
                                <button type="submit" class="btn btn-primary me-2">ثبت</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-10  grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">لیست برند ها</h6>
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th>ردیف</th>
                                            <th>نام برند</th>
                                            <th>تعداد محصولات</th>
                                            <th>تاریخ ثبت</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td>1</td>
                                            <td>
                                                <img src="assets/images/users/avatar-2.jpg" alt=""
                                                    class="avatar-sm rounded-circle me-2">
                                                <a href="#" class="text-body">نام برند</a>
                                            </td>
                                            <td>269</td>
                                            <td>1396/04/25</td>
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
                                            <td class="">سامسونگ</td>
                                            <td>269</td>
                                            <td>1396/04/25</td>
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
                                            <td class="">سامسونگ</td>
                                            <td>269</td>
                                            <td>1396/04/25</td>
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
                                            <td class="">سامسونگ</td>
                                            <td>269</td>
                                            <td>1396/04/25</td>
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
                                            <td class="">سامسونگ</td>
                                            <td>269</td>
                                            <td>1396/04/25</td>
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
                                            <td class="">سامسونگ</td>
                                            <td>269</td>
                                            <td>1396/04/25</td>
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
                                            <td class="">سامسونگ</td>
                                            <td>269</td>
                                            <td>1396/04/25</td>
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
                                            <td class="">سامسونگ</td>
                                            <td>269</td>
                                            <td>1396/04/25</td>
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
                                            <td class="">سامسونگ</td>
                                            <td>269</td>
                                            <td>1396/04/25</td>
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
                                            <td class="">سامسونگ</td>
                                            <td>269</td>
                                            <td>1396/04/25</td>
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
    <!-- filepond -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/filepond/dist/filepond.min.css') }}" type="text/css">
    {{-- <link rel="stylesheet" href="{{ asset('admin/assets/vendors/filepond/dist/filepond.css') }}" type="text/css"> --}}

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/select2/select2.min.css') }}">

@endsection
@section('script')
<!-- Plugin js for this page -->
<script src="{{ asset('admin/assets/vendors/select2/select2.min.js') }}"></script>
<!-- Custom js for this page -->
<script src="{{ asset('admin/assets/js/select2.js') }}"></script>

<!-- filepond -->
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="{{ asset('admin/assets/vendors/filepond/dist/filepond.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/filepond.js') }}"></script>
<!-- Custom js for this page -->

@endsection
