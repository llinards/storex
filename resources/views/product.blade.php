<x-layout.app>
    <x-slot name="title">{{ $product->title }}</x-slot>
    {{-- TODO: Sanitize description --}}
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
                    <x-slot name="title">{{ $variant->title }}</x-slot>

                    @php
                        $attributes = [
                            'length' => $variant->length,
                            'width' => $variant->width,
                            'height' => $variant->height,
                            'space_between_arches' => $variant->space_between_arches,
                            'gate_size' => $variant->gate_size,
                            'area' => $variant->area,
                            'pvc_tent' => $variant->pvc_tent,
                            'frame_tube' => $variant->frame_tube,
                            'attachment' => optional($variant->attachment)->filename,
                        ];
                    @endphp

                    @foreach ($attributes as $key => $value)
                        @if (!empty($value))
                            <x-slot :name="$key">{{ $value }}</x-slot>
                        @endif
                    @endforeach

                    <x-slot name="price">{{ number_format($variant->price, 0, '.', ' ') }} €</x-slot>
                @endforeach
            </x-product.pricelist-wrapper>
        </div>
    @endif

    <div style="background-image: url('{{ asset('images/storex-background.png') }}')" class="bg-cover bg-center">
        <div class="container mx-auto px-4 py-8 sm:py-12 lg:px-6 xl:px-8">
            <x-contact-us></x-contact-us>
        </div>
    </div>
</x-layout.app>

<script type="module">
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
