<div
    style="background-image: url({{ $backgroundImage ?? '' }})"
    {{
        $attributes->merge([
            'class' => 'flex h-screen
                                            items-center sm:h-96 header',
        ])
    }}
>
    <div class="px-4 text-center sm:px-32 sm:text-left">
        <h1 class="leading-tight sm:w-3/4">
            {{ $heading }}
        </h1>
        <p class="py-4">
            {{ $subText }}
        </p>
        <a
            class="mb-2 me-2 rounded-lg bg-storex-red px-5 py-4 font-bold text-white hover:drop-shadow-md"
            {{ $attributes }}
        >
            {{ $btnText }}
        </a>
    </div>
</div>
