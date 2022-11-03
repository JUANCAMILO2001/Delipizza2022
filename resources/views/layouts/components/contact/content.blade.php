
    <!-- wrapper  -->
    <div id="wrapper">
        <!-- content  -->
        <div class="content">
            <section class=" no-padding dark-bg hidden-section">
                <div class="map-container">
                    <div id="singleMap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15908.337307348946!2d-74.1592163!3d4.5788768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sco!4v1667437279792!5m2!1ses-419!2sco" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"  ></iframe>
                    </div>

                </div>
                <!-- map-view-wrap -->
                <div class="map-view-wrap">

                    <div class="container">
                        <div class="map-view-wrap_item">

                            <div class="contact-details">

                                <h4>Detalles de Contacto</h4>
                                <ul>
                                    <li><span><i class="fal fa-map-marked-alt"></i> Direccion:</span> <a href="#">Cll 64 #64-27b Sur</a></li>
                                    <li><span><i class="fal fa-phone-rotary"></i> Telefono:</span> <a href="#">+57 666999777</a></li>
                                    <li><span><i class="fal fa-mailbox"></i> Email:</span> <a href="#">Delipizza@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!--map-view-wrap end -->
                <div class="brush-dec"></div>
            </section>
            <!--  section  -->
            <section class="hidden-section big-padding con-sec" data-scrollax-parent="true" id="sec3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="section-title text-align_left">
                                <h2>Ponerse en contacto</h2>
                                <div class="dots-separator fl-wrap"><span></span></div>
                            </div>
                            <div class="text-block ">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.
                                </p>
                            </div>
                            <div class="contactform-wrap">
                                <div id="message"></div>
                                <form  class="custom-form" action="php/contact.php" name="contactform" id="contactform">
                                    <fieldset>
                                        <div id="message2"></div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" name="name" id="name2" placeholder="Su Nombre *" value=""/>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text"  name="email" id="email2" placeholder="Correo Electronico *" value=""/>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text"  name="phone" id="phone2" placeholder="Telefono *" value=""/>
                                            </div>
                                        </div>
                                        <textarea name="comments"  id="comments2" cols="40" rows="3" placeholder="Tu mensaje:"></textarea>
                                        <div class="clearfix"></div>
                                        <button class="btn float-btn flat-btn color-bg" id="submit_cnt">Enviar Mensaje <i class="fal fa-long-arrow-right"></i></button>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="section-dec sec-dec_top"></div>
                        </div>
                        <div class="col-md-5">
                            <div class="column-text_inside fl-wrap dark-bg" >
                                <div class="column-text">
                                    <div class="section-title">
                                        <h4>Llame para Reservaciones</h4>
                                        <h2>Horario Apertura</h2>
                                        <div class="dots-separator fl-wrap"><span></span></div>
                                    </div>
                                    <div class="work-time fl-wrap">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h3>Lunes a Viernes</h3>
                                                <div class="hours">
                                                    04:30 PM<br>
                                                    10:00 PM
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h3>Sabados y Domingos</h3>
                                                <div class="hours">
                                                    4:00 PM<br>
                                                    11:30 PM
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="bold-separator"><span></span></div>
                                    <div class="big-number"><a href="#">+57 666999777</a></div>
                                </div>
                                <div class="illustration_bg">
                                    <div class="bg"  data-bg="./Restabook/images/6.png"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-bg">
                    <div class="bg"  data-bg="./Restabook/images/section-bg.png"></div>
                </div>
            </section>
            <!--  section end  -->
            <div class="brush-dec2 brush-dec_bottom"></div>
        </div>
        <!-- content end  -->
        <!-- footer -->
        <div class="height-emulator fl-wrap"></div>
        @include('.layouts.components.index.footer')
        <!-- footer end-->
    </div>
    <!-- wrapper end -->

