<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mora Maternity</title>
    <!-- adding Bootstrap core CSS  -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic%7CMontserrat:400%7COswald:400&amp;subset=latin,latin,latin" media="all">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/custom.css">
    <!-- <link rel="stylesheet" href="/css/estilos.css"> -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>



<body>



    <body>
      <header>
        <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <div class="navbar-header">
      <!-- button se convierte en hamburguesa en menu mobile -->

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar">-</span>
        <span class="icon-bar">-</span>
        <span class="icon-bar">-</span>
      </button>
      <a class="navbar-brand" href="https://www.tiendamora.com.ar/" target="_blank">
      <img alt="Tienda Mora" src="/img/logochico.jpg">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">

        <li><a href="{{ route('index') }}">home</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" >linea maternity<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">embarazo</a></li>
            <li><a href="#">lactancia</a></li>
            <li><a href="#">post parto</a></li>
          </ul>
        </li>

        <!-- Authentication Links -->
          @guest
        <li><a href="{{ route('login') }}">login</a></li>
          @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li>
                <a href="/editarUsuario/{{Auth::user()->id}}">mi cuenta</a>
            </li>
            <li>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
          </ul>
        <li>
          @endguest
          <li><a href="{{ route('faq') }}">contacto</a></li>


        <!-- <li><a href="{{ route('login') }}">mi cuenta</a></li>
        <li><a href="{{ url('/logout') }}">logout</a></li>
        <li><a href="{{ route('index') }}">home</a></li>
        <li><a href="{{ route('faq') }}">FAQ</a></li> -->
          </ul>
        </div>
      </div>
    </nav>
      </header>
      @yield('content')
      <footer>
        <div class="info-bar">
              <h5>Envio gratis con tu compra de $1500 o Mas!</h5>
            </div>

    <!-- fin de banner promociones sobre el footer -->

    <footer>
      <div class="container">
        <div class="row">

          <div class="footer-menu col-md-3">
          </a><h4>Menu</h4>
            <hr class="hr--underline">
            <ul class="navigation">
              <li><a href="{{ route('index') }}">home</a></li>
              <li><a href="{{ route('login') }}">mi cuenta</a></li>
              <li><a href="{{ route('faq') }}">FAQ</a></li>
            </ul>
            <p></p>
          </div>

          <div class="footer-about col-md-6">
            <h4>Mora Maternity</h4>
            <hr class="hr--underline">
            <p>Un sitio pensado especialmente para esos momentos en que pareciera que para ser vos misma, tenés que ser otra.</p>
          </div>

          <div class="footersocial col-md-3">
            <h4>Seguinos</h4>
            <hr class="hr--underline">
            <ul class>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            </ul>
          </div>
          </div>

        </div>

      </div>
      </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- adds jQuery via Google CDN before the closing </body> tag… -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <!-- end of jQuery -->

</body>
</html>
