@extends('admin.layouts.master')
@section('content')

@endsection
@section('style')
    <!-- filepond -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendors/filepond/dist/filepond.min.css') }}" type="text/css">
    {{-- <link rel="stylesheet" href="{{ asset('admin/assets/vendors/filepond/dist/filepond.css') }}" type="text/css"> --}}

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
