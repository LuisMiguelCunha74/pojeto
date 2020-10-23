@extends('layout')
@section('title')
formulario de contacto
@endsection
@section('header')
contacto
@endsection

@section('conteudo')
<form metohd="post" action="{{route('execformulario.form')}}">
    @csrf
    <label for="nome">nome</label>
    <input type="text" name="nome">
    <label for="morada">morada</label>
    <input type="text" name="morada">
    <label type="empregos">jornal</label>
        
    <select name="empregos">
        <option value="jornalista">jornalista</option>    
        <option value="futebolista">futebolista</option>    
        <option value="dentista">dentista</option>    
        <option value="medico">medico</option>    
    </select>
        
        <button type="submit">enviar</button>
    </form>

@endsection