<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<style>


body {
  font-family: sans-serif;
  line-height: 1.4;
  padding: 20px;
  max-width: 1200px;
  margin: 0 auto;
  background: transparent;
}
.contenido {
  padding: 10px;
  height: 800px;
  overflow-y: scroll;
}
.grid__col-sizer,
.grid__item {
  width: 100%;
}

.grid__gutter-sizer {
  width: 30px;
}

.grid__item {
  margin-bottom: 10px;
  float: left;
}

.page-load-status {
  display: none; /* hidden by default */
  padding-top: 20px;

  text-align: center;
  color: #777;
}
.grid video {
    width: 100%;
    display: block;
}
.grid2 video,.grid3 video,.grid4 video,.grid5 video,.grid6 video {
    width: 100%;
    height: 100%;
    display: block;
}
.grid {
    max-width: 100%;
  }
  .grid2,.grid3,.grid4,.grid5,.grid6 {
    width: 100%;

  }
  /* reveal grid after images loaded */
  .grid.are-images-unloaded {
    opacity: 1;
  }

  .grid__item,
  .grid__col-sizer {
    width: 100%;
  }


  .grid__gutter-sizer { width: 100%; }

  /* hide by default */
  .grid.are-images-unloaded .image-grid__item {
    opacity: 0;
  }

  .grid__item {
    margin-bottom: 20px;
    float: left;
    position: relative;
  }
  .grid__item  video {
    display: block;
    width: 100% !important ;
  }

  .grid__item--height2 {
    width: 100%;
    height: auto;
    }

  .grid__item--width2 {
    width: 100%;
    height: auto;
    }
</style>
<body>

            <div class="contenido">
                <div id="grid" class="grid" >
                    <div class="grid__col-sizer"></div>
                    <div class="grid__gutter-sizer "></div>
                </div>

                <div class="page-load-status">
                    <div class="loader-ellips infinite-scroll-request">
                        <span class="loader-ellips__dot"></span>
                        <span class="loader-ellips__dot"></span>
                        <span class="loader-ellips__dot"></span>
                        <span class="loader-ellips__dot"></span>
                    </div>
                    <p class="infinite-scroll-last">End of content</p>
                    <p class="infinite-scroll-error">No more pages to load</p>
                </div>
            </div>








<script type="text/html" id="photo-item-template">

  <div class="grid__item grid__item--height2 ">
        <div class="box">
            <video controls="" poster="/images/fondo1.png">
                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

            </video>
        </div>
    </div>
</script>
<script type="text/html" id="photo-item-template2">

  <div class="grid__item grid__item--width2  ">
        <div class="box">
            <video controls="" poster="/images/fondo2.png">
                <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

            </video>
        </div>
    </div>
</script>

<script type="text/html" id="photo-item-template3">

<div class="grid__item grid__item--height2  ">
      <div class="box">
          <video controls="" poster="/images/fondo4.png">
              <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

          </video>
      </div>
  </div>
</script>


<script type="text/html" id="photo-item-template4">

<div class="grid__item grid__item--width2  ">
      <div class="box">
          <video controls="" poster="/images/fondo2.png">
              <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

          </video>
      </div>
  </div>
</script>

<script type="text/html" id="photo-item-template5">

<div class="grid__item grid__item--height2  ">
      <div class="box">
          <video controls="" poster="/images/fondo3.png">
              <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

          </video>
      </div>
  </div>
</script>

<script type="text/html" id="photo-item-template6">

<div class="grid__item grid__item--width2  ">
      <div class="box">
          <video controls="" poster="/images/fondo1.png">
              <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

          </video>
      </div>
  </div>
</script>

<script type="text/html" id="photo-item-template7">

<div class="grid__item grid__item--height2  ">
      <div class="box">
          <video controls="" poster="/images/fondo2.png">
              <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

          </video>
      </div>
  </div>
</script>

<script type="text/html" id="photo-item-template8">

<div class="grid__item grid__item--width2  ">
      <div class="box">
          <video controls="" poster="/images/fondo4.png">
              <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

          </video>
      </div>
  </div>
</script>

<script type="text/html" id="photo-item-template9">

<div class="grid__item grid__item--height2  ">
      <div class="box">
          <video controls="" poster="/images/fondo3.png">
              <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

          </video>
      </div>
  </div>
</script>

<script type="text/html" id="photo-item-template10">

<div class="grid__item grid__item--width2  ">
      <div class="box">
          <video controls="" poster="/images/fondo1.png">
              <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/@{{valor.idStr}}.mp4" type="video/mp4">

          </video>
      </div>
  </div>
</script>


<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>

<script>


   var msnry = new Masonry( '.grid', {
        itemSelector: '.grid__item',
        columnWidth: '.grid__col-sizer',
        gutter: '.grid__gutter-sizer',
        percentPosition: true,
        stagger: 30,
        // nicer reveal transition
        visibleStyle: { transform: 'translateY(0)', opacity: 1 },
        hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
      });


      var infScroll = new InfiniteScroll( '.grid', {
        path: function() {
            console.log( this.pageIndex);
          return 'https://absolutef.test/getdata?page=' + this.pageIndex;
        },
        // load response as flat text
        responseType: 'text',
        outlayer: msnry,
        status: '.page-load-status',
        elementScroll: '.contenido',
        history: false,
      });

      // use element to turn HTML string into elements
var proxyElem = document.createElement('div');

infScroll.on( 'load', function( response ) {
  // parse response into JSON data
  var data = JSON.parse( response );
  // compile data into HTML
  var itemsHTML = data.map( getItemHTML ).join('');
  // convert HTML string into elements
  proxyElem.innerHTML = itemsHTML;
  // append item elements
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




</script>
</body>
</html>
