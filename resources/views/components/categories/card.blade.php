<div class="carousel-cell relative">
    <a {{ $attributes }} class="block h-56 overflow-hidden">
        <img class="h-full w-full rounded-t-lg object-cover" src="{{ $productImage ?? '' }}" alt="" />
    </a>

    <div class="grid h-56 content-between rounded-b-lg border-1 bg-white p-5 shadow-md">
        <div>
            <div class="category-details flex-grow">
                <h3 class="pb-4 font-bold tracking-tight">
                    {{ $productHeading }}
                </h3>
                {{ $productDescription }}
            </div>
        </div>

        <div class="absolute bottom-0 right-0 mb-4 mr-4 flex justify-end">
            <a
                class="inline-flex items-center border-b-2 border-transparent font-bold text-storex-red transition duration-200 hover:border-storex-red"
                {{ $attributes }}
            >
                <span>
                    {{ $productLink }}
                </span>
                <svg
                    id="arrow-svg"
                    class="ms-2 h-2.5 w-2.5 -rotate-90 transition duration-200"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 10 6"
                >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 4 4 4-4"
                    />
                </svg>
            </a>
        </div>
    </div>
</div>
