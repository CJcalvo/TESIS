<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Prueva ECAES Universidad Popular del Cesar">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#009688">
    <title>Vali Admin</title>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="#">ECAES</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Salir') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
          </ul>
        </li>
      </ul>
    </header>

    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="Imagenes/user.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-designation">{{ Auth::user()->cargo }}</p>
        </div>
      </div>
      <ul class="app-menu">
         <ul class="app-menu">
        <li><a class="app-menu__item" href="{{ route('home') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Usuarios</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('vusuario.create')}}"><i class="icon fa fa-circle-o"></i>Registros</a></li>
            <li><a class="treeview-item" href="{{route('vusuario.index')}}"><i class="icon fa fa-circle-o"></i>Consulta</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>#3</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>#4</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Programas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>Registro</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>Consulta</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>#3</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>#4</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Pruebas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>Consultas</a></li>
            <li><a class="treeview-item" href="{{ route('prueba') }}"><i class="icon fa fa-circle-o"></i>Asignar</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>#3</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Informes</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('vinforme.index') }}"><i class="icon fa fa-circle-o"></i>Generales</a></li>
            <li><a class="treeview-item" href="{{route('vevaluacion.index')}}"><i class="icon fa fa-circle-o"></i>espesificos</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>#3</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>#4</a></li>
          </ul>
        </li>
        <li><a class="app-menu__item" href="{{ route('preguntas') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Hacerca De</span></a></li>
      </ul>
    </aside>

    <main class="app-content">
      @yield('content')
    </main>

    @yield('scrip')
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
  </body>
</html>