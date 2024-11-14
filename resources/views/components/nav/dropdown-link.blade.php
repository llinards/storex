<li class="px-4 py-1 md:px-0">
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
