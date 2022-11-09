<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Delipizza</title>

    <link href="./sidebar/css/style.css" rel="stylesheet">
    <link href="./sidebar/css/dashboard1.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body class="skin-default-dark fixed-layout">
@include('layouts.components.preloader.preloader')
<div id="main-wrapper">
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="./Restabook/images/Delipizza.png" alt="homepage" class="dark-logo" />
                    </b>
                </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item hidden-sm-up">
                        <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)">
                            <i class="material-symbols-outlined">menu</i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">



                        <a id="dropdownMenuButton" class="nav-link dropdown-toggle text-muted waves-effect waves-dark dropright" href=""
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i style="padding-right: 25px; font-size: 30px;" class="fa fa-cog"></i>
                        </a>

                        <div  class="dropdown-menu dropdown-menu-right dropdown-menu-lg" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Configuracion<i class="fa fa-cogs"></i></a>
                            <a class="dropdown-item" href="{{route('login.destroy')}}">Cerrar Sesión <i class="fa  fa-sign-out"></i></a>
                        </div>

                    </li>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
            </div>
        </nav>
    </header>
    <aside class="left-sidebar">
        <div class="d-flex no-block nav-text-box align-items-center">
            <span><img style="height: 50px; width: 50px;" src="./sidebar/img/Pizzalogo.png" alt="elegant admin template"></span>
            <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i
                    class="ti-menu"></i></a>
            <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
        </div>
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li>
                        <a class="waves-effect waves-dark" href="index.html" aria-expanded="false">
                            <i class="fa fa-tachometer"></i>
                            <span class="hide-menu">Añadir Productos</span>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="index.html" aria-expanded="false">
                            <i class="fa fa-tachometer"></i>
                            <span class="hide-menu">Ver Productos</span>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="map-google.html" aria-expanded="false">
                            <i class="fa fa-globe"></i>
                            <span class="hide-menu">Nuevos Usuarios</span>

                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="pages-profile.html" aria-expanded="false">
                            <i class="fa fa-user-circle-o"></i>
                            <span class="hide-menu">Pedidos</span>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="table-basic.html" aria-expanded="false">
                            <i class="fa fa-table"></i>
                            <span class="hide-menu">Balance</span>
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-dark" href="icon-fontawesome.html" aria-expanded="false">
                            <i class="fa fa-smile-o"></i>
                            <span class="hide-menu">Facturas</span>
                        </a>
                    </li>


                    <li class="imguser">
                        <a class="waves-effect waves-dark" href="icon-fontawesome.html" aria-expanded="false">
                            <i >
                                <img src="./sidebar/img/1.jpg" alt="user" class="img-circle" width="30">
                            </i>
                            <span class="hide-menu">{{auth()->user()->name}}</span>
                        </a>
                    </li>

                </ul>

            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    @include('layouts.components.entorno.bars')

    <footer class="footer">
        © 2020 Elegent Admin by <a href="https://www.wrappixel.com/">wrappixel.com</a>
    </footer>
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
