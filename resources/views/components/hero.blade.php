<div
    style="background-image: url({{ $backgroundImage ?? '' }})"
    {{
        $attributes->merge([
            'class' => 'flex items-center sm:flex-none sm:items-start sm:px-4 lg:px-6 xl:px-8 sm:grid sm:grid-cols-12 h-screen
                    sm:h-110 header grid-rows-12 ',
        ])
    }}
>
    <div
        class="col-span-8 col-start-7 row-start-2 text-center sm:row-start-4 sm:text-left md:col-start-6 lg:col-start-7"
    >
        <h1 class="leading-tight">
            {{ $heading }}
        </h1>
        <p class="py-2">
            {{ $subText }}
        </p>
        <div class="mt-2">
            {{ $btnOne ?? '' }}
        </div>
    </div>
</div>
