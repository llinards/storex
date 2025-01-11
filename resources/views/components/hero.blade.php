<div
    style="background-image: url({{ $backgroundImage ?? '' }})"
    {{
        $attributes->merge([
            'class' => 'flex items-center sm:flex-none sm:items-start px-4 lg:px-6 xl:px-8 sm:grid sm:grid-cols-12 h-screen
                                                    sm:h-110 header grid-rows-12 ',
        ])
    }}
>
    <div
        class="col-span-8 col-start-7 row-start-2 text-center sm:row-start-4 sm:text-left md:col-start-6 lg:col-start-7"
    >
        <h1 class="text-shadow leading-tight text-white">
            {{ $heading }}
        </h1>
        <p class="text-shadow py-2 text-white">
            {{ $subText }}
        </p>
        <div class="pt-4">
            {{ $btnOne ?? '' }}
        </div>
    </div>
</div>
