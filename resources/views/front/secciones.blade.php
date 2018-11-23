@extends('layout.master')
@section('content')

@desktop
@include('partial.navigation')
<div class="d-none d-sm-block">

   <div id="contenedor">
            <ul id="marco">
              <li>@include('secciones.desktop.bloqueleft')</li>
               <li>@include('secciones.desktop.centro')


               <div  id="modal-1" class="boxmodal" >
                    <div class="container-fluid">
                        <div class="row justify-content-center item-align-center">
                            <div id="player">

                            </div>

                        </div>

                    </div>

                </div>



                <div  id="modal-3" class="boxmodal" >
                    <div class="container-fluid">
                        <div class="row justify-content-center item-align-center">
                            <div id="player3">

                            </div>
                        </div>
                    </div>
                </div>


               </li>
               <li id="postfeed">@include('secciones.desktop.bloqueright')


                <div  id="modal-2" class="boxmodal" >
                    <div class="container-fluid">
                        <div class="row justify-content-center item-align-center">
                            <div id="player2">

                            </div>
                        </div>
                    </div>
                </div>




               </li>
            </ul>
    </div>


</div>


 @enddesktop
 @mobile
 @include('partial.navigationMobile')
<div class="d-block d-sm-none">
    @include('secciones.mobile.centroMobile')
    @include('secciones.mobile.leftMobile')
    @include('secciones.mobile.rightMobile')
        <div  id="modal-1" class="boxmodal" >
            <div class="container-fluid">
                <div class="row justify-content-center item-align-center">
                    <div id="player">

                    </div>

                </div>

            </div>

        </div>

         <div  id="modal-2" class="boxmodal" >
            <div class="container-fluid">
                <div class="row justify-content-center item-align-center">
                    <div id="player2">

                    </div>

                </div>

            </div>

        </div>

        <div  id="modal-3" class="boxmodal" >
            <div class="container-fluid">
                <div class="row justify-content-center item-align-center">
                    <div id="player3">

                    </div>
                </div>
            </div>
        </div>
</div>
@endmobile
@tablet
@include('partial.navigationMobile')
@include('secciones.tablet.centroTable')
@include('secciones.tablet.leftTable')
@include('secciones.tablet.rightTable')
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
