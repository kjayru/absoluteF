<div class="bl-right column">
        <div class="lienzo ventana" id="pagina1-r">
           <div class="container">
                <div class="row h-100 justify-content-center align-items-center part1">

                        <div class="col-md-6 bloquetexto">
                            <h1>Acabemos juntos<br/>con el odio</h1>
                            <p>
                            ¡Únete a este movimiento y sé un hacker del amor!
                            Cuando veas un mensaje negativo en twitter,
                            dale <strong>RT</strong> con el
                            <strong>#MásAmorMenosOdio</strong>

                            y juntos transformaremos el odio en amor.
                            </p>
                        </div>

                        <div class="col-md-4 col-lg-3  text-center">
                            <div class="videoplayer2">
                                <div class="bgif2">
                                    <a href="#" class=" modal-trigger link players2" data-modal="#modal-2">player </a>
                                    <div class="player2"></div>
                                </div>
                            </div>

                        </div>

                </div>

                <div class="row justify-content-center part2">
                      <div class="col-md-10 text-center bloquemedio">

                        <h3>¿Cómo estamos hackeando el odio?</h3>

                        <p>
                        Creamos el Tweetrigami, una acción que transforma los tweets de odio <br/>
en mensajes de amor, fomentando tolerancia, constancia y calma.
                        </p>

                      </div>

                </div>
            </div>

            <span class='mouse-indicator no-animation'>
                <span class='mouse'>
                    <span class='wheel'></span>
                </span>
            </span>
        </div>

        <div class=" infinito" id="pagina2-r">
                <div id="spinner2" style="display:none;">
                        <span>0%</span>
                </div>
            <div class="container">

                <div class="row justify-content-center">
                    <p class="text-center">Tweets de odio convertidos en amor:</p>
                    <div class="contador text-center">{{ $totaltwitts }}</div>
                    <div class="hash text-center">#MásAmorMenosOdio</div>
                    <div class="buscar text-center">
                           <p>Busca tu tweet con el nombre de tu usuario</p>
                           <form  id="fr-buscar" class="form-inline  justify-content-center">
                            <div class="form-group mb-2">
                               <input type="text" name="usuario" class="form-control" id="usuario" data-rel="INGRESAR USUARIO" required>
                            </div>

                               <a href="#" id="btn-buscar" class="btn btn-senduser mb-2">
                                   Buscar
                               </a>
                           </form>

                    </div>
                    <div class="fitros text-center">
                            <h4>Filtrar por:</h4>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="matrimonio" >
                                    <label class="form-check-label" for="inlineCheckbox1">Matrimonio igualitario</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="racismo">
                                    <label class="form-check-label" for="inlineCheckbox2">Racismo</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="peruchile">
                                    <label class="form-check-label" for="inlineCheckbox3">Peru - Chile</label>
                                </div>
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="otros">
                                        <label class="form-check-label" for="inlineCheckbox3">Otros</label>
                                </div>
                    </div>

                    <div class="cmprest col-md-12 text-center">
                        <a href="#" class="btn-mancha btn-reset" style="display:none;">Regresar</a>
                    </div>


                    <div class="contenedorman"  data-contador="{{$total}}" data-pages="{{$paginas}}" data-actual="{{$actual}}">

                      <iframe src="{{env('APP_URL')}}/videos"  frameborder="0" allowtransparency="true" width="100%" height="800" >

                      </iframe>

                    </div>

                <div class="content3" data-mcs-theme="dark" style="display:none;">
                    <div id="grid3" class="grid3" >
                        <div class="grid-sizer"></div>
                        <div class="gutter-sizer"></div>

                    </div>
                </div>

                <div class="content2" data-mcs-theme="dark"  style="display:none;">
                    <div id="grid2" class="grid2">
                        <div class="grid-sizer"></div>
                        <div class="grid-item"></div>
                    </div>
                </div>
                <div class="content4" data-mcs-theme="dark" style="display:none;">
                    <div id="grid4" class="grid4" >
                        <div class="grid-sizer"></div>
                        <div class="grid-item"></div>
                    </div>
                </div>
                <div class="content5" data-mcs-theme="dark" style="display:none;">
                    <div id="grid5" class="grid5" >
                        <div class="grid-sizer"></div>
                        <div class="grid-item"></div>
                    </div>
                </div>
                <div class="content6" data-mcs-theme="dark" style="display:none;">
                    <div id="grid6" class="grid6" >
                        <div class="grid-sizer"></div>
                        <div class="grid-item"></div>
                    </div>
                </div>
                    <div class="page-load-status">
                        <div class="loader-ellips infinite-scroll-request">
                          <span class="loader-ellips__dot"></span>
                          <span class="loader-ellips__dot"></span>
                          <span class="loader-ellips__dot"></span>
                          <span class="loader-ellips__dot"></span>
                        </div>

                    </div>
                </div>

         </div>

        <!--<div class="texto-pie">
            <p>2018 Importado por Pernod Ricard Peru S.A., Lima, Perú.</p>
        </div>-->
        </div>
<!-- .photo-item template HTML -->

<script type="text/html" id="photo-item-template">

  <div class="grid__item grid__item--height2 ">
        <div class="box">
            <video controls="" poster="/images/fondo1.png">
                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

            </video>
        </div>
    </div>
</script>
<script type="text/html" id="photo-item-template2">

  <div class="grid__item grid__item--width2  ">
        <div class="box">
            <video controls="" poster="/images/fondo2.png">
                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

            </video>
        </div>
    </div>
</script>

<script type="text/html" id="photo-item-template3">

<div class="grid__item grid__item--height2  ">
      <div class="box">
          <video controls="" poster="/images/fondo4.png">
              <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

          </video>
      </div>
  </div>
</script>


<script type="text/html" id="photo-item-template4">

<div class="grid__item grid__item--width2  ">
      <div class="box">
          <video controls="" poster="/images/fondo2.png">
              <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

          </video>
      </div>
  </div>
</script>

<script type="text/html" id="photo-item-template5">

<div class="grid__item grid__item--height2  ">
      <div class="box">
          <video controls="" poster="/images/fondo3.png">
              <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

          </video>
      </div>
  </div>
</script>

<script type="text/html" id="photo-item-template6">

<div class="grid__item grid__item--width2  ">
      <div class="box">
          <video controls="" poster="/images/fondo1.png">
              <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

          </video>
      </div>
  </div>
</script>

<script type="text/html" id="photo-item-template7">

<div class="grid__item grid__item--height2  ">
      <div class="box">
          <video controls="" poster="/images/fondo2.png">
              <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

          </video>
      </div>
  </div>
</script>

<script type="text/html" id="photo-item-template8">

<div class="grid__item grid__item--width2  ">
      <div class="box">
          <video controls="" poster="/images/fondo4.png">
              <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

          </video>
      </div>
  </div>
</script>

<script type="text/html" id="photo-item-template9">

<div class="grid__item grid__item--height2  ">
      <div class="box">
          <video controls="" poster="/images/fondo3.png">
              <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

          </video>
      </div>
  </div>
</script>

<script type="text/html" id="photo-item-template10">

<div class="grid__item grid__item--width2  ">
      <div class="box">
          <video controls="" poster="/images/fondo1.png">
              <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

          </video>
      </div>
  </div>
</script>
