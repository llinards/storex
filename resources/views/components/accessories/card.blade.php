<div class="sm:flex lg:flex-row items-center p-4 bg-white border-1 rounded-lg shadow-md sm:max-w-full">
    <a href="{{ $image }}" data-fancybox="{{$slug}}">
        <img class="object-cover h-48 xl:h-56 w-full sm:w-96 lg:w-80 xl:w-96" src="{{ $image }}" alt="">
    </a>
    <div class="flex flex-col justify-between sm:h-full sm:w-full sm:pl-4">
        <div>
            <h2 class="pt-4 sm:pt-0 text-xl">{{$title}}</h2>
            <div class="mt-4 product-description">
                {{$description}}
            </div>
        </div>
        <div class="flex items-end justify-between">
            <p class="text-storex-red text-xl sm:text-2xl">
                <span class="font-bold">{{ $price }} €</span> + @lang('PVN')
            </p>

            <x-sm-btn href="#contact-us" class="scroll-btn flex items-center">
                @lang('
                Pasūtīt
                ')
            </x-sm-btn>
        </div>
    </div>
</div>