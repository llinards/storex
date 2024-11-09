<li>
    @props(['active' => false, 'type' => 'a'])
    <a
        href="#"
        class="{{ $active ? 'text-storex-red' : '' }} font-storex"
        aria-current="{{ $active ? 'page' : 'false' }}"
        {{ $attributes }}
    >
        {{ $slot }}
    </a>
</li>
