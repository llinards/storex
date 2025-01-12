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
                <div class="flex items-center py-2">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="me-5 flex-shrink-0"
                        width="28"
                        height="28"
                        fill="#353535"
                        viewBox="0 0 256 256"
                    >
                        <path
                            d="M90.34,61.66a8,8,0,0,1,0-11.32l32-32a8,8,0,0,1,11.32,0l32,32a8,8,0,0,1-11.32,11.32L136,43.31V96a8,8,0,0,1-16,0V43.31L101.66,61.66A8,8,0,0,1,90.34,61.66Zm64,132.68L136,212.69V160a8,8,0,0,0-16,0v52.69l-18.34-18.35a8,8,0,0,0-11.32,11.32l32,32a8,8,0,0,0,11.32,0l32-32a8,8,0,0,0-11.32-11.32Zm83.32-72-32-32a8,8,0,0,0-11.32,11.32L212.69,120H160a8,8,0,0,0,0,16h52.69l-18.35,18.34a8,8,0,0,0,11.32,11.32l32-32A8,8,0,0,0,237.66,122.34ZM43.31,136H96a8,8,0,0,0,0-16H43.31l18.35-18.34A8,8,0,0,0,50.34,90.34l-32,32a8,8,0,0,0,0,11.32l32,32a8,8,0,0,0,11.32-11.32Z"
                        ></path>
                    </svg>
                    {{-- <p>{{ $area }}</p> --}}
                    <p>
                        @lang('Platība')
                        56 - 84 m2
                    </p>
                </div>
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
