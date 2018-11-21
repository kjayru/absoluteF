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
            <div class="container">

                <div class="row justify-content-center">
                    <p class="text-center">Tweets de odio hackeados y convertidos en amor:</p>
                    <div class="contador text-center">{{ $cantidad }}</div>
                    <div class="hash text-center">#MásAmorMenosOdio</div>
                    <div class="buscar text-center">
                           <p>Busca tu tweet</p>
                           <form  id="fr-buscar" class="form-inline  justify-content-center">
                            <div class="form-group mb-2">
                               <input type="text" name="usuario" class="form-control" id="usuario" data-rel="INGRESAR USUARIO">
                            </div>

                               <a href="#" id="btn-buscar" class="btn btn-senduser mb-2">
                                   Buscar
                               </a>
                           </form>

                    </div>
                    <div class="fitros text-center" style="display:none;">
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
                    <div class="contenedorman content " data-mcs-theme="dark" data-contador="{{$total}}" data-pages="{{$paginas}}" data-actual="{{$actual}}">


                        <div class="grid are-images-unloaded">


                            <div class="grid__col-sizer"></div>
                            <div class="grid__gutter-sizer"></div>

                        @foreach($twitts as $key => $tw)
                            @switch($key)
                                @case(0)
                                    <div class="grid__item grid__item--width2 {{$key}}">
                                        <div class="box" style="background:url(/images/scroll-bt1.png); background-size:cover;">

                                        </div>
                                    </div>
                                @break
                                @case(4)
                                    <div class="grid__item grid__item--width2  {{$key}}">
                                        <div class="box" style="background:url(/images/scroll-bt2.png); background-size:cover;">

                                        </div>
                                    </div>
                                @break
                               @case(8)
                               <div class="grid__item grid__item--width2  {{$key}}">
                                    <div class="box" style="background:url(/images/scroll-bt3.png); background-size:cover;">

                                    </div>
                                </div>
                                @break
                                @case(12)
                                <div class="grid__item grid__item--width2  {{$key}}">
                                    <div class="box" style="background:url(/images/scroll-bt4.png); background-size:cover;">

                                    </div>
                                </div>
                                @break
                                @default
                                <div class="grid__item grid__item--height2  {{$key}}">
                                    <div class="box">
                                        <video controls="">
                                            <source src=" https://s3.amazonaws.com/arquea-absolute-dev/output/{{ $tw->id }}.mp4" type="video/mp4">
                                            <source src=" https://s3.amazonaws.com/arquea-absolute-dev/output/{{ $tw->id }}.webm" type="video/webm">
                                        </video>
                                    </div>
                                </div>
                            @endswitch

                        @endforeach

                        </div>
                    </div>

                <div class="content2" data-mcs-theme="dark">
                    <div id="grid3" class="grid3" style="display:none;">
                        <div class="grid-sizer"></div>
                        <div class="grid-item"></div>
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
