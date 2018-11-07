@extends('layout.master')
@section('content')

@desktop
@include('partial.navigation')
<div class="d-none d-sm-block">

   <div id="contenedor">
            <ul id="marco">
              <li>@include('secciones.bloqueleft')</li>
               <li>@include('secciones.centro')


               <div  id="modal-1" class="boxmodal" >
                    <div class="container-fluid">
                        <div class="row justify-content-center item-align-center">
                            <div id="player">

                            </div>

                        </div>
                        <a href="#" class="close"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>

                </div>
               </li>
               <li id="postfeed">@include('secciones.bloqueright')</li>
            </ul>
    </div>


</div>


 @enddesktop
 @mobile
 @include('partial.navigationMobile')
<div class="d-block d-sm-none">
    @include('secciones.centroMobile')
    @include('secciones.leftMobile')
    @include('secciones.rightMobile')
    <div  id="modal-1" class="boxmodal" >
                    <div class="container-fluid">
                        <div class="row justify-content-center item-align-center">
                            <div id="player">

                            </div>

                        </div>
                        <a href="#" class="close"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>

                </div>
</div>
@endmobile
@tablet
@include('partial.navigationMobile')
@include('secciones.centroMobile')
@include('secciones.leftMobile')
@include('secciones.rightMobile')
<div  id="modal-1" class="boxmodal" >
                <div class="container-fluid">
                    <div class="row justify-content-center item-align-center">
                        <div id="player">

                        </div>

                    </div>
                    <a href="#" class="close"><i class="fa fa-times" aria-hidden="true"></i></a>
                </div>

            </div>
@endtablet
 @include('partial.footer')
 @include('partial.scriptseccion')

@endsection
