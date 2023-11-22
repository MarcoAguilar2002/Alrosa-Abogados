<header>
    <nav class="navbar navbar-expand-lg dl-menu-style2">
      <div class="container">
        <div class="m-0 p-0">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset('assets/img/ALROSA-logo.png') }}" alt="" style="height: 70px; width: 280px;">
            </a>
        </div>
            <div>
                <ul class="navbar-nav et-menu">
                    <li class="nav-item ">
                        <a class="nav-link  " aria-current="page" href="{{route('index')}}">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle areas" href="{{ route('areas') }}"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Áreas
                        </a>
                        <ul class="dropdown-menu ">
                          <li><a class="dropdown-item letras2 " href="{{ route('laboral') }}">Derecho laboral privado</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item letras2 " href="{{ route('civil') }}">Derecho civil y comercial </a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item letras2 " href="{{ route('administrativo') }}">Derecho administrativo</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item letras2 " href="{{ route('ambiental') }}">Derecho ambiental </a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item letras2 " href="{{ route('constitucional') }}">Derecho constitucional</a></li>
                        </ul>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('especialistas')}}">Especialistas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('nosotros')}}">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contactanos')}}">Contáctenos</a>
                    </li>
                    
                </ul>
            </div>
         
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/profile.php?id=61553711065170"><i class="fab fa-facebook text-white border p-1"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-twitter text-white border p-1"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-instagram text-white border p-1"></i></a>
                    </li>
                </ul>
            </div>
          
      </div>
  </nav>
</header>
