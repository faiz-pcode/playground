<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel Playground - Broadcast with Laravel Websockets</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Broadcast with Laravel Websockets</h1>
            
            <div id="kitchen">
                <h2 class="bg-gradient-dark text-light">Kitchen</h2>
            </div>
            
            <div id="kitchen2">
                <h2 class="bg-dark text-light">Kitchen 2</h2>
            </div>
            
            <div id="bar">
                <h2 class="bg-dark text-light">Bar</h2>
            </div>
        </div>
    </body>
  
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
        var i = 0;
        window.Echo.channel('user-channel')
         .listen('.UserEvent', (data) => {
            i++;
            $("#notification").append('<div class="alert alert-success">'+i+'.'+data.title+'</div>');
        });
    </script>
</html>