@extends('layout.interno')
@section('content')
@desktop
@include('partial.navigationInterno')
@enddesktop

 @mobile
 @include('partial.navigationMobileInterno')
 @endmobile
 <style>
 .section2 p {
    color: white;
    padding-top: 30px;
    text-align: center;
}
@media screen and (max-width: 425px){
    .layout__main .page1__main .section2__main .title h4 {
        font-size: 21px;
    }
}
 </style>
<div class="layout" id="app">
      <div class="layout__main">
        <div class="page1">
          <div class="page1__main">
            <section class="section1">
              <div class="section1__align">
                <div class="section1__main">
                  <div class="title">
                    <h3> <span>LOVE DRINKS</span></h3>
                  </div>
                  <div class="content" id="list1">
                    <div class="content__item">
                      <figure><img src="assets/VODKA_MULE.png" alt=""/></figure>
                      <figcaption>
                        <h4>Vodka Mule</h4><span>2 onz vodka </span><span>1 onz zumo jengibre </span><span>1/2 onz zumo limón </span><span>1/4 jarabe de goma </span><span>Completar con ginger ale </span><span>Decorar con ramillete hierba buena </span><span>y gajo de limón</span>
                      </figcaption>
                    </div>
                    <div class="content__item">
                      <figure><img src="assets/vodka-tonic_black.png" alt=""/></figure>
                      <figcaption>
                        <h4>Vodka Tonic</h4><span>2 onz vodka </span><span>Completar con una lata de agua tónica</span><span>Decorar con lima</span>
                      </figcaption>
                    </div>
                  </div>
                  <!--.info
                  .info__content
                  	h3 Pour Absolut Vodka into a highball glas, squeeze two lime wedges and discard. Add ice cubes and top up with soda and garnish with sliced strawberries and basil sprig. Pour Absolut Vodka into a highball glas, squeeze two lime wedges and discard. Add ice cubes and top up with soda and garnish with sliced strawberries and basil sprig. Pour Absolut Vodka into a highball glas, squeeze two lime wedges and discard. Add ice cubes and top up with soda and garnish with sliced strawberries and basil sprig.
                  --><span class="mouse-indicator"><span class="mouse"><span class="wheel"></span></span></span>
                </div>
              </div>
            </section>
            <section class="section2">
              <div class="section2__align">
                <div class="section2__main">
                  <div class="title">
                    <h3> <span>LOVE EVENTS</span></h3>
                    <h4>BULBO 29 – 09</h4>
                    <p>Estuvimos presentes en el aniversario de Bulbo, para celebrar una noche mágica llena de amor, música electrónica y mucha buena onda.</p>
                  </div>
                  <div class="list" id="list2">
                    <div class="list__item" data-responsive="assets/photos/small/bulbo/01.jpg" data-src="assets/photos/large/bulbo/01.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/bulbo/01.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/bulbo/02.jpg" data-src="assets/photos/large/bulbo/02.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/bulbo/02.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/bulbo/03.jpg" data-src="assets/photos/large/bulbo/03.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/bulbo/03.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/bulbo/04.jpg" data-src="assets/photos/large/bulbo/04.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/bulbo/04.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/bulbo/05.jpg" data-src="assets/photos/large/bulbo/05.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/bulbo/05.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/bulbo/06.jpg" data-src="assets/photos/large/bulbo/06.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/bulbo/06.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/bulbo/07.jpg" data-src="assets/photos/large/bulbo/07.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/bulbo/07.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/bulbo/08.jpg" data-src="assets/photos/large/bulbo/08.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/bulbo/08.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/bulbo/09.jpg" data-src="assets/photos/large/bulbo/09.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/bulbo/09.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/bulbo/10.jpg" data-src="assets/photos/large/bulbo/10.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/bulbo/10.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/bulbo/11.jpg" data-src="assets/photos/large/bulbo/11.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/bulbo/11.jpg" alt=""/></a></div>
                  </div>
                  <div class="title">
                    <h4>RUBIK 22 – 09</h4>
                    <p>Celebramos junto a Rubik una noche en dónde el arte y la música se juntaron para disfrutar absolutamente del amor.</p>
                  </div>
                  <div class="list" id="list3">
                    <div class="list__item" data-responsive="assets/photos/small/rubik/01.jpg" data-src="assets/photos/large/rubik/01.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/01.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/02.jpg" data-src="assets/photos/large/rubik/02.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/02.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/03.jpg" data-src="assets/photos/large/rubik/03.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/03.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/04.jpg" data-src="assets/photos/large/rubik/04.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/04.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/05.jpg" data-src="assets/photos/large/rubik/05.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/05.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/06.jpg" data-src="assets/photos/large/rubik/06.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/06.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/07.jpg" data-src="assets/photos/large/rubik/07.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/07.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/08.jpg" data-src="assets/photos/large/rubik/08.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/08.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/09.jpg" data-src="assets/photos/large/rubik/09.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/09.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/10.jpg" data-src="assets/photos/large/rubik/10.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/10.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/11.jpg" data-src="assets/photos/large/rubik/11.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/11.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/12.jpg" data-src="assets/photos/large/rubik/12.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/12.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/13.jpg" data-src="assets/photos/large/rubik/13.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/13.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/14.jpg" data-src="assets/photos/large/rubik/14.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/14.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/15.jpg" data-src="assets/photos/large/rubik/15.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/15.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/16.jpg" data-src="assets/photos/large/rubik/16.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/16.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/17.jpg" data-src="assets/photos/large/rubik/17.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/17.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/18.jpg" data-src="assets/photos/large/rubik/18.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/18.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/19.jpg" data-src="assets/photos/large/rubik/19.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/19.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/20.jpg" data-src="assets/photos/large/rubik/20.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/20.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/21.jpg" data-src="assets/photos/large/rubik/21.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/21.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/22.jpg" data-src="assets/photos/large/rubik/22.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/22.jpg" alt=""/></a></div>
                    <div class="list__item" data-responsive="assets/photos/small/rubik/23.jpg" data-src="assets/photos/large/rubik/23.jpg" data-sub-html="Foto: Fernando Farias."><a><img src="assets/photos/small/rubik/23.jpg" alt=""/></a></div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
    @endsection
