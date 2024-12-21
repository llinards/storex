<div class="carousel-cell production-cell rounded-lg border-1 shadow-md sm:relative">
    <a {{ $attributes }} class="block overflow-hidden">
        <img class="h-full w-full rounded-t-lg object-cover" src="{{ $productImage ?? '' }}" alt="" />
    </a>

    <div class="rounded-lg bg-white p-5">
        <div>
            <div class="flex-grow">
                <h3 class="pb-4 font-bold tracking-tight">
                    {{ $productHeading }}
                </h3>
                <div class="flex flex-col justify-between pb-6">
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
                        <p>{{ $area }}</p>
                    </div>
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
                                d="M237.66,133.66l-32,32a8,8,0,0,1-11.32-11.32L212.69,136H43.31l18.35,18.34a8,8,0,0,1-11.32,11.32l-32-32a8,8,0,0,1,0-11.32l32-32a8,8,0,0,1,11.32,11.32L43.31,120H212.69l-18.35-18.34a8,8,0,0,1,11.32-11.32l32,32A8,8,0,0,1,237.66,133.66Z"
                            ></path>
                        </svg>
                        <p>{{ $width }}</p>
                    </div>
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
                                d="M165.66,194.34a8,8,0,0,1,0,11.32l-32,32a8,8,0,0,1-11.32,0l-32-32a8,8,0,0,1,11.32-11.32L120,212.69V43.31L101.66,61.66A8,8,0,0,1,90.34,50.34l32-32a8,8,0,0,1,11.32,0l32,32a8,8,0,0,1-11.32,11.32L136,43.31V212.69l18.34-18.35A8,8,0,0,1,165.66,194.34Z"
                            ></path>
                        </svg>
                        <p>{{ $height }}</p>
                    </div>
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
                                d="M235.32,73.37,182.63,20.69a16,16,0,0,0-22.63,0L20.68,160a16,16,0,0,0,0,22.63l52.69,52.68a16,16,0,0,0,22.63,0L235.32,96A16,16,0,0,0,235.32,73.37ZM84.68,224,32,171.31l32-32,26.34,26.35a8,8,0,0,0,11.32-11.32L75.31,128,96,107.31l26.34,26.35a8,8,0,0,0,11.32-11.32L107.31,96,128,75.31l26.34,26.35a8,8,0,0,0,11.32-11.32L139.31,64l32-32L224,84.69Z"
                            />
                        </svg>
                        <p>{{ $length }}</p>
                    </div>
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
                                d="M136,40V216a8,8,0,0,1-16,0V40a8,8,0,0,1,16,0ZM96,120H35.31l18.35-18.34A8,8,0,0,0,42.34,90.34l-32,32a8,8,0,0,0,0,11.32l32,32a8,8,0,0,0,11.32-11.32L35.31,136H96a8,8,0,0,0,0-16Zm149.66,2.34-32-32a8,8,0,0,0-11.32,11.32L220.69,120H160a8,8,0,0,0,0,16h60.69l-18.35,18.34a8,8,0,0,0,11.32,11.32l32-32A8,8,0,0,0,245.66,122.34Z"
                            ></path>
                        </svg>
                        <p>{{ $gate }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-0 right-0 mb-4 mr-4 flex justify-end sm:absolute">
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
