<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel Playground - Broadcast with Laravel Websockets</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Broadcast with Laravel Websockets</h1>
            
            <div id="notification"></div>
        </div>
    </body>
  
    <script type="text/javascript">
        var i = 0;
        window.Echo.channel('user-channel')
         .listen('.UserEvent', (data) => {
            i++;
            $("#notification").append('<div class="alert alert-success">'+i+'.'+data.title+'</div>');
        });
    </script>
</html>