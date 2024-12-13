<li
    class="text-nowrap border-b-2 border-transparent py-1 transition duration-200 hover:border-storex-red hover:text-storex-red sm:py-0">
    @props(['active' => false])
    <a class="{{ $active ? ' text-storex-red' : '' }} text-center" aria-current="{{ $active ? 'page' : 'false' }}" {{
        $attributes }}>
        {{ $slot }}
    </a>
</li>