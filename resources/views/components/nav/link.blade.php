<li>
    @props(['active' => false, 'type' => 'a'])
    <a
        class="{{ $active ? 'font-bold text-storex-red' : '' }}"
        aria-current="{{ $active ? 'page' : 'false' }}"
        {{ $attributes }}
    >
        {{ $slot }}
    </a>
</li>
