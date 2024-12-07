<div class="carousel-cell ">
    <a {{ $attributes }}>
        <img class="rounded-t-lg" src="{{ $productImage ?? '' }}" alt="" />
    </a>
    <div class="flex flex-grow flex-col p-5 bg-white">
        <div class="flex-grow">
            <h4 class="font-bold tracking-tight">
                {{ $productHeading }}
            </h4>
            <p class="squeezed-text">
                {{ $productDescription }}
            </p>
        </div>
    </div>
    <a class="mt-auto block px-5 pb-5 font-bold text-storex-red bg-white rounded-b-lg" {{ $attributes }}>
        <span class="flex items-center justify-end space-x-2">
            <span>{{ $productLink }}</span>
            <svg class="h-3 w-3 text-storex-red" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" stroke-linejoin="round"
                    stroke-width="1" d="m1 9 4-4-4-4" />
            </svg>
        </span>
    </a>
</div>