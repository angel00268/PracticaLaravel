@extends('layout.plantilla')

@section('title', 'Cursos '.$curso->name)

@section('content')
    <h1>Bienvenido al curso: {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver</a>
    <br/>
    <a href="{{route('cursos.edit',$curso)}}">Editar Curso</a>
    <p><strong>Categoria:</strong>{{$curso->categoria}}</p>
    <p><strong>Descripcion:</strong>{{$curso->descripcion}}</p>
@endsection
