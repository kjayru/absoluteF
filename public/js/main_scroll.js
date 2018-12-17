
    var msnry = new Masonry( '.grid', {
        itemSelector: '.grid__item',
        columnWidth: '.grid__col-sizer',
        gutter: '.grid__gutter-sizer',
        percentPosition: true,
        stagger: 30,
        visibleStyle: { transform: 'translateY(0)', opacity: 1 },
        hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
      });


      var infScroll = new InfiniteScroll( '.grid', {
        path: function() {

          return '/getdata?page=' + this.pageIndex;
        },
        // load response as flat text
        responseType: 'text',
        outlayer: msnry,
        status: '.page-load-status',
        //elementScroll: '.contenido',
        history: false
      });


    var proxyElem = document.createElement('div');
    infScroll.on( 'load', function( response ) {
    var data = JSON.parse( response );
    var itemsHTML = data.map( getItemHTML ).join('');
    proxyElem.innerHTML = itemsHTML;
    var items = proxyElem.querySelectorAll('.grid__item');
    imagesLoaded( items, function() {
        infScroll.appendItems( items );
        msnry.appended( items );
    });
    });

    infScroll.loadNextPage();



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

$(window).resize(function(){
    console.log("resize");
    componer();
});

$(document).ready(function(){
    $(".loading").show().delay(1200).fadeOut(700,'swing');
    $('#app').delay(1200).fadeIn(250,'swing');

$(window).resize();
//usuario
$(".buscar input.form-control").each(function(){
    let holder = $(this).data('rel');

    $(this).val(holder);
});
$(".buscar input.form-control").focus(function(){
    let holder = $(this).data('rel');
    if( $(this).val()==holder){
        $(this).val('');
    }
});
$(".buscar input.form-control").blur(function(){
    let holder = $(this).data('rel');
    if($(this).val()==='' || $(this).val()===holder){
        $(this).val(holder);
       }
});



});






var nextPages = [];

for(var i=1;i<pages ;i++){
    nextPages.push(i);
}

function getPath() {
    var slug = nextPages[ this.loadCount ];

    if ( slug ) {
    return `/getdemoview/?page=${slug}`;
    }
}

//filtro
function getPath2(name) {

    return `${pageurl}/getusuario/${name}`;

}

//usuario
function getPath3(filtro) {

    return `/getcategoria/?page=${filtro}`;

}


