<x-layout.admin>
    <x-slot name="title">Rediģēt produktu</x-slot>
    <x-admin.status-message/>
    <form
            class="w-full max-w-4xl rounded bg-white p-6 shadow-md"
            action="{{ route('admin.product.update', $product->id) }}"
            method="POST"
    >
        @method('PUT')
        @csrf
        <div class="mb-4">
            <label for="category_id"
                   class="mb-2 block font-medium text-gray-700">@lang('Esošā kategorija')</label>
            <select
                    id="category_id"
                    name="category_id"
                    class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
                <option value="{{$product->category->id}}" selected>{{$product->category->title}}</option>
                @foreach($categories as $category)
                    @if($category->id === $product->category->id)
                        @continue
                    @endif
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
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
                    value="{{ $product->title }}"
                    class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
        </div>
        @if($product->category->is_accessory)
            <div class="mb-2 md:w-1/3">
                <label for="product_price" class="mb-2 block font-medium text-gray-700">
                    @lang('Cena (bez EUR zīmes)')
                </label>
                <input
                        type="text"
                        id="product_price"
                        name="product_price"
                        value="{{ $product->price }}"
                        class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                />
            </div>
        @endif
        <div class="mb-4">
            <label for="product_description" class="mb-2 block font-medium text-gray-700">
                @lang('Apraksts')
            </label>
            <x-admin.description-text-area :name="'product_description'">
                {{ $product->description }}
            </x-admin.description-text-area>
        </div>
        <div class="mb-4">
            <label for="product_images" class="mb-2 block font-medium text-gray-700">@lang('Bildes')</label>
            <x-admin.file-upload
                    :images="$product->images->pluck('filename')->map(fn($filename) => '/products/' . $filename)->toArray()"
                    :id="'product_images'"
                    :name="'product_images'"
                    :required="true"
            />
        </div>
        <div class="mb-4 flex gap-4">
            <div class="flex items-center">
                <input
                        type="checkbox"
                        id="is_available"
                        name="is_available"
                        value="{{ $product->is_available }}"
                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-2 focus:ring-blue-500"
                        {{ $product->is_available ? 'checked' : '' }}
                />
                <label for="is_available" class="ml-2 text-sm text-gray-600">@lang('Rādīt mājaslapā')</label>
            </div>
            <div class="flex items-center">
                <input
                        type="checkbox"
                        id="is_featured"
                        name="is_featured"
                        value="{{ $product->is_featured }}"
                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-2 focus:ring-blue-500"
                        {{ $product->is_featured ? 'checked' : '' }}
                />
                <label for="is_featured" class="ml-2 text-sm text-gray-600">@lang('Atzīmēt kā populāru')</label>
            </div>
        </div>
        <div class="flex gap-4">
            <x-btn-secondary href="{{ route('admin.index') }}">
                {{ __('Atpakaļ') }}
            </x-btn-secondary>
            <x-btn :type="'button'">
                {{ __('Atjaunot') }}
            </x-btn>
        </div>
    </form>
</x-layout.admin>

