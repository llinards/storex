{{-- flex and items-center needed for mobile menu --}}
<li class="text-nowrap py-2 sm:p-0 flex items-center border-b-1 sm:border-none px-4">
    @props(['active' => false])
    <svg class="sm:hidden icon mr-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 16">
        <path d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z" />
    </svg>
    <a class="{{ $active ? ' text-storex-red' : '' }} border-b-2 border-transparent py-1 text-center transition duration-200 hover:border-storex-red hover:text-storex-red leading-none"
        aria-current="{{ $active ? 'page' : 'false' }}"
        title="{{ $active ? 'You are currently on this page' : 'Go to this page' }}" {{ $attributes }}>
        {{ $slot }}
    </a>
</li>