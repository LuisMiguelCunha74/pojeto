@extends('layout')
@section('title')
formulario de contacto
@endsection
@section('header')
contacto
@endsection

@section('conteudo')
<h2>Jornal</h2>
<br>
<img src="{{asset('imagens/jornal.jpg')}}">
<br>
<a href="{{route('formulario.form')}}">ver formulario</a>   
@endsection