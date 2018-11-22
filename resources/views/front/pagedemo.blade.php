<!DOCTYPE html>
<html lang="es" >

<head>

  <meta charset="UTF-8">
  <meta name="robots" content="noindex">
  <title>demo</title>



</head>

<body translate="no" >

<div class="grid are-images-unloaded">
  <div class="grid__col-sizer"></div>
  <div class="grid__gutter-sizer"></div>

@foreach($twitts as $k => $tw )

 @php
    $op = rand(1, 12);
 @endphp
 @if(fmod($k, 4) == 0)

  <div class="grid__item grid__item--width2">
    <div class="box">
        <video  controls  preload="false" poster="/images/fondo{{$op}}.png">
            <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/{{ $tw->id }}.mp4" type="video/mp4">
        </video>
    </div>
</div>
@else
<div class="grid__item grid__item--height2">
    <div class="box" >
        <video  controls  preload="false" poster="/images/fondo{{$op}}.png">
            <source src="https://s3.amazonaws.com/arquea-absolute-dev/output/{{ $tw->id }}.mp4" type="video/mp4">
        </video>
    </div>
</div>
@endif
  @endforeach
</div>

</body>

</html>

