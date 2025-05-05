<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container-fluid">

        <a class="navbar-brand d-flex align-items-center me-lg-5" href="{{ route('home') }}">
            <img src="{{ asset('images/logo-transparente.png') }}" alt="logo" width="60" height="auto"
                class="d-none d-sm-block ms-5">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <div class="navbar-nav ms-auto gap-lg-3">
                <!-- Versión mobile con íconos -->

                @if (auth()->check())
                    <a class="nav-link d-none d-lg-block" href="{{ route('logout') }}">Logout</a>

                    <a class="nav-link d-lg-none position-relative" href="{{ route('logout') }}">
                        <i class="bi bi-box-arrow-right me-2"></i>Logout
                    </a>
                @endif

                @if (auth()->check() && auth()->user()->rol === 'admin')
                    <a class="nav-link d-lg-none position-relative" href="{{ route('usuarios.index') }}">
                        <i class="bi bi-person me-2"></i>Usuarios
                    </a>

                    <a class="nav-link d-lg-none position-relative" href="{{ route('nacionalidades.index') }}">
                        <i class="bi bi-globe me-2"></i>Nacionalidades
                    </a>
                @endif

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
                <a class="nav-link d-lg-none position-relative" href="{{ route('sucursales.index') }}">
                    <i class="bi bi-tags me-2"></i>Sucursales
                </a>

                <!-- Versión desktop (configuración original) -->
                @if (auth()->check() && auth()->user()->rol === 'admin')
                    <a class="nav-link d-none d-lg-block" href="{{ route('usuarios.index') }}">Usuarios</a>
                @endif

                <a class="nav-link d-none d-lg-block" href="{{ route('asesorias.index') }}">Asesorías</a>
                <a class="nav-link d-none d-lg-block" href="{{ route('destinos.index') }}">Destinos</a>
                <a class="nav-link d-none d-lg-block" href="{{ route('experiencias.index') }}">Experiencias</a>

                <!-- Grupo de elementos que se ocultan en md (original) -->
                <div class="d-none d-lg-flex">

                    @if (auth()->check() && auth()->user()->rol === 'admin')
                        <a class="nav-link d-none d-xl-inline-block" href="{{ route('nacionalidades.index') }}">
                            <i class="bi bi-globe me-2 d-lg-none"></i>
                            <span class="d-none d-xl-inline-block">Nacionalidades</span>
                        </a>
                    @endif

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
