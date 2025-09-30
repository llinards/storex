<x-layout.admin>
    <x-slot name="title">Izveidot jaunu produktu</x-slot>
    <x-admin.status-message/>
    <form class="w-full max-w-4xl rounded bg-white p-6 shadow-md" action="{{ route('admin.product.store') }}"
          method="POST">
        @csrf
        <div class="mb-4">
            <label for="category_id" class="mb-2 block font-medium text-gray-700">@lang('Izvēlies kategoriju')</label>
            <select id="category_id" name="category_id"
                    class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    onchange="showPriceBlock(event)">
                <option value="" disabled selected>@lang('Izvēlies kategoriju')</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                            data-is-accessory="{{ $category->is_accessory }}">{{ $category->title }}</option>
                @endforeach
            </select>
            <x-input-error field="category_id"/>
        </div>
        <div class="mb-4">
            <label for="product_title" class="mb-2 block font-medium text-gray-700">@lang('Produkta nosaukums')</label>
            <input type="text" id="product_title" name="product_title"
                   class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
            <x-input-error field="product_title"/>
        </div>
        <div id="price-block" class="mb-2 md:w-1/3 hidden">
            <label for="product_price"
                   class="mb-2 block font-medium text-gray-700">@lang('Cena (bez EUR zīmes)')</label>
            <input type="text" id="product_price" name="product_price"
                   class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
            <x-input-error field="product_price"/>
        </div>
        <div class="mb-4">
            <label for="product_description" class="mb-2 block font-medium text-gray-700">@lang('Apraksts')</label>
            <x-admin.description-text-area name="product_description"/>
            <x-input-error field="product_description"/>
        </div>
        <h4 class="font-medium text-gray-700 mb-2">@lang('Produkta kopsavilkums')</h4>
        <div id="product-variant-summary" class="mb-4 flex gap-2">
            <div>
                <label for="available_length"
                       class="block text-sm font-medium text-gray-700">@lang('Garums')</label>
                <input type="text" id="available_length" name="available_length"
                       placeholder="No/līdz"
                       class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                <x-input-error field="available_length"/>
            </div>
            <div>
                <label for="available_width"
                       class="block text-sm font-medium text-gray-700">@lang('Platums')</label>
                <input type="text" id="available_width" name="available_width"
                       placeholder="No/līdz"
                       class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                <x-input-error field="available_width"/>
            </div>
            <div>
                <label for="available_height"
                       class="block text-sm font-medium text-gray-700">@lang('Augstums')</label>
                <input type="text" id="available_height" name="available_height"
                       placeholder="No/līdz"
                       class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                <x-input-error field="available_height"/>
            </div>
            <div>
                <label for="available_area"
                       class="block text-sm font-medium text-gray-700">@lang('Platība')</label>
                <input type="text" id="available_area" name="available_area"
                       placeholder="No/līdz"
                       class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                <x-input-error field="available_area"/>
            </div>
        </div>
        <div class="mb-4">
            <label for="product_images" class="mb-2 block font-medium text-gray-700">@lang('Bildes')</label>
            <x-admin.file-upload id="product_images" name="product_images"/>
        </div>
        <div id="product-variant-block" class="mb-4 hidden">
            <div id="variant-container"></div>
            <button type="button" class="bg-green-500 text-white px-4 py-2 rounded-lg"
                    onclick="addVariantGroup()">@lang('Pievienot variantus/modeļus')</button>
        </div>
        <div class="mb-4 flex gap-4">
            <div class="flex items-center">
                <input type="checkbox" id="is_available" name="is_available"
                       class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-2 focus:ring-blue-500"/>
                <label for="is_available" class="ml-2 text-sm text-gray-600">@lang('Rādīt mājaslapā')</label>
            </div>
            <div class="flex items-center">
                <input type="checkbox" id="is_featured" name="is_featured"
                       class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-2 focus:ring-blue-500"/>
                <label for="is_featured" class="ml-2 text-sm text-gray-600">@lang('Atzīmēt kā populāru')</label>
            </div>
        </div>
        <div class="flex gap-4">
            <x-btn-secondary href="{{ route('admin.index') }}">{{ __('Atpakaļ') }}</x-btn-secondary>
            <x-btn type="button">{{ __('Izveidot') }}</x-btn>
        </div>
    </form>

    <script>
        function showPriceBlock(event) {
            const selectedCategory = event.target.options[event.target.selectedIndex];
            const showPrice = selectedCategory.getAttribute('data-is-accessory');
            const priceBlock = document.getElementById('price-block');
            const productVariantBlock = document.getElementById('product-variant-block');
            const productVariantSummaryBlock = document.getElementById('product-variant-summary');

            if (showPrice === '1') {
                productVariantBlock.classList.add('hidden');
                priceBlock.classList.remove('hidden');
                productVariantSummaryBlock.classList.add('hidden');
            } else {
                productVariantBlock.classList.remove('hidden');
                priceBlock.classList.add('hidden');
                productVariantSummaryBlock.classList.remove('hidden');
            }
        }

        let variantIndex = 1;

        function addVariantGroup() {
            const container = document.getElementById('variant-container');
            const div = document.createElement('div');
            div.classList.add('variant-group', 'flex', 'flex-col', 'gap-2', 'mb-4', 'border', 'p-4', 'rounded-lg');
            div.innerHTML = `
                <div class="flex gap-4 flex-wrap justify-center mt-2">
                    ${createVariantInput('title', 'Nosaukums')}
                    ${createVariantInput('price', 'Cena (EUR)')}
                    ${createVariantInput('length', 'Garums (metros)')}
                    ${createVariantInput('width', 'Platums (metros)')}
                    ${createVariantInput('height', 'Augstums (metros)')}
                    ${createVariantInput('space_between_arches', 'Attālums starp arkām (metros)')}
                    ${createVariantInput('gate_size', 'Vārtu izmērs PxA (metros)')}
                    ${createVariantInput('area', 'Laukums (kvadrātmetros)')}
                    ${createVariantInput('pvc_tent', 'PVC materiāls (g uz kvadrātmetru)')}
                    ${createVariantInput('frame_tube', 'Rāmja caurule')}
                </div>
                <div class="float-right">
                    <button type="button" class="mt-2 bg-red-500 text-white px-4 py-2 rounded-lg" onclick="removeVariantGroup(this)"><i class="bi bi-trash"></i></button>
                </div>
            `;
            container.appendChild(div);
            variantIndex++;
        }

        function createVariantInput(name, label, type = 'text', step = '') {
            return `
                <div>
                    <label for="product_variant[${variantIndex}][${name}]" class="block text-sm font-medium text-gray-700">@lang('${label}')</label>
                    <input type="${type}" name="product_variant[${variantIndex}][${name}]" step="${step}" class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                </div>
            `;
        }

        function removeVariantGroup(button) {
            button.closest('.variant-group').remove();
        }

        document.addEventListener('DOMContentLoaded', function () {
            showPriceBlock({target: document.getElementById('category_id')});
        });
    </script>
</x-layout.admin>
