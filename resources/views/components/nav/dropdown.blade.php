<li class="nav-item dropdown">
    <a
        class="nav-link d-flex justify-content-between"
        href="#"
        role="button"
        data-bs-toggle="dropdown"
        aria-expanded="false"
        {{ $attributes }}
    >
        {{ $toggle }}
        <i class="bi bi-chevron-down ms-2"></i>
    </a>
    <ul class="dropdown-menu">
        {{ $links }}
    </ul>
</li>
