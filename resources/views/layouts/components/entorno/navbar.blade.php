<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('admin.index')}}">
                <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img style="height: 42px;" src="./Restabook/images/Delipizza.png" alt="homepage" class="dark-logo dark-logo-admin " />
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
                <li class="nav-item hidden-sm-up" style="padding-left: 70px; ">
                    <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)">
                        <i style="font-size: 26px;" class="ti-menu"></i>
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
                        <i style="margin-right: 25px; font-size: 30px;" class="fa fa-spin fa-gear"></i>
                    </a>

                    <div style="margin-right: 25px; margin-top: 10px;" class="dropdown-menu dropdown-menu-right dropdown-menu-lg iconConfigAdmin" aria-labelledby="dropdownMenuButton">
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
