@extends('layouts.main')

@section('title', 'Tela de produtos')

@section ('content')

<h1>Tela de Produtos </h1>

@if($busca != '')
    <p>o usuário está buscando por: {{$busca}}</p>
@endif
@endsection