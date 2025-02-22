<x-layout.admin>
    <x-slot name="title">Rediģēt produktu</x-slot>
    <x-admin.status-message/>
    <form id="update-product-{{$product->id}}" class="w-full max-w-4xl rounded bg-white p-6 shadow-md"
          action="{{ route('admin.product.update', $product->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-4">
            <label for="category_id" class="mb-2 block font-medium text-gray-700">@lang('Esošā kategorija')</label>
            <select id="category_id" name="category_id"
                    class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="{{$product->category->id}}" selected>{{$product->category->title}}</option>
                @foreach($categories as $category)
                    @continue($category->id === $product->category->id)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="product_title" class="mb-2 block font-medium text-gray-700">@lang('Produkta nosaukums')</label>
            <input type="text" id="product_title" name="product_title" value="{{ $product->title }}"
                   class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
        </div>
        @if($product->category->is_accessory)
            <div class="mb-2 md:w-1/3">
                <label for="product_price"
                       class="mb-2 block font-medium text-gray-700">@lang('Cena (bez EUR zīmes)')</label>
                <input type="text" id="product_price" name="product_price" value="{{ $product->price }}"
                       class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
            </div>
        @endif
        <div class="mb-4">
            <label for="product_description" class="mb-2 block font-medium text-gray-700">@lang('Apraksts')</label>
            <x-admin.description-text-area
                name="product_description">{{ $product->description }}</x-admin.description-text-area>
        </div>
        @if(!$product->category->is_accessory)
            <h4 class="font-medium text-gray-700 mb-2">@lang('Produkta kopsavilkums')</h4>
            <div id="product-variant-summary" class="mb-4 flex gap-2">
                <div>
                    <label for="available_length"
                           class="block text-sm font-medium text-gray-700">@lang('Garums')</label>
                    <input type="text" id="available_length" name="available_length"
                           placeholder="No/līdz"
                           value="{{ $product->available_length }}"
                           class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                </div>
                <div>
                    <label for="available_width"
                           class="block text-sm font-medium text-gray-700">@lang('Platums')</label>
                    <input type="text" id="available_width" name="available_width"
                           placeholder="No/līdz"
                           value="{{ $product->available_width }}"
                           class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                </div>
                <div>
                    <label for="available_height"
                           class="block text-sm font-medium text-gray-700">@lang('Augstums')</label>
                    <input type="text" id="available_height" name="available_height"
                           placeholder="No/līdz"
                           value="{{ $product->available_height }}"
                           class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                </div>
                <div>
                    <label for="available_area"
                           class="block text-sm font-medium text-gray-700">@lang('Platība')</label>
                    <input type="text" id="available_area" name="available_area"
                           placeholder="No/līdz"
                           value="{{ $product->available_area }}"
                           class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                </div>
            </div>
        @endif
        <div class="mb-4">
            <label for="product_images" class="mb-2 block font-medium text-gray-700">@lang('Bildes')</label>
            <x-admin.file-upload
                :images="$product->images->pluck('filename')->map(fn($filename) => '/products/' . $filename)->toArray()"
                id="product_images" name="product_images" required/>
        </div>

        <div id="product-variant-block" class="mb-4">
            <div id="variant-container">
                @if($product->variants->isNotEmpty())
                    @foreach($product->variants as $index => $variant)
                        <div class="variant-group flex flex-col gap-2 mb-4 border p-4 rounded-lg">
                            <div class="flex gap-4 flex-wrap justify-center mt-2">
                                <input type="number" class="hidden" value="{{$variant->id}}"
                                       name="product_variant[{{$index}}][id]">
                                @foreach(['title' => 'Nosaukums', 'price' => 'Cena (EUR)', 'length' => 'Garums (metros)', 'width' => 'Platums (metros)', 'height' => 'Augstums (metros)', 'space_between_arches' => 'Attālums starp arkām (metros)', 'gate_size' => 'Vārtu izmērs PxA (metros)', 'area' => 'Laukums (kvadrātmetros)', 'pvc_tent' => 'PVC materiāls (g uz kvadrātmetru)', 'frame_tube' => 'Rāmja caurule'] as $field => $label)
                                    <div>
                                        <label for="product_variant[{{$index}}][{{$field}}]"
                                               class="block text-sm font-medium text-gray-700">@lang($label)</label>
                                        <input
                                            type="text"
                                            value="{{ $variant->$field }}"
                                            name="product_variant[{{$index}}][{{$field}}]"
                                            class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"/>
                                    </div>
                                @endforeach
                            </div>
                            <div class="float-left">
                                <a
                                    class="mt-2 bg-red-500 text-white px-4 py-2 rounded-lg"
                                    href="{{route('admin.product-variant.destroy', $variant->id)}}"><i
                                        class="bi bi-trash"></i></a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            @if(!$product->category->is_accessory)
                <button type="button" class="bg-green-500 text-white px-4 py-2 rounded-lg"
                        onclick="addVariantGroup()">@lang('Pievienot variantus/modeļus')</button>
            @endif
        </div>
        @if(!$product->category->is_accessory)
            <div class="mb-4">
                <label for="product_additional_info"
                       class="mb-2 block font-medium text-gray-700">@lang('Papildus informācija')</label>
                <textarea id="product_additional_info" name="product_additional_info"
                          class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                  {{ $product->additional_info }}
                </textarea>
            </div>
        @endif
        <div class="mb-4 flex gap-4">
            <div class="flex items-center">
                <input type="checkbox" id="is_available" name="is_available" value="{{ $product->is_available }}"
                       class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-2 focus:ring-blue-500" {{ $product->is_available ? 'checked' : '' }}/>
                <label for="is_available" class="ml-2 text-sm text-gray-600">@lang('Rādīt mājaslapā')</label>
            </div>
            <div class="flex items-center">
                <input type="checkbox" id="is_featured" name="is_featured" value="{{ $product->is_featured }}"
                       class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-2 focus:ring-blue-500" {{ $product->is_featured ? 'checked' : '' }}/>
                <label for="is_featured" class="ml-2 text-sm text-gray-600">@lang('Atzīmēt kā populāru')</label>
            </div>
        </div>
        <div class="flex gap-4">
            <x-btn-secondary href="{{ route('admin.index') }}">{{ __('Atpakaļ') }}</x-btn-secondary>
            <x-btn form="update-product-{{$product->id}}" :type="'button'">{{ __('Atjaunot') }}</x-btn>
        </div>
    </form>
    <script>
        let variantIndex = document.querySelectorAll('.variant-group').length;

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

            // Increment the index after appending the new variant group
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
    </script>
</x-layout.admin>
