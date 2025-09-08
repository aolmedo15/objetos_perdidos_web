@extends('layouts.auth-master')

@section('content')
    <div class="background-rows">
        <div class="row-bottom"></div>
        <div class="row-top"></div>
    </div>

    <div class="form-container">
        <div class="form-box">
            <div class="text-center mb-3">
                <img src="assets/images/logo.svg" style="max-width: 20em">
            </div>
            <p class="mb-4 fw-bold text-center fs-3">
                Sistema de Objetos Pérdidos del TecNM Campus Acapulco <br>
                <span class="fw-normal fs-3"> Ingresa tus credenciales</span>
            </p>
            <form action="/login" method="POST">
                @csrf
                @include('layouts.partials.messages')
                <div class="form-floating mb-3">
                    <input type="text" placeholder="username" name="username" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                    <label for="exampleInputEmail1" class="form-label">Número de control</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" placeholder="password" name="password" class="form-control"
                        id="exampleInputPassword1">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                </div>
                <div class="mb-3">
                    <a href="/register">Regístrate</a>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </form>
        </div>
    </div>
@endsection
