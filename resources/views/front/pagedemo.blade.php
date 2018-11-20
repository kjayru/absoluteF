<!DOCTYPE html>
<html lang="es" >

<head>

  <meta charset="UTF-8">
  <meta name="robots" content="noindex">
  <title>demo</title>

<style>
.grid {
  max-width: 1200px;
}

/* reveal grid after images loaded */
.grid.are-images-unloaded {
  opacity: 0;
}

.grid__item,
.grid__col-sizer {
  width: 32%;
}

.grid__gutter-sizer { width: 2%; }

/* hide by default */
.grid.are-images-unloaded .image-grid__item {
  opacity: 0;
}

.grid__item {
  margin-bottom: 20px;
  float: left;
}

.grid__item--height1 { height: 140px; background: #EA0; }
.grid__item--height2 { height: 220px; background: #C25; }
.grid__item--height3 { height: 300px; background: #19F; }

.grid__item--width2 { width: 66%; }

.grid__item img {
  display: block;
  max-width: 100%;
}


.page-load-status {
  display: none; /* hidden by default */
  padding-top: 20px;
  border-top: 1px solid #DDD;
  text-align: center;
  color: #777;
}
</style>

</head>

<body translate="no" >



<!-- ramdon width 2 and height 1-->
<div class="grid are-images-unloaded">
  <div class="grid__col-sizer"></div>
  <div class="grid__gutter-sizer"></div>

  @foreach($twitts as $k => $tw )

 @php
 $op = rand(1, 3);

 $valor = $op%2;


   $st = 'height';

 @endphp
 @if(fmod($k, 3) == 0)

  <div class="grid__item grid__item--width2">
    <div class="box">

        <video  controls>
            <source src=" https://s3.amazonaws.com/arquea-absolute-dev/output/{{ $tw->id }}.mp4" type="video/mp4">

        </video>

    </div>
</div>
@else
<div class="grid__item grid__item--height2">
    <div class="box">

        <video  controls>
            <source src=" https://s3.amazonaws.com/arquea-absolute-dev/output/{{ $tw->id }}.mp4" type="video/mp4">

          </video>

    </div>
</div>
@endif
  @endforeach
</div>

<script src='https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js'></script>
<script src='https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js'></script>
<script>
var grid = document.querySelector('.grid');

var msnry = new Masonry( grid, {
  itemSelector: 'none', // select none at first
  columnWidth: '.grid__col-sizer',
  gutter: '.grid__gutter-sizer',
  percentPosition: true,
  stagger: 30,
  // nicer reveal transition
  visibleStyle: { transform: 'translateY(0)', opacity: 1 },
  hiddenStyle: { transform: 'translateY(100px)', opacity: 0 },
});

imagesLoaded( grid, function() {
  // reveal items
  grid.classList.remove('are-images-unloaded');
  msnry.options.itemSelector = '.grid__item';
  var items = grid.querySelectorAll('.grid__item');
  msnry.appended( items );
});

</script>
</body>

</html>

