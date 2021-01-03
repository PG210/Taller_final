<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   <link href="{{ url('/materialize/css/materialize.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ url('/materialize/js/materialize.min.js') }}"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<!--comienza la barra de navegacion-->
<nav>
    <div class="nav-wrapper green accent-2  z-depth-5">
      <a href="#" class="brand-logo black-text">Artesanias Don Pedro</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      @guest
                         @if (Route::has('login'))
                                <li>
                                    <a href="{{ route('login') }}" class="black-text">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}"  class="black-text">{{ __('Register') }}</a>
                                </li>
                         @endif
      
      </ul>
    </div>
  </nav>
<!--end --barra-->

    <div id="app">
                    <ul>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                                </a>

                                <div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
               
        <main class="py-4">
            @yield('content')
        </main>
    </div>
     <!--footer-->
     <footer class="page-footer green accent-2  z-depth-5">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="black-text">Ubicacion y Horario de Atencion</h5>
                <p class="black-text">Cra 3 No. 18ª – 58 <br>
                            Barrio Las Aguas, Sandona, Nariño-Colombia <br>
                            Lunes a viernes 8:00 Am - 11:00 Pm
                            </p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="black-text">Encuentranos en:</h5>
                <ul>
                  <li><a class="black-text" href="#!"><i class="material-icons">add</i>Facebook</a></li>
                  <li><a class="black-text" href="#!"><i class="material-icons">add</i>WhatsApp</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container black-text">
            © 2021 Copyright Derechos reservados
            <a class="black-text right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
                <!--end --footer-->
</body>
</html>
