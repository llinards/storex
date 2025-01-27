<x-layout.app>
    <div class="container mx-auto sm:py-12 lg:px-6 xl:px-8">
        <div style="background-image: url({{ $articleImage ?? '' }})" {{ $attributes->merge([
            'class' => 'flex flex-col justify-center items center text-center sm:text-left h-screen sm:h-96 px-8
            sm:px-12
            md:px-16 lg:px-20
            xl:px-24
            header
            sm:mb-12
            ',
            ])
            }}
            >
            <div>
                <h1 class="text-shadow text-3xl leading-tight text-white md:text-5xl md:leading-tight">
                    {{ $articleHeading ?? '' }}
                </h1>
                <p class="text-shadow pt-2 text-white">
                    {{ $subText ?? '' }}
                </p>
            </div>
        </div>

        <div class="px-4 py-8 sm:py-12 lg:px-6 xl:px-8 bg-storex-medium-grey">
            <h2 class="text-storex-red pb-2">{{ $articleSubHeading ?? ''}}</h2>
            {{ $articleContent }}
        </div>
    </div>
</x-layout.app>