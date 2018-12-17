$(document).ready(function(){
    $(".loading").show().delay(650).fadeOut(1200,'swing').promise().done(function(){
        $("#iniciomob").show();
        $("#conocemob").hide();
        $("#miramob").hide();
    });

    $('#app').delay(1200).fadeIn(250,'swing');




    $("#cambio").change(function(){
        $(".fondoactivo").fadeIn(350,'swing');
        $(".p2 span").addClass("check-activo");
        $(".p1 span").addClass("check-activo");
    });
    $("#cambio2").change(function(){
        $(".fondoactivo").fadeOut(350,'swing');
        $("#cambio").prop(':checked',false);
        $(".p2 span").removeClass("check-activo");
        $(".p1 span").removeClass("check-activo");

    });



    $(".close").on('click',function(e){
        e.preventDefault();

        $(".boxmodal").removeClass('active');
            stopVideo();
            stopVideo2();
            stopVideo3();
    });




    $("a.closechild").on('click',function(e){
        e.preventDefault();
        $(".modalform").fadeOut(350,'swing',function(){
            reset();
        });
    });

    $.validator.methods.email = function( value, element ) {
        return this.optional( element ) || /[a-z0-9]+@[a-z0-9]+\.[a-z]+/.test( value );
      };
      $.validator.addMethod("valueNotEquals", function(value, element, arg){

        return arg !== value;
       }, "Value must not equal arg.");




    /**send mobile */


    $('.btnInicio').on('click touchstart tap',function(e){
        e.preventDefault();
        $("#iniciomob").show();
        $("#conocemob").hide();
        $("#miramob").hide();
        $(".navbar-toggler").trigger('click');
    });
    $('.btnConoce').on('click touchstart tap',function(e){
        e.preventDefault();
        $("#iniciomob").hide();
        $("#conocemob").show();
        $("#miramob").hide();
        $(".navbar-toggler").trigger('click');
    });
    $('.btnMira').on('click touchstart tap',function(e){
        e.preventDefault();
        $("#iniciomob").hide();
        $("#conocemob").hide();
        $("#miramob").show();
        $(".navbar-toggler").trigger('click');
    });

    $('.mbslide1').on('click touchstart tap',function(e){
        e.preventDefault();
        $("#iniciomob").hide();
        $("#conocemob").hide();
        $("#miramob").show();

    });

    $('.mbslide2').on('click touchstart tap',function(e){
        e.preventDefault();
        $("#iniciomob").hide();
        $("#conocemob").show();
        $("#miramob").hide();
    });


    $(".mbslide3").on('click',function(){
        window.location.href="/galeria"
     });


});




$(window).on("load", function () {
    $(".loading").fadeOut(700,'swing');
    var state=false;
    $("#iniciomob").show();
    $("#conocemob").hide();
    $("#miramob").hide();
    if(localStorage.getItem('session')){
        if(window.location.pathname==='/'){
          window.location.href='/secciones';
        }

    }else
    {

        if(window.location.pathname!='/'){

            window.location.href='/';
        }

    }




});



//api youtube
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player, player2,play3;

function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {

      height: '360',
      width: '640',
      videoId: 'y0MOF0b8yq8',
      origin: pageurl,
      playerVars: {
           'autoplay': 0,'loop': 0,'showinfo':0, 'controls': 0,'modestbranding':0,
           'playsinline':0,'rel':0,'iv_load_policy': 3
          },
    });


    player2= new YT.Player('player2',{
      height:'360',
      width:'640',
      videoId:'INqE_iUnoWo',
      origin: pageurl,
      playerVars: {
          'autoplay': 0,'loop': 0,'showinfo':0, 'controls': 0,'modestbranding':0,
          'playsinline':0,'rel':0,'iv_load_policy': 3
         },
  });

  player3= new YT.Player('player3',{
      height:'360',
      width:'640',
      videoId:'0ubq5F3k7ac',
      origin: pageurl,
      playerVars: {
          'autoplay': 0,'loop': 0,'showinfo':0, 'controls': 0,'modestbranding':0,
          'playsinline':0,'rel':0,'iv_load_policy': 3
         },
  });
  }
  function onPlayerReady() {
      player.playVideo();
    }
    var done = false;

    function stopVideo() {
      player.stopVideo();
    }

  function PlayerReady2(){

      player2.playVideo();
  }
  function stopVideo2(){
      player2.stopVideo();
  }

  function PlayerReady3(){

      player3.playVideo();
  }
  function stopVideo3(){
      player3.stopVideo();
  }


  //modal

