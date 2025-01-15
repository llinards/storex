<li class="text-nowrap py-1 sm:py-0">
    @props(['active' => false])
    <a
        class="{{ $active ? ' text-storex-red' : '' }} border-b-2 border-transparent py-1 text-center transition duration-200 hover:border-storex-red hover:text-storex-red"
        aria-current="{{ $active ? 'page' : 'false' }}"
        title="{{ $active ? 'You are currently on this page' : 'Go to this page' }}"
        {{ $attributes }}
    >
        {{ $slot }}
    </a>
</li>
