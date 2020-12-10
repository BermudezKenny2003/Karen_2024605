@extends('Plantillaweb')

@section('secciondinamica')
<h1>Estudiantes</h1>

@foreach($nombres as $i)
<h3 style="color: pink;">{{$i}}</h3>
<p>Nombre del estudiante</p>
@endforeach
@endsection