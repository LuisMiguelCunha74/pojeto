@extends('layout')
@section('title')
Formulario
@endsection
@section('header')
Formulario
@endsection

@section('conteudo')
Nome:
{{$nome}}
<br>
Morada:
{{$morada}}
<br>
Empregos:
{{$empregos}}


@if($empregos=='jornalista')
<h1>jornalista</h1>
<img src="{{asset('imagens/jornal.jpg')}}">
@elseif($empregos=='futebolista')
<h2>futebolista</h2>
<img src="{{asset('imagens/futebol.jpg')}}">
@elseif($empregos=='dentista')
<h3>dentista</h3>
<img src="{{asset('imagens/dentista.jpg')}}">
@elseif($empregos=='medico')
<h4>medico</h4>
<img src="{{asset('imagens/medico.jpg')}}">
@endif


@endsection