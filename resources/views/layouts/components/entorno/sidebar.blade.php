<aside class="left-sidebar">
    <div class="d-flex no-block nav-text-box align-items-center">
        <span><img style="height: 30px;" src="./Restabook/images/Delipizza-white.png" alt="elegant admin template"></span>
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
                    <a class="waves-effect waves-dark" href="{{route('admin.nuevoproducto')}}" aria-expanded="false">
                        <i class="fa  fa-plus"></i>
                        <span class="hide-menu">Añadir Productos</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="index.html" aria-expanded="false">
                        <i class="fa fa-eye"></i>
                        <span class="hide-menu">Ver Productos</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="map-google.html" aria-expanded="false">
                        <i class="fa fa-user-plus"></i>
                        <span class="hide-menu">Nuevos Usuarios</span>

                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="pages-profile.html" aria-expanded="false">
                        <i class="fa fa-dropbox"></i>
                        <span class="hide-menu">Pedidos</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="table-basic.html" aria-expanded="false">
                        <i class="fa fa-money"></i>
                        <span class="hide-menu">Balance</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="icon-fontawesome.html" aria-expanded="false">
                        <i class="fa fa-file-text"></i>
                        <span class="hide-menu">Facturas</span>
                    </a>
                </li>


                <li class="imguser">
                    <a class="waves-effect waves-dark" href="{{route('admin.index')}}" aria-expanded="false" >
                        <i >
                            <img  src="https://tif-picture.herokuapp.com/svg?bg=303f9f&name={{Auth::user()->name}}" alt="user" class="img-circle" width="30">
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
