<div class="bl-left column" id="col-izquierda">
                <div class="lienzo ventana" id="pagina1-l">
                    <div class="container">
                            <div class="row h-100 justify-content-center align-items-center">
                                <div class="col-md-4">
                                   <div class="text-absolute-left">
                                       <p> <img src="/images/frase-absolutl.svg" class="img-fluid"/></p>

                                   </div>
                                </div>
                                <div class="col-md-4">
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
                                <div class="col-md-4 texto-ab">
                                    <p>Absolut A drop of Love es una botella
                                    de edición limitada hecha con la tinta extraída de mensajes de odio de
                                    todo el mundo y transformada en amor.
                                    </p>
                                    <div class="cambioescena">
                                        Prende el amor
                                    </div>
                                    <label class="switch p1">
                                        <input type="checkbox" id="cambio"/>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                    </div>
                    <div class="fondoactivo" style="display:none">
                        <div class="container">
                            <div class="row h-100 justify-content-center align-items-center">
                                <div class="col-md-4">
                                   <div class="text-absolute-left">
                                       <p> <img src="/images/frase-absolutl.svg" class=" img-fluid"/></p>

                                   </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="/images/botella_on.png" class="img-fluid botell"/>

                                </div>
                                <div class="col-md-4 texto-ab">
                                    <p>Absolut A drop of Love es una botella
                                    de edición limitada hecha con la tinta extraída de mensajes de odio de
                                    todo el mundo y transformada en amor.
                                    </p>
                                    <div class="cambioescena">
                                        Prende el amor
                                    </div>
                                    <label class="switch p2">
                                        <input type="checkbox" id="cambio2" checked/>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <span class='mouse-indicator no-animation'>
                        <span class='mouse'>
                            <span class='wheel'></span>
                        </span>
                    </span>
                </div>

                <div class="lienzo ventana" id="pagina2-l">
                    <div class="container">
                         <div class="row h-100 justify-content-center  text-center">
                            <div class="col-md-12 text-center titulo">
                                <h1>Encuentra la Botella</h1>
                                <p>Encuentra la edición limitada<br/>
                                A drop of Love en cualquiera de nuestros puntos de venta y<br/>
                                brindemos con amor.
                                </p>
                            </div>
                            <div class="col-md-8 mercados">
                                <h2>Supermercados y tiendas</h2>
                                <p>Ubícalos en todos estos establecimientos:</p>
                                    <ul>
                                    <li><img src="/images/logo_metro.svg" class="img-fluid" alt="Metro"/></li>
                                    <li><img src="/images/logo_wong.svg" class="img-fluid" alt="Wong"/></li>
                                    <li><img src="/images/logo-plazavea.svg" class="img-fluid" alt="PlazaVea"/></li>
                                    <li><img src="/images/logo-vivanda.svg" class="img-fluid" alt="Vivanda"/></li>

                                    <li><img src="/images/logo-listo.svg" class="img-fluid" alt="Listo"/></li>


                                    <li class="litottus"><img src="/images/tottus.svg" class="img-fluid" alt="Tottus"/></li>
                                    </ul>
                            </div>
                            <div class="col-md-4 tiendas">
                                <h2>Licorerías</h2>
                                <p>Ubícalos en las siguientes licorerías:</p>

                                <form>

                                    <div class="form-group">

                                        <select class="form-control" id="lugares" >
                                            <option>Seleccione</option>
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
                    <span class='mouse-indicator no-animation'>
                        <span class='mouse'>
                            <span class='wheel'></span>
                        </span>
                    </span>
                </div>
                <div class="lienzo ventana" id="pagina3-1">
                    <div class="container">
                        <div class="row h-100 justify-content-center align-items-center">
                                <div class="col-md-12 col-lg-12 col-xl-12 barra-azul">
                                    <div class="row justify-content-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2 text-right">
                                            <img src="/images/botella.png" width="100"/>
                                        </div>

                                        <div class="col-md-9 col-lg-9 col-xl-8 bq1">
                                            <div class="cuadro">
                                            <h1 class="text-center">Absolut a drop of Love</h1>
                                            <p class="text-center">Coloca tus datos y obtén acceso a
                                                material exclusivo.
                                            </p>
                                            <form class="form" id="formdata">
                                            <input type="hidden" name='_method' value="POST" id="method">
                                             @csrf
                                                <div class="row align-items-start">
                                                    <div class="form-group col">
                                                        <input type="text" class="form-control" name="nombres" maxlength="50" id="nombres" data-rel="Nombre y apellido"/>
                                                    </div>
                                                    <div class="form-group col">
                                                        <input type="text" class="form-control" name="email" id="email" maxlength="50" data-rel="Correo electrónico"/>
                                                    </div>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="suscripcion" value="1"  id="suscripcion"/>
                                                    <label class="form-check-label">
                                                        Desea recibir información y noticias de ABSOLUT.
                                                    </label>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"  name="terminos" value="1" id="terminos"/>
                                                    <label class="form-check-label">
                                                        Acepto los términos y condiciones y <a href="/online_privacy_policy_pernod_ricard_peru.pdf" target="_blank" class="politicas">políticas de privacidad.</a>
                                                    </label>
                                                </div>

                                                    <a href="#" class="btn btn-light btn-sendata">Enviar</a>


                                            </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
     <div class="texto-pie">
        <p>2018 Importado por Pernod Ricard Peru S.A., Lima, Perú.</p>
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
