$(document).ready(function(){

    $("#edad").val("YYYY");
    $("#edad").focus(function(){

        if( $(this).val()=="YYYY"){
            $(this).val('');
        }
    });
    $("#edad").blur(function(){
       if($(this).val()==='' || $(this).val()==='YYYY'){
        $(this).val('YYYY');
       }
    });
    //dimensiones

    $(".cuadro input.form-control").each(function(){
        let holder = $(this).data('rel');

        $(this).val(holder);
    });
    $(".cuadro input.form-control").focus(function(){
        let holder = $(this).data('rel');
        if( $(this).val()==holder){
            $(this).val('');
        }
    });
    $(".cuadro input.form-control").blur(function(){
        let holder = $(this).data('rel');
        if($(this).val()==='' || $(this).val()===holder){
            $(this).val(holder);
           }
    });

try {
    const ps = new PerfectScrollbar('#resultado', {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 20
      });
} catch (error) {
   console.log("no iniciado");
}


$("#validarEdad").on('click',function(e){
    e.preventDefault();
    let edad = document.getElementById("edad").value;
    let recordar = document.getElementById("recordar").checked;


        if(!localStorage.getItem('session')){

            let tuedad = 2018-edad;
            if(tuedad>18){
              if(recordar===true){

                fetch('https://api.ipify.org/?format=json')
                .then(res=>res.json())
                .then(response=>{
                    localStorage.setItem('session', response.ip);

                    window.location.href='/secciones';
                })

              }else{
                localStorage.setItem('remember',Math.floor(Math.random() * 10));
                window.location.href='/secciones';
              }

            }else{
                alert("eres menor de edad");
            }
        }
});

    $(".btnMira").on('click',function(e){
        e.preventDefault();
        const contenedor = document.getElementById("marco");
          window.history.pushState(null, '', '/secciones/Mira-lo-que-hicimos-con-todo-el-odio');
          const ccright = window.innerWidth*2;
          altoDinamico(1);
          TweenMax.to(contenedor,1,{left:`-${ccright}px`,ease:Power4.easeIn});
    });

    $(".btnInicio").on('click',function(e){
        e.preventDefault();
        const contenedor = document.getElementById("marco");
        window.history.pushState(null, '', '/secciones');
        altoDinamico(2);
        TweenMax.to(contenedor,1,{left:`-${ window.innerWidth}px`,ease:Power4.easeIn});
    });


    $(".btnConoce").on('click',function(e){
        e.preventDefault();
        const contenedor = document.getElementById("marco");
        window.history.pushState(null, '', '/secciones/conoce-la-botella');
        altoDinamico(2);
        TweenMax.to(contenedor,1,{left:0,ease:Power4.easeIn});
    });
    $(window).resize();

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

    $("#lugares").on('change',function(){
        let lugar = $(this).val();

        let tienda="";
        fetch('/address.json')
        .then(res =>res.json())
        .catch(error => console.error('error: ', error))
        .then(data =>{
            //this.setState({tiendas:data});

        for(let i=0; i<data.length; i++){
            if(data[i].tienda===lugar){

                $.each(data[i].distrito,function(i,e){

                    tienda += `<address>
                    <strong> ${e.dist}</strong>:<span>${ e.address }</span>

                </address>`;
                if(e.address2!=""){
                    tienda += `<address>
                    <strong> ${e.dist}</strong>:<span>${ e.address2 }</span>
                 </address>`;
                }
                });
            }

        }

        $("#resultado").html(tienda);

        })

    });



    $(".close").on('click',function(e){
        e.preventDefault();

        $(".boxmodal").removeClass('active');
            stopVideo();

    });
});

$(window).on("load", function () {
    $(".loading").stop().delay(1200).fadeOut(350,'swing');
    var state=false;
    if(localStorage.getItem('session')){
        if(window.location.pathname==='/'){
        window.location.href='/secciones';
        }

    }

    const contenedor = document.getElementById("marco");
    if(contenedor){
    const padre = document.getElementById("contenedor");
    let ancho = window.innerWidth;
    let alto = window.innerHeight;

    const lienzo = ancho*3;
    const ccright = ancho*2;
    const altoh = alto*2;
    contenedor.style.width = `${lienzo}px`;
    padre.style.height = `${altoh}px`;
    contenedor.style.left=`-${ancho}px`;

        if(window.location.pathname==='/secciones'){
            altoDinamico(2);
            TweenMax.to(contenedor,1,{left:`-${ancho}px`,ease:Power4.easeIn});
        }
        if(window.location.pathname==='/secciones/conoce-la-botella'){
            altoDinamico(2);
            TweenMax.to(contenedor,1,{left:0,ease:Power4.easeIn});
        }
        if(window.location.pathname==='/secciones/Mira-lo-que-hicimos-con-todo-el-odio'){
            altoDinamico(1);
            TweenMax.to(contenedor,1,{left:`-${ccright}px`,ease:Power4.easeIn});
        }
    }
});

