<div
    style="background-image: url({{ $backgroundImage ?? '' }})"
    {{
        $attributes->merge([
            'class' => 'flex items-center sm:flex-none sm:items-start px-4 sm:px-0 sm:grid sm:grid-cols-12 h-screen
                                    sm:h-96 header grid-rows-12 ',
        ])
    }}
>
    <div class="col-span-8 col-start-2 row-start-2 text-center sm:text-left lg:row-start-3">
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
    <div
        class="col-span-4 col-start-9 row-start-11 hidden sm:col-start-9 sm:block lg:col-start-10 xl:col-span-2 xl:col-start-11"
    >
        {{ $btnTwo ?? '' }}
    </div>
</div>
