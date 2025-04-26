<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid">
        <!-- Marca optimizada -->
        <a class="navbar-brand d-flex align-items-center me-lg-5" href="{{ route('home') }}">
            <img src="{{ asset('images/logo_transparente.png')}}" alt="logo" width="50" height="auto" class="d-none d-sm-block">
            <h3 class="mb-0 ms-sm-2 fs-4">Work The World</h3>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <div class="navbar-nav ms-auto gap-lg-3">
                <!-- Versión mobile con íconos -->
                <a class="nav-link d-lg-none position-relative" href="{{ route('usuarios.index') }}">
                    <i class="bi bi-person me-2"></i>Usuarios
                </a>
                <a class="nav-link d-lg-none position-relative" href="{{ route('asesorias.index') }}">
                    <i class="bi bi-chat-dots me-2"></i>Asesorías
                </a>
                <a class="nav-link d-lg-none position-relative" href="{{ route('destinos.index') }}">
                    <i class="bi bi-airplane me-2"></i>Destinos
                </a>
                <a class="nav-link d-lg-none position-relative" href="{{ route('requisitos.index') }}">
                    <i class="bi bi-file-earmark-text me-2"></i>Requisitos
                </a>
                <a class="nav-link d-lg-none position-relative" href="{{ route('experiencias.index') }}">
                    <i class="bi bi-briefcase me-2"></i>Experiencias
                </a>
                <a class="nav-link d-lg-none position-relative" href="{{ route('nacionalidades.index') }}">
                    <i class="bi bi-globe me-2"></i>Nacionalidades
                </a>
                <a class="nav-link d-lg-none position-relative" href="{{ route('sucursales.index') }}">
                    <i class="bi bi-tags me-2"></i>Sucursales
                </a>

                <!-- Versión desktop (configuración original) -->
                <a class="nav-link d-none d-lg-block" href="{{ route('usuarios.index') }}">Usuarios</a>
                <a class="nav-link d-none d-lg-block" href="{{ route('asesorias.index') }}">Asesorías</a>
                <a class="nav-link d-none d-lg-block" href="{{ route('destinos.index') }}">Destinos</a>
                <a class="nav-link d-none d-lg-block" href="{{ route('experiencias.index') }}">Experiencias</a>

                <!-- Grupo de elementos que se ocultan en md (original) -->
                <div class="d-none d-lg-flex">
                    <a class="nav-link d-none d-xl-inline-block" href="{{ route('nacionalidades.index') }}">
                        <i class="bi bi-globe me-2 d-lg-none"></i>
                        <span class="d-none d-xl-inline-block">Nacionalidades</span>
                    </a>
                    <a class="nav-link d-none d-xl-inline-block" href="{{ route('sucursales.index') }}">
                        <i class="bi bi-tags me-2 d-lg-none"></i>
                        <span class="d-none d-xl-inline-block">Sucursales</span>
                    </a>
                    <a class="nav-link d-none d-xl-inline-block" href="{{ route('requisitos.index') }}">
                        <i class="bi bi-file-earmark-text me-2 d-lg-none"></i>
                        <span class="d-none d-xl-inline-block">Requisitos</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>




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


{{-- @if (auth()->check())
            <a class="nav-link" href="{{route('logout')}}">
                <button class="btn btn-primary">Logout</button>
            </a>
          @endif

          @if (auth()->guest())
            <a class="nav-link" href="{{route('login')}}">
                <button class="btn btn-primary">Login</button>
            </a>
          @endif --}}

{{-- </div>
      </div>
    </div>
  </nav> --}}
