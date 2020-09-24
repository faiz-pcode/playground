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
            <h1>Laravel Broadcast Trigger to Websocket</h1>
            
            <div class="col-12 border-top border-info my-4">
                <form action="/websocket/trigger" method="post">
                    @csrf
                    <div class="form-group px-3 py-3">
                        <h3>Kitchen 1</h3>
                        <label for="i1">Food:</label>
                        <input type="text" name="name" id="i1" value="a">
                        <label for="q1">Quantity:</label>
                        <input type="number" name="quantity" id="q1" value="1"><br>
                        <input type="hidden" name="where_to" value="kitchen-01">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            
            <div class="col-12 border-top border-info my-4">
                <form action="/websocket/trigger" method="post">
                    @csrf
                    <div class="form-group px-3 py-3">
                        <h3>Kitchen 2</h3>
                        <label for="i2">Food:</label>
                        <input type="text" name="name" id="i2" value="b">
                        <label for="q2">Quantity:</label>
                        <input type="number" name="quantity" id="q2" value="1"><br>
                        <input type="hidden" name="where_to" value="kitchen-02">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            
            <div class="col-12 border-top border-info my-4">
                <form action="/websocket/trigger" method="post">
                    @csrf
                    <div class="form-group px-3 py-3">
                        <h3>Bar</h3>
                        <label for="i3">Beverage:</label>
                        <input type="text" name="name" id="i3" value="c">
                        <label for="q3">Quantity:</label>
                        <input type="number" name="quantity" id="q3" value="1"><br>
                        <input type="hidden" name="where_to" value="bar">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

            <div class="border border-secondary my-4 px-2 py-2">
                <a class="btn btn-secondary" href="/">Homepage</a>
            </div>
        </div>
    </body>

    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <script type="text/javascript">
    </script>
</html>