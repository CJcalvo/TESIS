@extends('layout')

@section('content')
<div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
</div>
<div class="row">
    <div class="body-v1">
        <h3 class="title-V">Mi Aplicativo</h3>
        <div class="v-cuerpo">
            <video src="videos/pruebaV.mp4" loop autoplay  controls></video>
        </div>
    </div>
    <div class="body-v1">
        <h3 class="title-V">Que son las pruebas Saber Pro</h3>
        <div class="v-cuerpo">
            <video loop autoplay muted controls>
                <source src="videos/pruebaV.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>

@endsection
