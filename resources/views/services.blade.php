@extends('layouts.master')

@section('content')
    <h1>Pagina de servicios</h1>
    @if($valido)
         <p>La letra o palabra ingresado fue: {{$valido}} </p>
    @else
        <p>Sin letra o palabra</p>
    @endif
@stop
