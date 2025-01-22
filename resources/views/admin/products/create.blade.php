<x-layout.admin>
    <x-slot name="title">Izveidot jaunu produktu</x-slot>
    <x-admin.status-message/>
    <form
            class="w-full max-w-4xl rounded bg-white p-6 shadow-md"
            action="{{ route('admin.product.store') }}"
            method="POST"
    >
        @method('POST')
        @csrf
        <div class="mb-4">
            <label for="category_id"
                   class="mb-2 block font-medium text-gray-700">@lang('Izvēlies kategoriju')</label>
            <select
                    id="category_id"
                    name="category_id"
                    class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    onchange="showPriceBlock(event)"
            >
                <option value="" disabled selected>@lang('Izvēlies kategoriju')</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" data-is-accessory="{{ $category->is_accessory }}">
                        {{ $category->title }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="product_title"
                   class="mb-2 block font-medium text-gray-700">@lang('Produkta nosaukums')</label>
            <input
                    type="text"
                    id="product_title"
                    name="product_title"
                    class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
        </div>
        <div id="price-block" class="mb-2 md:w-1/3 hidden">
            <label for="product_price" class="mb-2 block font-medium text-gray-700">
                @lang('Cena (bez EUR zīmes)')
            </label>
            <input
                    type="text"
                    id="product_price"
                    name="product_price"
                    class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
        </div>
        <div class="mb-4">
            <label for="product_description" class="mb-2 block font-medium text-gray-700">
                @lang('Apraksts')
            </label>
            <x-admin.description-text-area :name="'product_description'"/>
        </div>
        <div class="mb-4">
            <label for="product_images" class="mb-2 block font-medium text-gray-700">@lang('Bildes')</label>
            <x-admin.file-upload :id="'product_images'" :name="'product_images'" :required="true"/>
        </div>
        <div id="product-variant-block" class="mb-4 hidden">
            <div id="variant-container">
            </div>
            <button
                    type="button"
                    class="bg-green-500 text-white px-4 py-2 rounded-lg"
                    onclick="addVariantGroup()"
            >@lang('Pievienot variantus/modeļus')</button>
        </div>

        <div class="mb-4 flex gap-4">
            <div class="flex items-center">
                <input
                        type="checkbox"
                        id="is_available"
                        name="is_available"
                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-2 focus:ring-blue-500"
                />
                <label for="is_available" class="ml-2 text-sm text-gray-600">@lang('Rādīt mājaslapā')</label>
            </div>
            <div class="flex items-center">
                <input
                        type="checkbox"
                        id="is_featured"
                        name="is_featured"
                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-2 focus:ring-blue-500"
                />
                <label for="is_featured" class="ml-2 text-sm text-gray-600">@lang('Atzīmēt kā populāru')</label>
            </div>
        </div>
        <div class="flex gap-4">
            <x-btn-secondary href="{{ route('admin.index') }}">
                {{ __('Atpakaļ') }}
            </x-btn-secondary>
            <x-btn :type="'button'">
                {{ __('Izveidot') }}
            </x-btn>
        </div>
    </form>

    <script>
        function showPriceBlock(event) {
            const selectedCategory = event.target.options[event.target.selectedIndex];
            const showPrice = selectedCategory.getAttribute('data-is-accessory');
            const priceBlock = document.getElementById('price-block');
            const productVariantBlock = document.getElementById('product-variant-block');

            if (showPrice === '1') {
                productVariantBlock.classList.add('hidden');
                priceBlock.classList.remove('hidden');
            } else {
                productVariantBlock.classList.remove('hidden');
                priceBlock.classList.add('hidden');
            }
        }

        let variantIndex = 1;

        function addVariantGroup() {
            const container = document.getElementById('variant-container');
            const div = document.createElement('div');
            div.classList.add('variant-group', 'flex', 'flex-col', 'gap-2', 'mb-4', 'border', 'p-4', 'rounded-lg');
            div.innerHTML = `
            <div>
                <div class="flex gap-4 flex-wrap justify-center mt-2">
                     <div>
                        <label for="product_variant[${variantIndex}][title]" class="block text-sm font-medium text-gray-700">
                            @lang('Nosaukums')
            </label>
            <input
                type="text"
                name="product_variant[${variantIndex}][title]"
                            class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                    </div>
                        <div>
                            <label for="product_variant[${variantIndex}][price]" class="block text-sm font-medium text-gray-700">
                                @lang('Cena (EUR)')
            </label>
            <input
             type="number"
             step=".01"
                name="product_variant[${variantIndex}][price]"
                                class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                            />
                        </div>
                        <div>
                            <label for="product_variant[${variantIndex}][length]" class="block text-sm font-medium text-gray-700">
                                @lang('Garums (metros)')
            </label>
            <input
             type="number"
             step=".01"
                name="product_variant[${variantIndex}][length]"
                                class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                            />
                        </div>
                        <div>
                            <label for="product_variant[${variantIndex}][width]" class="block text-sm font-medium text-gray-700">
                                @lang('Platums (metros)')
            </label>
            <input
               type="number"
               step=".01"
                name="product_variant[${variantIndex}][width]"
                                class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                            />
                        </div>
                        <div>
                            <label for="product_variant[${variantIndex}][height]" class="block text-sm font-medium text-gray-700">
                                @lang('Augstums (metros)')
            </label>
            <input
                type="number"
                step=".01"
                name="product_variant[${variantIndex}][height]"
                                class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                            />
                        </div>

                    <div>
                        <label for="product_variant[${variantIndex}][space_between_arches]" class="block text-sm font-medium text-gray-700">
                            @lang('Attālums starp arkām (metros)')
            </label>
            <input
              type="number"
              step=".01"
                name="product_variant[${variantIndex}][space_between_arches]"
                            class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                    </div>
                    <div>
                        <label for="product_variant[${variantIndex}][gate_size]" class="block text-sm font-medium text-gray-700">
                            @lang('Vārtu izmērs PxA (metros)')
            </label>
            <input
                type="text"
                name="product_variant[${variantIndex}][gate_size]"
                            class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                    </div>
                     <div>
                        <label for="product_variant[${variantIndex}][area]" class="block text-sm font-medium text-gray-700">
                            @lang('Laukums (kvadrātmetros)')
            </label>
            <input
              type="number"
              step=".01"
                name="product_variant[${variantIndex}][area]"
                            class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                    </div>
                     <div>
                        <label for="product_variant[${variantIndex}][pvc_tent]" class="block text-sm font-medium text-gray-700">
                            @lang('PVC materiāls (g uz kvadrātmetru)')
            </label>
            <input
                type="number"
                step=".01"
                name="product_variant[${variantIndex}][pvc_tent]"
                            class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                    </div>
                    <div>
                        <label for="product_variant[${variantIndex}][frame_tube]" class="block text-sm font-medium text-gray-700">
                            @lang('Rāmja caurule')
            </label>
            <input
                type="text"
                name="product_variant[${variantIndex}][frame_tube]"
                            class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />
                    </div>
                </div>
                <div class="float-right">
                <button
                    type="button"
                    class="mt-2 bg-red-500 text-white px-4 py-2 rounded-lg"
                    onclick="removeVariantGroup(this)"
                ><i class="bi bi-trash"></i></button>
            </div>
        `;
            container.appendChild(div);
            variantIndex++;
        }

        function removeVariantGroup(button) {
            const group = button.parentElement.parentElement.parentElement;
            group.remove();
        }

        document.addEventListener('DOMContentLoaded', function () {
            showPriceBlock({target: document.getElementById('category_id')});
        });
    </script>
</x-layout.admin>
