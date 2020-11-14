<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>@yield('title')</title>
            
            <script src="{{secure_asset('js/app.js') }}" defer></script>
            <link rel="stylesheet" type="text/css" href="../bootstrap-datepicker-1.6.4-dist/css/bootstrap-datepicker.min.css">
            <script src="@yield('js')"></script>
             <!-- Fonts -->
             <link rel="dns-prefetch" href="https://fonts.gstatic.com">
             <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
             
             <!-- Styles -->
             <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
             <link href="{{ secure_asset('css/layout.css') }}" rel="stylesheet">
             
        </head>
        <body>
            
            <div id="app">
                  <nav class="navbar fixed-top navbar-dark bg-dark navbar-laravel">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand">アプリ名</a>
                        </div>
                    </div>
                  </nav>
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </body>
</html>