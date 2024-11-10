<li class="py-1">
    @props(['active' => false, 'type' => 'a'])
    <a
        href="#"
        class="{{ $active ? 'text-storex-red' : '' }} hover:text-storex-red"
        aria-current="{{ $active ? 'page' : 'false' }}"
        {{ $attributes }}
    >
        {{ $slot }}
    </a>
</li>
