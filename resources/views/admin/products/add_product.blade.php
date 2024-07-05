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
            <div class="row d-flex justify-content-center col-10 mx-auto">
                <div class="col-md-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">فرم افزودن محصول</h6>
                            <form action="{{ route('dashboard.products.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">نام
                                                محصول</label>
                                            <input type="text" class="form-control" autocomplete="off" placeholder="نام محصول" name="fa_name">
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">نام
                                                انگلیسی محصول</label>
                                            <input type="text" class="form-control" autocomplete="off" placeholder="نام برند" name="en_name">
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="mb-3">
                                            <label for="exampleFormControlSelect1" class="form-label">برند
                                            </label>
                                            <select class="form-select" id="exampleFormControlSelect1" name="brand_id">
                                                @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    @foreach ($categories as $category)

                                    @endforeach
                                    <div class="col-sm-2">
                                        <div class="mb-3">
                                            <label for="exampleFormControlSelect1" class="form-label">دسته بندی
                                            </label>
                                            <select class="form-select" id="exampleFormControlSelect1" name="category_id">
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
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
                                            <input class="form-control mb-4 mb-md-0" style="text-align: right;" inputmode="decimal" placeholder="0" name="price">
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="mb-3">
                                            <label class="form-label">تعداد</label>
                                            <input class="form-control mb-4 mb-md-0" style="text-align: right;" placeholder="0" name="stock">
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">مشخصات گارانتی
                                            </label>
                                            <input type="text" class="form-control" autocomplete="off" placeholder="گارانتی" name="guarantee">
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-2">
                                        <div class="mb-3">
                                            <label for="exampleFormControlSelect1" class="form-label">وضعیت فروش
                                            </label>
                                            <select class="form-select" id="exampleFormControlSelect1" name="marketable">
                                                <option>انتخاب وضعیت فروش</option>
                                                <option value="1">قابل فروش</option>
                                                <option value="0">توقف فروش</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Col -->
                                </div>
                                <!-- Row -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">توضیحات</label>
                                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <input type="file" class="filepond" name="file" id="file" multiple credits="false">
                                        </div>
                                    </div>
                                    <!-- Col -->


                                </div>
                                <!-- Row -->
                                <button type="submit" class="btn btn-primary submit">افزودن محصول</button>
                            </form>

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
<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
{{--
<link rel="stylesheet" href="{{ asset('admin/assets/vendors/filepond/dist/filepond.min.css') }}" type="text/css">--}}
<!-- Plugin css for this page -->
<link rel="stylesheet" href="{{ asset('admin/assets/vendors/select2/select2.min.css') }}">

<style>
    @media (min-width: 30em) {
        .filepond--item {
            width: calc(50% - 0.5em);
        }
    }

    @media (min-width: 50em) {
        .filepond--item {
            width: calc(33.33% - 0.5em);
        }
    }
</style>

{{-- @livewireStyles --}}

@endsection
@section('script')
<!-- Plugin js for this page -->
<script src="{{ asset('admin/assets/vendors/select2/select2.min.js') }}"></script>
<!-- Custom js for this page -->
<script src="{{ asset('admin/assets/js/select2.js') }}"></script>


<!-- filepond -->
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>

{{-- <script src="{{ asset('admin/assets/vendors/filepond/dist/filepond.min.js') }}"></script>--}}
<script src="{{ asset('admin/assets/js/filepond.js') }}"></script>
<!-- Custom js for this page -->
{{-- @livewireScripts --}}
<script>
    FilePond.setOptions({
            server: {
                url: 'http://127.0.0.1:8000/dashboard/upload',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
            },
        });
</script>
@endsection