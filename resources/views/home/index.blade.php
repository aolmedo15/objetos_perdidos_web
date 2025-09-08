@extends('layouts.app-master')

@section('content')
    <h1>Home</h1>

    {{-- Muestra el contenido completo una vez que el usuario haya inciado sesión --}}
    @auth
    <p>Bienvenido {{ auth()->user()->name ?? auth()->user()->username }}, estás autenticado en la página.</p>
    <p><a href="/logout">Logout</a></p>
    @endauth

    {{-- Muestra un contenido previo. Si el usuario no está autenticado dentro de la página
    No podrá ver la información correspondiente --}}
    @guest
    <p>Hola, eres un invitado. <a href="/login">Inicia sesion</a> para ver completo</p>
    @endguest

@endsection
