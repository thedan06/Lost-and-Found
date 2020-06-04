<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LCH</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('css/fontawesome-free/css/all.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            @yield('content')

        </div>

    </div>

</div>


<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Bootstrap core JavaScript-->
{{--<script src="{{ asset('js/template/jquery.min.js') }}" defer></script>
<script src="{{ asset('js/template/bootstrap.bundle.min.js') }}" defer></script>--}}

<!-- Core plugin JavaScript-->
{{--<script src="{{ asset('js/template/jquery.easing.min.js') }}" defer></script>--}}

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}" defer></script>

</body>

</html>
