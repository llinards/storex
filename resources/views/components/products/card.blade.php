<div class="carousel-cell rounded-lg border-1 shadow-md">
    <a {{ $attributes }} class="block h-48 overflow-hidden md:h-56 lg:h-48">
        <img class="h-full w-full rounded-t-lg object-cover" src="{{ $productImage ?? '' }}" alt="" />
    </a>

    <div class="grid h-48 content-between md:h-56 lg:h-48">
        <div class="bg-white p-5">
            <div class="flex-grow">
                <h3 class="pb-4 font-bold tracking-tight">
                    {{ $productHeading }}
                </h3>
                <p class="squeezed-text text-small">
                    {{ $productDescription }}
                </p>
            </div>
        </div>
        <a class="mt-auto block rounded-b-lg bg-white px-5 pb-4 font-bold text-storex-red" {{ $attributes }}>
            <span class="flex items-center justify-end space-x-2">
                <span class="border-b-2 border-transparent transition duration-200 hover:border-storex-red">
                    {{ $productLink }}
                </span>
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
