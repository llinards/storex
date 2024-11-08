<li class="nav-item">
    @props(['active' => false, 'type' => 'a'])
    <a
        class="{{ $active ? 'active' : '' }} nav-link text-nowrap"
        aria-current="{{ $active ? 'page' : 'false' }}"
        {{ $attributes }}
    >
        {{ $slot }}
    </a>
</li>
