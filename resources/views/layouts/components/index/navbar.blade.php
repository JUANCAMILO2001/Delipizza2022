<header class="main-header">
    <!-- header-top  -->
    <div class="header-inner  fl-wrap">
        @if(auth()->check())

            <div class="container">
                <div class="header-container fl-wrap">
                    <!-- logo -->
                    <a href="/" class="logo-holder">
                        <img src="./Restabook/images/Delipizza.png" alt="">
                    </a>

                    <!-- Cerrar Sesion -->
                    <div class="show-share-btn showshare htact ">
                        <a href="{{route('login.destroy')}}">
                            <i class="material-symbols-outlined" style="color: #666;padding-top: 24px;">
                                logout
                            </i>

                            <span class="header-tooltip">Cerrar Sesión</span>
                        </a>
                    </div>

                    <!-- Carrito navbar -->
                    <div class="show-cart sc_btn htact">
                        <i class="fal fa-shopping-bag"></i>
                        <span class="show-cart_count">{{ \Cart::getTotalQuantity()}}</span>
                        <span class="header-tooltip">Tu Carrito</span>
                    </div>

                    <!-- nav-button-wrap responsive-->
                    <div class="nav-button-wrap">
                        <div class="nav-button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    @if(auth()->user()->role=='admin')


                    <!--  navigation  de navs-->
                    <div class="nav-holder main-menu">
                        <nav>
                            <ul>
                                <li>
                                    <a href="{{route('index')}}" class="act-link">Inicio </a>
                                </li>
                                <li>
                                    <a href="{{route('menu')}}">Menú</a>
                                </li>
                                <li><a href="{{route('contact')}}">Contactos</a></li>
                                <li><a href="{{route('admin.index')}}">Vista admin</a></li>

                            </ul>
                        </nav>
                    </div>

                    <!-- container 2 -->
                    @include('layouts.components.cart.cartmodal-navbar')

                    @else
                        <div class="nav-holder main-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{route('index')}}" class="act-link">Inicio </a>
                                    </li>
                                    <li>
                                        <a href="{{route('menu')}}">Menú</a>
                                    </li>
                                    <li><a href="{{route('contact')}}">Contactos</a></li>

                                </ul>
                            </nav>
                        </div>
                    @endif
                </div>
            </div>


        @else

            <div class="container">
                <div class="header-container fl-wrap">
                    <a href="{{route('index')}}" class="logo-holder">
                        <img src="./Restabook/images/Delipizza.png" alt="">
                    </a>

                    <!-- Reservaciones  -->
                    <div class="show-reserv_button ">
                        <a href="{{route('register.index')}}">
                            <span>Registrarse</span>
                            <i class="material-symbols-outlined" style="color: #666;padding-top: 24px;">
                                person_add
                            </i>
                        </a>
                    </div>



                    <div class="show-share-btn showshare htact ">
                        <a href="{{route('login.index')}}"><i class="material-symbols-outlined" style="color: #666;padding-top: 24px;">
                                person
                            </i>
                            <span class="header-tooltip">Iniciar Sesión</span></a>
                    </div>



                    <!-- nav-button-wrap-->
                    <div class="nav-button-wrap">
                        <div class="nav-button">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                    <!--  navigation  de navs-->
                    <div class="nav-holder main-menu">
                        <nav>
                            <ul>
                                <li>
                                    <a href="{{route('index')}}" class="act-link">Inicio </a>
                                </li>
                                <li>
                                    <a href="{{route('menu')}}">Menú</a>
                                </li>
                                <li><a href="{{route('contact')}}">Contactos</a></li>

                            </ul>
                        </nav>
                    </div>


                </div>
            </div>

        @endif
    </div>
    <!-- header-inner end  -->
</header>
