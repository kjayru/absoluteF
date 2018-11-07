<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ABSOLUT A DROP OF LOVE</title>
        <meta name="description" content="tinta extraída de mensajes de odio de todo el mundo y transformada en amor."/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/vendor/bootstrap.min.css" >

        <link rel="stylesheet" href="/css/main.css?v={{ uniqid() }}">
        <link rel="mask-icon" href="/Assets/images/favicon/safari-pinned-tab.svg" color="black" />
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128589220-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-128589220-1');
    </script>
    </head>
    <body>
         @yield('content')
        <div class="loading">
            <div class="container">
                <div class="row justify-content-align align-items-center">
                    <div class="preloader">
                        <div class="circle circle1"></div>
                             <div class="circle circle2"></div>
                        <div class="circle circle3"></div>
                    </div>
                </div>
            </div>
        </div>



        <script src="/js/mainhome.js?v={{ uniqid() }}"></script>


    </body>
</html>