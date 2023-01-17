<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
        <title>Comics</title>
    </head>
    <body>
        <div id="app">
            <header class="row">
                @include('partials.header')
            </header>
            <div id="corpo" class="row">
                    @yield('content')
            </div>
            <footer class="row">
                @include('partials.footer')
            </footer>
        </div>
    </body>
</html>