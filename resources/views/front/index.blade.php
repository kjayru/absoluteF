@extends('layout.master')
@section('content')


<div id="home">
                <div class="container">
                    <div class="row h-100 justfy-content-center align-items-center">
                        <div class="col-md-12 block_1">
                            <h1 class="text-center">BIENVENIDO</h1>
                            <!--<p class="text-center p1">Coloca tu fecha de nacimiento y empieza a darle al mundo más
                                amor y menos odio.
                            </p>-->
                            <div class="row justify-content-md-center">
                                <div class="fdatos">
                                    <div class="box-year">
                                        <input type="text" class="in-form" maxlength="4" id="edad" name="edad">
                                    </div>
                                    <a class="box-btn " href="#" id="validarEdad">
                                        OK
                                    </a>
                                </div>

                            </div>
                            <div class="row justify-content-md-center">
                                <p>Tienes que ser mayor de 18 años</p>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="iremenber">
                                    <form class="form">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="recordar"/>
                                            <label class="form-check-label" >
                                                Recuérdame
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="titulo text-center">Absolut.</div>
                        </div>

                         <div class="col-md-12">
                           <!-- <div class="legal">
                                <p>
                                  By entering this site, you are agreeing to our Terms & Conditions found here, Privacy Policy found here and Cookies Policy found here.
                                  By continuing to browse this site you are agreeing to accept our use of cookies. Read our Privacy Policy to find out more. Read the Absolut
                                  responsibility statement here. Absolut endorses responsible and moderate drinking. For this reason, we would like to recommend the following reading:
                                  Distilled Spirits Council of the United States (DISCUS), and the spirits EUROPE Guidelines for the Development of Responsible Marketing Communications.
                                  ABSOLUT® Vodka Product of Sweden. Absolut, Absolut Vodka country of Sweden & Logo, ENJOY RESPONSIBLY and Absolut Bottle Designs are trademarks owned by
                                  The Absolut Company AB. ©2000-2014 The Absolut Company AB. All rights reserved. Imported in the US by Absolut Spirits Co. New York, NY. Enjoy responsibly.
                                </p>
                            </div>-->
                         </div>
                    </div>
                </div>
            </div>
            @include('partial.footer')
@endsection
