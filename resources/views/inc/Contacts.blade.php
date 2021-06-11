 <!-- Contact-->
 <section class="programa page-section" id="contact">
 <div class="contenedor-video">
      <video autoplay="" loop="" poster="{{ asset ('assets/img/panificacion.jpg') }}">
        <source src="{{ asset ('assets/video/video.mp4') }}" type="video/mp4" width="100%">
      </video>
    </div>
    <div class="contenido-programa">
    <div class="container px-4 px-lg-5">
    <div class="programa-contactame">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-0">!Vamos a mantenernos en Contacto!</h2>
                <hr class="divider" />
                <p class="text-darkgray-75 mb-4">¿Listo para comenzar tu próximo proyecto con nosotros? Envíanos un mensaje y nos pondremos en contacto contigo lo antes posible.</p>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <form method="post" id="contactForm" action="{{ route('sendMail') }}">
                    @csrf 
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputName" type="text" placeholder="Ingresa tu nombre y apellido..." maxlength="25" onkeydown="return sololetras(event)" name="inputName" required/>
                        <label for="inputName">Nombre Completo</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" name="inputEmail"  required/>
                        <label for="inputEmail">Dirección de Correo Electrónico</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputPhone" type="number" placeholder="(123) 456-7890" maxlength="15"   name="inputPhone" />
                        <label for="inputPhone">Número Teléfonico</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="inputMessage" type="text" placeholder="Ingrese texto aquí..." style="height: 10rem"  name="inputMessage" required></textarea>
                        <label for="inputMessage">Mensaje</label>
                    </div>
                    <div class="d-flex justify-content-center" align="center center">
                        <div class="d-grid"><button class="btn btn-primary btn-xl" type="submit">Aceptar</button></div>
                        <div class="  d-grid"><button class="ml-3 btn btn-primary btn-xl" type="reset">Restaurar</button></div>
                    </div>
                </form>
               
            </div>
        </div> <table align="center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <th>
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                     <td> <i class="bi-phone fs-2 mb-3 text-darkgray-75 mb-4" align="center"></i></td>
                     <td><div>Luigi Hernández</div>
                        <div>+58 412 257 5300</div></td>
                        <td><div>     |     </div>
                            <div>          |   </div></td>
                            <td><div>   Gustavo Santaella</div>
                                <div>   +58 412 732 8212</div></td>
                                <td> <i class="bi-phone fs-2 mb-3 text-darkgray-75 mb-4" align="center"></i></td>
                            </div></th>
                            <br>
                        </table>
                        <table align="center">
                            <td>
                                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                                    <th><a href="https://www.linkedin.com/in/luigi-josé-hernández-gutierrez-835018175/"><i class="bi-linkedin fs-2 mb-3 text-darkgray-75 mb-4"></i></a></th>
                                    <td><div>          </div>
                                        <div>             </div></td>
                                        <th><a href="https://github.com/Luigi019"><i class="bi-github fs-2 mb-3 text-darkgray-75 mb-4"></i></a></th>
                                    </div></td>
                                    <td><div>     |     </div>
                                    </td>
                                    <td>
                                        <div class="col-lg-4 text-center mb-5 mb-lg-0">
                                            <th><a href="https://github.com/gustavosantaella"><i class="bi-github fs-2 mb-3 text-darkgray-75 mb-4"></i></a></th>
                                            <td><div>          </div>
                                                <div>             </div></td>
                                                <th><a href="https://www.linkedin.com/in/gustavo-alejandro-santaella-machado-107a59173/"><i class="bi-linkedin fs-2 mb-3 text-darkgray-75 mb-4"></i></a></th>
                                            </div></td>
                                        </div></table>
                                    </div>
</div>   </div>
     
     </div>   
                                </section>
                               <br><br><br><br>
                                @section("js")




                                <script> 



                                    @if(session('swal'))

                                    swal({
                                      title: "Gracias por contactarnos!",
                                      text: "¡Nos pondremos en contacto con usted lo antes posible!",
                                      icon: "success",
                                      button: "Aceptar",
                                  });

                                    @endif

                                </script>



                                @endsection