$(window).resize(function(){

    const contenedor = document.getElementById("marco");
    if(contenedor){
    let ancho = window.innerWidth;
    const lienzo = ancho*3;
    const ccright = ancho*2;
    contenedor.style.width = `${lienzo}px`;

    contenedor.style.left=`-${ancho}px`;

    if(window.location.pathname==='/secciones'){
        altoDinamico(2);
        TweenMax.to(contenedor,1,{left:`-${ancho}px`,ease:Power4.easeIn});
    }
    if(window.location.pathname==='/secciones/conoce-la-botella'){
        altoDinamico(2);
        TweenMax.to(contenedor,1,{left:0,ease:Power4.easeIn});
    }
    if(window.location.pathname==='/secciones/Mira-lo-que-hicimos-con-todo-el-odio'){
        altoDinamico(1);
        TweenMax.to(contenedor,1,{left:`-${ccright}px`,ease:Power4.easeIn});
    }
    }
});

function altoDinamico(secciones){

    const padre = document.getElementById("contenedor");
    let alto = window.innerHeight;
    const altoh = alto*secciones;
    padre.style.height = `${altoh}px`;

}
//wheel page

if (window.addEventListener) {
    window.addEventListener('DOMMouseScroll', wheel, false);
}
window.onmousewheel = document.onmousewheel = wheel;

function wheel(event) {
    var delta = 0;
    if (event.wheelDelta) delta = event.wheelDelta / 120;
    else if (event.detail) delta = -event.detail / 3;

    handle(delta);
    if (event.preventDefault) event.preventDefault();
    event.returnValue = false;
}

var goUp = true;
var end = null;
var interval = null;

function handle(delta) {
	var animationInterval = 20;
  var scrollSpeed =5;

	if (end == null) {
  	end = $(window).scrollTop();
  }
  end -= 20 * delta;
  goUp = delta > 0;
  $window =  $(window);
  if (interval == null) {
    interval = setInterval(function () {
      var scrollTop = $(window).scrollTop();
      var step = Math.round((end - scrollTop) / scrollSpeed);
      if (scrollTop <= 0 ||
          scrollTop >= $(window).prop("scrollHeight") - $(window).height() ||
          goUp && step > -1 ||
          !goUp && step < 1 ) {
        clearInterval(interval);
        interval = null;
        end = null;
      }

      TweenMax.to($window, 0.5, {
        scrollTo : { y: scrollTop + step, autoKill:true },
        ease: Power4.easeOut,
        autoKill: true,
        overwrite: 5,

 });

    }, animationInterval);
  }
}

//api youtube
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    height: '360',
    width: '640',
    videoId: 'sZSXVanDd_k',
    playerVars: {'showinfo':0, 'controls': 0,'modestbranding':0,'playsinline':0,'rel':0,'iv_load_policy': 3 },
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
 let mod = document.querySelector(".modal-trigger");
 if(mod){
 mod.addEventListener('click',function(e){
     e.preventDefault();
     onPlayerReady();
 });
}
  var _createClass = function () {function defineProperties(target, props) {for (var i = 0; i < props.length; i++) {var descriptor = props[i];descriptor.enumerable = descriptor.enumerable || false;descriptor.configurable = true;if ("value" in descriptor) descriptor.writable = true;Object.defineProperty(target, descriptor.key, descriptor);}}return function (Constructor, protoProps, staticProps) {if (protoProps) defineProperties(Constructor.prototype, protoProps);if (staticProps) defineProperties(Constructor, staticProps);return Constructor;};}();function _classCallCheck(instance, Constructor) {if (!(instance instanceof Constructor)) {throw new TypeError("Cannot call a class as a function");}}var RippleModal = function () {
    function RippleModal() {var _this = this;var triggerClass = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'modal-trigger';var modalClass = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'modal';_classCallCheck(this, RippleModal);
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
        close.innerHTML = 'close';
        close.classList.add('close');
        modal.appendChild(close);
        close.addEventListener('click', function (evt) {return _this._closeModal(evt, modal);}, false);
      });

      this._setRippleSize();
      this._initEvents();
    }_createClass(RippleModal, [{ key: '_setRippleSize', value: function _setRippleSize()

      {
        var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
        var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
        var s = w > h ? w * 2 : h * 2;

        this.ripple.style.width = s + 'px';
        this.ripple.style.height = s + 'px';
      } }, { key: '_initEvents', value: function _initEvents()

      {var _this2 = this;
        window.addEventListener('resize', function () {return _this2._setRippleSize();}, false);
        document.body.addEventListener('click', function (evt) {return _this2._handleClicks(evt);}, false);
      } }, { key: '_handleClicks', value: function _handleClicks(

      evt) {
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
      } }]);return RippleModal;}();


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

  /**360**/


