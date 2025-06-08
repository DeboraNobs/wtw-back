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
    <title>Registro</title>
</head>

<body>
    <div class="register">
        <img src="{{ asset('images/registro_bg.png') }}" alt="register_bg" class="register__bg" />

        <form action="{{ route('registrarse') }}" method="POST" class="register__form" novalidate>
            @csrf
            <h2 class="register__title">Registrarse</h2>

            <div class="register__inputs">
                <div class="register__box">
                    <input type="text" placeholder="Nombre" name="nombre" required class="register__input"
                        value="{{ old('nombre') }}" />
                    <i class="bi bi-person-fill"></i>
                </div>

                <div class="register__box">
                    <input type="text" class="register__input" name="apellidos" placeholder="Ingrese apellidos"
                        value="{{ old('apellidos') }}" required>
                    <i class="bi bi-person-fill"></i>
                </div>

                <div class="register__box">
                    <input type="email" placeholder="Email" name="email" required class="register__input"
                        value="{{ old('email') }}" />
                    <i class="bi bi-envelope-fill"></i>
                </div>

                <div class="register__box">
                    <select class="register__input" name="nacionalidad_id" required>
                        <option value="" disabled {{ old('nacionalidad_id') ? '' : 'selected' }}>Seleccione su
                            nacionalidad</option>
                        <option value="1" {{ old('nacionalidad_id') == '1' ? 'selected' : '' }}>Argentina</option>
                        <option value="2" {{ old('nacionalidad_id') == '2' ? 'selected' : '' }}>Chile</option>
                        <option value="3" {{ old('nacionalidad_id') == '3' ? 'selected' : '' }}>Uruguay</option>
                        <option value="4" {{ old('nacionalidad_id') == '4' ? 'selected' : '' }}>España</option>
                    </select>
                    <i class="bi bi-globe-fill"></i>
                </div>


                <div class="register__box">
                    <input type="date" class="register__input" name="fecha_nacimiento"
                        value="{{ old('fecha_nacimiento') }}"
                        required>
                    <i class="bi bi-calendar-fill"></i>
                </div>

                <div class="register__box">
                    <input type="password" placeholder="Contraseña" name="password" required class="register__input" />
                    <i class="bi bi-lock-fill"></i>
                </div>

                <input type="hidden" name="fecha_registro" value="{{ date('Y-m-d') }}">


                <button type="submit" class="register__button">Registrarse</button>

                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="register__login">
                    ¿Ya tienes cuenta? <a href="{{ route('loginBack') }}">Inicia sesión</a>
                </div>
        </form>
    </div>

     @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
                confirmButtonText: 'Aceptar'
            });
        </script>
    @endif
    
</body>

</html>