$( ".player").on("click", function (e){
    e.preventDefault();
    onPlayerReady();
});
$( ".players2").on("click", function (e){
    e.preventDefault();
    PlayerReady2();
});

$( ".players3").on("click", function (e){
    e.preventDefault();
    PlayerReady3();
});
var _createClass = function () {
    function defineProperties(target, props)
    {
        for (var i = 0; i < props.length; i++) {
            var descriptor = props[i];descriptor.enumerable = descriptor.enumerable || false;
            descriptor.configurable = true;
            if ("value" in descriptor) descriptor.writable = true;
            Object.defineProperty(target, descriptor.key, descriptor);}}
            return function (Constructor, protoProps, staticProps) {
                if (protoProps) defineProperties(Constructor.prototype, protoProps);
                if (staticProps) defineProperties(Constructor, staticProps);
                return Constructor;};}();function _classCallCheck(instance, Constructor) {
                    if (!(instance instanceof Constructor)) {
                        throw new TypeError("Cannot call a class as a function");
                      }}
                      var RippleModal = function () {

  function RippleModal() {
      var _this = this;
      var triggerClass = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'modal-trigger';
      var modalClass = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'boxmodal';
      _classCallCheck(this, RippleModal);
    this.triggerClass = triggerClass;
    var $body = document.body;

    var $rippleContainer = document.createElement('div');
    this.ripple = document.createElement('div');

    $rippleContainer.classList.add('ripple-container');
    this.ripple.classList.add('ripple');

    $rippleContainer.appendChild(this.ripple);
    $body.appendChild($rippleContainer);

    this.modals = [].slice.call(document.querySelectorAll('.' + modalClass));

    this.animationStart = 0;
    this.activeModal = null;

    this.modals.map(function (modal) {
      var close = document.createElement('button');
      close.innerHTML = ' <a href="#" class="close"><i class="fa fa-times" aria-hidden="true"></i></a>';
      close.classList.add('close');
      modal.appendChild(close);
      close.addEventListener('click', function (evt) {return _this._closeModal(evt, modal);}, false);
    });

    this._setRippleSize();
    this._initEvents();
  }

  _createClass(RippleModal, [{ key: '_setRippleSize', value: function _setRippleSize()
    {
      var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
      var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
      var s = w > h ? w * 2 : h * 2;

      this.ripple.style.width = s + 'px';
      this.ripple.style.height = s + 'px';
    } },
    { key: '_initEvents', value: function _initEvents()

    {var _this2 = this;
      window.addEventListener('resize', function () {return _this2._setRippleSize();}, false);
      document.body.addEventListener('click', function (evt) {
          return _this2._handleClicks(evt);
      }, false);
    } },
    { key: '_handleClicks', value: function _handleClicks(evt)
     {
      var target = evt.target;

      this.animationStart = 0;

      if (target.classList.contains(this.triggerClass)) {
        var modalId = target.dataset.modal.substr(1);
        this.activeModal = document.getElementById(modalId);

        var clickTop = evt.clientY;
        var clickLeft = evt.clientX;

        this.ripple.style.left = clickLeft + 'px';
        this.ripple.style.top = clickTop + 'px';
        this.ripple.classList.add('is-animating');

        window.requestAnimationFrame(this._triggerAnimation.bind(this));
      }
    } }, { key: '_triggerAnimation', value: function _triggerAnimation(

    timestamp) {
      if (!this.animationStart) {
        this.animationStart = timestamp;
      }

      var progress = timestamp - this.animationStart;
      if (progress > 1000) {
        this.ripple.classList.remove('is-animating');
        return true;
      } else if (progress > 500) {
        this.activeModal.classList.add('active');
      }

      window.requestAnimationFrame(this._triggerAnimation.bind(this));
    } }, { key: '_closeModal', value: function _closeModal(

    evt, modal) {
      evt.preventDefault();
      modal.classList.remove('active');
    } }]);

    return RippleModal;
  }();


(function () {
  new RippleModal();
})();


