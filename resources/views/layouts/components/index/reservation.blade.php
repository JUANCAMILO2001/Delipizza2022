<!-- reservation-modal-wrap-->
<div class="reservation-modal-wrap">
    <div class="reserv-overlay crm">
        <div class="cd-reserv-overlay-layer" data-frame="25">
            <div class="reserv-overlay-layer"></div>
        </div>
    </div>
    <div class="reservation-modal-container bot-element">
        <div class="reservation-modal-item fl-wrap">
            <div class="close-reservation-modal crm"><i class="fal fa-times"></i></div>
            <div class="reservation-bg"></div>
            <div class="section-title">
                <h4>No olvides reservar tu mesa</h4>
                <h2>Reserva tu mesa</h2>
                <div class="dots-separator fl-wrap"><span></span></div>
            <div class="reservation-wrap">
                <div id="reserv-message"></div>
                <form  class="custom-form" action="php/reservation.php" name="reservationform" id="reservationform">
                    <fieldset>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="name" id="name" placeholder="Tu Nombre *" value=""/>
                            </div>
                            <div class="col-sm-6">
                                <input type="text"  name="email" id="email" placeholder="Correo Electronico *" value=""/>
                            </div>
                            <div class="col-sm-6">
                                <input type="text"  name="phone" id="phone" placeholder="Celular *" value=""/>
                            </div>
                            <div class="col-sm-6">
                                <div class="fl-wrap">
                                    <select name="numperson" id="persons" data-placeholder="Personas" class="chosen-select no-search-select">
                                        <option data-display="Personas">Any</option>
                                        <option value="1">1 Person</option>
                                        <option value="2">2 People</option>
                                        <option value="3">3 People</option>
                                        <option value="4">4 People</option>
                                        <option value="5">5 People</option>
                                        <option value="Banquet">Banquet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-6">
                                <div class="date-container2 fl-wrap">
                                    <input type="text" placeholder="Fecha" id="res_date"     name="resdate"   value=""/>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="fl-wrap">
                                    <select name="restime" id="resrv-time" data-placeholder="Hora" class="chosen-select no-search-select">
                                        <option data-display="Hora">Any</option>
                                        <option value="10:00am">10:00 am</option>
                                        <option value="11:00am">11:00 am</option>
                                        <option value="12:00pm">12:00 pm</option>
                                        <option value="1:00pm">1:00 pm</option>
                                        <option value="2:00pm">2:00 pm</option>
                                        <option value="3:00pm">3:00 pm</option>
                                        <option value="4:00pm">4:00 pm</option>
                                        <option value="5:00pm">5:00 pm</option>
                                        <option value="6:00pm">6:00 pm</option>
                                        <option value="7:00pm">7:00 pm</option>
                                        <option value="8:00pm">8:00 pm</option>
                                        <option value="9:00pm">9:00 pm</option>
                                        <option value="10:00pm">10:00 pm</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <textarea name="comments"  id="comments" cols="30" rows="3" placeholder="Tu Mensaje:"></textarea>
                        <div class="clearfix"></div>
                        <button class="btn color-bg" id="reservation-submit">Reservar Mesa <i class="fal fa-long-arrow-right"></i></button>
                    </fieldset>
                </form>
            </div>
            <!-- reservation-wrap end-->
        </div>
    </div>
</div>
