<!-- header-cart_wrap modal -->
<div class="header-cart_wrap novis_cart">
    @if(count(\Cart::getContent()) > 0)

        <div class="header-cart_title">Tu carrito <span>Numero items <b style="color: #C19D60">{{ \Cart::getTotalQuantity()}}</b></span></div>
    <div class="header-cart_wrap_container fl-wrap">
        <div class="box-widget-content">
            <div class="widget-posts fl-wrap">
                @foreach(\Cart::getContent() as $item)

                <ul>
                    <li class="clearfix">
                        <a href="#"  class="widget-posts-img"><img src="/Restabook/images/menu/{{ $item->attributes->image }}" class="respimg" alt=""></a>
                        <div class="widget-posts-descr">
                            <a href="#" title="">{{$item->name}}</a>
                            <div class="widget-posts-descr_calc clearfix">CNT/PRD: {{ $item->quantity }} <span>X</span> ${{ $item->price }}</div>
                        </div>
                        <form action="{{ route('cart.remove') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                            <button class="clear-cart_button"><a type="submit"><i class="fal fa-times"></i></a></button>
                        </form>
                    </li>
                </ul>
                @endforeach

            </div>
        </div>
    </div>
    <div class="header-cart_wrap_total fl-wrap">
        <div class="header-cart_wrap_total_item">Subtotal : <span>{{ \Cart::get($item->id)->getPriceSum() }}</span></div>
    </div>
    <div class="header-cart_wrap_footer fl-wrap">
        <a href="{{route('cart.index')}}"> Ver Carro</a>
        <a href="#">Pagar Ahora</a>
    </div>

    @else
        <div class="header-cart_title" style="display: flex; justify-content: center; align-items: center;">Tu carrito esta vacío</div>

    @endif

</div>
