<div style="background-image: url({{ $backgroundImage ?? '' }})" {{ $attributes->merge([
    'class' => 'flex flex-col justify-center items center text-center sm:text-left h-screen sm:h-96 px-8 sm:px-12
    md:px-16 lg:px-20
    xl:px-24
    header',
    ])
    }}
    >
    <div>
        <h2 class="text-shadow text-3xl leading-tight text-white md:text-5xl md:leading-tight">
            {{ $heading ?? '' }}
        </h2>
        <p class="text-shadow pt-2 text-white">
            {{ $subText ?? '' }}
        </p>
        <div class="pt-4">
            {{ $btnOne ?? '' }}
        </div>
    </div>
</div>