function filtros(filtro){

    ///filtros

    var $grid2 = $('.grid').masonry({
        itemSelector: 'none', // select none at first
        columnWidth: '.grid__col-sizer',
        gutter: '.grid__gutter-sizer',
        percentPosition: true,
        stagger: 30,
        // nicer reveal transition
        visibleStyle: { transform: 'translateY(0)', opacity: 1 },
        hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
    });

    // get Masonry instance
    var msnry2 = $grid2.data('masonry');

    // initial items reveal
    $grid2.imagesLoaded( function() {
        $grid2.removeClass('are-images-unloaded');
        $grid2.masonry( 'option', { itemSelector: '.grid__item' });
        var $items2 = $grid2.find('.grid__item');
        $grid2.masonry( 'appended', $items2 );
    });

    $grid2.infiniteScroll({
        path: getPath3(filtro),
        append: '.grid__item',
        outlayer: msnry2,
        history: false,
        status: '.page-load-status',
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

        msnry.destroy();
        infScroll.destroy();



        $(".grid3").html(`<div class="grid__col-sizer"></div><div class="grid__gutter-sizer"></div>`);
        $(".btn-reset").fadeIn(350,'swing');
        $(".grid").hide();
        let usuario = $("#usuario").val();
        $(".content3").hide();
        $(".content4").hide();
        $(".content5").hide();
        $(".content6").hide();

        $(".content2").fadeIn(350,'swing');

       let ihtm='';

    $.get(`https://dflc3vgmc8.execute-api.us-east-1.amazonaws.com/Prod/tweets/usuarios/${usuario}?limite=1000`, function(response) {

        var stack1 = $("#stack").position().top;
        $("html, body").animate({ scrollTop: stack1}, 600,"swing");

        if(response.cantidad>0){



           $.each(response.data,function(i,e){
                let op = Math.floor((Math.random() * 4) + 1);
                let resto = i % 3;
                if(resto===0){
                    ihtm+=`<div class="grid__item grid__item--height2 grid__item--width2">
                    <div class="box">
                        <video controls="" poster="/images/fondo${op}.png">
                            <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }else{
                    ihtm+=`<div class="grid__item grid__item--height2 grid__item--width2">
                        <div class="box">
                            <video controls="" poster="/images/fondo${op}.png">
                                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }

            })

            $(".grid3").append(ihtm).promise().done(function(){



                  var $grid3 = $('.grid3').masonry({
                    itemSelector: 'none',
                    columnWidth: '.grid__col-sizer',
                    gutter: '.grid__gutter-sizer',
                    percentPosition: true,
                    stagger: 30,

                    visibleStyle: { transform: 'translateY(0)', opacity: 1 },
                    hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
                  });

                  $grid3.imagesLoaded( function() {
                    $grid3.removeClass('are-images-unloaded');
                    $grid3.masonry( 'option', { itemSelector: '.grid__item' });
                    var $items = $grid3.find('.grid__item');
                    $grid3.masonry( 'appended', $items );
                  });



            });


        }else{

            $(".grid3").html("<p class='text-center'>No se encontraron Tweets con el usuario ingresado.</p>");
        }
    });


    });

    $("#matrimonio").change(function(){
        $(".grid2").html(`<div class="grid__col-sizer"></div><div class="grid__gutter-sizer"></div>`);
        if($(this).is(':checked')){

            msnry.destroy();
            infScroll.destroy();
            $("#usuario").val('Ingresar usuario');
            $(".form-check-input").each(function(){
                $(this).prop('checked',false);
            });

            $(this).prop('checked',true);
            $(".btn-reset").fadeIn(350,'swing');
            $(".grid").hide();
            let filtro = 'UNIONCIVIL';
            $(".content4").hide();
            $(".content2").hide();
            $(".content5").hide();
            $(".content6").hide();

            $(".content3").fadeIn(350,'swing');

        let ihtm='';
        var stack1 = $("#stack").position().top;
        $("html, body").animate({ scrollTop: stack1}, 600,"swing");

            $.get(`/getcategoria/${filtro}`, function(response) {


            $.each(response,function(i,e){
                let op = Math.floor((Math.random() * 4) + 1);
                let resto = i % 3;
                if(resto===0){
                    ihtm+=`<div class="grid__item grid__item--height2 grid__item--width2" >
                    <div class="box">
                        <video controls="" poster="/images/fondo${op}.png">
                            <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }else{
                    ihtm+=`<div class="grid__item grid__item--height2 grid__item--width2">
                        <div class="box">
                            <video controls="" poster="/images/fondo${op}.png">
                                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }

            })

            $(".grid2").append(ihtm).promise().done(function(){



                var $grid2 = $('.grid2').masonry({
                    itemSelector: 'none',
                    columnWidth: '.grid__col-sizer',
                    gutter: '.grid__gutter-sizer',
                    percentPosition: true,
                    stagger: 30,

                    visibleStyle: { transform: 'translateY(0)', opacity: 1 },
                    hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
                  });

                  $grid2.imagesLoaded( function() {
                    $grid2.removeClass('are-images-unloaded');
                    $grid2.masonry( 'option', { itemSelector: '.grid__item' });
                    var $items = $grid2.find('.grid__item');
                    $grid2.masonry( 'appended', $items );
                  });


            });
        });

       }

    });
    //racismo

    $("#racismo").change(function(){
        $(".grid4").html(`<div class="grid__col-sizer"></div><div class="grid__gutter-sizer"></div>`);
        if($(this).is(':checked')){

            msnry.destroy();
            infScroll.destroy();

            $(".form-check-input").each(function(){
                $(this).prop('checked',false);
            });
            $("#usuario").val('Ingresar usuario');
            $(this).prop('checked',true);
            $(".btn-reset").fadeIn(350,'swing');
        $(".grid").hide();
        let filtro = 'RACISMO';
        $(".btn-reset").fadeIn(350,'swing');
        $(".content2").hide();
        $(".content3").hide();

        $(".content6").hide();
        $(".content5").hide();
        $(".content4").fadeIn(350,'swing');


          let ihtm ='';

            var stack1 = $("#stack").position().top;
            $("html, body").animate({ scrollTop: stack1}, 600,"swing");

        $.get(`/getcategoria/${filtro}`, function(response) {
            $.each(response,function(i,e){
                let op = Math.floor((Math.random() * 4) + 1);
                let resto = i % 3;
                if(resto===0){
                    ihtm+=`<div class="grid__item grid__item--height2 grid__item--width2">
                    <div class="box">
                        <video controls="" poster="/images/fondo${op}.png">
                            <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }else{
                    ihtm+=`<div class="grid__item grid__item--height2 grid__item--width2">
                        <div class="box">
                            <video controls="" poster="/images/fondo${op}.png">
                                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }

            })

            $(".grid4").append(ihtm).promise().done(function(){



                var $grid4 = $('.grid4').masonry({
                    itemSelector: 'none',
                    columnWidth: '.grid__col-sizer',
                    gutter: '.grid__gutter-sizer',
                    percentPosition: true,
                    stagger: 30,

                    visibleStyle: { transform: 'translateY(0)', opacity: 1 },
                    hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
                  });

                  $grid4.imagesLoaded( function() {
                    $grid4.removeClass('are-images-unloaded');
                    $grid4.masonry( 'option', { itemSelector: '.grid__item' });
                    var $items = $grid4.find('.grid__item');
                    $grid4.masonry( 'appended', $items );
                  });



            });
        });


       }

    });

    //peruchile

    $("#peruchile").change(function(){
        $(".grid5").html(`<div class="grid__col-sizer"></div><div class="grid__gutter-sizer"></div>`);
        if($(this).is(':checked')){

            msnry.destroy();
            infScroll.destroy();
            $("#usuario").val('Ingresar usuario');
            $(".form-check-input").each(function(){
                $(this).prop('checked',false);
            });

            $(this).prop('checked',true);

        $(".grid").hide();
        let filtro = 'CHILE';
        $(".btn-reset").fadeIn(350,'swing');
        $(".content2").hide();
        $(".content3").hide();
        $(".content4").hide();

        $(".content6").hide();
        $(".content5").fadeIn(350,'swing');


          let ihtm ='';
          var stack1 = $("#stack").position().top;
          $("html, body").animate({ scrollTop: stack1}, 600,"swing");

        $.get(`/getcategoria/${filtro}`, function(response) {
            $.each(response,function(i,e){
                let op = Math.floor((Math.random() * 4) + 1);
                let resto = i % 3;
                if(resto===0){
                    ihtm+=`<div class="grid__item grid__item--height2 grid__item--width2">
                    <div class="box">
                        <video controls="" poster="/images/fondo${op}.png">
                            <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }else{
                    ihtm+=`<div class="grid__item grid__item--height2 grid__item--width2">
                        <div class="box">
                            <video controls="" poster="/images/fondo${op}.png">
                                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }

            })

            $(".grid5").append(ihtm).promise().done(function(){

                var $grid5 = $('.grid5').masonry({
                    itemSelector: 'none',
                    columnWidth: '.grid__col-sizer',
                    gutter: '.grid__gutter-sizer',
                    percentPosition: true,
                    stagger: 30,

                    visibleStyle: { transform: 'translateY(0)', opacity: 1 },
                    hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
                  });

                  $grid5.imagesLoaded( function() {
                    $grid5.removeClass('are-images-unloaded');
                    $grid5.masonry( 'option', { itemSelector: '.grid__item' });
                    var $items = $grid5.find('.grid__item');
                    $grid5.masonry( 'appended', $items );
                  });



            });
        });

       }

    });


    //OTROS

    $("#otros").change(function(){
        $(".grid6").html(`<div class="grid__col-sizer"></div><div class="grid__gutter-sizer"></div>`);
        if($(this).is(':checked')){

            msnry.destroy();
            infScroll.destroy();
            $("#usuario").val('Ingresar usuario');
            $(".form-check-input").each(function(){
                $(this).prop('checked',false);
            });

            $(this).prop('checked',true);
        $(".btn-reset").fadeIn(350,'swing');
        $(".grid").hide();
        let filtro = 'ODIO';
        $(".content2").hide();
        $(".content3").hide();
        $(".content4").hide();
        $(".content5").hide();
        $(".content6").fadeIn(350,'swing');

          let ihtm ='';
          var stack1 = $("#stack").position().top;
          $("html, body").animate({ scrollTop: stack1}, 600,"swing");

         $.get(`/getcategoria/${filtro}`, function(response) {

            $.each(response,function(i,e){
                let op = Math.floor((Math.random() * 4) + 1);
                let resto = i % 3;
                if(resto===0){
                    ihtm+=`<div class="grid__item grid__item--height2 grid__item--width2">
                    <div class="box">
                        <video controls="" poster="/images/fondo${op}.png">
                            <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }else{
                    ihtm+=`<div class="grid__item grid__item--height2 grid__item--width2">
                        <div class="box">
                            <video controls="" poster="/images/fondo${op}.png">
                                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/${e.idStr}.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>`;
                }

            })

            $(".grid6").append(ihtm).promise().done(function(){
                var $grid6 = $('.grid6').masonry({
                    itemSelector: 'none',
                    columnWidth: '.grid__col-sizer',
                    gutter: '.grid__gutter-sizer',
                    percentPosition: true,
                    stagger: 30,

                    visibleStyle: { transform: 'translateY(0)', opacity: 1 },
                    hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
                  });

                  $grid6.imagesLoaded( function() {
                    $grid6.removeClass('are-images-unloaded');
                    $grid6.masonry( 'option', { itemSelector: '.grid__item' });
                    var $items = $grid6.find('.grid__item');
                    $grid6.masonry( 'appended', $items );
                  });


            });
        });



       }

    });
});

$(document).ready(function(e){

    $('#usuario').keypress(function (event) {

        if (event.keyCode === 10 || event.keyCode === 13) {
            event.preventDefault();
        }

    });

    $(".btn-reset").on('click',function(e){
        e.preventDefault();


        var stack = $("#tweetrigami").position().top;
          $("html, body").animate({ scrollTop: stack}, 600,"swing");


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
        componer();
    });

});

var i=0;
function componer(){
    i =i+1;


    var msnry = new Masonry( '.grid', {
        itemSelector: '.grid__item',
        columnWidth: '.grid__col-sizer',
        gutter: '.grid__gutter-sizer',
        percentPosition: true,
        stagger: 30,
        visibleStyle: { transform: 'translateY(0)', opacity: 1 },
        hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
      });


      var infScroll = new InfiniteScroll( '.grid', {
        path: function() {

          return '/getdata?page=' + this.pageIndex;
        },
        // load response as flat text
        responseType: 'text',
        outlayer: msnry,
        status: '.page-load-status',
        //elementScroll: '.contenido',
        history: false
      });


    var proxyElem = document.createElement('div');
    infScroll.on( 'load', function( response ) {
    var data = JSON.parse( response );
    var itemsHTML = data.map( getItemHTML ).join('');
    proxyElem.innerHTML = itemsHTML;
    var items = proxyElem.querySelectorAll('.grid__item');
    imagesLoaded( items, function() {
        infScroll.appendItems( items );
        msnry.appended( items );
    });
    });

    infScroll.loadNextPage();



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


}

$(window).on('load',function(){

    console.log("onload "+localStorage.getItem('first'));
        if(localStorage.getItem('first')){
            console.log('ya visito..');

        }else{

            localStorage.setItem('first','primera-carga');
           window.location.reload();

        }
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
    videoId: '6sOIoG6DWMs',
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
      var close = document.createElement('div');
      close.innerHTML = ' <a href="#" class="close"><i class="fa fa-times" aria-hidden="true"></i></a>';
      //close.classList.add('close');
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

$(".close").on('click',function(e){
    e.preventDefault();

    $(".boxmodal").removeClass('active');
        stopVideo();
        stopVideo2();
        stopVideo3();
});
