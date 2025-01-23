{{-- flex and items-center needed for mobile menu --}}
<li class="px-2 sm:px-4 py-2 sm:py-1 md:px-0 flex items-center">
    @props(['active' => false, 'type' => 'a'])
    <svg class="sm:hidden icon mr-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 16">
        <path d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z" />
    </svg>
    <a class="{{ $active ? 'text-storex-red' : '' }} transition duration-200 hover:text-storex-red"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>
        {{ $slot }}
    </a>
</li>