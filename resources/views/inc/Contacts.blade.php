 <!-- Contact-->
 <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">!Vamos a mantenernos en Contacto!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">¿Listo para comenzar tu próximo proyecto con nosotros? Envíanos un mensaje y nos pondremos en contacto contigo lo antes posible.</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <form>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputName" type="text" placeholder="Ingresa tu nombre y apellido..." />
                                <label for="inputName">Nombre Completo</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                <label for="inputEmail">Dirección de Correo Electrónico</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputPhone" type="tel" placeholder="(123) 456-7890" />
                                <label for="inputPhone">Número Teléfonico</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="inputMessage" type="text" placeholder="Ingrese texto aquí..." style="height: 10rem"></textarea>
                                <label for="inputMessage">Mensaje</label>
                            </div>
                            <div class="d-grid"><button class="btn btn-primary btn-xl" type="submit">Aceptar</button></div>
                        </form>
                    </div>
                </div>
                <table align="center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <th>
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                       <td> <i class="bi-phone fs-2 mb-3 text-muted" align="center"></i></td>
                        <td><div>Luigi Hernández</div>
                        <div>+58 414 129 4471</div></td>
                        <td><div>          </div>
                        <div>             </div></td>
                       <td> <i class="bi-phone fs-2 mb-3 text-muted" align="center"></i></td>
                        <td><div>   Gustavo Santaella</div>
                        <div>   +58 412 732 8212</div></td>
                    </div></th>
                    <br>
</table>
<table align="center">
                    <td>
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <th><a href=""><i class="bi-linkedin fs-2 mb-3 text-muted"></i></a></th>
                        <td><div>          </div>
                        <div>             </div></td>
                        <th><a href=""><i class="bi-github fs-2 mb-3 text-muted"></i></a></th>
                    </div></td>
                    <td>
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <th><a href=""><i class="bi-linkedin fs-2 mb-3 text-muted"></i></a></th>
                        <td><div>          </div>
                        <div>             </div></td>
                        <th><a href=""><i class="bi-github fs-2 mb-3 text-muted"></i></a></th>
                    </div></td>
                </div></table>
            </div>
        </section>


  @yield("contacts")