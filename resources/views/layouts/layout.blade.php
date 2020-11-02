<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>@yield('title')</title>
            <script src="{{secure_asset('js/app.js') }}" defer></script>
            
             <!-- Fonts -->
             <link rel="dns-prefetch" href="https://fonts.gstatic.com">
             <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
             
             <!-- Styles -->
             <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
             <link href="{{ secure_asset('css/layout.css') }}" rel="stylesheet">
             
        </head>
        <body>
            <div id="app">
                  <nav class="navbar fixed-top navbar-dark bg-dark">
                    <div class="container-fluid">
                        <!-- 2.ヘッダ情報 -->
                        <div class="navbar-header">
                            <a class="navbar-brand">アプリ名</a>
                        </div>
                        <!--<form class="navbar-form">-->
                        <!--    <div class="form-group">-->
                        <!--        <input type="text" class="form-control" placeholder="キーワード">-->
                        <!--    </div>-->
                        <!--    <button type="submit" class="btn btn-info">検索</button>-->
                        <!--</form>-->
                    </div>
                  </nav>
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </body>
</html>