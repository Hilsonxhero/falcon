<div>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--begin::Theme Color-->
    <meta name="theme-color" content="#27293d">
    <!--end::Theme Color-->

    <!--begin::Favicons-->

    <link rel="apple-touch-icon" href="assets/images/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="assets/images/favicons/sw.png" sizes="32x32" type="image/png">
    <link rel="icon" href="assets/images/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="{{ asset('assets/images/favicons/favicon.ico') }}">

    <!--end::Favicons-->

    <!--begin::Style-->

    <link rel="stylesheet" href="{{ asset('/panel/assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/panel/assets/vendor/c3/c3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/panel/assets/vendor/select-ui/select-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/panel/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/panel/assets/vendor/sweetalert/sweetalert2.min.css') }}">

    <!--begin::Custom Style-->
    <link rel="stylesheet" href="{{ asset('panel/assets/css/custom.css') }}">
    <!--end::Custom Style-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!--end::Style-->

    <!--begin:: Font && Icons-->
    <link rel="stylesheet" href="{{ asset('panel/assets/fonts/remixicon/remixicon.css') }}">
    <!--end:: Font && Icons-->

    @yield('style')

    <livewire:styles />

    <title>پنل مدیریت - @yield('title')</title>

</div>
