<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplicación de Login</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">

    <style>
        body{
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-container{
            width: 800px;
        }

        /* Fondo dividido en 2 rows */
        .background-rows {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
        }


        .row-top {
            flex: 1;
            background: #f8f9fa;
        }

        .row-bottom {
            flex: 1.4;
            background: #1b396a;
        }

        /* Contenedor del formulario */
        .form-container {
            position: relative;
            z-index: 10; /* para que quede encima del fondo */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-box {
            background: white;
            padding: 2rem;
            border-radius: 5px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 650px;
        }
    </style>
</head>
<body>

<main class="form-container">
    @yield('content')
</main>

<script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>
