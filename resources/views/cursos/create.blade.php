@extends('layout.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta pagina podras crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <label for="">
            Nombre del curso:
            <br/>
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br/>
            <small>*{{$message}}*</small>
            <br/>
        @enderror
        <br/>
        <label>
            Descripcion del curso:
            <br/>
            <textarea name="descripcion" id="" rows="5">{{old('descripcion')}}</textarea>
        </label>
        @error('descripcion')
            <br/>
            <small>*{{$message}}*</small>
            <br/>
        @enderror
        <br/>
        <label>
            Cateoria del curso:
            <br/>
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        @error('categoria')
            <br/>
            <small>*{{$message}}*</small>
            <br/>
        @enderror
        <br/>
        <button type="submit">Enviar formulario</button>
    </form>
@endsection
