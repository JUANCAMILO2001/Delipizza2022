<!-- content  -->
<div class="content">
    <!--  section  -->
    <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
        <div class="bg par-elem "  data-bg="https://media.istockphoto.com/photos/fast-food-and-drink-on-table-picture-id1031354828" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title">
                <h4>Pide tu comida con servicio a Domicilio Gratis</h4>
                <h2>Tu Carrito</h2>
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
    <section class="hidden-section">
        <div class="container">
            <!-- CHECKOUT TABLE -->
            <div class="row">
                <div class="col-md-8">
                    @if(\Cart::getTotalQuantity()>0)
                        <h4 class="cart-title">Tu Carrito <span>{{ \Cart::getTotalQuantity()}} Items</span></h4><br>
                    @else
                        <h4 class="cart-title">No hay Productos en su Carro</h4><br>
                        <a href="{{route('menu')}}" class="btn btn-dark">Volver al Menú</a>
                        <br><br><br>
                    @endif




                    <div class="table-cart">
                        <table class="table table-border checkout-table">
                        <thead>
                        <tr>
                            <th >Item</th>
                            <th>Nombre</th>
                            <th >Precio</th>
                            <th>Subtotal</th>
                            <th>Cantidad</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($cartCollection as $item)
                            <tr>
                                <td >
                                    <a href="#"><img src="/Restabook/images/menu/{{ $item->attributes->image }}" class="respimg"></a>
                                </td>
                                <td>
                                    <h5 class="product-name">{{ $item->name }}</h5>
                                </td>
                                <td >
                                    <h5 class="order-money">${{ $item->price }}</h5>
                                </td>

                                <td>
                                    <h5 class="order-money">${{ \Cart::get($item->id)->getPriceSum() }}</h5>
                                </td>
                                <form action="{{ route('cart.update') }}" method="POST">
                                    {{ csrf_field() }}
                                    <td>
                                        <input type="hidden" value="{{ $item->id}}" id="id" name="id">
                                        <input type="number" name="quantity" id="quantity" value="{{ $item->quantity }}"  class="order-count">

                                    </td>
                                    <td>
                                        <button  title="Editar"><i class="material-symbols-outlined">
                                                edit
                                            </i>
                                        </button>
                                    </td>
                                </form>
                                <form action="{{ route('cart.remove') }}" method="POST">
                                    {{ csrf_field() }}
                                    <td class="pr-remove">
                                        <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                        <button  title="Eliminar"><i class="material-symbols-outlined">close</i></button>
                                    </td>
                                </form>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    </div>


                        @if(count($cartCollection)>0)

                    <!-- COUPON -->
                    <div class="coupon-holder">
                        <form action="{{ route('cart.clear') }}" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="btn-a">Borrar Carrito</button>
                        </form>
                        <button  class="pull-right btn-uc"><a href="{{route('menu')}}" style="color: #FFFFFF">Volver al Menú</a> </button>

                    </div>
                    <!-- /COUPON -->
                        @endif


                </div>
                <div class="col-md-4">
                    <!-- CART TOTALS  -->
                    @if(count($cartCollection)>0)

                    <div class="cart-totals dark-bg fl-wrap">
                        <h3>Total del Carrito</h3>
                        <table class="total-table">
                            <tbody>
                            <tr>
                                <th>Subtotal del Carrito:</th>
                                <td>${{ \Cart::getTotal() }} COP</td>
                            </tr>
                            <tr>
                                <th>Total de Productos:</th>
                                <td>{{ \Cart::getTotalQuantity()}}</td>
                            </tr>

                            </tbody>
                        </table>
                        <button type="submit" class="cart-totals_btn color-bg">Pagar el Carrito</button>
                    </div>
                    @endif

                    <!-- /CART TOTALS  -->
                </div>
            </div>
            <!-- /CHECKOUT TABLE -->
        </div>
        <div class="section-bg">
            <div class="bg"  data-bg="./Restabook/images/section-bg.png"></div>
        </div>
    </section>
    <!--  section end  -->
    <div class="brush-dec2 brush-dec_bottom"></div>
</div>
<!-- footer -->
<div class="height-emulator fl-wrap"></div>
@include('layouts.components.index.footer')
