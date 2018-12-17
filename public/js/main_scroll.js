
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


$(window).on('load',function(){

    if(!localStorage.getItem('first')){
        $(window).reload();
    }else{
        localStorage.setItem('fisrt','primera-cargar');
    }
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

    console.log("grilla "+i);


}

