<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="container antialiased" style="text-align: center">
        <img src="{{asset('logo.png')}}" alt="image" width="360" height="60" style="margin-top:10%;">
        <div class="row justify-content-center" style="margin-top:5%">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welcome</div>
    
                    <div class="card-body">
                        <a href="{{ route('login')}}" class="btn btn-primary">Login</a>
                        <a href="{{ route('register')}}" class="btn btn-default" style="border: 1px solid black">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
