<x-layout.app>
    <x-slot name="title">{{ $product->title }}</x-slot>
    {{-- TODO: Sanitze description --}}
    <x-slot name="description">{{ $product->description }}</x-slot>
    <x-slot name="image">{{ asset('images/storex-alaska-s-front-page.jpg') }}</x-slot>
    <div class="container mx-auto pb-8 pt-28 sm:pb-12 sm:pt-12 lg:px-6 xl:px-8">
        <x-product.card :product="$product"></x-product.card>
    </div>

    @if($product->variants->isNotEmpty())
        <div class="container mx-auto px-4 pb-8 sm:pb-12 lg:px-6 xl:px-8">
            <h2 class="pb-4 text-center">@lang('Tehniskā specifikācija')</h2>
            <x-product.pricelist-wrapper>
                @foreach ($product->variants as $variant)
                    @php
                        $raw_price = str_replace(' ', '', $variant->price); // Remove spaces
                        $hasAsterisk = strpos($raw_price, '*') !== false; // Check if * exists
                        $numeric_price = (float) preg_replace('/[^0-9.]/', '', $raw_price); // Extract only numbers and decimals
                        $formatted_price = number_format($numeric_price, 0, '.', ' '); // Format with thousand separators
                    @endphp
                    <x-product.entry>
                        <x-slot name="title">{{ $variant->title }}</x-slot>
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
                            name="price">
                            {{ $formatted_price }}{{ $hasAsterisk ? ' €**' : ' €' }}
                        </x-slot>
                    </x-product.entry>
                @endforeach
            </x-product.pricelist-wrapper>
        </div>
    @endif
    <div class="container mx-auto px-4 pb-8 sm:pb-12 lg:px-6 xl:px-8">
        <div class="border-t-1 pt-2">
            <p class="py-2">
                @lang('Cena bez uzstādīšanas un piegādes. Iespēja pasūtīt zaļas un pelēkas krāsas tentis.')
            </p>
        </div>
        <div class="product-description">
            {!! $product->additional_info !!}
        </div>
    </div>

    <div style="background-image: url('{{ asset('images/storex-background.png') }}')" class="bg-cover bg-center">
        <div class="container mx-auto px-4 py-8 sm:py-12 lg:px-6 xl:px-8">
            <x-contact-us></x-contact-us>
        </div>
    </div>
</x-layout.app>
<script type="module">
    function hideEmptyTableColumns(selectors) {
        selectors.forEach(selector => {
            const elements = document.querySelectorAll(selector);

            if (elements.length > 0) {
                const hasTextContent = Array.from(elements)
                    .slice(1)
                    .some(item => item.textContent.trim() !== '');

                if (!hasTextContent) {
                    elements.forEach(item => item.classList.add('hidden'));
                }
            }
        });
    }

    const tableColumns = [
        '.length',
        '.width',
        '.height',
        '.space-between-arches',
        '.gate-size',
        '.area',
        '.pvc-tent',
        '.frame-tube'
    ];

    hideEmptyTableColumns(tableColumns);

    function updatePrice() {
        const allPrices = document.querySelectorAll('[id^="product-price"]');
        allPrices.forEach((price) => {
            price.classList.add('hidden');
        });
        const selectedRadio = document.querySelector('input[name="product_variant"]:checked');
        if (selectedRadio) {
            const selectedId = selectedRadio.id;
            const selectedPrice = document.getElementById(`product-price_${selectedId}`);
            if (selectedPrice) {
                selectedPrice.classList.remove('hidden');
            }
        }
    }

    const selectedProductVariantInput = document.getElementById('selected-product-variant');

    function handleRadioChange(event) {
        selectedProductVariantInput.value = event.target.value;
    }

    const variantRadios = document.querySelectorAll('input[name="product_variant"]');
    variantRadios.forEach((radio) => {
        radio.addEventListener('change', updatePrice);
    });
    document.addEventListener('DOMContentLoaded', updatePrice);

    variantRadios.forEach((radio) => {
        radio.addEventListener('change', handleRadioChange);
    });

    const selectedRadio = document.querySelector('input[name="product_variant"]:checked');
    if (selectedRadio) {
        selectedProductVariantInput.value = selectedRadio.value;
    }
</script>
