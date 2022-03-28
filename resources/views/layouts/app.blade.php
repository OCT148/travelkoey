<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>

      .card-container {
        display: flex;
        justify-content: center;
      }

      .cards {
        display: grid;
        width: 1200px;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        grid-gap: 15px;
      }

      .card {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: lightgray;
        height: 200px;
      }

      .card:hover{
        cursor: pointer;
        box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.420);
      }

      .category {
        display: grid;
        justify-content: center;
        align-items: center;
        background-color: orange;
        color: white;
        width : 80px;
        height: 30px;
      }

      img {
          object-fit: cover;
      }

      .card__title {
          align-self: flex-end; 
          padding: 0.5rem;
          color: rgba(255,255,255,.90); 
          font-size: 2rem;
          line-height: 1;
          font-weight: 600; 
        
      }

      .card__thumbnail {
        position: relative;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        
        width: 100%;
        height: 100%;
        
      }

      .card__thumbnail > img {
        height: 100%;
      }  

      .card__thumbnail > .card__title {
        position: absolute;
        left: 0;
        bottom: 0;
      }

    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  </head>
  <body>
      @include('inc.header')
      <div class="container">
        @yield('content')
      </div>

  </body>
</html>