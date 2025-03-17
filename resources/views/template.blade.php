<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script async src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <title>@yield('tituloNavegador')</title>
</head>
<style>
    .error-msg{
        color: red;
    }
</style>

<body>
    <div style="background-color: #f8f9fa">
        @include ('partials.nav-bar')
        <!-- VER DE MOVER ESTO AL NAV-BAR -->
        {{-- <div class="container-md d-flex justify-content-end">
            <div> {{ fechaActual('d/m/Y') }} </div>
        </div> --}}
        <div class="container-md d-flex justify-content-end">

        </div>
        <!-- VER DE MOVER ESTO AL NAV-BAR -->
        <hr>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 ms-2 border-end border-2" style="color:#278a81">
                    @include('partials.side-bar')
                    {{-- @yield('contenido') --}}
                </div>
                <div class="col-8">
                    @yield('contenido')
                </div>
            </div>
        </div>
    </div>
</body>

</html>

