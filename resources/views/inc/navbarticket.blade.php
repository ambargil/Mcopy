<nav class="nav_difuminado_ticket navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/crearcotizacion') }}">
        <img src="/images/mlogo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <b>   Magic Copy </b>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>
            @auth
              <ul class="navbar-nav mr-auto">
                

                <li class="nav-item">
                  <a class="nav-link" href="{{route('tickets.index')}}"> <span style="color:White"><b> Ticket </b></span> </a>
                </li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  <span style="color:White"> <b> Contacto </b> <span class="sr-only">(current)</span> </span>  
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('contacto.index')}}">Contactos</a>
                    <a class="dropdown-item" href="/empresa">Empresa</a>                   
                  </div>
                </li>
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  <span style="color:White"> <b> Maquina </b> <span class="sr-only">(current)</span> </span>  
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('maquina.index')}}">Maquinas</a>
                    <a class="dropdown-item" href="/categoria">Categoria</a>                   
                  </div>
                </li>

                        
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  <span style="color:White"> <b> Reportes </b> <span class="sr-only">(current)</span> </span>  
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Usuarios</a>
                    <a class="dropdown-item" href="#">Roles</a>  
                    <a class="dropdown-item" href="#">Salidas</a>                   
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/home"> <span style="color:Black"> <b> Inventario </b> </span> </a>
                </li>

              </ul>
            @endauth

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><b>{{ __('Iniciar Sesión') }}</b></a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span class="caret" style="color:white" ><b>{{ Auth::user()->username }}</b> </span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                               <b> {{ __('Cerrar Sesión') }}</b>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
