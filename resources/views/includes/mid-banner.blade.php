<x-banner href="/test">
    <x-slot name="backgroundImage">{{ asset('images/placeholder-tent-1.jpg') }}</x-slot>
    <x-slot name="heading">@lang('Viegli, ātri un uzticami - tenta angāri jebkurai vajadzībai!')</x-slot>
    <x-slot name="subText">@lang('Izvēlieties efektivitāti ar STOREX')</x-slot>
    <x-slot name="btnOne">
        {{--
            <div class="pt-4">
            <x-btn href="#">@lang('Uzzināt vairāk')</x-btn>
            </div>
        --}}
    </x-slot>
</x-banner>
