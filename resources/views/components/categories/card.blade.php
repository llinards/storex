<div class="carousel-cell relative">
    <a {{ $attributes }} class="block h-56 overflow-hidden lg:h-64">
        <img class="h-full w-full rounded-t-lg object-cover" src="{{ $image ?? '' }}" alt="" />
    </a>

    <div class="grid h-56 content-between bg-white p-5 shadow-md lg:h-64">
        <div>
            <div class="category-details flex-grow">
                <h3 class="pb-4 font-bold tracking-tight">
                    {{ $heading }}
                </h3>
                {{ $description }}
            </div>
        </div>
    </div>
    <a
        class="flex justify-center rounded-b-lg bg-storex-red py-2 font-bold text-white shadow-md transition-all duration-200 sm:shadow-none sm:hover:shadow-md"
        {{ $attributes }}
    >
        {{ $link }}
    </a>
</div>
