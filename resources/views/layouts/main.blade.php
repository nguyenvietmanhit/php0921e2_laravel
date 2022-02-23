{{--resources/views/layouts/main.blade.php--}}
<!DOCTYPE html>
<html>
    <head>
        <title>@yield('page_title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <script src="{{ asset('js/app.js') }}"></script>
    </head>

    <body>
        <div id="header" style="background: red">
            <h1>Header</h1>
        </div>
        <div id="main" style="border: 1px solid blue">
            @foreach($errors->all() AS $error)
                <h4 style="color: red">{{ $error }}</h4>
            @endforeach

            @yield('content')
        </div>
        <div id="footer" style="background: yellow">
            <h1>Footer</h1>
        </div>

    </body>
</html>
