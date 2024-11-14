<h2 class="text-center">@lang('STOREX klientu atsauksmes')</h2>

<div class="hidden bg-white px-4 sm:block sm:p-0">
    <div class="flex items-center justify-between border-b-2 border-storex-light-grey"></div>
    <div class="gap-10 sm:grid sm:grid-cols-1 sm:p-0 sm:py-4 lg:grid-cols-3">
        <x-reviews.content>
            <x-slot name="heading">@lang('Dovydas Butkus')</x-slot>
            <x-slot name="content">
                @lang('Nelabvēlīgos laikapstākļos bija nepieciešams, lai liellopiem
                nesaltu, un
                angārs ātri atrisināja visas radušās problēmas. Liellopiem bija silti ne tikai rudenī, bet
                arī visu
                ziemu. Iesaku tādu angāru visiem zemniekiem!')
            </x-slot>
        </x-reviews.content>
        <x-reviews.content>
            <x-slot name="heading">@lang('Martin Rebane')</x-slot>
            <x-slot name="content">
                @lang('Pirmo angāru iegādājos koksnes glabāšanai, nākamgad iegādājos otro. Tagad visa
                koksnes ražošana tiek veikta tenta angāros, arī produkcijas uzglabāšana. Man kopumā ir trīs angāri,
                un esmu ļoti apmierināts.')
            </x-slot>
        </x-reviews.content>
        <x-reviews.content>
            <x-slot name="heading">@lang('Oliver Nieminen')</x-slot>
            <x-slot name="content">
                @lang('Jau piecus gadus mēs glabājam celtniecības materiālus tenta angāros. Tie ir
                ļoti ērti, jo, mainoties celtniecības objektiems, angāru var ātri pārvietot uz citu nepieciešamo
                vietu.')
            </x-slot>
        </x-reviews.content>
    </div>
</div>

<div id="controls-carousel" class="grid grid-cols-12 pb-4 sm:hidden" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative order-2 col-span-10 h-32 overflow-hidden rounded-lg">
        <!-- Item 1 -->
        <div class="flex hidden items-center duration-300 ease-in-out" data-carousel-item="active">
            <x-reviews.content>
                <x-slot name="heading">@lang('Dovydas Butkus')</x-slot>
                <x-slot name="content">
                    @lang('Nelabvēlīgos laikapstākļos bija nepieciešams, lai liellopiem
                    nesaltu, un
                    angārs ātri atrisināja visas radušās problēmas. Liellopiem bija silti ne tikai rudenī, bet
                    arī visu
                    ziemu. Iesaku tādu angāru visiem zemniekiem!')
                </x-slot>
            </x-reviews.content>
        </div>
        <!-- Item 2 -->
        <div class="flex hidden items-center duration-300 ease-in-out" data-carousel-item>
            <x-reviews.content>
                <x-slot name="heading">@lang('Martin Rebane')</x-slot>
                <x-slot name="content">
                    @lang('Pirmo angāru iegādājos koksnes glabāšanai, nākamgad iegādājos otro. Tagad visa
                    koksnes ražošana tiek veikta tenta angāros, arī produkcijas uzglabāšana. Man kopumā ir trīs angāri,
                    un esmu ļoti apmierināts.')
                </x-slot>
            </x-reviews.content>
        </div>
        <!-- Item 3 -->
        <div class="flex hidden items-center duration-300 ease-in-out" data-carousel-item>
            <x-reviews.content>
                <x-slot name="heading">@lang('Oliver Nieminen')</x-slot>
                <x-slot name="content">
                    @lang('Jau piecus gadus mēs glabājam celtniecības materiālus tenta angāros. Tie ir
                    ļoti ērti, jo, mainoties celtniecības objektiems, angāru var ātri pārvietot uz citu nepieciešamo
                    vietu.')
                </x-slot>
            </x-reviews.content>
        </div>
    </div>
    <!-- Slider controls -->
    <div class="order-1 col-span-1 flex justify-end">
        <button
            type="button"
            class="group flex h-full cursor-pointer items-center justify-center focus:outline-none"
            data-carousel-prev
        >
            <svg
                class="h-4 w-4 text-storex-red"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 6 10"
            >
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1"
                    d="M5 1 1 5l4 4"
                />
            </svg>
        </button>
    </div>
    <div class="order-3 col-span-1 flex">
        <button
            type="button"
            class="group flex h-full cursor-pointer items-center justify-center focus:outline-none"
            data-carousel-next
        >
            <svg
                class="h-4 w-4 text-storex-red"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 6 10"
            >
                <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1"
                    d="m1 9 4-4-4-4"
                />
            </svg>
        </button>
    </div>
</div>
