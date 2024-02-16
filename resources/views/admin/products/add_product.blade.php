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
                                                placeholder="نام محصول" name="fa_name">
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-5">
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">نام
                                                انگلیسی محصول</label>
                                            <input type="text" class="form-control" autocomplete="off"
                                                placeholder="نام برند" name="en_name">
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="mb-3">
                                            <label for="exampleFormControlSelect1" class="form-label">برند
                                            </label>
                                            <select class="form-select" id="exampleFormControlSelect1" name="brand_id">
                                                <option value="1">سامسونگ</option>
                                                <option value="2">اپل</option>
                                                <option value="3">خوراکی</option>
                                                <option value="4">پوشاک</option>
                                                <option value="5">سرگرمی</option>
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
                                                inputmode="decimal" placeholder="0" name="price">
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="mb-3">
                                            <label class="form-label">تعداد</label>
                                            <input class="form-control mb-4 mb-md-0" style="text-align: right;"
                                                placeholder="0" name="stock">
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">مشخصات گارانتی
                                            </label>
                                            <input type="text" class="form-control" autocomplete="off"
                                                placeholder="گارانتی" name="guarantee">
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="mb-3">
                                            <label for="exampleFormControlSelect1" class="form-label">وضعیت فروش
                                            </label>
                                            <select class="form-select" id="exampleFormControlSelect1" name="marketable">
                                                <option>انتخاب وضعیت فروش</option>
                                                <option>قابل فروش</option>
                                                <option>توقف فروش</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Col -->
                                </div>
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="mb-3">
                                            <label class="form-label">دسته بندی ها</label>
                                            <select class="js-example-basic-multiple form-select"
                                                multiple="multiple" data-width="100%" name="category">
                                                <option value="TX">پوشاک</option>
                                                <option value="TX">کالای دیجیتال</option>
                                                <option value="TX">شدوربین</option>
                                                <option value="WY">عینک</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1"
                                                class="form-label">توضیحات</label>
                                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
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
                            <button type="submit" class="btn btn-primary submit">افزودن محصول</button>
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
