<div class="carousel-cell relative">
    <a
        {{ $attributes->merge(['aria-label' => 'Clickable image linking to category of products']) }}
        class="relative block h-56 overflow-hidden focus:outline-none focus:ring-2 focus:ring-storex-red lg:h-64"
    >
        <img
            class="h-full w-full rounded-t-lg object-cover"
            src="{{ $image ?? '' }}"
            alt="{{ $altText ?? 'Category image' }}"
        />
        @if ($featured)
            <div class="absolute left-0 top-2 z-10 rounded-md bg-storex-red p-1">
                <div class="flex items-end">
                    <svg
                        aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 16 16"
                        class="size-5 fill-white"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M8 1.75a.75.75 0 0 1 .692.462l1.41 3.393 3.664.293a.75.75 0 0 1 .428 1.317l-2.791 2.39.853 3.575a.75.75 0 0 1-1.12.814L7.998 12.08l-3.135 1.915a.75.75 0 0 1-1.12-.814l.852-3.574-2.79-2.39a.75.75 0 0 1 .427-1.318l3.663-.293 1.41-3.393A.75.75 0 0 1 8 1.75Z"
                            clip-rule="evenodd"
                        />
                    </svg>
                    <p class="text-small pl-1 text-white" lang="lv">
                        @lang('Populārs produkts')
                        !
                    </p>
                </div>
            </div>
        @endif
    </a>

    <div class="grid h-56 content-between bg-white p-5 shadow-md lg:h-64">
        <div>
            <div class="category-details flex-grow">
                <h3 class="pb-4 font-bold tracking-tight">
                    {{ $heading }}
                </h3>
                @if (isset($area))
                    <div class="flex items-center pb-4">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="me-2 flex-shrink-0"
                            width="20"
                            height="20"
                            fill="#353535"
                            viewBox="0 0 256 256"
                            aria-hidden="true"
                        >
                            <path
                                d="M90.34,61.66a8,8,0,0,1,0-11.32l32-32a8,8,0,0,1,11.32,0l32,32a8,8,0,0,1-11.32,11.32L136,43.31V96a8,8,0,0,1-16,0V43.31L101.66,61.66A8,8,0,0,1,90.34,61.66Zm64,132.68L136,212.69V160a8,8,0,0,0-16,0v52.69l-18.34-18.35a8,8,0,0,0-11.32,11.32l32,32a8,8,0,0,0,11.32,0l32-32a8,8,0,0,0-11.32-11.32Zm83.32-72-32-32a8,8,0,0,0-11.32,11.32L212.69,120H160a8,8,0,0,0,0,16h52.69l-18.35,18.34a8,8,0,0,0,11.32,11.32l32-32A8,8,0,0,0,237.66,122.34ZM43.31,136H96a8,8,0,0,0,0-16H43.31l18.35-18.34A8,8,0,0,0,50.34,90.34l-32,32a8,8,0,0,0,0,11.32l32,32a8,8,0,0,0,11.32-11.32Z"
                            ></path>
                        </svg>
                        <p class="text-small">
                            <strong>
                                @lang('Platība'):
                            </strong>
                            {{ $area }} m<sup>2</sup>
                        </p>
                    </div>
                @endif
                {{ $description }}
            </div>
        </div>
    </div>
    <a
        class="flex justify-center rounded-b-lg bg-storex-red py-2 font-bold text-white shadow-md transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-storex-red sm:shadow-none sm:hover:shadow-md"
        {{ $attributes }}
        aria-label="@lang('Skatīt kategorijas')"
    >
        {{ $link }}
    </a>
</div>
