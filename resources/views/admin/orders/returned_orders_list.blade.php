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
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">لیست سفارشات پرداخت شده</h6>
                        <div class="table-responsive">
                            <table id="dataTableExample" class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام مرجوع کننده</th>
                                        <th>کد تراکنش</th>
                                        <th>کد سفارش</th>
                                        <th>قیمت</th>
                                        <th>وضعیت</th>
                                        <th>عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>حسین نظری</td>
                                        <td>D2134C657</td>
                                        <td>D2134C657</td>
                                        <td>35,321,000 تومان</td>
                                        <td>پرداخت شده</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info dropdown-toggle p-1 py-0 font-size-12" data-bs-toggle="dropdown" aria-expanded="false">عملیات<i class="mdi mdi-chevron-down"></i></button>
                                                <div class="dropdown-menu font-size-10">
                                                    <a class="dropdown-item" href="#">جزئیات تراکنش</a>
                                                    <a class="dropdown-item text-danger" href="#">جزئیات سفارش</a>
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
