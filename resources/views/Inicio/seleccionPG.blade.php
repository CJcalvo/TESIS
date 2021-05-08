@extends('layout')

@section('content')

<div class="app-title">
  <div>
    <h1><i class="fa fa-th-list"></i>Programas</h1>
    <p>Selecciona el programa en el cual deseas basarte para hacer la prueba</p>
  </div>
  <ul class="app-breadcrumb breadcrumb side">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Programas</li>
    <li class="breadcrumb-item active"><a href="#">Mys programas</a></li>
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
                    <th scope="col">Numero Documento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Select</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuarios)
                	<tr>
		                <td>{{$usuarios->nAutor}}</td>
		                <td>{{$usuarios->autor}}</td>
		                <td>
		                	<a class="btn btn-primary"  href="{{ route('ProgramaAsignatura.carga', $usuarios->id_U)}}"><i class="fa fa-fw fa-lg fa-check-circle"></i>SELECT</a>
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


<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{ asset('js/plugins/pace.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/plugins/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
@endsection