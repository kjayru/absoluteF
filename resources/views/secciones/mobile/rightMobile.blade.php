<div class="bl-right column" id="miramob" style="display:none">
        <div class="lienzo ventana postfeedmob" id="pagina1-r">
           <div class="container">
                <div class="row h-100 justify-content-center align-items-center ">

                        <div class="col-12 bloquetexto">
                            <h1>Acabemos juntos<br/>con el odio</h1>
                            <p>
                                ¡Únete a este movimiento y sé un hacker del amor!
                                Cuando veas un mensaje negativo en twitter,
                                dale <strong>RT</strong> con el
                                <strong>#MásAmorMenosOdio</strong>

                                y juntos transformaremos el odio en amor.
                                </p>
                        </div>

                        <div class="col-12 text-center">
                            <div class="videoplayer2">
                                <div class="bgif2">
                                    <a href="#" class=" modal-trigger link players2" data-modal="#modal-2">player </a>
                                    <div class="player2"></div>
                                </div>
                            </div>
                        </div>


                      <div class="col-12 text-center bloquemedio">

                        <h3>¿Cómo estamos hackeando el odio?</h3>

                        <p>
                        Creamos el Tweetrigami, una acción que transforma los tweets de odio
                        en mensajes de amor, fomentando tolerancia, constancia y calma.
                        </p>
                      </div>
                </div>
            </div>

        </div>


        <!--twitterami-->

        <div class=" infinito" id="pagina2-r">
            <div class="container">

                <div class="row justify-content-center">
                    <p class="text-center">Tweets de odio hackeados y convertidos en amor:</p>
                    <div class="contador text-center">{{ $cantidad }}</div>
                    <div class="hash text-center">#MásAmorMenosOdio</div>
                    <div class="buscar text-center">
                           <p>Busca tu tweet</p>
                           <form  id="fr-buscar" class="form-inline  justify-content-center">
                            <div class="form-group mb-2">
                               <input type="text" name="usuario" class="form-control" id="usuario" data-rel="INGRESAR USUARIO" required>
                            </div>
                               <a href="#" id="btn-buscar" class="btn btn-senduser mb-2">
                                Buscar
                               </a>
                           </form>

                    </div>
                    <div class="fitros text-center" style="display:none">
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

                    <div class="contenedorman content" data-mcs-theme="dark" data-contador="{{$total}}" data-pages="{{$paginas}}" data-actual="{{$actual}}">


                        <div class="grid are-images-unloaded">
                        @php
                            $op = rand(1, 4);
                         @endphp
                        @foreach($twitts as $key => $tw)

                            @if(fmod($key, 4) == 0)
                            <div class="grid__item grid__item--width2">
                                <div class="box" style="background:url(/images/scroll-bt{{$op}}.png); background-size:cover;">

                                </div>
                            </div>
                            @else

                            <div class="grid__item grid__item--height2">
                                <div class="box">
                                    <video controls=""  poster="/images/fondo{{$op}}.png">
                                        <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/{{ $tw->id }}.mp4" type="video/mp4">

                                    </video>
                                </div>
                            </div>

                            @endif
                        @endforeach

                        </div>


                    </div>
                    <button class="btn btn-vermas view-more-button">Ver más</button>
                    <div class="page-load-status">
                        <div class="loader-ellips infinite-scroll-request">
                          <span class="loader-ellips__dot"></span>
                          <span class="loader-ellips__dot"></span>
                          <span class="loader-ellips__dot"></span>
                          <span class="loader-ellips__dot"></span>
                        </div>
                    </div>

                    <div class="content2" data-mcs-theme="dark">
                        <div id="grid3" class="grid3" style="display:none;">


                        </div>
                    </div>

                    <div id="grid2" class="grid2" style="display:none;">
                        <div class="grid-sizer"></div>
                        <div class="grid-item"></div>
                    </div>

                    <div id="grid4" class="grid4" style="display:none;">
                        <div class="grid-sizer"></div>
                        <div class="grid-item"></div>
                    </div>

                    <div id="grid5" class="grid5" style="display:none;">
                        <div class="grid-sizer"></div>
                        <div class="grid-item"></div>
                    </div>


                    <div id="grid6" class="grid6" style="display:none;">
                        <div class="grid-sizer"></div>
                        <div class="grid-item"></div>
                    </div>

                </div>

         </div>

        <!--<div class="texto-pie">
            <p>2018 Importado por Pernod Ricard Peru S.A., Lima, Perú.</p>
        </div>-->
        </div>
    </div>
