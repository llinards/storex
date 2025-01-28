<div class="sm:flex lg:flex-row items-center p-4 bg-white border-1 rounded-lg shadow-md sm:max-w-full">
    <a href="#">
        <img class="object-cover h-48 w-full sm:w-96 lg:w-80 xl:w-96" src="{{ $articleImage ?? ''  }}" alt="">
    </a>
    <div class="flex flex-col justify-between sm:h-full sm:w-full sm:pl-4">
        <div>
            <h2 class="pt-4 sm:pt-0 text-xl">{{ $articleHeading ?? '' }}</h2>
            <div class="mt-4 product-description">
                {{ $articleSummary ?? '' }}
            </div>
        </div>
        <div class="flex justify-end">
            <x-sm-btn href="#" class="scroll-btn flex items-center">
                @lang('
                Lasīt vairāk
                ')
            </x-sm-btn>
        </div>
    </div>
</div>