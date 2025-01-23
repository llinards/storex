{{-- flex and items-center needed for mobile menu --}}
<li class="text-nowrap py-2 sm:p-0 flex items-center px-4">
    @props(['active' => false])
    <a class="{{ $active ? ' text-storex-red' : '' }} border-transparent py-1 text-center transition duration-200 hover:border-storex-red hover:text-storex-red"
        aria-current="{{ $active ? 'page' : 'false' }}"
        title="{{ $active ? 'You are currently on this page' : 'Go to this page' }}" {{ $attributes }}>
        {{ $slot }}
    </a>
</li>