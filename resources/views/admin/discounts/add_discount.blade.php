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













            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title">افزودن دسته بندی</h6>

                        <form class="forms-sample">
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">کد محصول</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"
                                    autocomplete="off" placeholder="نام برند">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputUsername1" class="form-label">درصد تخفیف</label>
                                <input type="number" class="form-control" id="exampleInputUsername1"
                                    autocomplete="off" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom01">تاریخ</label>
                                <input type="text" name="date" class="form-control" data-jdp
                                    placeholder="لطفا یک تاریخ وارد نمایید">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="validationCustom01">تاریخ</label>
                                <input type="text" name="date" class="form-control" data-jdp
                                    placeholder="لطفا یک تاریخ وارد نمایید">
                            </div>
                            <button type="submit" class="btn btn-primary me-2">ثبت</button>
                        </form>

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
