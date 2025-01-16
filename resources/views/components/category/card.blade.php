<div class="carousel-cell category-cell flex flex-col justify-between rounded-lg bg-white shadow-md sm:relative">
    <a {{ $attributes }} class="block h-56 overflow-hidden lg:h-64">
        <img class="h-full w-full rounded-t-lg object-cover" src="{{ $image ?? '' }}" alt="" />
        @if ($featured)
            <div
                class="absolute left-0 top-2 z-10 rounded-md bg-storex-red p-1"
                role="is-featured"
                aria-label="@lang('Populārs produkts')"
            >
                <div class="flex items-end">
                    <div>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            class="size-5 fill-white"
                            aria-hidden="true"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M8 1.75a.75.75 0 0 1 .692.462l1.41 3.393 3.664.293a.75.75 0 0 1 .428 1.317l-2.791 2.39.853 3.575a.75.75 0 0 1-1.12.814L7.998 12.08l-3.135 1.915a.75.75 0 0 1-1.12-.814l.852-3.574-2.79-2.39a.75.75 0 0 1 .427-1.318l3.663-.293 1.41-3.393A.75.75 0 0 1 8 1.75Z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </div>
                    <p class="text-small px-1 text-white">
                        @lang('Populārs produkts')
                        !
                    </p>
                </div>
            </div>
        @endif
    </a>

    <div class="h-56 rounded-lg bg-white p-5 lg:h-64">
        <div>
            <div class="flex-grow">
                <h3 class="pb-4 font-bold tracking-tight">
                    {{ $heading }}
                </h3>
                <div class="flex flex-col justify-between pb-4">
                    <div class="flex items-center pb-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="me-2 flex-shrink-0"
                            width="20"
                            height="20"
                            fill="#353535"
                            viewBox="0 0 256 256"
                        >
                            <path
                                d="M90.34,61.66a8,8,0,0,1,0-11.32l32-32a8,8,0,0,1,11.32,0l32,32a8,8,0,0,1-11.32,11.32L136,43.31V96a8,8,0,0,1-16,0V43.31L101.66,61.66A8,8,0,0,1,90.34,61.66Zm64,132.68L136,212.69V160a8,8,0,0,0-16,0v52.69l-18.34-18.35a8,8,0,0,0-11.32,11.32l32,32a8,8,0,0,0,11.32,0l32-32a8,8,0,0,0-11.32-11.32Zm83.32-72-32-32a8,8,0,0,0-11.32,11.32L212.69,120H160a8,8,0,0,0,0,16h52.69l-18.35,18.34a8,8,0,0,0,11.32,11.32l32-32A8,8,0,0,0,237.66,122.34ZM43.31,136H96a8,8,0,0,0,0-16H43.31l18.35-18.34A8,8,0,0,0,50.34,90.34l-32,32a8,8,0,0,0,0,11.32l32,32a8,8,0,0,0,11.32-11.32Z"
                            ></path>
                        </svg>
                        <p>{{ $area }}</p>
                    </div>
                    <div class="flex items-center pb-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="me-2 flex-shrink-0"
                            width="20"
                            height="20"
                            fill="#353535"
                            viewBox="0 0 256 256"
                        >
                            <path
                                d="M237.66,133.66l-32,32a8,8,0,0,1-11.32-11.32L212.69,136H43.31l18.35,18.34a8,8,0,0,1-11.32,11.32l-32-32a8,8,0,0,1,0-11.32l32-32a8,8,0,0,1,11.32,11.32L43.31,120H212.69l-18.35-18.34a8,8,0,0,1,11.32-11.32l32,32A8,8,0,0,1,237.66,133.66Z"
                            ></path>
                        </svg>
                        <p>{{ $width }}</p>
                    </div>
                    <div class="flex items-center pb-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="me-2 flex-shrink-0"
                            width="20"
                            height="20"
                            fill="#353535"
                            viewBox="0 0 256 256"
                        >
                            <path
                                d="M165.66,194.34a8,8,0,0,1,0,11.32l-32,32a8,8,0,0,1-11.32,0l-32-32a8,8,0,0,1,11.32-11.32L120,212.69V43.31L101.66,61.66A8,8,0,0,1,90.34,50.34l32-32a8,8,0,0,1,11.32,0l32,32a8,8,0,0,1-11.32,11.32L136,43.31V212.69l18.34-18.35A8,8,0,0,1,165.66,194.34Z"
                            ></path>
                        </svg>
                        <p>{{ $height }}</p>
                    </div>
                    <div class="flex items-center pb-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="me-2 flex-shrink-0"
                            width="20"
                            height="20"
                            fill="#353535"
                            viewBox="0 0 256 256"
                        >
                            <path
                                d="M235.32,73.37,182.63,20.69a16,16,0,0,0-22.63,0L20.68,160a16,16,0,0,0,0,22.63l52.69,52.68a16,16,0,0,0,22.63,0L235.32,96A16,16,0,0,0,235.32,73.37ZM84.68,224,32,171.31l32-32,26.34,26.35a8,8,0,0,0,11.32-11.32L75.31,128,96,107.31l26.34,26.35a8,8,0,0,0,11.32-11.32L107.31,96,128,75.31l26.34,26.35a8,8,0,0,0,11.32-11.32L139.31,64l32-32L224,84.69Z"
                            />
                        </svg>
                        <p>{{ $length }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a
        class="flex justify-center rounded-b-lg bg-storex-red py-2 font-bold text-white transition-all duration-200 hover:shadow-md"
        aria-label="@lang('Skatīt produktus')"
        {{ $attributes }}
    >
        {{ $link }}
    </a>
</div>
