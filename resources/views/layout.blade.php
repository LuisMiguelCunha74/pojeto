<html>
    <head>
        <meta charset="utf-8"/>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    </head>
    <body>
        <i class="fas fa-ban"></i>
        <h1 style="color:blue">@yield('header')</h1>
        @yield('conteudo')
        <div>
            <h2>opçoes de navegaçao</h2>
            
            
        </div>
        
        <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/all.min.js')}}"></script>
        <script src="{{asset('js/all.min.js')}}"></script>
    </body>
</html>