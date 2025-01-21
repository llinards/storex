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

            if (showPrice === '1') {
                priceBlock.classList.remove('hidden');
            } else {
                priceBlock.classList.add('hidden');
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            showPriceBlock({target: document.getElementById('category_id')});
        });
    </script>
</x-layout.admin>
