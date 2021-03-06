<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ABSOLUT A DROP OF LOVE</title>
        <meta name="description" content="ABSOLUT A DROP OF LOVE te invita a crear un mundo con #MásAmorMenosOdio."/>

        <meta property="og:url" content="{{env('APP_URL')}}" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="ABSOLUT A DROP OF LOVE" />
        <meta property="og:description" content="ABSOLUT A DROP OF LOVE te invita a crear un mundo con #MásAmorMenosOdio." />

        <meta property="fb:app_id" content="1019609948211695"/>
        <meta property="og:image" content="{{env('APP_URL')}}/compartir.png" />
        <meta property="og:image:secure_url" content="{{env('APP_URL')}}/compartir.png" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="300" />
        <meta property="og:image:alt" content="ABSOLUT A DROP OF LOVE" />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@AbsolutPe" />
        <meta name="twitter:creator" content="@AbsolutPe" />
        <meta name="twitter:domain" content="{{env('APP_URL')}}" />
        <meta name="twitter:title" content="ABSOLUT A DROP OF LOVE" />
        <meta name="twitter:description" content="Hackea el odio y haz del mundo un lugar con #MásAmorMenosOdio." />
        <meta name="twitter:image" content="{{env('APP_URL')}}/compartir.png" />
        <meta property="twitter:account_id" content="1047879628038311936" />

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/vendor/bootstrap.min.css" >
        <link rel="stylesheet" href="/css/vendor/jquery.mCustomScrollbar.css">
        @desktop
        <link rel="stylesheet" href="/css/main.css?v={{ uniqid() }}">
        @enddesktop
        @mobile
        <link rel="stylesheet" href="/css/main.css?v={{ uniqid() }}">
        <meta name="apple-mobile-web-app-capable" content="yes">
        @endmobile
        @tablet
        <link rel="stylesheet" href="/css/maintable.css?v={{ uniqid() }}">
        @endtablet



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
        <div id="app" style="display: none;">
         @yield('content')
        </div>
        <div class="loading">
            <div class="container">
                <div class="row h-100 justify-content-align align-items-center">
                    <div class="botellas">

                    </div>
                </div>
            </div>
        </div>


        <script>
            const pages = '{{$paginas}}';
            const pageurl = "{{env('APP_URL')}}";
        </script>
        @desktop
        <script src="/js/main.js?v={{ uniqid() }}"></script>
        @enddesktop
        @mobile
        <script src="/js/mainmobile.js?v={{ uniqid() }}"></script>
        @endmobile
        @tablet
        <script src="/js/maintablet.js?v={{ uniqid() }}"></script>
        @endtablet

    </body>
</html>
