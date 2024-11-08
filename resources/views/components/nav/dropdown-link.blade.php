<li>
    @props(['active' => false, 'type' => 'a'])
    <a
        class="{{ $active ? 'active' : '' }} dropdown-item text-nowrap"
        aria-current="{{ $active ? 'page' : 'false' }}"
        {{ $attributes }}
    >
        {{ $slot }}
    </a>
</li>
