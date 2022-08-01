<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{ config('app.name') }} - {{ $title ?? 'Dashboard' }}</title>

    <<!-- base;jquery -->
    <script type="text/javascript" src="{{ asset('dist/js/jquery-3.3.1.slim.min.js') }}"></script>

    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('dist/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/vendors/css/vendor.bundle.base.css') }}">

    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('dist/vendors/mdi/css/materialdesignicons.min.css') }}">

    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('dist/css/vertical-layout-light/style.css') }}">

    <!-- icon;sipren -->
    <!-- <link rel="shortcut icon" href="./dist/icon-sicafe.png" /> -->

        @stack('extra-styles')
</head>