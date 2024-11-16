<div style="background-image: url({{ $backgroundImage ?? '' }})" {{ $attributes->merge([
    'class' => 'grid grid-cols-12 h-screen
    sm:h-96 header grid-rows-5',
    ])
    }}
    >
    <div class="px-4 text-center sm:px-20 sm:text-left col-span-10 row-start-2">
        <h1 class="leading-tight">
            {{ $heading }}
        </h1>
        <p>
            {{ $subText }}
        </p>
        {{ $btnOne ?? '' }}
    </div>
    <div class="col-span-2 col-start-11 row-start-5">
        {{ $btnTwo ?? '' }}
    </div>
</div>