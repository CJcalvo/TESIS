<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
  <div class="container">
      <a class="navbar-brand" href="{{route('home')}}">
        {{config('app.name')}}
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav nav-pills">
            <li class = "nav-item">
              <a class="nav-link" href="{{route('home')}}">
                  Inicio
              </a>
            </li>

            <li class = "nav-item">
              <a class="nav-link" href="{{route('facultad.index')}}">
                  Facultad
              </a>
            </li>

            <li class = "nav-item">
              <a class="nav-link" href="{{route('programa.index')}}">
                  Programa
              </a>
            </li>

            <li class = "nav-item">
              <a class="nav-link" href="{{route('competencia.index')}}">
                  Competencia
              </a>
            </li>

            <li class = "nav-item">
              <a class="nav-link" href="{{route('asignatura.index')}}">
                  Asignaturas
              </a>
            </li>

            <li class = "nav-item">
              <a class="nav-link" href="{{route('pregunta.index')}}">
                  Preguntas
              </a>
            </li>

            @guest
                <li class="nav-item">
                  <a class="nav-link" href="{{route('login')}}">
                    Iniciar sesion
                  </a>
                </li>
              @else
                <li class="nav-item">
                  <a class="nav-link" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                      Cerrar sesion
                  </a>
                </li>
            @endguest
          </ul>
      </div>
  </div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
