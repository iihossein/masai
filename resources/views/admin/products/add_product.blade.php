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
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">شبکه بندی فرم</h6>
                            <form>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">نام
                                                محصول</label>
                                            <input type="text" class="form-control" autocomplete="off"
                                                placeholder="نام برند">
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-5">
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">نام
                                                انگلیسی محصول</label>
                                            <input type="text" class="form-control" autocomplete="off"
                                                placeholder="نام برند">
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="mb-3">
                                            <label for="exampleFormControlSelect1" class="form-label">برند
                                            </label>
                                            <select class="form-select" id="exampleFormControlSelect1">
                                                <option>سامسونگ</option>
                                                <option>اپل</option>
                                                <option>خوراکی</option>
                                                <option>پوشاک</option>
                                                <option>سرگرمی</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Col -->
                                </div>
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="mb-3">
                                            <label class="form-label">مبلغ : </label>
                                            <input class="form-control mb-4 mb-md-0" style="text-align: right;"
                                                inputmode="decimal" placeholder="0">
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="mb-3">
                                            <label class="form-label">تعداد</label>
                                            <input class="form-control mb-4 mb-md-0" style="text-align: right;"
                                                placeholder="0">
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">مشخصات گارانتی
                                            </label>
                                            <input type="text" class="form-control" autocomplete="off"
                                                placeholder="نام برند">
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="mb-3">
                                            <label for="exampleFormControlSelect1" class="form-label">برند
                                            </label>
                                            <select class="form-select" id="exampleFormControlSelect1">
                                                <option>سامسونگ</option>
                                                <option>اپل</option>
                                                <option>خوراکی</option>
                                                <option>پوشاک</option>
                                                <option>سرگرمی</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Col -->
                                </div>
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">انتخاب چندتایی</label>
                                            <select class="js-example-basic-multiple form-select"
                                                multiple="multiple" data-width="100%" name="categories">
                                                <option value="TX">ایران</option>
                                                <option value="WY">برزیل</option>
                                                <option value="NY">ترکیه</option>
                                                <option value="FL">کانادا</option>
                                                <option value="KN">انگلستان</option>
                                                <option value="HW">استرالیا</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1"
                                                class="form-label">توضیحات</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="5"></textarea>
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <input type="file" class="filepond" name="image" id="" multiple
                                                credits="false">
                                        </div>
                                    </div>
                                    <!-- Col -->


                                </div>
                                <!-- Row -->
                            </form>
                            <button type="button" class="btn btn-primary submit">ارسال فرم</button>
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
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/filepond/dist/filepond.css') }}" type="text/css">
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
