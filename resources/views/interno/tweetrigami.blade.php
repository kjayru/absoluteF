@extends('layout.master_scroll')
@section('content')
@desktop
@include('partial.navigationInterno')
@enddesktop

 @mobile
 @include('partial.navigationMobileInterno')
 @endmobile

<section id="tweetrigami">
    <div class="container">
            <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-md-12 text-center">

                            <h3 class="titulseccion">Tweetrigami</h3>
                            <p>Invitamos a los usuarios de esta plataforma a hackear los tuits de odio que encuentren
                                con nuestro <strong>#MásAmorMenosOdio</strong>, y así pudimos re tuitear
                                 estos mensajes en forma de un corazón de origami, transformándolos en amor.</p>
                    </div>
                    <div class="col-md-8">
                        <div id="videoabsolute">
                            <div class="bgif">
                                <a href="#" class="modal-trigger link player"  data-modal="#modal-1">player</a>
                                <div class="gotasvideo"></div>
                            </div>
                        </div>

                    </div>


                </div>
        <div class="row justify-content-center blq2">
                <div class="col-md-12 text-center">

                        <p >Tweets de odio convertidos en amor:</p>
                        <div class="contador text-center">{{ @$totaltwitts }}</div>
                        <div class="hash text-center">#MásAmorMenosOdio</div>

                 </div>

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

        <div id="stack"></div>
            <div class="col-md-12">


                    <div id="grid" class="grid"  data-contador="{{@$total}}" data-pages="{{@$paginas}}" data-actual="{{@$actual}}">
                        <div class="grid__col-sizer"></div>
                        <div class="grid__gutter-sizer"></div>

                    </div>



            </div>



         <div class="col-md-12 content2" style="display: none;">
            <div id="grid3" class="grid3" >
                    <div class="grid__col-sizer"></div>
                    <div class="grid__gutter-sizer"></div>

            </div>
        </div>


        <div class="col-md-12 content3" style="display: none;">
            <div id="grid2" class="grid2">
                    <div class="grid__col-sizer"></div>
                    <div class="grid__gutter-sizer"></div>
            </div>
        </div>
        <div class="col-md-12 content4" style="display: none;">
            <div id="grid4" class="grid4" >
                    <div class="grid__col-sizer"></div>
                    <div class="grid__gutter-sizer"></div>
            </div>
        </div>
        <div class="col-md-12 content5" style="display: none;">
            <div id="grid5" class="grid5" >
                    <div class="grid__col-sizer"></div>
                    <div class="grid__gutter-sizer"></div>
            </div>
        </div>
        <div class="col-md-12 content6" style="display: none;">
            <div id="grid6" class="grid6" >
                    <div class="grid__col-sizer"></div>
                    <div class="grid__gutter-sizer"></div>
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
</section>


<!-- .photo-item template HTML -->

<script type="text/html" id="photo-item-template">

    <div class="grid__item grid__item--height2 grid__item--width2 ">
          <div class="box">
              <video controls="" poster="/images/fondo1.png">
                  <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

              </video>
          </div>
      </div>
  </script>
  <script type="text/html" id="photo-item-template2">

    <div class="grid__item grid__item--height2 grid__item--width2  ">
          <div class="box">
              <video controls="" poster="/images/fondo2.png">
                  <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

              </video>
          </div>
      </div>
  </script>

  <script type="text/html" id="photo-item-template3">

  <div class="grid__item grid__item--height2 grid__item--width2 ">
        <div class="box">
            <video controls="" poster="/images/fondo4.png">
                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

            </video>
        </div>
    </div>
  </script>


  <script type="text/html" id="photo-item-template4">

  <div class="grid__item grid__item--height2 grid__item--width2">
        <div class="box">
            <video controls="" poster="/images/fondo2.png">
                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

            </video>
        </div>
    </div>
  </script>

  <script type="text/html" id="photo-item-template5">

  <div class="grid__item grid__item--height2 grid__item--width2">
        <div class="box">
            <video controls="" poster="/images/fondo3.png">
                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

            </video>
        </div>
    </div>
  </script>

  <script type="text/html" id="photo-item-template6">

  <div class="grid__item grid__item--width2  grid__item--width2">
        <div class="box">
            <video controls="" poster="/images/fondo1.png">
                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

            </video>
        </div>
    </div>
  </script>

  <script type="text/html" id="photo-item-template7">

  <div class="grid__item grid__item--height2 grid__item--width2">
        <div class="box">
            <video controls="" poster="/images/fondo2.png">
                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

            </video>
        </div>
    </div>
  </script>

  <script type="text/html" id="photo-item-template8">

  <div class="grid__item grid__item--height2 grid__item--width2">
        <div class="box">
            <video controls="" poster="/images/fondo4.png">
                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

            </video>
        </div>
    </div>
  </script>

  <script type="text/html" id="photo-item-template9">

  <div class="grid__item grid__item--height2 grid__item--width2">
        <div class="box">
            <video controls="" poster="/images/fondo3.png">
                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

            </video>
        </div>
    </div>
  </script>

  <script type="text/html" id="photo-item-template10">

  <div class="grid__item grid__item--height2 grid__item--width2 ">
        <div class="box">
            <video controls="" poster="/images/fondo1.png">
                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

            </video>
        </div>
    </div>
  </script>

  @include('partial.footer')
  @include('partial.scriptseccion')

@endsection
