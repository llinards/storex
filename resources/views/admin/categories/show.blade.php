<x-layout.admin>
    <x-slot name="title">Atjaunot kategoriju</x-slot>
    <x-admin.status-message/>
    <form
        class="w-full max-w-4xl rounded bg-white p-6 shadow-md"
        action="{{ route('admin.category.update', $category->id) }}"
        method="POST"
    >
        @method('PUT')
        @csrf
        <div class="mb-4">
            <label for="category_title" class="mb-2 block font-medium text-gray-700">@lang('Nosaukums')</label>
            <input
                type="text"
                id="category_title"
                name="category_title"
                value="{{ $category->title }}"
                class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
            <x-input-error field="category_title"/>
        </div>
        <div class="mb-4">
            <label for="category_description" class="mb-2 block font-medium text-gray-700">
                @lang('Apraksts')
            </label>
            <x-admin.description-text-area :name="'category_description'">
                {{ $category->description }}
            </x-admin.description-text-area>
            <x-input-error field="category_description"/>
        </div>
        <div class="mb-2 w-1/4">
            <label for="category_title" class="mb-2 block font-medium text-gray-700">
                @lang('Platība (no/līdz)')
            </label>
            <p class="text-small mb-4 text-gray-500">
                @lang('Platība nav obligāti jāievada.')
            </p>
            <input
                type="text"
                id="category_area"
                name="category_area"
                value="{{ $category->area }}"
                class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
            <x-input-error field="category_area"/>
        </div>
        <div class="mb-4">
            <label for="category_image" class="mb-2 block font-medium text-gray-700">@lang('Titulbilde')</label>
            <x-admin.file-upload
                :id="'category_image'"
                :name="'category_image'"
                :images="['/categories/'.$category->image]"
            />
            <x-input-error field="category_image"/>
        </div>
        <div class="mb-4 flex gap-4">
            <div class="flex items-center">
                <input
                    type="checkbox"
                    id="is_available"
                    name="is_available"
                    value="{{ $category->is_available }}"
                    class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-2 focus:ring-blue-500"
                    {{ $category->is_available ? 'checked' : '' }}
                />
                <label for="is_available" class="ml-2 text-sm text-gray-600">@lang('Rādīt mājaslapā')</label>
            </div>
            <div class="flex items-center">
                <input
                    type="checkbox"
                    id="is_featured"
                    name="is_featured"
                    value="{{ $category->is_featured }}"
                    class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-2 focus:ring-blue-500"
                    {{ $category->is_featured ? 'checked' : '' }}
                />
                <label for="is_featured" class="ml-2 text-sm text-gray-600">@lang('Atzīmēt kā populāru')</label>
            </div>
            <div class="flex items-center">
                <input
                    type="checkbox"
                    id="is_accessory"
                    name="is_accessory"
                    value="{{ $category->is_accessory }}"
                    class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-2 focus:ring-blue-500"
                    {{ $category->is_accessory ? 'checked' : '' }}
                />
                <label for="is_accessory"
                       class="ml-2 text-sm text-gray-600">@lang('Šī ir kategorija priekš aksesuāru tipa produktiem')</label>
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
