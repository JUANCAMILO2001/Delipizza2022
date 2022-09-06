<header class="main-header">
    <!-- header-top  -->
    <div class="header-inner  fl-wrap">
        @if(auth()->check())

            <div class="container">
                <div class="header-container fl-wrap">
                    <a href="/" class="logo-holder">
                        <img src="./Restabook/images/Delipizza.png" alt="">
                    </a>


                    <div class="show-share-btn showshare htact ">
                        <a href="{{route('login.destroy')}}">
                            <i class="material-symbols-outlined" style="color: #666;padding-top: 24px;">
logout
</i>

                            <span class="header-tooltip">Cerrar Sesión</span></a>
                    </div>

                    <div class="show-reserv_button show-rb">
                        <span>Reservacion</span>
                        <i class="fal fa-bookmark"></i>
                    </div>

                    <div class="show-cart sc_btn htact">
                        <i class="fal fa-shopping-bag"></i>
                        <span class="show-cart_count">4</span>
                        <span class="header-tooltip">Tu Carrito</span>
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
                                    <a href="#">Menú</a>
                                </li>
                                <li><a href="#">Sobre Nosotros</a></li>
                                <li><a href="#">Contactos</a></li>

                            </ul>
                        </nav>
                    </div>

                    <!-- container 2 -->
                    <!-- header-cart_wrap  -->
                    <div class="header-cart_wrap novis_cart">
                        <div class="header-cart_title">Tu carrito <span>Numero items</span></div>
                        <div class="header-cart_wrap_container fl-wrap">
                            <div class="box-widget-content">
                                <div class="widget-posts fl-wrap">
                                    <ol>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="https://dam.cocinafacil.com.mx/wp-content/uploads/2020/12/pizza-a-la-mexicana.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Pizza Mexicana Completa</a>
                                                <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $30.000</div>
                                            </div>
                                            <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="https://www.elespectador.com/resizer/WZf-ovh_Rfl1hfc5__TIOwttF44=/arc-anglerfish-arc2-prod-elespectador/public/5RH7A42CWZAKFLVXKZDG7ZGJQM.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Lasaña Mixta</a>
                                                <div class="widget-posts-descr_calc clearfix">2 <span>x</span> $15.000</div>
                                            </div>
                                            <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="https://thumbs.dreamstime.com/b/hamburguesa-ahumada-y-asada-la-parrilla-sabrosa-de-la-carne-de-vaca-95442454.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Hamburguesa de Carne Ahumada</a>
                                                <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $10.000</div>
                                            </div>
                                            <div class="clear-cart_button">
                                                <i class="fal fa-times"></i>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="https://www.napoleon.com/sites/default/files/styles/inline_image/public/images/2019-06/recipeBlog-FeatureChiliCheeseDogsCOBSgourmetBun-13jun16.png?itok=ZCoUKiY6" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Perro Sensillo sin Cebolla</a>
                                                <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $10.000</div>
                                            </div>
                                            <div class="clear-cart_button">
                                                <i class="fal fa-times"></i>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="header-cart_wrap_total fl-wrap">
                            <div class="header-cart_wrap_total_item">Subtotal : <span>$55.000</span></div>
                        </div>
                        <div class="header-cart_wrap_footer fl-wrap">
                            <a href="cart.html"> Ver Carro</a>
                            <a href="checkout.html">Verificar</a>
                        </div>
                    </div>
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


                    <div class="show-cart sc_btn htact">
                        <i class="fal fa-shopping-bag"></i>
                        <span class="show-cart_count">4</span>
                        <span class="header-tooltip">Tu Carrito</span>
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
                                    <a href="#">Menú</a>
                                </li>
                                <li><a href="#">Sobre Nosotros</a></li>
                                <li><a href="#">Contactos</a></li>

                            </ul>
                        </nav>
                    </div>

                    <!-- container 2 -->
                    <!-- header-cart_wrap  -->
                    <div class="header-cart_wrap novis_cart">
                        <div class="header-cart_title">Tu carrito <span>Numero items</span></div>
                        <div class="header-cart_wrap_container fl-wrap">
                            <div class="box-widget-content">
                                <div class="widget-posts fl-wrap">
                                    <ol>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="https://dam.cocinafacil.com.mx/wp-content/uploads/2020/12/pizza-a-la-mexicana.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Pizza Mexicana Completa</a>
                                                <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $30.000</div>
                                            </div>
                                            <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="https://www.elespectador.com/resizer/WZf-ovh_Rfl1hfc5__TIOwttF44=/arc-anglerfish-arc2-prod-elespectador/public/5RH7A42CWZAKFLVXKZDG7ZGJQM.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Lasaña Mixta</a>
                                                <div class="widget-posts-descr_calc clearfix">2 <span>x</span> $15.000</div>
                                            </div>
                                            <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="https://thumbs.dreamstime.com/b/hamburguesa-ahumada-y-asada-la-parrilla-sabrosa-de-la-carne-de-vaca-95442454.jpg" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Hamburguesa de Carne Ahumada</a>
                                                <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $10.000</div>
                                            </div>
                                            <div class="clear-cart_button">
                                                <i class="fal fa-times"></i>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <a href="#"  class="widget-posts-img"><img src="https://www.napoleon.com/sites/default/files/styles/inline_image/public/images/2019-06/recipeBlog-FeatureChiliCheeseDogsCOBSgourmetBun-13jun16.png?itok=ZCoUKiY6" class="respimg" alt=""></a>
                                            <div class="widget-posts-descr">
                                                <a href="#" title="">Perro Sensillo sin Cebolla</a>
                                                <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $10.000</div>
                                            </div>
                                            <div class="clear-cart_button">
                                                <i class="fal fa-times"></i>
                                            </div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="header-cart_wrap_total fl-wrap">
                            <div class="header-cart_wrap_total_item">Subtotal : <span>$55.000</span></div>
                        </div>
                        <div class="header-cart_wrap_footer fl-wrap">
                            <a href="cart.html"> Ver Carro</a>
                            <a href="checkout.html">Verificar</a>
                        </div>
                    </div>
                </div>
            </div>

        @endif
    </div>
    <!-- header-inner end  -->
</header>
