<!doctype html>
<html lang="en" dir="rtl">


<!-- Mirrored from fudademo.ir/foap/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2023 02:52:19 GMT -->

<head>

    <meta charset="utf-8"/>
    <title>Dashboard | پنل مدیریت فوداتکو</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="{{ asset('admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}"
          rel="stylesheet"
          type="text/css"/>

    <!-- preloader css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/preloader.min.css') }}" type="text/css"/>

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/assets/css/bootstrap-rtl.min.css') }}" id="bootstrap-style" rel="stylesheet"
          type="text/css"/>
    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="{{ asset('admin/assets/css/app-rtl.min.css') }}" id="app-style" rel="stylesheet" type="text/css"/>

</head>
<style type="text/css">
    @font-face {
        font-family: "iransans";
        src: url("{{ asset('admin/style/fonts/IRANSansWeb_Light.html') }}") format("woff2");
        src: url("{{ asset('admin/style/fonts/IRANSansWeb_Light.woff') }}") format("woff");
    }

    * body {
        font-family: iransans;

    }

    body {
        background-color: #fbfaff;
    }
</style>


<body class="pt-5">


<div class="container col-sm-6 col-lg-4">

    <div class="row mt-5">
        <div class="spContainer mx-auto">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="card px-4 py-5 border-0 shadow">
                    <div class="d-inline text-center mb-3 ">
                        <h3 class="font-weight-bold">سلام! خوش آمدید</h3>
                    </div>
                    <div class="d-inline text-center mb-0">
                        <div class="form-group mx-auto">
                            <label for="mobile">نام کاربری</label>
                            <input name="mobile" class="form-control mb-3" type="text"
                                   placeholder="شماره موبایل خود را وارد کنید">
                            @error('mobile')
                            <span class="invalid-feedback d-block">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                            <label for="password">رمز عبور</label>
                            <input name="password" class="form-control" type="password" placeholder="رمز عبور">
                            @error('password')
                            <span class="invalid-feedback d-block">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="d-inline text-left mb-3">
                        <div class="form-group mx-auto mt-3">
                            <button type="submit" class="btn btn-primary">ورود</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>


<!-- Right bar overlay-->
{{--<div class="rightbar-overlay"></div>--}}

<!-- JAVASCRIPT -->
<script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/feather-icons/feather.min.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Plugins js-->
<script src="{{ asset('admin/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('admin/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- dashboard init -->
<script src="{{ asset('admin/assets/js/pages/dashboard.init.js') }}"></script>

<script src="{{ asset('admin/assets/js/app.js') }}"></script>

</body>


<!-- Mirrored from fudademo.ir/foap/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2023 02:52:20 GMT -->

</html>