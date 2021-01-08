@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
{{ Session::get('Mensaje') }}
</div>

@endif




<a href="{{ url ('ligas/create') }}" class="btn btn-primary" >Agregar Equipo</a>
<br/>
<br/>

<table class="table table-responsive table-light table-dark table-hover table-bordered">

    <thead class="thead-light">
        <tr>
            <th>Nombre Del Equipo</th>
            <th>Liga Origen</th>
            <th>Partidos Jugados</th>
            <th>Victorias</th>
            <th>Empates</th>
            <th>Derrotas</th>
            <th>Puntaje</th>
            <th>Jugadores Amonestados</th>
            <th>Jugadores Expulsados</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($ligas as $liga)
        <tr>
            <td>{{$liga->Nombre_del_Equipo}}</td>
            <td>{{$liga->Liga_Origen}}</td>
            <td>{{$liga->Partidos_Jugados}}</td>
            <td>{{$liga->Victorias}}</td>
            <td>{{$liga->Empates}}</td>
            <td>{{$liga->Derrotas}}</td>
            <td>{{$liga->Puntaje}}</td>
            <td>{{$liga->Jugadores_Amonestados}}</td>
            <td>{{$liga->Jugadores_Expulsados}}</td>
            <td>

            <a class="btn btn-warning" href="{{ url('/ligas/' .$liga->id.'/edit') }}" >
            Modificar
            </a>
            <form method="post" action="{{ url('/ligas', ['liga' => $liga->id]) }}"  style="display:inline">
            {{csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Eliminar?')";>Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection