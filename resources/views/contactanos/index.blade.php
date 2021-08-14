@extends('layout.plantilla')

@section('title', 'Contactanos')

@section('content')
    <h1>Dejanos un mensaje</h1>
    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <label for="">
            Nombre:
            <br>
            <input type="text" name="nombre" id="">
        </label><br>
        @error('nombre')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <label for="">
            Direccion de correo:
            <br>
            <input type="text" name="correo" id="">
        </label><br>
        @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <label for="">
            Mensaje:
            <br>
            <textarea name="mensaje" id="" rows="4"></textarea>
        </label>
        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror
        <br>
        <button type="submit">Enviar mensaje</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
@endsection
