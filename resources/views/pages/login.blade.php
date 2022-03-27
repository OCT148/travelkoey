<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>
        body {
            background: white;
            color: black;
            text-align:center;
        }

        input {
            width: 100%;
            padding: 5px 20px;
            margin: 0px 10px;
            display:inline-block;
            border: 1px solid lightgray;
            }

        button {
            width: 20%;
            padding: 9px 5px;
            cursor:pointer;
            border:none;
            color:#ffffff;
            font-size: 12px;
            border-radius: 4px;
            margin: 10px 30px;
            }
    </style>

    </head>
    <body>
        <div class="container">
            <img src="{{asset('logo.png')}}" alt="image" width="360" height="60" style="margin-top:10%">
            <div class="row justify-content-center" style="margin-top:5%">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">LOGIN</div>
                        <div class="card-body">
                            <form style="margin:20px" action="login" method="POST" id="login">
                                @csrf

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">Username</label>
                                    <div class="col-md-6">
                                        <input type="name" name="usr" class="form-control"/> 
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-form-label text-md-end">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" name="usr" class="form-control"/> 
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Login</button>
                                <a href="/register">Register</a>

                            </form>
                    </div>
                </div>    
            </div>
        </div>
    </body>
</html>