<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        JET HOTEL | @yield('title')
    </title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="/img/logo.png">
    
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap-4.0.0/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/bootstrap-4.0.0/css/bootstrap-grid.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/bootstrap-4.0.0/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" href="{{ asset('css/logo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/my-style.css') }}">
    {{-- <link rel="stylesheet" href="{{asset('css/responsive.css')}}"> --}}

    <style>
        .blue-text{color: #00BCD4}
        .form-control-label
        {
            margin-bottom: 0
        }
        input, textarea, button {
            padding: 6px 12px;
            border-radius: 5px !important;
            margin: 3px 0px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            font-size: 18px !important;
            font-weight: 300
        }

        input:focus, textarea:focus{
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #00BCD4;
            outline-width: 0;
            font-weight: 400;
        }

        .btn-block{
            text-transform: uppercase;
            font-size: 15px !important;
            font-weight: 400;
            height: 43px;
            cursor: pointer;
        }
        .btn-block:hover{
            color: #fff !important
        }
        button:focus{
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0;
        }
    </style>

    @yield('style')
</head>

<body>

    @if(Session::get('error_message'))
        <div class="alert alert-danger">
            {{ Session::get('error_message') }}
        </div>
    @endif

    @if(Session::get('success_message'))
        <div class="alert alert-success">
            {{ Session::get('success_message') }}
        </div>
    @endif

    @include('hotel.parts.header')

    @yield('content')

    @include('hotel.parts.for-query')
    @include('hotel.parts.instagram-area')
    @include('hotel.parts.book-form')
    @include('hotel.parts.footer')
    @include('hotel.parts.scripts')

    @yield('script')
</body>