(function () {
  var lastTime = 0;
  var vendors = ['webkit', 'moz'];
  for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
    window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
    window.cancelAnimationFrame =
    window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
  }

  if (!window.requestAnimationFrame)
  window.requestAnimationFrame = function (callback, element) {
    var currTime = new Date().getTime();
    var timeToCall = Math.max(0, 16 - (currTime - lastTime));
    var id = window.setTimeout(function () {callback(currTime + timeToCall);},
    timeToCall);
    lastTime = currTime + timeToCall;
    return id;
  };

  if (!window.cancelAnimationFrame)
  window.cancelAnimationFrame = function (id) {
    clearTimeout(id);
  };
})();



function reset(){
    let rel1 = $("#nombres2").data('rel');
    $("#nombres2").val(rel1);
    let rel2 = $("#email2").data('rel');
    $("#email2").val(rel2);
    $("#suscripcion2").prop("checked",false);
    $("#terminos2").prop("checked",false);
}



eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('(2($){$.c.f=2(p){p=$.d({g:"!@#$%^&*()+=[]\\\\\\\';,/{}|\\":<>?~`.- ",4:"",9:""},p);7 3.b(2(){5(p.G)p.4+="Q";5(p.w)p.4+="n";s=p.9.z(\'\');x(i=0;i<s.y;i++)5(p.g.h(s[i])!=-1)s[i]="\\\\"+s[i];p.9=s.O(\'|\');6 l=N M(p.9,\'E\');6 a=p.g+p.4;a=a.H(l,\'\');$(3).J(2(e){5(!e.r)k=o.q(e.K);L k=o.q(e.r);5(a.h(k)!=-1)e.j();5(e.u&&k==\'v\')e.j()});$(3).B(\'D\',2(){7 F})})};$.c.I=2(p){6 8="n";8+=8.P();p=$.d({4:8},p);7 3.b(2(){$(3).f(p)})};$.c.t=2(p){6 m="A";p=$.d({4:m},p);7 3.b(2(){$(3).f(p)})}})(C);',53,53,'||function|this|nchars|if|var|return|az|allow|ch|each|fn|extend||alphanumeric|ichars|indexOf||preventDefault||reg|nm|abcdefghijklmnopqrstuvwxyz|String||fromCharCode|charCode||alpha|ctrlKey||allcaps|for|length|split|1234567890|bind|jQuery|contextmenu|gi|false|nocaps|replace|numeric|keypress|which|else|RegExp|new|join|toUpperCase|ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('|'),0,{}));


/*
let grid = $('.grid').infiniteScroll({
    path: function() {
        return `/getdata/?page=${this.pageIndex}`;
    },
    append: '.grid__item',
    history: false,
    button: '.view-more-button',
    status: '.page-load-status',
});
console.log(grid);*/

var $container = $( '.grid').infiniteScroll({
    path: function() {
      return '/getdata/?page=' + this.pageIndex;
    },
    // load response as flat text
    responseType: 'text',
    status: '.scroll-status',
    history: false,
  });


$container.on('load.infiniteScroll', function( event, response ) {
    console.log(response+" "+event);


    var data = JSON.parse( response );

    var itemsHTML = data.map( getItemHTML ).join('');
    var $itempe =  $( itemsHTML );
    $itempe.imagesLoaded( function() {


        $container.infiniteScroll('appendItems', $itempe );
     //  $gricontainerd.masonry( 'appended', $itempe );

    });


  });

  $container.infiniteScroll('loadNextPage');

function getItemHTML( photo ) {
    var rn = Math.floor((Math.random() * 10) + 1);
switch (rn) {
    case 1:

    var itemTemplateSrc = $('#photo-item-template').html();
    break;
    case 2:

    var itemTemplateSrc = $('#photo-item-template2').html();
    break;
    case 3:

    var itemTemplateSrc = $('#photo-item-template3').html();
    break;
    case 4:

    var itemTemplateSrc = $('#photo-item-template4').html();
    break;

    case 5:

    var itemTemplateSrc = $('#photo-item-template5').html();
    break;

    case 6:

    var itemTemplateSrc = $('#photo-item-template6').html();
    break;
    case 7:

    var itemTemplateSrc = $('#photo-item-template7').html();
    break;
    case 8:
    var itemTemplateSrc = $('#photo-item-template8').html();
    break;
    case 9:

    var itemTemplateSrc = $('#photo-item-template9').html();
    break;
    case 10:

    var itemTemplateSrc = $('#photo-item-template10').html();
    break;
    }

    return microTemplate( itemTemplateSrc, photo );

}


function microTemplate( src, data ) {


  return src.replace( /\{\{([\w\-_\.]+)\}\}/gi, function( match, key ) {
    var value = data;

    value = data.idStr;


    return value;
  });
}

$(document).ready(function(e){

    $("#usuario").focus(function(){
        $(".form-check-input").each(function(){
            $(this).prop('checked',false);
        });
    });


    $("#btn-buscar").click(function(e){
        e.preventDefault();

        $(".grid3").html(``);
        $(".btn-reset").fadeIn(350,'swing');
        $(".grid").hide();
        $(".btn-vermas").hide();
        let usuario = $("#usuario").val();
        $(".content3").hide();
        $(".content4").hide();
        $(".content5").hide();
        $(".content6").hide();

        $(".content2").fadeIn(350,'swing');

       let ihtm='';

    $.get(`https://dflc3vgmc8.execute-api.us-east-1.amazonaws.com/Prod/tweets/usuarios/${usuario}?limite=20`, function(response) {

        if(response.cantidad>0){

           $.each(response.data,function(i,e){
                let op = Math.floor((Math.random() * 12) + 1);
                let resto = i % 3;
                if(resto===0){
                    ihtm+=`<div class="grid-item">
                    <div class="box">
                        <video controls="" poster="/images/fondo${op}.png">
                            <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }else{
                    ihtm+=`<div class="grid-item">
                        <div class="box">
                            <video controls="" poster="/images/fondo${op}.png">
                                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }

            })

            $(".grid3").append(ihtm).promise().done(function(){


            });


        }else{

            $(".grid3").html("<p class='text-center'>No se encontraron Tweets con el usuario ingresado.</p>");
        }
    });


    });

    $("#matrimonio").change(function(){
        $(".grid2").html("");

        if($(this).is(':checked')){

            $(".form-check-input").each(function(){
                $(this).prop('checked',false);
            });
            $("#usuario").val('');
        $(this).prop('checked',true);
        $(".btn-reset").fadeIn(350,'swing');
        $(".grid").hide();
        $(".btn-vermas").hide();
        let filtro = 'UNIONCIVIL';
        $(".content4").hide();
        $(".content2").hide();
        $(".content5").hide();
        $(".content6").hide();

        $(".content3").fadeIn(350,'swing');
        let ihtm ='';

        $.get(`/getcategoria/${filtro}`, function(response) {

            $.each(response,function(i,e){
                let op = Math.floor((Math.random() * 12) + 1);
                let resto = i % 3;
                if(resto===0){
                    ihtm+=`<div class="grid-item ">
                    <div class="box">
                        <video controls="" poster="/images/fondo${op}.png">
                            <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }else{
                    ihtm+=`<div class="grid-item">
                        <div class="box">
                            <video controls="" poster="/images/fondo${op}.png">
                                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }

            })

            $(".grid2").append(ihtm).promise().done(function(){

            });
        });

       }

    });
    //racismo

    $("#racismo").change(function(){
        $(".grid4").html("");
        $("#usuario").val('');
        if($(this).is(':checked')){
            $(".btn-reset").fadeIn(350,'swing');
            $(".form-check-input").each(function(){
                $(this).prop('checked',false);
            });

            $(this).prop('checked',true);

        $(".grid").hide();
        $(".btn-vermas").hide();
        let filtro = 'RACISMO';

        $(".content2").hide();
        $(".content3").hide();

        $(".content6").hide();
        $(".content5").hide();
        $(".content4").fadeIn(350,'swing');


          let ihtm ='';

         // const pathurl = `/getcategoria/${filtro}`;

          //$.get(`https://dflc3vgmc8.execute-api.us-east-1.amazonaws.com/Prod/tweets/categorias/${filtro}?limite=20`, function(response) {
        $.get(`/getcategoria/${filtro}`, function(response) {
            $.each(response,function(i,e){
                let op = Math.floor((Math.random() * 12) + 1);
                let resto = i % 3;
                if(resto===0){
                    ihtm+=`<div class="grid-item">
                    <div class="box">
                        <video controls="" poster="/images/fondo${op}.png">
                            <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }else{
                    ihtm+=`<div class="grid-item">
                        <div class="box">
                            <video controls="" poster="/images/fondo${op}.png">
                                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }

            })

            $(".grid4").append(ihtm).promise().done(function(){


            });
        });


       }

    });

    //peruchile

    $("#peruchile").change(function(){
        $("#usuario").val('');
        $(".grid5").html("");
        if($(this).is(':checked')){
            $(".btn-reset").fadeIn(350,'swing');
            $(".form-check-input").each(function(){
                $(this).prop('checked',false);
            });

            $(this).prop('checked',true);

        $(".grid").hide();
        $(".btn-vermas").hide();
        let filtro = 'CHILE';

        $(".content2").hide();
        $(".content3").hide();
        $(".content4").hide();

        $(".content6").hide();
        $(".content5").fadeIn(350,'swing');


          let ihtm ='';

          $.get(`/getcategoria/${filtro}`, function(response) {
            $.each(response,function(i,e){
                let op = Math.floor((Math.random() * 12) + 1);
                let resto = i % 3;
                if(resto===0){
                    ihtm+=`<div class="grid-item">
                    <div class="box">
                        <video controls="" poster="/images/fondo${op}.png">
                            <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }else{
                    ihtm+=`<div class="grid-item">
                        <div class="box">
                            <video controls="" poster="/images/fondo${op}.png">
                                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }

            })

            $(".grid5").append(ihtm).promise().done(function(){


            });
        });

       }

    });


    //OTROS

    $("#otros").change(function(){
        $("#usuario").val('');
        $(".grid6").html("");
        if($(this).is(':checked')){
            $(".btn-reset").fadeIn(350,'swing');
            $(".form-check-input").each(function(){
                $(this).prop('checked',false);
            });

            $(this).prop('checked',true);

        $(".grid").hide();
        $(".btn-vermas").hide();
        let filtro = 'ODIO';
        $(".content2").hide();
        $(".content3").hide();
        $(".content4").hide();
        $(".content5").hide();
        $(".content6").fadeIn(350,'swing');

          let ihtm ='';

          $.get(`/getcategoria/${filtro}`, function(response) {
            $.each(response,function(i,e){
                let op = Math.floor((Math.random() * 12) + 1);
                let resto = i % 3;
                if(resto===0){
                    ihtm+=`<div class="grid-item">
                    <div class="box">
                        <video controls="" poster="/images/fondo${op}.png">
                            <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }else{
                    ihtm+=`<div class="grid-item" >
                        <div class="box">
                            <video controls="" poster="/images/fondo${op}.png">
                                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }

            })

            $(".grid6").append(ihtm).promise().done(function(){


            });
        });



       }

    });
});

$(document).ready(function(){

    $('#usuario').keypress(function (event) {


        if (event.keyCode === 10 || event.keyCode === 13) {
            event.preventDefault();
        }

    });

    $(".btn-reset").on('click',function(e){
        e.preventDefault();
        $(".content2").hide();
        $(".content3").hide();
        $(".content4").hide();
        $(".content5").hide();
        $(".content6").hide();
        $(".btn-reset").hide();
        $(".btn-vermas").fadeIn(350,'swing');
        $(".grid").fadeIn(350,'swing');
        $(".form-check-input").each(function(){
            $(this).prop('checked',false);
        });
        $("#usuario").val('Ingresar usuario');
    });
});





//api youtube
var tag = document.createElement('script');
tag.src = "//youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;


function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {

    height: '360',
    width: '640',
    videoId: 'y0MOF0b8yq8',
    origin: pageurl,
    playerVars: {
         'autoplay': 0,'loop': 0,'showinfo':0, 'controls': 0,'modestbranding':0,
         'playsinline':0,'rel':0,'iv_load_policy': 3
        },
  });



}
  function onPlayerReady() {
    player.playVideo();
  }
  var done = false;

  function stopVideo() {
    player.stopVideo();
  }


  //modal
 let mod = document.querySelector(".player");
 if(mod){
 mod.addEventListener('click',function(e){
     e.preventDefault();
     onPlayerReady();
 });
}








