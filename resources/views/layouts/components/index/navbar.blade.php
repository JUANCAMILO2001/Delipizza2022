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
                    <!-- Reservaciones  -->
                    <div class="show-reserv_button show-rb">
                        <span>Reservacion</span>
                        <i class="fal fa-bookmark"></i>
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
                                <li><a href="#">Sobre Nosotros</a></li>
                                <li><a href="#">Contactos</a></li>

                            </ul>
                        </nav>
                    </div>

                    <!-- container 2 -->
                    @include('layouts.components.cart.cartmodal-navbar')

                </div>
            </div>

        @else

            <div class="container">
                <div class="header-container fl-wrap">
                    <a href="{{route('index')}}" class="logo-holder">
                        <img src="./Restabook/images/Delipizza.png" alt="">
                    </a>
                    <div class="show-reserv_button show-rb">
                        <span>Reservacion</span>
                        <i class="fal fa-bookmark"></i>
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
                                <li><a href="#">Sobre Nosotros</a></li>
                                <li><a href="#">Contactos</a></li>

                            </ul>
                        </nav>
                    </div>


                </div>
            </div>

        @endif
    </div>
    <!-- header-inner end  -->
</header>
