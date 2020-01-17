<nav class="nav_difuminado navbar navbar-expand-lg navbar-dark bg-dark">
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
              
                              
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  <span style="color:black"> <b> Producto </b> <span class="sr-only">(current)</span> </span>  
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('producto.index')}}">Productos</a>
                    <a class="dropdown-item" href="/marca">Marcas</a>  
                    <a class="dropdown-item" href="/proveedor">Proveedores</a>                   
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  <span style="color:black"> <b> Inventario </b> <span class="sr-only">(current)</span> </span>  
                  </a>
                  <div class="dropdown-menu">
                   <a class="dropdown-item" href="{{route('inventario')}}">Inventario</a> 
                    <a class="dropdown-item" href="/verpedidos">Pedidos</a> 
                    <a class="dropdown-item" href="/versalidas">Salidas</a> 
                    <a class="dropdown-item" href="/tipo">Tipos de Salida</a>
                    <a class="dropdown-item" href="/entidad">Entidad credito</a>  
                                                        
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/promocion"> <span style="color:black"><b> Promocion </b></span> </a>
                </li>

                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  <span style="color:black"> <b> Usuario </b> <span class="sr-only">(current)</span> </span>  
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('users.index')}}">Usuarios</a>
                    <a class="dropdown-item" href="/roles">Roles</a>                   
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/cotizaciones"> <span style="color:black"> <b> Cotizaciones </b> </span> </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/reservas"> <span style="color:black"> <b> Reservas </b> </span> </a>
                </li>
              
              
              
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  <span style="color:black"> <b> Reportes </b> <span class="sr-only">(current)</span> </span>  
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Inventario</a>
                    <a class="dropdown-item" href="#">Venta</a>  
                    <a class="dropdown-item" href="#">Saidas</a>                   
                  </div>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="/tickets"> <span style="color:White"> <b> Reparacion </b> </span> </a>
                </li>

              </ul>
            @endauth

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item" style="text-align:right">
                    <a class="nav-link" href="{{ route('login') }}"> <span style="color:white" > <b>{{ __('Iniciar Sesión') }}</b> </span> </a>
                    </li> 
                @else
                    <li class="nav-item dropdown" style="text-align:right">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <span style="color:Black">  <b>{{ Auth::user()->username }}</b> <span class="caret"></span> </span>
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
