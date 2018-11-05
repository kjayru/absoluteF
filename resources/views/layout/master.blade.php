<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Absolut A drop of Love</title>
        <meta name="description" content="tinta extraída de mensajes de odio de todo el mundo y transformada en amor."/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/vendor/bootstrap.min.css" >
        <link href="/css/vendor/perfect-scrollbar.css" rel="stylesheet">

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
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/plugins/ScrollToPlugin.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
        <script src="/js/vendor/jquery.validate.min.js"></script>
        <script src="/js/vendor/perfect-scrollbar.js"></script>
        <script src="/js/vendor/jquery.threesixty.min.js"></script>
        <script src="/js/vendor/heartcode-canvasloader-min.js"></script>
        <script src="/js/vendor/jquery.parallax.js"></script>

        @desktop
        <script src="/js/main.js?v={{ uniqid() }}"></script>
        @enddesktop
        @handheld
        <script src="/js/mainmobile.js?v={{ uniqid() }}"></script>
        @endhandheld

    </body>
</html>
