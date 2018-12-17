@extends('layout.instagram')
@section('content')
@desktop
@include('partial.navigationInterno')
@enddesktop

 @mobile
 @include('partial.navigationMobileInterno')
 @endmobile

 <section id="sec-instagram">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="titulseccion">Mission of Love</h3>

                <p>Para esta acción no quisimos quedarnos en lo digital, así que salimos a
                    transformar el odio de la ciudad en amor. Las personas tenían que encontrar
                     mensajes de odio y subirlos a sus instastories con nuestro gif <STRONG>LOVEDROP</STRONG>,
                      mencionando a <strong>@absolutpe</strong> y dejando la ubicación del lugar. Luego, nosotros,
                      con la ayuda de un artista, intervinimos estos mensajes cambiándolos por amor hecho arte.</p>
            </div>


        </div>
        <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-8">
                    <div id="videoabsolute">
                        <div class="bgif">
                            <a href="#" class="modal-trigger link player"  data-modal="#modal-1">player</a>
                            <div class="gotasvideo"></div>
                        </div>
                    </div>

                </div>

                <div class="col-md-12 text-center">
                        <p>Síguenos:</p>
                        <a href="https://www.instagram.com/absolutpe"  target="_blank" class="btn btn-light"><i class="fab fa-instagram"></i> @absolutpe </a>
                </div>
            </div>
    </div>
</section>


<div  id="modal-1" class="boxmodal" >
    <div class="container-fluid">
        <div class="row justify-content-center item-align-center">
            <div id="player">

            </div>

        </div>

    </div>

</div>
@endsection
