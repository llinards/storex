<div class="border-1 max-w my-8 flex flex-col rounded-lg border-storex-light-grey bg-white shadow sm:my-0">
    <a {{ $attributes }}>
        <img class="rounded-t-lg" src="{{ $productImage ?? '' }}" alt="" />
    </a>
    <div class="flex flex-grow flex-col p-5">
        <div class="flex-grow">
            <h5 class="text-2xl font-bold tracking-tight">
                {{ $productHeading }}
            </h5>
            <p>
                {{ $productDescription }}
            </p>
        </div>
    </div>
    <a class="mt-auto block px-5 pb-5 text-right font-bold text-storex-red sm:text-xl" {{ $attributes }}>
        {{ $productLink }}
    </a>
</div>
