@extends('layouts.master')

@section('content')
<h1>Pagina de Clientes</h1>

    @if($valido)
    <p>La letra o palabra ingresado fue: {{$valido}} </p>
    @else
    <p>Sin Letra o palabra</p>
@endif
@stop
