@extends('layout')

@section('content')

<div class="app-title">
  <div>
    <h1><i class="fa fa-th-list"></i> Data Table</h1>
    <p>Consulta Usuarios</p>
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
                    <th scope="col">T.D</th>
                    <th scope="col">Numero Documento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuario as $usuario)
                <tr>
                        <td>{{$usuario->tipo_Documento}}</td>
                        <td>{{$usuario->numero_Documento}}</td>
                        <td>{{$usuario->name}}</td>
                        <td>{{$usuario->cargo}}</td>
                        <td>{{$usuario->email}}</td>
                        <td>

                           <button type="button" class="btn-edit" data-toggle="modal" data-target="#ventanaModal{{$usuario->id}}">EDIT</button>


                             <div class="modal" id="ventanaModal{{$usuario->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">

                                    <form  method="POST" action="{{route('vusuario.update', $usuario)}}">
                                        @csrf @method('PUT')
                                        <div class="form-group row">
                                            <label for="TD" class="col-md-4 col-form-label text-md-right">{{ __('TD') }}</label>
                                            <input id="TD" type="text" class="form-control" name="TD" value="{{$usuario->tipo_Documento}}" required autocomplete="TD" autofocus>
                                        </div>

                                         <div class="form-group row">
                                            <label for="ND" class="col-md-4 col-form-label text-md-right">{{ __('ND') }}</label>
                                            <input id="ND" type="text" class="form-control" name="ND" value="{{$usuario->numero_Documento}}" required autocomplete="ND" autofocus>
                                        </div>


                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$usuario->name}}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                                        <div class="form-group row">
                                            <label for="cargo" class="col-md-4 col-form-label text-md-right">{{ __('cargo') }}</label>
                                            <input id="cargo" type="text" class="form-control" name="cargo" value="{{$usuario->cargo}}" required autocomplete="cargo" autofocus>
                                        </div>


                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$usuario->email}}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Guardar Cambios') }}
                                                </button>
                                            </div>
                                        </div>

                                    </form>

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
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
