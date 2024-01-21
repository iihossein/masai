@extends('admin.layouts.master')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">ناحیه کاربری</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item">ارتباطات </li>/
                                <li>کاربران</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <h5 class="card-title">لیست کاربران<span class="text-muted fw-normal ms-2">۸۹</span>
                        </h5>
                    </div>
                </div>

                <div class="col-md-6">

                        <form action="" method="post" class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                            <div>
                                <input type="text" class="form-control" id="exampleInputText1"
                                    value="نسترن افشار" placeholder="نام خود را وارد کنید">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-light">افزودن</button>
                            </div>
                        </form>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">


                                <div class="mx-auto mb-4">
                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                        class="avatar-xl rounded-circle img-thumbnail">
                                </div>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">لیلا
                                        حمیدی</a></h5>
                                <p class="text-muted mb-2">فول استک دولوپر</p>

                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-light text-truncate"><i
                                        class="uil uil-user me-1"></i>پروفایل</button>
                                <button type="button" class="btn btn-outline-light text-truncate text-danger"><i
                                        class="uil uil-envelope-alt me-1"></i>حذف</button>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">


                                <div class="mx-auto mb-4">
                                    <img src="assets/images/users/avatar-1.jpg" alt=""
                                        class="avatar-xl rounded-circle img-thumbnail">
                                </div>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">مختار
                                        مینائی</a></h5>
                                <p class="text-muted mb-2">فول استک دولوپر</p>

                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-light text-truncate"><i
                                        class="uil uil-user me-1"></i>پروفایل</button>
                                <button type="button" class="btn btn-outline-light text-truncate text-danger"><i
                                        class="uil uil-envelope-alt me-1"></i>حذف</button>

                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">


                                <div class="mx-auto mb-4">
                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                        class="avatar-xl rounded-circle img-thumbnail">
                                </div>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">دلارام
                                        یوسفی</a></h5>
                                <p class="text-muted mb-2">UI/UX طراح</p>

                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-light text-truncate"><i
                                        class="uil uil-user me-1"></i>پروفایل</button>
                                <button type="button" class="btn btn-outline-light text-truncate text-danger"><i
                                        class="uil uil-envelope-alt me-1"></i>حذف</button>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">


                                <div class="avatar-xl mx-auto mb-4">
                                    <div
                                        class="avatar-title bg-soft-light text-light display-4 m-0 rounded-circle">
                                        <i class="bx bxs-user-circle"></i>
                                    </div>
                                </div>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">نادر
                                        اقبالی</a></h5>
                                <p class="text-muted mb-2">بک اند دولوپر</p>

                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-light text-truncate"><i
                                        class="uil uil-user me-1"></i>پروفایل</button>
                                <button type="button" class="btn btn-outline-light text-truncate text-danger"><i
                                        class="uil uil-envelope-alt me-1"></i>حذف</button>

                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">


                                <div class="avatar-xl mx-auto mb-4">
                                    <div
                                        class="avatar-title bg-soft-light text-light display-4 m-0 rounded-circle">
                                        <i class="bx bxs-user-circle"></i>
                                    </div>
                                </div>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">کاوه
                                        رادمهر</a></h5>
                                <p class="text-muted mb-2">فول استک دولوپر</p>

                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-light text-truncate"><i
                                        class="uil uil-user me-1"></i>پروفایل</button>
                                <button type="button" class="btn btn-outline-light text-truncate text-danger"><i
                                        class="uil uil-envelope-alt me-1"></i>حذف</button>

                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">


                                <div class="mx-auto mb-4">
                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                        class="avatar-xl rounded-circle img-thumbnail">
                                </div>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">سینا
                                        رستگار</a></h5>
                                <p class="text-muted mb-2">بک اند دولوپر</p>

                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-light text-truncate"><i
                                        class="uil uil-user me-1"></i>پروفایل</button>
                                <button type="button" class="btn btn-outline-light text-truncate text-danger"><i
                                        class="uil uil-envelope-alt me-1"></i>حذف</button>

                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">


                                <div class="mx-auto mb-4">
                                    <img src="assets/images/users/avatar-8.jpg" alt=""
                                        class="avatar-xl rounded-circle img-thumbnail">
                                </div>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">دیانا
                                        اکبری</a></h5>
                                <p class="text-muted mb-2">UI/UX طراح</p>

                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-light text-truncate"><i
                                        class="uil uil-user me-1"></i>پروفایل</button>
                                <button type="button" class="btn btn-outline-light text-truncate text-danger"><i
                                        class="uil uil-envelope-alt me-1"></i>حذف</button>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">


                                <div class="mx-auto mb-4">
                                    <img src="assets/images/users/avatar-9.jpg" alt=""
                                        class="avatar-xl rounded-circle img-thumbnail">
                                </div>
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-dark">رامین
                                        رحیمی</a></h5>
                                <p class="text-muted mb-2">فول استک دولوپر</p>

                            </div>

                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-outline-light text-truncate"><i
                                        class="uil uil-user me-1"></i>پروفایل</button>
                                <button type="button" class="btn btn-outline-light text-truncate text-danger"><i
                                        class="uil uil-envelope-alt me-1"></i>حذف</button>

                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


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
