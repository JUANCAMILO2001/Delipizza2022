
@if(auth()->check())
    <!-- content  -->
    <div class="content">
        <!--  section  -->
        <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
            <div class="bg par-elem "  data-bg="./Restabook/images/menu/about-2.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title">
                    <h4>Disfrute de un BUEN Plato junto la compañia de su familia en Nuestro Local.</h4>
                    <h2>Descubre Nuestro Menú</h2>
                    <div class="dots-separator fl-wrap"><span></span></div>
                </div>
            </div>
            <div class="hero-section-scroll">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
            </div>
            <div class="brush-dec"></div>
        </section>
        <!--  section  end-->
        <!--  section  -->
        <section class="hidden-section" data-scrollax-parent="true" id="sec2">
            <div class="container">
                <!-- gallery-filters -->
                <div class="gallery-filters gth">
                    <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*"><span>01.</span>Todos los Productos</a>
                </div>
                <!-- gallery-filters end-->
                <!-- gallery start -->
                <div class="gallery-items grid-big-pad  lightgallery three-column fl-wrap" style="margin-bottom:50px;">

                    @foreach($products as $pro)

                    <!-- gallery-item-->
                    <div class="gallery-item Pizza">
                        <div>
                            <div class="grid-item-holder hov_zoom">
                                <img  src="./Restabook/images/menu/{{ $pro->image_path }}"   alt="{{ $pro->image_path }}">
                            </div>
                            <div class="grid-item-details">
                                <h3>{{ $pro->name }}</h3>
                                <p>{{ $pro->details }}</p>

                                <div class="grid-item_price">

                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                        <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                        <input type="hidden" value="1" id="quantity" name="quantity">

                                        <span>${{ $pro->price }}</span>
                                        <button class="add_cart">Añadir al Carrito</button>

                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->

                    @endforeach


                </div>
                <!-- gallery end -->




                <div class="clearfix"></div>
                <div class="bold-separator bold-separator_dark"><span></span></div>
                <div class="clearfix"></div>
                <a href="#" class="btn  ">Descargar Menu en PDF.<i class="fal fa-long-arrow-right"></i></a>
            </div>
            <div class="section-bg">
                <div class="bg"  data-bg="./Restabook/images/menu/section-bg.png"></div>
            </div>
        </section>
        <!--  section end  -->
        <div class="brush-dec2 brush-dec_bottom"></div>
    </div>
    <!-- content end  -->




