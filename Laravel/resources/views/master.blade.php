<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="viewport" content="width=device-width, initial-scale=1">
    @section('og:image')
        <meta property="og:image" content="{{ asset('images/logo.jpg') }}">
    @show
    @section('og:type')
        <meta property="og:type" content="article">
    @show
    @section('og:title')
        <meta property="og:title" content="Está preparado para ser um dev no mundo de amanhã?">
    @show
    @section('og:description')
        <meta property="og:description" content="Se inscreva para receber conteúdos exclusivos vindos direto do futuro!">
    @show
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>< Devs From The Future ></title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    
    @section('head')
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    @show

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '104962856859368', {
            em: 'insert_email_variable,'
        });
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=104962856859368&ev=PageView&noscript=1"
        /></noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="{{ asset('images/logo-04.png') }}" alt="Devs FTF" width="230" class="" style="margin-bottom: -30px;margin-top: -10px;">
            </div>
            <div class="navbar-collapse collapse pull-right">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li><a class="nav-link" href="{{ route('diversity.index', ['slug' => 'construindo-diversidade-como-empoderar-mulheres-para-programar']) }}">Diversidade</a></li>
                    <li><a class="nav-link" href="{{ route('tendencies.index', ['slug' => '5-fatos-do-futuro-que-todo-desenvolvedor-deve-saber']) }}">Tendências</a></li>
                    <li><a class="nav-link" href="{{ route('skills.index', ['slug' => '6-habilidades-que-as-startups-procuram-em-seus-desenvolvedores-fora-a-tecnica']) }}">Habilidades</a></li>
                </ul>
            </div>
        </div>
    </div>

<div class="blog-content m-b-15">
    @yield('content')
</div>

<div class="m-t-15 m-b-15 center">
    <div class="col-lg-12">
        &#9400; 2017 Devs From The Future, ALL RIGHTS RESERVED
    </div>
</div>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    
    ga('create', 'UA-103036352-1', 'auto');
    ga('send', 'pageview');

</script>
<script
        src="http://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script
        src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>