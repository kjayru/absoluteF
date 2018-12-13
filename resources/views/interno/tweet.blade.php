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

            <div class="row justify-content-center text-center">
                 <div class="col-md-12">

                        <h3 class="titulseccion">Tweetrigami</h3>

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


             <!--lienzo-->
             <div id="grid" class="grid" >
                <div class="grid__col-sizer"></div>

            </div>

            <div class="page-load-status">
                <div class="loader-ellips infinite-scroll-request">
                    <span class="loader-ellips__dot"></span>
                    <span class="loader-ellips__dot"></span>
                    <span class="loader-ellips__dot"></span>
                    <span class="loader-ellips__dot"></span>
                </div>
                <p class="infinite-scroll-last">Final</p>
                <p class="infinite-scroll-error">No tiene mas contenido</p>
            </div>


             </div>
        </div>
</section>

@include('partial.footer')
  @include('partial.scriptseccion')
<script src="/js/main_scroll.js"></script>
