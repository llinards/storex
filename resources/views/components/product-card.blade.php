<div class="border-1 my-8 flex max-w-sm flex-col rounded-lg border-storex-light-grey bg-white shadow sm:my-0">
    <a href="#">
        <img class="rounded-t-lg" src="{{ $productImage ?? '' }}" alt="" />
    </a>
    <div class="flex flex-grow flex-col p-5">
        <div class="flex-grow">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight">
                    {{ $productHeading }}
                </h5>
            </a>
            <p>
                {{ $productDescription }}
            </p>
        </div>
    </div>
    <a href="#" class="mt-auto block px-5 pb-5 text-right font-bold text-storex-red sm:text-xl">
        {{ $productLink }}
    </a>
</div>
