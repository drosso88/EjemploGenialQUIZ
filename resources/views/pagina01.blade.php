@extends('layouts.ejemplolayout')

@section('titulo', 'Página 01 del proyecto')

@section ('barralateral')
<p> Esta parte esta en la barra lateral </p>
@endsection

@section('contenido')

<p>Estoy en to el body</p>

<a href="{{url('pagina02') }}" class ="btn btn-xd btn-info pull-right">página 02 </a>
@endsection