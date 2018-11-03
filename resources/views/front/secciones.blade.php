@extends('layout.master')
@section('content')
@include('partial.navigation')

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
@include('partial.footer')

@endsection
