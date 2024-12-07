<div class="carousel-cell rounded-lg border-1 shadow-md">
    <a {{ $attributes }}>
        <img class="rounded-t-lg" src="{{ $productImage ?? '' }}" alt="" />
    </a>

    <div class="grid grid-flow-row auto-rows-max">
        <div class="bg-white p-5">
            <div class="flex-grow">
                <h4 class="font-bold tracking-tight">
                    {{ $productHeading }}
                </h4>
                <p class="squeezed-text text-small">
                    {{ $productDescription }}
                </p>
            </div>
        </div>
        <a class="mt-auto block rounded-b-lg bg-white px-5 pb-5 font-bold text-storex-red" {{ $attributes }}>
            <span class="flex items-center justify-end space-x-2">
                <span>{{ $productLink }}</span>
                <svg
                    class="h-3 w-3 text-storex-red"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 6 10"
                >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-width="2"
                        stroke-linejoin="round"
                        stroke-width="1"
                        d="m1 9 4-4-4-4"
                    />
                </svg>
            </span>
        </a>
    </div>
</div>
