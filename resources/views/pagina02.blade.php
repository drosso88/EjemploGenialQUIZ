@extends('layouts.ejemplolayout')

@section('titulo', 'Página 01 del proyecto')

@section ('barralateral')
@parent
<p>Esta parte es de la página 02</p>

@endsection

@section('contenido')

<h3>Er body de la 02</h3>

<a href="{{url('/') }}" class ="btn btn-xd btn-info pull-right">página 01 </a>

@endsection

