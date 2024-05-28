@extends('layouts.master')

@section('content')
<h1>Blog</h1>

    @if($valido)
    <p>El numero ingresado fue: {{$valido}} </p>
    @else
    <p>Sin Numero</p>
    @endif

@stop
