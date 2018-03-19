<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="/assets/css/app.css"> 
        <title>Sisdemocracia</title>
    </head>

    <body>
      <!-- Navbar -->
        <div class="">
          <div class="">
            <a class="" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            @if (Route::has('login'))
            @auth
            <a href="{{ url('/home') }}" class="">Logout</a>
            @else
            <a href="{{ route('login') }}" class="">Login</a>
            <a href="{{ route('register') }}" class="">Registre-se</a>
            @endauth
          </div>

            @endif
            <!-- Navbar on small screens -->
          <div id="navDemo" class="">
            @if (Route::has('login'))
            @auth
            <a href="{{  url('/home') }}" class=""> Logout</a>
            @else
            <a href="{{ route('login') }}" class="">Login</a>
            <a href="{{ route('register') }}" class="">Registre-se</a>
            @endauth
            </div>
            @endif
        </div>

        <!-- Header -->
        <div class="container-fluid">
        <header class="" style="padding:40px 20px">
          <h1 class="">Sisdemocracia</h1>
          <p class="">Um sistema para projetos de iniciativa popular de João Monlevade.</p>
          <p class="">Assine um projeto de lei</p>
          <!--Pensar sobre utilidade do button -->
          <a href="{{ route('login') }}" class="" role="button" aria-pressed="true">Assinar Projetos</a>
        </header>
        </div>
        <h2 >Conheça nossos projetos de Iniciativa popular</h2>
        <div class="container-fluid">
          <div class="row">
              <div class="col-sm-6 col-md-4 clearfix">
                <div class="thumbnail">
                  <img src="http://lorempixel.com/400/200/sports/1" class="img-responsive" alt="">
                  <div class="caption">
                    <h3>Projeto Estacionamento</h3>
                    <p>Este projeto tem por obejtivo regulamentar ... </p>
                    <p><a href="/projetos" class="btn btn-primary" role="button">Assinar</a> </p>

                  </div>
                </div>
              </div>

             
          <!-- Footer -->
            <footer class="">
              
             <p>Powered by <a href="https://www.a3ideiasweb.com" target="_blank">www.a3ideiasweb.com</a></p>
            </footer>

          <script>
          // Used to toggle the menu on small screens when clicking on the menu button
          function myFunction() {
              var x = document.getElementById("navDemo");
              if (x.className.indexOf("w3-show") == -1) {
                  x.className += " w3-show";
              } else {
                  x.className = x.className.replace(" w3-show", "");
              }
          }
          </script>
    </body>
</html>
