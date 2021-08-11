@extends('layout.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a la pagina principal</h1>
    <a href="{{route('cursos.create')}}">Crear curso</a>
    <ol>
        @foreach ($cursos as $curso)
            <li><a href="{{route('cursos.show',$curso->id)}}">{{$curso->name}}</a></li>
        @endforeach
    </ol>
    {{$cursos->links()}}
@endsection
