﻿@extends('layouts.master')
@section('content')
<main class="wrapper default ">
    <div class="container">
        <div class="row">
            <div class="main-content login_content  col-12 col-md-7 col-lg-5 mx-auto ">
                <header class="card-header">
                    <h3 class="card-title"><span>ایجاد به حساب کاربری</span></h3>
                </header>
                <div class="login_box">



                    <form method="POST" action="{{ route('register') }}" class="">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-account-title"><span>*</span> نام کاربری</div>
                                <div class="form-account-row">
                                    <input class="input_second input_all" type="text" placeholder=" نام کاربری شما" name="name">
                                </div>
                            </div>
                            @error('name')
                                <span class="invalid-feedback d-block">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                            <div class="col-md-12 col-sm-12">
                                <div class="form-account-title"><span>*</span> شماره تماس</div>
                                <div class="form-account-row">
                                    <input class="input_second input_all" type="text" placeholder=" شماره تماس شما" name="mobile">
                                </div>
                            </div>
                            @error('mobile')
                                <span class="invalid-feedback d-block">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                            <div class="col-md-12 col-sm-12">
                                <div class="form-account-title"><span>*</span> کلمه عبور</div>
                                <div class="form-account-row">
                                    <input class="input_second input_all" type="password" placeholder=" کلمه عبور شما" name="password">
                                </div>
                            </div>
                            @error('password')
                                <span class="invalid-feedback d-block">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror
                            <div class="col-md-12 col-sm-12">
                                <div class="form-account-title"><span>*</span> تکرار کلمه عبور</div>
                                <div class="form-account-row">
                                    <input class="input_second input_all" type="password" placeholder=" تکرار کلمه عبور شما" name="password_confirmation">
                                </div>
                            </div>
                            @error('password_confirmation')
                                <span class="invalid-feedback d-block">
                                    <strong>
                                        {{ $message }}
                                    </strong>
                                </span>
                            @enderror


                            <div class="col-12">
                                <div class="form-account-agree">
                                    <label class="checkbox-form checkbox-primary">
                                        <input type="checkbox" id="agree">
                                        <span class="checkbox-check"></span>
                                    </label>
                                    <label for="agree">
                                        تمامی <a href="#">شرایط و قوانین</a> استفاده از سرویس‌های سایت مَسای را به دقت مطالعه کرده و با آنها موافقت کامل دارم
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 text--center">
                                <button type="submit" class="btn big_btn btn-main-masai">عضویت</button>
                            </div>
                            <div class="col-12 footer_login_reg text--center">
                                <p>
                                    <span>قبلا ثبت نام کرده اید؟</span>
                                    <a href="login.html">ورود</a>
                                </p>

                            </div>
                            <div class="col-12 ">

                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <footer class="main-footer default">
        <div class="back-to-top ">
            <a href="#">
                <span class="icon"><i class="fa fa-chevron-up"></i></span> <span>
                    بازگشت بالا
                </span>
            </a>
        </div>
        <div class=" servicesbg">
            <div class="footer-services container  space-10">
                <div class="row">
                    <div class="service-item col-2 contact-box text-center">
                        <img src="{{ asset('assets/img/ico/png-4.png') }}" class="width-40" />
                        <span class="title-1 light-black">ضمانت اصل بودن</span>
                    </div>
                    <div class="service-item col-2 contact-box text-center">
                        <img src="{{ asset('assets/img/ico/png-1.png') }}" class="width-40" />
                        <span class="title-1 light-black">پرداخت در محل</span>
                    </div>
                    <div class="service-item col-2 contact-box text-center">
                        <img src="{{ asset('assets/img/ico/png-2.png') }}" class="width-40" />
                        <span class="title-1 light-black">ارسال سریع</span>
                    </div>
                    <div class="service-item col-2 contact-box text-center">
                        <img src="{{ asset('assets/img/ico/png-5.png') }}" class="width-40" />
                        <span class="title-1 light-black">فرصت 7 روزه استرداد</span>
                    </div>
                    <div class="service-item col-2 contact-box text-center">
                        <img src="{{ asset('assets/img/ico/png-3.png') }}" class="width-40" />
                        <span class="title-1 light-black">پشتیبانی تلفنی</span>
                    </div>
                    <div class="service-item col-2 contact-box text-center">
                        <img src="{{ asset('assets/img/ico/png-7.png') }}" class="width-40" />
                        <span class="title-1 light-black">هدیه نقدی</span>
                    </div>

                </div>

            </div>
        </div>
        <div class="container-fluid space-30 bg-map">

            <div class="footer-widgets container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="widget-menu widget card">
                            <div class="card-header">
                                <h3 class="card-title">درباره ما</h3>
                            </div>
                            <p class="about_footer">
                                قالب مَسای یک پکیج کامل ایرانی با هدف بی نهایت قالب HTML و WordPress و به روز رسانی همیشگی است، که تمام ویژگی های لازم طراحی سایت را در نظر میگیرد
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="widget-menu widget card">
                            <div class="card-header">
                                <h3 class="card-title">خدمات مشتریان</h3>
                            </div>
                            <ul class="footer-menu">
                                <li>
                                    <a href="#">ارسال فوری</a>
                                </li>
                                <li>
                                    <a href="#">پشتیبانی سریع</a>
                                </li>
                                <li>
                                    <a href="#">بازگشت وجه</a>
                                </li>
                                <li>
                                    <a href="#">بسته بندی کالا</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="widget-menu widget card">
                            <div class="card-header">
                                <h3 class="card-title">با مَسای شاپ</h3>
                            </div>
                            <ul class="footer-menu">

                                <li>
                                    <a href="#">تامین کالا همکار</a>
                                </li>
                                <li>
                                    <a href="#">تخفیف سازمانی</a>
                                </li>
                                <li>
                                    <a href="#">تماس با ما</a>
                                </li>
                                <li>
                                    <a href="#">درباره ما</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="widget-menu widget card">
                            <div class="card-header">
                                <h3 class="card-title">مجوزات</h3>
                            </div>
                            <div class="License_img">
                                <a href="#" target="_blank"><img src="{{ asset('assets/img/License_2.png') }}" alt=""></a>
                                <a href="#" target="_blank"><img src="{{ asset('assets/img/License_1.png') }}" alt=""></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <div class="copyright">
            <div class="container">
                <p>
                    این قالب به وسیله گروه برنامه نویسی گرزک پشتیبانی میشود.
                </p>
            </div>
        </div>
    </footer>
</main>
@endsection
@section('style')

@endsection
@section('script')

@endsection

