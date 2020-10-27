@extends('layouts.ejemplolayout')

@section('titulo', 'Página 01 del proyecto')

@section ('barralateral')
<p> Esta parte esta en la barra lateral </p>
@endsection

@section('contenido')

<p>Estoy en to el body</p>

<a href="{{ url('pagina02/Historia') }}" class ="btn btn-xd btn-info pull-right"> HISTORIA </a>
<a href="{{ url('pagina02/Economia') }}" class ="btn btn-xd btn-info pull-right"> ECONOMÍA </a>
<a href="{{ url('pagina02/Ingles') }}" class ="btn btn-xd btn-info pull-right"> INGLÉS </a>

@endsection