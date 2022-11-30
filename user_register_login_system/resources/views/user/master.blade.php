<!doctype html>
<html lang="en" class="minimal-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('adminAsset')}}/assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{asset('adminAsset')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{asset('adminAsset')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('adminAsset')}}/assets/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{asset('adminAsset')}}/assets/css/pace.min.css" rel="stylesheet" />


    <!--Theme Styles-->
    <link href="{{asset('adminAsset')}}/assets/css/dark-theme.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/light-theme.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/semi-dark.css" rel="stylesheet" />
    <link href="{{asset('adminAsset')}}/assets/css/header-colors.css" rel="stylesheet" />

    <title>@yield('title')</title>
</head>

<body>


<!--start wrapper-->
@yield('content')
<!--end wrapper-->


<!-- Bootstrap bundle JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="assets/js/pace.min.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<!--app-->
<script src="assets/js/app.js"></script>
<script src="assets/js/index.js"></script>

<script>
    new PerfectScrollbar(".best-product")
    new PerfectScrollbar(".top-sellers-list")
</script>


</body>
</html>
