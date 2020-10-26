@extends('layout')
@section('title')
Empregos
@endsection
@section('header')
Empregos
@endsection

@section('conteudo')
<img src="{{asset('imagens/jornalv2.jpg')}}">
<img src="{{asset('imagens/futebolv2.jpg')}}">
<br>
<img src="{{asset('imagens/dentistav2.jpg')}}">
<img src="{{asset('imagens/medicov2.jpg')}}">
<br>
<h2>opçoes de navegaçao</h2>
<a href="{{route('formulario.form')}}">ver empregos</a>   
@endsection