<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title') | Nombre Empresa</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Diseño y adecuación de espacios comerciales y mobiliario personalizado.">
        <meta keywords="Mobiliario Comercial, Interiorismo comercial, Diseño Comercial, Adecuación de Locales, Fabricar e Instalación de mobiliario comercial ">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/normalize.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/fonts/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/chosen.css')}}">
        

        <link rel="apple-touch-icon" sizes="57x57" href="{{URL::asset('images/favicon/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{URL::asset('images/favicon/apple-icon-60x60.')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{URL::asset('images/favicon/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('images/favicon/apple-icon-76x76.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{URL::asset('images/favicon/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{URL::asset('images/favicon/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{URL::asset('images/favicon/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('images/favicon/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('images/favicon/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{URL::asset('images/favicon/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('images/favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{URL::asset('images/favicon/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('images/favicon/favicon-16x16.png')}}">
        <link rel="icon" href="{{URL::asset('images/favicon/favicon.ico')}}">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'/>
        <link rel="manifest" href="{{URL::asset('favicon/manifest.json')}}" />
        <script src="{{URL::asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
        @yield('content')

        <script src="{{URL::asset('js/vendor/jquery-1.11.2.min.js')}}"></script>
        <script type="text/javascript" src="{{URL::asset('js/charts/loader.js')}}"></script>
        <script src="{{URL::asset('js/vendor/jquery.validate.min.js')}}"></script>
        <script src="{{URL::asset('js/plugins.js')}}"></script>
        <script src="{{URL::asset('js/main.js')}}"></script>
        <script src="{{URL::asset('js/vendor/chosen.jquery.min.js')}}"></script>
        @yield('scripts')
    </body>
</html>

