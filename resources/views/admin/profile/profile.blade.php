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
            <div class="col-xl-9 col-lg-8 flex-grow-1 flex-shrink-0 flex-basis-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm order-2 order-sm-1">
                                <div class="d-flex align-items-start mt-3 mt-sm-0">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xl me-3">
                                            <img src="assets/images/users/avatar-2.jpg" alt="" class="img-fluid rounded-circle d-block">
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 mt-4">
                                        <div>
                                            <h5 class="font-size-16 mb-2">سیما حسن زاده</h5>
                                            {{-- <p class="text-muted font-size-13">فول استک دولوپر</p> --}}

                                            <div class="d-flex flex-wrap align-items-start gap-2 gap-lg-3 text-muted font-size-13">
                                                <div><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>نویسنده</div>
                                                <div><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>پستچی</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <ul class="nav nav-tabs-custom card-header-tabs border-top mt-4" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link px-3" data-bs-toggle="tab" href="#about" role="tab">اطلاعات</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3" data-bs-toggle="tab" href="#post" role="tab">ویرایش</a>
                            </li>
                        </ul>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="tab-content">
                    





                    <div class="tab-pane active" id="about" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">اطلاعات کاربری</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="pt-3">
                                            <div class="d-flex gap-2">
                                                <h5 class="col-sm-3 col-form-label">نام:</h5>
                                                <h5 class="col-form-label">سیما</h5>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <h5 class="col-sm-3 col-form-label">نام خانوادگی:</h5>
                                                <h5 class="col-form-label">حسن زاده</h5>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <h5 class="col-sm-3 col-form-label">شماره تماس:</h5>
                                                <h5 class="col-form-label">09123456789</h5>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <h5 class="col-sm-3 col-form-label">کد ملی:</h5>
                                                <h5 class="col-form-label">1717687339</h5>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="pt-3">
                                            <div class="d-flex gap-2">
                                                <h5 class="col-sm-3 col-form-label">کارت بانکی:</h5>
                                                <h5 class="col-form-label">سیما</h5>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <h5 class="col-sm-3 col-form-label">کد پستی</h5>
                                                <h5 class="col-form-label">حسن زاده</h5>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <h5 class="col-sm-3 col-form-label">آدرس:</h5>
                                                <h5 class="col-form-label">09123456789</h5>
                                            </div>
                                            <div class="d-flex gap-2">
                                                <h5 class="col-sm-3 col-form-label">تاریخ تولد:</h5>
                                                <h5 class="col-form-label">1717687339</h5>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>







                   

                    <div class="tab-pane" id="post" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">ویرایش اطلاعات</h5>
                            </div>
                            <div class="card-body">
                                <div>
                                    <form action="{{ route('admin.profile.update',$user->id) }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                            <div class="row justify-content-right">
                                                <div class="col-xl-6">

                                                    <div class="row mb-3">
                                                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">نام</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="exampleInputUsername2" placeholder="نام" name="first_name">
                                                            @error('first_name')
                                                                <span class="invalid-feedback d-block">
                                                                    <strong>
                                                                        {{ $message }}
                                                                    </strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row mb-3">
                                                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">نام خانوادگی</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" id="exampleInputUsername2" placeholder="نام خانوادگی" name="last_name">
                                                            @error('last_name')
                                                                <span class="invalid-feedback d-block">
                                                                    <strong>
                                                                        {{ $message }}
                                                                    </strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="exampleInputMobile" class="col-sm-2 col-form-label">موبایل</label>
                                                        <div class="col-sm-6">
                                                            <input type="number" class="form-control" id="exampleInputMobile" placeholder="شماره موبایل" name="mobile">
                                                            @error('mobile')
                                                                <span class="invalid-feedback d-block">
                                                                    <strong>
                                                                        {{ $message }}
                                                                    </strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="exampleInputMobile" class="col-sm-2 col-form-label">کد ملی</label>
                                                        <div class="col-sm-6">
                                                            <input type="number" class="form-control" id="exampleInputMobile" placeholder="کد ملی خود را وارد کنید" name="national_code">
                                                            @error('national_code')
                                                                <span class="invalid-feedback d-block">
                                                                    <strong>
                                                                        {{ $message }}
                                                                    </strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    
                                                    
                                                
                                                    
                                                    <!-- end post -->
                                                </div>
                                                <div class="col-xl-6">

                                                    {{-- <div class="row mb-3">
                                                        <label for="ageSelect" class="col-sm-2 col-form-label">سن</label>
                                                        <select class="form-select mx-2" name="age_select" id="ageSelect" style="width: 10.3rem">
                                                        <option selected="" disabled="">جنسیت خود را انتخاب کنید</option>
                                                        <option>مرد</option>
                                                        <option>زن</option>
                                                        </select>
                                                    </div> --}}
                                                    <div class="row mb-3">
                                                        <label  class="col-sm-2 col-form-label">کارت بانکی</label>
                                                        <div class="col-sm-5">
                                                            <input  class="form-control" placeholder="شماره حساب برای بازگشت پول" data-inputmask-alias="9999-9999-9999-9999" name="bank_card">
                                                            @error('bank_card')
                                                                <span class="invalid-feedback d-block">
                                                                    <strong>
                                                                        {{ $message }}
                                                                    </strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label  class="col-sm-2 col-form-label">کد پستی</label>
                                                        <div class="col-sm-5">
                                                            <input  class="form-control" placeholder="کد پستی منزل یا شرکت" name="postal_code">
                                                            @error('postal_code')
                                                                <span class="invalid-feedback d-block">
                                                                    <strong>
                                                                        {{ $message }}
                                                                    </strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="exampleInputMobile" class="col-sm-2 col-form-label">آدرس</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" id="exampleInputMobile" placeholder="مکان دریافت کالا" name="address">
                                                            @error('address')
                                                                <span class="invalid-feedback d-block">
                                                                    <strong>
                                                                        {{ $message }}
                                                                    </strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">تاریخ تولد</label>
                                                        <div class="col-sm-6">
                                                            <input  data-jdp class="form-control" id="exampleInputUsername2" name="birthday">
                                                            @error('birthday')
                                                                <span class="invalid-feedback d-block">
                                                                    <strong>
                                                                        {{ $message }}
                                                                    </strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    
                                                
                                                    
                                                    <!-- end post -->
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <div class="text-end">
                                                <button  type="submit" class="btn light btn-primary my-3 mx-5">ذخیره تغییرات</button>
                                            </div>
                                    </form>
                                    <!-- end row -->
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end tab pane -->
                </div>
                <!-- end tab content -->
            </div>
            <!-- end col -->

            
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
                    <script>
                     ۲۰۲۲  
                    </script> © فوداتکو.
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
<link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css">
<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }

    /* Firefox */
    input[type=number] {
    -moz-appearance: textfield;
    }
</style>
@endsection
@section('script')
<script type="text/javascript" src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>
<script>
    jalaliDatepicker.startWatch();
</script>
@endsection