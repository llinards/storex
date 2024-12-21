<div
    style="background-image: url({{ $backgroundImage ?? '' }})"
    {{
        $attributes->merge([
            'class' => 'flex items-center sm:flex-none sm:items-start px-4 sm:px-0 sm:grid sm:grid-cols-12 h-screen
                                            sm:h-96 header grid-rows-12 ',
        ])
    }}
>
    <div class="col-span-8 col-start-2 row-start-5 text-center sm:text-left md:row-start-3 lg:row-start-4">
        <h2 class="text-shadow leading-tight text-white sm:text-[28px] md:text-5xl">
            {{ $heading }}
        </h2>
        <p class="text-shadow py-2 text-white">
            {{ $subText }}
        </p>
        <div class="mt-2">
            {{ $btnOne ?? '' }}
        </div>
    </div>
    <div
        class="col-span-4 col-start-9 row-start-11 hidden sm:col-start-9 sm:block lg:col-start-10 xl:col-span-2 xl:col-start-11"
    >
        {{ $btnTwo ?? '' }}
    </div>
</div>
