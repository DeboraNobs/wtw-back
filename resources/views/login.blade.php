<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="icon" href="{{ asset('images/logo_transparente.png') }}">

    <script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>@yield('tituloNavegador')</title>

</head>

<body>
    <div class="login">
        @if (session('success'))
            <script>
                Swal.fire({
                    title: '¡Registro exitoso!',
                    text: 'Usuario {{ session('success') }} creado con éxito.',
                    icon: 'success',
                });
            </script>
        @endif


        <img src="{{ asset('images/login.png') }}" alt="login_bg" class="login__bg" />

        <form action="{{ route('loginBack') }}" method="POST" class="login__form" novalidate>
            @csrf
            <h2 class="login__title">Iniciar Sesión</h2>

            <div class="login__inputs">
                <div class="login__box">
                    <input type="email" placeholder="Email" name="email" required class="login__input" />
                    <i class="ri-mail-fill"></i>
                </div>

                <div class="login__box">
                    <input type="password" placeholder="Password" name="password" required class="login__input" />
                    <i class="ri-lock-2-fill"></i>
                </div>
            </div>

            <button type="submit" class="login__button">Login</button>

            @if (!empty($msg))
                <div class="alert alert-danger text-center mt-3">
                    {{ $msg }}
                </div>
            @endif
            
            @if (session('msg'))
                <div class="alert alert-danger mt-3">{{ session('msg') }}</div>
            @endif

            <div class="login__register">
                No tienes cuenta? <a href="{{ route('registro') }}">Registrate</a>
            </div>

        </form>
    </div>

</body>

</html>
