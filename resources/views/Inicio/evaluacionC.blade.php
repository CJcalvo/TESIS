@extends('layout')

@section('content')

<div class="app-title">
  <div>
    <h1><i class="fa fa-th-list"></i> Data Table</h1>
    <p>Consulta Evaluaciones</p>
  </div>
  <ul class="app-breadcrumb breadcrumb side">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Tables</li>
    <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="table-responsive">
          <table class="table table-hover table-bordered" id="sampleTable">
            <thead>
                <tr>
                  <td>Nombre</td>
                  <td>Documento</td>
                  <td>Tdentificador</td>
                  <td>TE</td>
                  <td>TR</td>
                  <td>Detallar</td>
                </tr>
            </thead>
            <tbody>
              @foreach($evaluaciones as $evaluaciones)
                <tr>
                    <td>{{$evaluaciones->autor}}</td>
                    <td>{{$evaluaciones->nAutor}}</td>
                     <td>{{$evaluaciones->id}}</td>
                    <td>{{$evaluaciones->tiempoEstipulado}}</td>
                    <td>{{$evaluaciones->tiempoRealizado}}</td>
                    <td>
                        <a href="{{route('vinforme.show', $evaluaciones)}}">dtl</a>
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
 <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection