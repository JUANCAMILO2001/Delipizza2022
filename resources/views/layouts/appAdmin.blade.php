<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - DeliPizza</title>
    <link rel="shortcut icon" href="./Restabook/images/logo.ico">
    <link href="./sidebar/css/style.css" rel="stylesheet">
    <link href="./sidebar/css/dashboard1.css" rel="stylesheet">
    <link rel="stylesheet" href="./sidebar/assets/icons/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./sidebar/assets/icons/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body class="skin-default-dark fixed-layout">

@include('layouts.components.preloader.preloader')

<div id="main-wrapper">

@include('layouts.components.entorno.navbar')
@include('layouts.components.entorno.sidebar')

    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">

        @yield('content')

        </div>
    </div>
    @include('layouts.components.entorno.footer')



</div>

<script src="./sidebar/node_modules/jquery-3.2.1.min.js"></script>
<!-- Bootstrap popper Core JavaScript -->
<script src="./sidebar/node_modules/popper.min.js"></script>
<script src="./sidebar/node_modules/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="./sidebar/js/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="./sidebar/js/waves.js"></script>
<!--Menu sidebar -->
<script src="./sidebar/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="./sidebar/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
<script src="./sidebar/node_modules/raphael-min.js"></script>
<script src="./sidebar/node_modules/morris.min.js"></script>
<script src="./sidebar/node_modules/jquery.sparkline.min.js"></script>
<!--c3 JavaScript -->
<script src="./sidebar/node_modules/d3.min.js"></script>
<script src="./sidebar/node_modules/c3.min.js"></script>
<!-- Chart JS -->
<script src="./sidebar/js/dashboard1.js"></script>
</body>

</html>