$(document).ready(function () {

	var ready = false,

			dragging = false,

			pointerStartPosX = 0,

			pointerEndPosX = 0,

			pointerDistance = 0,


			monitorStartTime = 0,

			monitorInt = 10,

			ticker = 0,

			speedMultiplier = 10,

			spinner,


			totalFrames = 50,

			currentFrame = 0,

			frames = [],

			endFrame = 0,

			loadedImages = 0,


			$document = $(document),
			$container = $('#threesixty'),
			$images = $('#threesixty_images'),


			demoMode = false,
			fakePointer = {
				x: 0,
				speed: 4
			},
			fakePointerTimer = 0;


	function addSpinner () {
		spinner = new CanvasLoader("spinner");
		spinner.setShape("spiral");
		spinner.setDiameter(90);
		spinner.setDensity(90);
		spinner.setRange(1);
		spinner.setSpeed(4);
		spinner.setColor("#333333");

		spinner.show();

		$("#spinner").fadeIn("slow");
	};


	function loadImage() {

		var li = document.createElement("li");

		var imageName = "/images/src/gem" + (loadedImages) + ".png";

		var image = $('<img>').attr('src', imageName).addClass("previous-image").appendTo(li);

		frames.push(image);

		$images.append(li);

		$(image).load(function() {
			imageLoaded();
		});
	};


	function imageLoaded() {

		loadedImages++;

		$("#spinner span").text(Math.floor(loadedImages / totalFrames * 100) + "%");

		if (loadedImages == totalFrames) {

			frames[0].removeClass("previous-image").addClass("current-image");

			$("#spinner").fadeOut("slow", function(){
				spinner.hide();
				showThreesixty();
			});
		} else {

			loadImage();
		}
	};

	function showThreesixty () {

		$images.fadeIn("slow");

		ready = true;

		endFrame = -720;

		if(!demoMode) {
			refresh();
		} else {
			fakePointerTimer = window.setInterval(moveFakePointer, 100);
		}
	};


	function moveFakePointer () {
		fakePointer.x += fakePointer.speed;
		trackPointer();
	};

	function quitDemoMode() {
		window.clearInterval(fakePointerTimer);
		demoMode = false;
	};


	addSpinner();

	loadImage();

	function render () {

		if(currentFrame !== endFrame)
		{

			var frameEasing = endFrame < currentFrame ? Math.floor((endFrame - currentFrame) * 0.1) : Math.ceil((endFrame - currentFrame) * 0.1);

			hidePreviousFrame();

			currentFrame += frameEasing;

			showCurrentFrame();
		} else {

			window.clearInterval(ticker);
			ticker = 0;
		}
	};


	function refresh () {

		if (ticker === 0) {

			ticker = self.setInterval(render, Math.round(1000 / 60));
		}
	};


	function hidePreviousFrame() {

		frames[getNormalizedCurrentFrame()].removeClass("current-image").addClass("previous-image");
	};

	function showCurrentFrame() {

		frames[getNormalizedCurrentFrame()].removeClass("previous-image").addClass("current-image");
	};

	function getNormalizedCurrentFrame() {
		var c = -Math.ceil(currentFrame % totalFrames);
		if (c < 0) c += (totalFrames - 1);
		return c;
	};

	function getPointerEvent(event) {
		return event.originalEvent.targetTouches ? event.originalEvent.targetTouches[0] : event;
	};

	$container.on("mousedown", function (event) {
		quitDemoMode();


		event.preventDefault();

		pointerStartPosX = getPointerEvent(event).pageX;

		dragging = true;
	});


	$document.on("mouseup", function (event){

		event.preventDefault();

		dragging = false;
	});


	$document.on("mousemove", function (event){
		if(demoMode) {
			return;
		}


		event.preventDefault();

		trackPointer(event);
	});


	$container.on("touchstart", function (event) {
		quitDemoMode();


		event.preventDefault();

		pointerStartPosX = getPointerEvent(event).pageX;

		dragging = true;
	});


	$container.on("touchmove", function (event) {

		event.preventDefault();

		trackPointer(event);
	});


	$container.on("touchend", function (event) {

		event.preventDefault();

		dragging = false;
	});

	function trackPointer(event) {
		var userDragging = ready && dragging ? true : false;
		var demoDragging = demoMode;

		if(userDragging || demoDragging) {


			pointerEndPosX = userDragging ? getPointerEvent(event).pageX : fakePointer.x;


			if(monitorStartTime < new Date().getTime() - monitorInt) {

				pointerDistance = pointerEndPosX - pointerStartPosX;

				endFrame = currentFrame + Math.ceil((totalFrames - 1) * speedMultiplier * (pointerDistance / $container.width()));

				refresh();

				monitorStartTime = new Date().getTime();


				pointerStartPosX = userDragging ? getPointerEvent(event).pageX : fakePointer.x;
			}
		} else {
			return;
		}
	};
});


/*PRELOADER*/

var $circles = $('.circle'),
    tl = new TimelineMax();;


TweenMax.set($circles, {scale: 0});

tl.insert(
  TweenMax.staggerTo($circles.toArray(), 1, {
    opacity: 1,
    scale: 1,
    ease: Power1.easeIn
  }, 0.2)
);

tl.insert(
  TweenMax.staggerTo($circles.toArray(), 0.5, {
    scale: 1.2,
    boxShadow: '0 25px 25px rgba(0, 0, 0, 0.4)',
    repeat: -1,
    yoyo: true,
    ease: Power1.easeOut
  }, 0.2), '-=0.4'
);