var _createClass = function () {
    function defineProperties(target, props)
    {
        for (var i = 0; i < props.length; i++) {
            var descriptor = props[i];descriptor.enumerable = descriptor.enumerable || false;
            descriptor.configurable = true;
            if ("value" in descriptor) descriptor.writable = true;
            Object.defineProperty(target, descriptor.key, descriptor);}}
            return function (Constructor, protoProps, staticProps) {
                if (protoProps) defineProperties(Constructor.prototype, protoProps);
                if (staticProps) defineProperties(Constructor, staticProps);
                return Constructor;};}();function _classCallCheck(instance, Constructor) {
                    if (!(instance instanceof Constructor)) {
                        throw new TypeError("Cannot call a class as a function");
                      }}
                      var RippleModal = function () {

  function RippleModal() {
      var _this = this;
      var triggerClass = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'modal-trigger';
      var modalClass = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'boxmodal';
      _classCallCheck(this, RippleModal);
    this.triggerClass = triggerClass;
    var $body = document.body;

    var $rippleContainer = document.createElement('div');
    this.ripple = document.createElement('div');

    $rippleContainer.classList.add('ripple-container');
    this.ripple.classList.add('ripple');

    $rippleContainer.appendChild(this.ripple);
    $body.appendChild($rippleContainer);

    this.modals = [].slice.call(document.querySelectorAll('.' + modalClass));

    this.animationStart = 0;
    this.activeModal = null;

    this.modals.map(function (modal) {
      var close = document.createElement('button');
      close.innerHTML = ' <a href="#" class="close"><i class="fa fa-times" aria-hidden="true"></i></a>';
      close.classList.add('close');
      modal.appendChild(close);
      close.addEventListener('click', function (evt) {return _this._closeModal(evt, modal);}, false);
    });

    this._setRippleSize();
    this._initEvents();
  }

  _createClass(RippleModal, [{ key: '_setRippleSize', value: function _setRippleSize()
    {
      var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
      var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
      var s = w > h ? w * 2 : h * 2;

      this.ripple.style.width = s + 'px';
      this.ripple.style.height = s + 'px';
    } },
    { key: '_initEvents', value: function _initEvents()

    {var _this2 = this;
      window.addEventListener('resize', function () {return _this2._setRippleSize();}, false);
      document.body.addEventListener('click', function (evt) {
          return _this2._handleClicks(evt);
      }, false);
    } },
    { key: '_handleClicks', value: function _handleClicks(evt)
     {
      var target = evt.target;
      this.animationStart = 0;

      if (target.classList.contains(this.triggerClass)) {
        var modalId = target.dataset.modal.substr(1);
        this.activeModal = document.getElementById(modalId);

        var clickTop = evt.clientY;
        var clickLeft = evt.clientX;

        this.ripple.style.left = clickLeft + 'px';
        this.ripple.style.top = clickTop + 'px';
        this.ripple.classList.add('is-animating');

        window.requestAnimationFrame(this._triggerAnimation.bind(this));
      }
    } }, { key: '_triggerAnimation', value: function _triggerAnimation(

    timestamp) {
      if (!this.animationStart) {
        this.animationStart = timestamp;
      }

      var progress = timestamp - this.animationStart;
      if (progress > 1000) {
        this.ripple.classList.remove('is-animating');
        return true;
      } else if (progress > 500) {
        this.activeModal.classList.add('active');
      }

      window.requestAnimationFrame(this._triggerAnimation.bind(this));
    } }, { key: '_closeModal', value: function _closeModal(

    evt, modal) {
      evt.preventDefault();
      modal.classList.remove('active');
    } }]);

    return RippleModal;
  }();


(function () {
  new RippleModal();
})();


(function () {
  var lastTime = 0;
  var vendors = ['webkit', 'moz'];
  for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
    window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
    window.cancelAnimationFrame =
    window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
  }

  if (!window.requestAnimationFrame)
  window.requestAnimationFrame = function (callback, element) {
    var currTime = new Date().getTime();
    var timeToCall = Math.max(0, 16 - (currTime - lastTime));
    var id = window.setTimeout(function () {callback(currTime + timeToCall);},
    timeToCall);
    lastTime = currTime + timeToCall;
    return id;
  };

  if (!window.cancelAnimationFrame)
  window.cancelAnimationFrame = function (id) {
    clearTimeout(id);
  };
})();


