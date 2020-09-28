@extends('layouts.app')

@section('content')

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
        <a class="btn btn-secondary" href="/home">Homepage</a>
        <a class="btn btn-secondary" href="/websocket/trigger" target="_blank" rel="noopener noreferrer">Trigger Page</a>
        <a class="btn btn-secondary" href="/laravel-websockets" target="_blank" rel="noopener noreferrer">Websocket Dashboard</a>
    </div>
</div>

@endsection

@section('scripting')

<script type="text/javascript">
    var i = 0;
    window.Echo.private('kitchen-01')
     .listen('.item-created', (data) => {
        console.log(`laravel_broadcast-kitchen_01: ${JSON.stringify(data)}`);
        i++;
        $("#kitchen").append(`<div class="alert alert-success">${i}. ${data.item.name} x${data.item.quantity}</div>`);
    });
    var j = 0;
    window.Echo.private('kitchen-02')
     .listen('.item-created', (data) => {
        console.log(`laravel_broadcast-kitchen_02: ${JSON.stringify(data)}`);
        j++;
        $("#kitchen2").append(`<div class="alert alert-success">${j}. ${data.item.name} x${data.item.quantity}</div>`);
    });
    var k = 0;
    window.Echo.private('bar')
     .listen('.item-created', (data) => {
        console.log(`laravel_broadcast-bar: ${JSON.stringify(data)}`);
        k++;
        $("#bar").append(`<div class="alert alert-success">${k}. ${data.item.name} x${data.item.quantity}</div>`);
    });
</script>

@endsection