@else
    <!-- content  -->
    <div class="content">
        <!--  section  -->
        <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
            <div class="bg par-elem "  data-bg="./Restabook/images/menu/about-2.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title">
                    <h4>Disfrute de un BUEN Plato junto la compañia de su familia en Nuestro Local.</h4>
                    <h2>Descubre Nuestro Menú</h2>
                    <div class="dots-separator fl-wrap"><span></span></div>
                </div>
            </div>
            <div class="hero-section-scroll">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
            </div>
            <div class="brush-dec"></div>
        </section>
        <!--  section  end-->
        <!--  section  -->
        <section class="hidden-section" data-scrollax-parent="true" id="sec2">
            <div class="container">
                <div class="gallery_filter-button btn">Show Filters <i class="fal fa-long-arrow-down"></i></div>
                <!-- gallery-filters -->
                <div class="gallery-filters gth">
                    <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*"><span>01.</span>Todos los Productos</a>
                    <a href="#" class="gallery-filter " data-filter=".Pizza"><span>02.</span>Pizzas</a>
                    <a href="#" class="gallery-filter " data-filter=".Hamburguesa"><span>03.</span>Hamburguesa</a>
                    <a href="#" class="gallery-filter" data-filter=".Salchipapa"><span>04.</span>Salchipapa</a>
                    <a href="#" class="gallery-filter" data-filter=".Perro_caliente"><span>05.</span>Perro caliente</a>
                    <a href="#" class="gallery-filter" data-filter=".Mazorcada"><span>06.</span>Mazorcada</a>
                    <a href="#" class="gallery-filter" data-filter=".Lasaña"><span>07.</span>Lasaña</a>
                    <a href="#" class="gallery-filter" data-filter=".Empanadas"><span>08.</span>Empanadas</a>
                    <a href="#" class="gallery-filter" data-filter=".Gaseosas"><span>09.</span>Gaseosas</a>
                </div>
                <!-- gallery-filters end-->
                <!-- gallery start -->
                <div class="gallery-items grid-big-pad  lightgallery three-column fl-wrap" style="margin-bottom:50px;">



                    <!-- gallery-item-->
                    <div class="gallery-item Pizza">
                        <div>
                            <div class="grid-item-holder hov_zoom">
                                <img  src="./Restabook/images/menu/pizza-mexicana.jpg"    alt="">
                            </div>
                            <div class="grid-item-details">
                                <h3>Pizza Mexicana</h3>
                                <p>Totopos, guacamole, bolognesa al ají, tomate al ají y crema de fríjoles refritos.</p>
                                <div class="grid-item_price">
                                    <span>$25.000</span>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item Pizza">
                        <div>
                            <div class="grid-item-holder hov_zoom">
                                <img  src="./Restabook/images/menu/pizza-hawaiana.jpg"    alt="">
                            </div>
                            <div class="grid-item-details">
                                <h3>Pizza Hawaiana</h3>
                                <p>Totopos, guacamole, bolognesa al ají, tomate al ají y crema de fríjoles refritos.</p>
                                <div class="grid-item_price">
                                    <span>$25.000</span>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item Hamburguesa">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="./Restabook/images/menu/hamburguesa-carne.jpg"    alt="">
                        </div>
                        <div class="grid-item-details">
                            <h3>Hamburguesa de Carne </h3>
                            <p>Jugosa carne 100% de res de 125 g, con delicioso queso mozzarella, verduras y salsas</p>
                            <div class="grid-item_price">
                                <span>$12.000</span>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item Salchipapa">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="./Restabook/images/menu/salchipapa.jpeg"    alt="">
                        </div>
                        <div class="grid-item-details">
                            <h3>Salchipapa Especial</h3>
                            <p>salchipa de 120gr con pollo desmechado, carne desmechada, champiñones. </p>
                            <div class="grid-item_price">
                                <span>$11.500</span>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item Perro_caliente">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="./Restabook/images/menu/perro-caliente.jpg"    alt="">
                        </div>
                        <div class="grid-item-details">
                            <h3>Perro Americano Sensillo </h3>
                            <p>Salchicha Americana, papitas Cabello de angel, Cebolla caramelizada, un Huevo Codornis.</p>
                            <div class="grid-item_price">
                                <span>$9.000</span>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item Mazorcada">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="./Restabook/images/menu/mazorcada.jpg"    alt="">
                        </div>
                        <div class="grid-item-details">
                            <h3>Mazorcada Mixta</h3>
                            <p>Maiz tierno, carne Desmechada, Pollo Desmechado, papitas Cabello de Angel</p>
                            <div class="grid-item_price">
                                <span>$15.000</span>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item Lasaña">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="./Restabook/images/menu/lasaña.jpg"    alt="">
                        </div>
                        <div class="grid-item-details">
                            <h3>Lasaña Sensilla</h3>
                            <p>Tamaño 125gr, Carne molida, pollo desmechado, papitas.</p>
                            <div class="grid-item_price">
                                <span>$13.500</span>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item Empanadas">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="./Restabook/images/menu/empanadas.jpg"    alt="">
                        </div>
                        <div class="grid-item-details">
                            <h3>Empanada de pollo</h3>
                            <p>Empanadas de Papa y Pollo super grandes acompañadas de un delicioso aji de la casa</p>
                            <div class="grid-item_price">
                                <span>$2.200</span>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item Gaseosas">
                        <div class="grid-item-holder hov_zoom">
                            <img  src="./Restabook/images/menu/manzana.jpg"    alt="">
                        </div>
                        <div class="grid-item-details">
                            <h3>Manzana Postobon</h3>
                            <p>Gaseosa sabor a Manzana la que no puede faltar tamaño 135ml</p>
                            <div class="grid-item_price">
                                <span>$2.000</span>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->



                </div>
                <!-- gallery end -->




                <div class="clearfix"></div>
                <div class="bold-separator bold-separator_dark"><span></span></div>
                <div class="clearfix"></div>
                <a href="./Restabook/pdf/menu-delipizza.pdf" class="btn" target="_blank">Descargar Menu en PDF.<i class="fal fa-long-arrow-right"></i></a>
            </div>
            <div class="section-bg">
                <div class="bg"  data-bg="./Restabook/images/menu/section-bg.png"></div>
            </div>
        </section>
        <!--  section end  -->
        <div class="brush-dec2 brush-dec_bottom"></div>
    </div>
    <!-- content end  -->

@endif


<!-- footer -->
<div class="height-emulator fl-wrap"></div>
@include('.layouts.components.index.footer')




