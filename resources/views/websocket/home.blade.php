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
            <h1 class="text-center">Broadcast with Laravel Websockets</h1>
            
            <div class="col-12 border-top border-info my-4 py-2" id="kitchen">
                <h2 class="bg-gradient-dark text-light">Kitchen</h2>
            </div>
            
            <div class="col-12 border-top border-info my-4 py-2" id="kitchen2">
                <h2 class="bg-dark text-light">Kitchen 2</h2>
            </div>
            
            <div class="col-12 border-top border-info my-4 py-2" id="bar">
                <h2 class="bg-dark text-light">Bar</h2>
            </div>
            <div class="border border-secondary my-4 px-2 py-2">
                <a class="btn btn-secondary" href="/">Homepage</a>
                <a class="btn btn-secondary" href="/websocket/trigger" target="_blank" rel="noopener noreferrer">Trigger Page</a>
                <a class="btn btn-secondary" href="/laravel-websockets" target="_blank" rel="noopener noreferrer">Websocket Dashboard</a>
            </div>
        </div>
    </body>

    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script type="text/javascript">
        var i = 0;
        window.Echo.channel('kitchen-01')
         .listen('.item-created', (data) => {
            console.log(`laravel_broadcast-kitchen_01: ${JSON.stringify(data)}`);
            i++;
            $("#kitchen").append(`<div class="alert alert-success">${i}. ${data.item.name} x${data.item.quantity}</div>`);
        });
        var j = 0;
        window.Echo.channel('kitchen-02')
         .listen('.item-created', (data) => {
            console.log(`laravel_broadcast-kitchen_02: ${JSON.stringify(data)}`);
            j++;
            $("#kitchen2").append(`<div class="alert alert-success">${j}. ${data.item.name} x${data.item.quantity}</div>`);
        });
        var k = 0;
        window.Echo.channel('bar')
         .listen('.item-created', (data) => {
            console.log(`laravel_broadcast-bar: ${JSON.stringify(data)}`);
            k++;
            $("#bar").append(`<div class="alert alert-success">${k}. ${data.item.name} x${data.item.quantity}</div>`);
        });
    </script>
</html>