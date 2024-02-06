@extends('admin.layouts.master')
@section('content')

<div class="main-content">
    <div class="page-content">
 <div class="container-fluid">

     <!-- start page title -->
     <div class="row">
         <div class="col-12">
             <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                 <h4 class="mb-sm-0 font-size-18">لیست کاربران</h4>

                 <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="javascript: void(0);">کاربران</a></li>
                         <li class="breadcrumb-item active">لیست</li>
                     </ol>
                 </div>

             </div>
         </div>
     </div>
     <!-- end page title -->

     <div class="row align-items-center">
         <div class="col-md-6">
             <div class="mb-3">
                 <h5 class="card-title">لیست کاربران <span class="text-muted fw-normal ms-2">۸۹</span></h5>
             </div>
         </div>

         <div class="col-md-6">
             <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                 <div>
                     <ul class="nav nav-pills">
                         <li class="nav-item">
                             <a class="nav-link active" href="apps-contacts-list-2.html" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="bx bx-list-ul"></i></a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="apps-contacts-grid-2.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>
                         </li>
                     </ul>
                 </div>
                 <div>
                     <a href="#" class="btn btn-light"><i class="bx bx-plus me-1"></i>عضویت کاربر</a>
                 </div>

                 <div class="dropdown">
                     <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         <i class="bx bx-dots-horizontal-rounded"></i>
                     </a>

                     <ul class="dropdown-menu dropdown-menu-end">
                         <li><a class="dropdown-item" href="#">عملیات</a></li>
                         <li><a class="dropdown-item" href="#">بررسی</a></li>
                         <li><a class="dropdown-item" href="#">دیگر</a></li>
                     </ul>
                 </div>
             </div>

         </div>
     </div>
     <!-- end row -->

     <div class="table-responsive mb-4">
         <table id="dataTableExample" class="table align-middle datatable dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
             <thead>
                 <tr>
                     <th>ردیف</th>
                     <th scope="col">نام</th>
                     <th scope="col">موبایل</th>
                     <th scope="col">کد ملی</th>
                     <th scope="col">تاریخ عضویت</th>
                     <th scope="col">وضعیت اکانت</th>
                     <th style="width: 80px; min-width: 80px;">عملیات</th>
                 </tr>
             </thead>
             <tbody>
                @foreach ($users as $user)
                <tr>         
                    <td>{{ $user->id }}</td>
                    <td>
                         <img src="{{ asset('admin/assets/images/users/avatar-2.jpg') }}" alt="" class="avatar-sm rounded-circle me-2">
                         <a href="#" class="text-body">{{ $user->first_name.' '.$user->last_name}}</a>
                     </td>
                     <td>{{ $user->mobile }}</td>
                     <td>{{ $user->national_code }}</td>
                     <td>{{ $user->created_at }}</td>
                     <td>{{ $user->status == 0 ? 'فعال' : 'غیر فعال' }}</td>
                     <td>
                         <div class="dropdown">
                             <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 <i class="bx bx-dots-horizontal-rounded"></i>
                                
                             </button>
                             <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ route('admin.user.show',  ['id' => $user->id]) }}">جزئیات</a></li>
                                {{-- <li><a class="dropdown-item" href="{{ route('admin.user.destroy',  ['id' => $user->id]) }}">حذف</a></li> --}}
                             </ul>
                         </div>
                     </td>
                </tr>
                @endforeach

             </tbody>
         </table>
         <!-- end table -->
     </div>
     <!-- end table responsive -->

 </div> <!-- container-fluid -->
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

<script>


</script>
@endsection
