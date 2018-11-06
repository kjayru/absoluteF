<div  id="conocemob">
        <div class="bl-left column" id="col-izquierda" >
                <div class="lienzo ventana" id="pagina1-l">
                    <div class="container">
                            <div class="row mb-bloque1">
                                <div class="col">
                                  <p> <img src="/images/absolutesign.png" class="img-fluid"/></p>
                                </div>
                                <div class="col">
                                    <p class="txt-2">A drop of love</p>
                                    <p class="txt-3">Edición limitada, sabor original.</p>
                                </div>
                            </div>

                            <div class="row mb-botella">
                                <div class="col-12">
                                    <div class="threesixty" id="threesixty">
                                        <div id="spinner">
                                            <span>0%</span>
                                        </div>
                                        <ol class="threesixty_images" id="threesixty_images"></ol>
                                    </div>
                                    <div class="ico360">
                                        <img src="/images/360.png" alt="360" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12 texto-ab text-center">
                                    <p><strong>ABSOLUTE A DROP OF LOVE</strong>es una botella
                                        de edición limitada hecha con la tinta extraída de mensajes de odio de
                                        todo el mundo y transformada en <strong>AMOR</strong>.
                                    </p>
                                    <div class="cambioescena">
                                        Haz clic y prende el amor
                                        <label class="switch p1">
                                        <input type="checkbox" id="cambio"/>
                                        <span class="slider round"></span>
                                    </label>
                                    </div>

                                </div>
                            </div>
                    </div>
                    <div class="fondoactivo" style="display:none">
                        <div class="container">
                            <div class="row mb-bloque1">
                                <div class="col">
                                  <p> <img src="/images/absolutesign.png" class="img-fluid"/></p>
                                </div>
                                <div class="col">
                                    <p class="txt-2">A drop of love</p>
                                    <p class="txt-3">Edición limitada, sabor original.</p>
                                </div>
                            </div>
                            <div class="row mb-botella">
                                <div class="col-12">

                                    <img src="/images/botella_on.png" class="img-fluid"/>

                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12 texto-ab text-center">
                                    <p><strong>ABSOLUTE A DROP OF LOVE</strong>es una botella
                                        de edición limitada hecha con la tinta extraída de mensajes de odio de
                                        todo el mundo y transformada en <strong>AMOR</strong>.
                                    </p>
                                    <div class="cambioescena">
                                        Haz clic y prende el amor
                                        <label class="switch p2">
                                        <input type="checkbox" id="cambio2"/>
                                        <span class="slider round"></span>
                                    </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lienzo ventana" id="pagina2-l">
                    <div class="container ">
                         <div class="row h-100 justify-content-center align-items-center text-center">
                            <div class="col-md-12 col-12 text-center">
                                <h1>Encuentra la Botella</h1>
                                <p>Obtén la botella de edición limitada <br>
                                    <strong>A DROP OF LOVE</strong> <br>
                                     en cualquiera de nuestros puntos <br>
                                     de venta y brindemos con amor.
                                </p>
                            </div>
                            <div class="col-md-8 col-12 mercados">
                                <h2>Supermercados y tiendas</h2>
                                <p>Ubícalos en todos estos establecimientos:</p>
                                    <ul>
                                    <li><img src="/images/logo_metro.svg" class="img-fluid" alt="Metro"/></li>
                                    <li><img src="/images/logo_wong.svg" class="img-fluid" alt="Wong"/></li>
                                    <li><img src="/images/logo-plazavea.svg" class="img-fluid" alt="PlazaVea"/></li>
                                    <li><img src="/images/logo-vivanda.svg" class="img-fluid" alt="Vivanda"/></li>

                                    <li><img src="/images/logo-listo.svg" class="img-fluid" alt="Listo"/></li>


                                    <li class="icotottus"><img src="/images/tottus.svg" class="img-fluid" alt="Tottus"/></li>
                                    </ul>
                            </div>
                            <div class="col-md-4 col-12 tiendas">
                                <h2>Licorerías</h2>
                                <p>Ubícalos en las siguientes licorerías:</p>

                                <form>

                                    <div class="form-group">

                                        <select class="form-control" id="lugares2" >
                                            <option>Seleccionar Licoreria</option>
                                            <option value="Mimar">Mimar</option>
                                            <option value="Sumon">Sumon</option>
                                            <option value="Nuevo Mundo">Nuevo Mundo</option>
                                            <option value="Almendariz">Almendariz</option>
                                            <option value="El Pozito">Pozito</option>
                                        </select>
                                    </div>
                                </form>

                                <div class="resultado text-center" id="resultado">



                                </div>
                            </div>
                         </div>



                    </div>
                    <div class="container-fluid ">
                        <div class="row">
                                <div class="col-12 barra-azul">
                                <div class="cuadro">
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                        <h1 class="text-center">Absolut a drop of Love</h1>
                                        </div>
                                        <div class="col-5">
                                            <img src="/images/botella.png" class="img-fluid"/>
                                        </div>
                                        <p class="text-center">Coloca tus datos y obtén acceso a<br/>
                                                material exclusivo.
                                            </p>
                                        <div class="col-12  bq1">



                                            <form class="form" id="formdata2">
                                            <input type="hidden" name='_method' value="POST" id="method">
                                             @csrf
                                                <div class="row align-items-start">
                                                    <div class="form-group col-12">
                                                        <input type="text" class="form-control" name="nombres2" maxlength="50" id="nombres2" data-rel="Nombre y apellido"/>
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <input type="text" class="form-control" name="email2" id="email2" maxlength="50" data-rel="Correo electrónico"/>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="suscripcion2" value="1"  id="suscripcion2"/>
                                                    <label class="form-check-label">
                                                        Desea recibir información y noticias de ABSOLUT.
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  name="terminos2" value="1" id="terminos2"/>
                                                    <label class="form-check-label">
                                                        Acepto los términos y condiciones y <a href="/online_privacy_policy_pernod_ricard_peru.pdf" target="_blank" class="politicas">políticas de privacidad.</a>.
                                                    </label>
                                                </div>
                                                <div class="text-center">
                                                    <a href="#" class="btn btn-light btn-sendata2">Enviar</a>
                                                </div>

                                            </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>


            </div>
            <div class="modalform" style="display:none;">
                <div class="container">
                    <div class="row h-100 justify-content-center align-items-center">
                        <div class="col-md-4 boxchild ">
                            <p class="text-center"> Gracias por compartir tus datos.<br/>
                             Muy pronto recibirás novedades de nosotros.</p>
                            <a href="#" class="closechild"><img src="/images/cancel.svg" alt="close" class="img-fluid"/></a>
                        </div>
                    </div>
                </div>
            </div>


</div>
