<x-layout.app>
    <x-slot name="title">@lang('Cenrādis')</x-slot>
    <div class="container mx-auto px-4 pt-28 sm:pt-12 lg:px-6 xl:px-8">
        <h1>@lang('Visi tenta angāra modeļi')</h1>
    </div>

    @if($productVariants->isNotEmpty())
        <div class="container mx-auto px-4 pb-8 sm:pb-12 lg:px-6 xl:px-8">
            <h2 class="pb-4 text-center">@lang('Tehniskā specifikācija')</h2>
            <x-product.pricelist-wrapper>

                @foreach ($productVariants as $variant)
                    @php
                        $raw_price = str_replace(' ', '', $variant->price);
                        $hasAsterisk = strpos($raw_price, '*') !== false;
                        $numeric_price = (float) preg_replace('/[^0-9.]/', '', $raw_price);
                        $formatted_price = number_format($numeric_price, 0, '.', ' ');
                    @endphp
                    <x-product.entry>
                        <x-slot name="title"><a
                                href="{{ route('product.show', ['category' => $variant->product->category->slug, 'product' => $variant->product->slug]) }}">
                                {{ $variant->title }}
                            </a>
                        </x-slot>
                        <x-slot name="length">{{ $variant->length }}</x-slot>
                        <x-slot name="width">{{ $variant->width }}</x-slot>
                        <x-slot name="height">{{ $variant->height }}</x-slot>
                        <x-slot name="space_between_arches">{{ $variant->space_between_arches }}</x-slot>
                        <x-slot name="gate_size">{{ $variant->gate_size }}</x-slot>
                        <x-slot name="area">{{ $variant->area }}</x-slot>
                        <x-slot name="pvc_tent">{{ $variant->pvc_tent }}</x-slot>
                        <x-slot name="frame_tube">{{ $variant->frame_tube }}</x-slot>
                        @if ($variant->attachment)
                            <x-slot name="attachment">{{ $variant->attachment->filename }}</x-slot>
                        @endif
                        <x-slot
                            name="price">{{ $formatted_price }}{{ $hasAsterisk ? ' €*' : ' €' }}
                        </x-slot>
                    </x-product.entry>
                @endforeach

            </x-product.pricelist-wrapper>
        </div>
    @endif
    <div class="container mx-auto px-4 pb-8 sm:pb-12 lg:px-6 xl:px-8">
        <div class="border-t-1 pt-4">
            <p class="py-2 font-bold">
                @lang('Papildus opcijas'):
            </p>
            <x-footer-link>
                <span class="text-storex-red">
                    @lang('Aizmugurējais panelis')
                    €500
                </span>
                +
                @lang('PVN')
            </x-footer-link>
            <x-footer-link>
                <span class="text-storex-red">@lang('Priekšējais panelis')</span>
                @lang('ar iestrādātiem vārtiem')
                <span class="text-storex-red">€550</span>
                (2.6x3.1) +
                @lang('PVN')
            </x-footer-link>
        </div>
    </div>
</x-layout.app>
