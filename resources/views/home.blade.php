<div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <!-- Elemento del menú desplegable para el botón de cerrar sesión -->
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        {{ __('Logout') }} <!-- Texto para el enlace de cerrar sesión -->
    </a>

    <!-- Formulario para enviar la solicitud de cierre de sesión -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf <!-- Token CSRF para protección contra ataques de falsificación de solicitudes entre sitios -->
    </form>
</div>
