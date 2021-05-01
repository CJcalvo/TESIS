@extends('layautA')

@section('content')

	<h2 class="titel-table">Consulta</h2>
    <table class="table table-hover table-bordered" id="sampleTable">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Identificador-E</th>
                <th>TE</th>
                <th>TR</th>
                <th>PERTENECIENTE</th>
                <th>Detallar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Meval as $Meval)
            <tr>
                <td>{{$Meval->autor}}</td>
                <td>{{$Meval->nAutor}}</td>
                <td>{{$Meval->id}}</td>
                <td>{{$Meval->tiempoEstipulado}}</td>
                <td>{{$Meval->tiempoRealizado}}</td>
                <td>{{$Meval->users_id}}</td>
                <td>
                    <a href="{{route('vinforme.showIndividual',$Meval->id)}}">dtl</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


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

