<div class="container container-rg">
    <div class="container-rg2" style="">
        <div>
            <div class="section-title-login">

                <h2>Registrarse</h2>
                <div class="dots-separator-lg fl-wrap"><span></span></div>
            </div>
            <form class="custom-form-lg" action="" method="post">
                @csrf
                <!--input Nombre-->
                <div class="form-floating mb-3 btn-1">
                    <input type="text"  name="name"  placeholder="Nombres Completos *" value="" required/>
                </div>
                <!--input apellidos-->
                <div class="form-floating mb-3 btn-1">
                    <input type="text"  name="lastname"  placeholder="Apellidos Completos *" value="" required/>
                </div>
                <!--input Number Telefono-->
                <div class="form-floating mb-3 btn-1">
                    <input type="text"  name="number"  placeholder="Numero Celular *" value="" required/>
                </div>
                <!--input email-->
                <div class="form-floating mb-3 btn-1">
                    <input type="text"  name="email" placeholder="Correo Electronico *" value="" required/>
                </div>
                <!--input password-->
                <div class="form-floating btn-1">
                    <input type="password"  name="password" placeholder="Contraseña *" value="" required/>
                </div>
                <!--input password confirm-->
                <div class="form-floating btn-1">
                    <input type="password"  name="password" placeholder="Confirmar Contraseña *" value="" required/>
                </div>
                <!--Boton de Iniciar sesion-->
                <div class="d-grid gap-2 btn-2">
                    <button type="submit" class="btn-rg border-btn-rg">Registrarse<i class="fal fa-long-arrow-right"></i></button>
                </div>
            </form>
        </div>
    </div>


</div>
