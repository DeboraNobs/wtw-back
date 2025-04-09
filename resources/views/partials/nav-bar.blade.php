<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}"><h3>Work The World</h3></a>
      <img src="{{ asset('images/logo_transparente.png')}}" alt="logo" width="75px" height="auto">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link" href="{{ route('home') }}">Inicio</a>
          <a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a>
          <a class="nav-link" href="{{ route('asesorias.index') }}">Asesorías</a>
          <a class="nav-link" href="{{ route('nacionalidades.index') }}">Nacionalidades</a>
          <a class="nav-link" href="{{ route('destinos.index') }}">Destinos</a>
          <a class="nav-link" href="{{ route('experiencias.index') }}">Experiencias</a>
          <a class="nav-link" href="{{ route('sucursales.index') }}">Sucursales</a>
          <a class="nav-link" href="#">Requisitos</a>
        </div>
      </div>
    </div>
  </nav>

{{-- <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #b9a2d2">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}" style="font-size: 1.5rem;">Work The World</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active px-3 position-relative" href="{{ route('home') }}">
                    <span>Inicio</span>
                    <span class="nav-link-underline"></span>
                </a>
                <a class="nav-link px-3 position-relative" href="{{ route('usuarios.index') }}">
                    <span>Usuarios</span>
                    <span class="nav-link-underline"></span>
                </a>
                <a class="nav-link px-3 position-relative" href="{{ route('asesorias.index') }}">
                    <span>Asesorias</span>
                    <span class="nav-link-underline"></span>
                </a>
                <a class="nav-link px-3 position-relative" href="{{ route('nacionalidades.index') }}">
                    <span>Nacionalidades</span>
                    <span class="nav-link-underline"></span>
                </a>
                <a class="nav-link px-3 position-relative" href="{{ route('destinos.index') }}">
                    <span>Destinos</span>
                    <span class="nav-link-underline"></span>
                </a>
                <a class="nav-link px-3 position-relative" href="{{ route('experiencias.index') }}">
                    <span>Experiencias</span>
                    <span class="nav-link-underline"></span>
                </a>
                <a class="nav-link px-3 position-relative" href="{{ route('sucursales.index') }}">
                    <span>Sucursales</span>
                    <span class="nav-link-underline"></span>
                </a>
                <a class="nav-link px-3 position-relative" href="#">
                    <span>Requisitos</span>
                    <span class="nav-link-underline"></span>
                </a>
            </div>
        </div>
    </div>
</nav>

<style>
    .navbar {
        transition: all 0.3s ease;
        padding: 0.8rem 1rem;
    }

    .nav-link {
        color: #40176b;
        transition: all 0.3s ease;
        margin: 0 0.2rem;
    }

    .nav-link:hover {
        transform: translateY(-2px);
    }

    .nav-link-underline {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 2px;
        background: white;
        transition: width 0.3s ease;
    }

    .nav-link:hover .nav-link-underline {
        width: 60%;
    }

</style> --}}









{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Work The World</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">

          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a>

          <a class="nav-link" href="{{ route('usuarios.index') }}">Usuarios</a>

          <a class="nav-link" href="{{ route('asesorias.index') }}"> Asesorias</a>

          <a class="nav-link" href="{{ route('nacionalidades.index') }}">Nacionalidades</a>

          <a class="nav-link" href="{{ route('destinos.index') }}">Destinos</a>

          <a class="nav-link" href="{{ route('experiencias.index') }}">Experiencias</a>

          <a class="nav-link" href="{{ route('sucursales.index') }}">Sucursales</a>

          <a class="nav-link" href="">Requisitos</a> --}}


          {{-- @if(auth()->check())
            <a class="nav-link" href="{{route('logout')}}">
                <button class="btn btn-primary">Logout</button>
            </a>
          @endif

          @if(auth()->guest())
            <a class="nav-link" href="{{route('login')}}">
                <button class="btn btn-primary">Login</button>
            </a>
          @endif --}}

        {{-- </div>
      </div>
    </div>
  </nav> --}}
