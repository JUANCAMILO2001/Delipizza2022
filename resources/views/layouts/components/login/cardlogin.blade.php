<div class="container container-lg">
    <div class="border row container-lg2  rounded-3" style="">
        <div>
            <div class="section-title-login">
                <h2>Iniciar Sesión</h2>
                <div class="dots-separator-lg fl-wrap"><span></span></div>
            </div>
            <form class="custom-form-lg" action="" method="post">
                @csrf

                <!--input email-->
                <div class="form-floating mb-3 btn-1">
                    <input type="text"  name="email"  placeholder="Correo Electronico *" value="" required>
                </div>
                <!--input password-->
                <div class="form-floating btn-1">
                    <input type="password"  name="password"  placeholder="Contraseña *" value="" required>
                </div>
                @error('message')
                <div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                </div>
                @enderror
                <!--Boton de Iniciar sesion-->
                <div class="d-grid gap-2 btn-2">
                    <button type="submit" class="btn-lg  border-btn-lg">INGRESAR<i class="fal fa-long-arrow-right"></i></button>
                </div>
                <!--Boton de separador negro-->
                <div class="bold-separator-login"><span></span></div>
                <!--Boton de google-->
                <div class="d-grid gap-2 btn-2">
                    <a href="https://www.google.com" class="btn-lg ">Ingresar con Google<i class="fal fa-long-arrow-right"></i></a>
                </div>
                <!--Boton de facebook-->
                <div class="d-grid gap-2 btn-2 ">
                    <a href="https://www.facebook.com" class="btn-lg ">Ingresar con Facebook<i class="fal fa-long-arrow-right"></i></a>
                </div>


            </form>
        </div>
    </div>


</div>

