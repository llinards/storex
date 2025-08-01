<x-layout.admin>
    <x-slot name="title">Izveidot jaunu kategoriju</x-slot>
    <x-admin.status-message/>
    <form
        class="w-full max-w-4xl rounded bg-white p-6 shadow-md"
        action="{{ route('admin.category.store') }}"
        method="POST"
    >
        @method('POST')
        @csrf
        <div class="mb-4">
            <label for="category_title" class="mb-2 block font-medium text-gray-700">@lang('Nosaukums')</label>
            <input
                type="text"
                id="category_title"
                name="category_title"
                value="{{ old('category_title') }}"
                class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
            <x-input-error field="category_title"/>
        </div>
        <div class="mb-4">
            <label for="category_description" class="mb-2 block font-medium text-gray-700">
                @lang('Apraksts')
            </label>
            <x-admin.description-text-area :name="'category_description'"/>
            <x-input-error field="category_description"/>
        </div>
        <div class="mb-4 md:w-1/4">
            <label for="category_title" class="block font-medium text-gray-700">
                @lang('Platība (no/līdz)')
            </label>
            <p class="text-small mb-2 text-gray-500">
                @lang('Platība nav obligāti jāievada.')
            </p>
            <input
                type="text"
                id="category_area"
                name="category_area"
                class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
            <x-input-error field="category_area"/>
        </div>
        <div class="mb-4">
            <label for="category_image" class="mb-2 block font-medium text-gray-700">@lang('Titulbilde')</label>
            <x-admin.file-upload :id="'category_image'" :name="'category_image'"/>
            <x-input-error field="category_image"/>
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
                    id="is_accessory"
                    name="is_accessory"
                    class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-2 focus:ring-blue-500"
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
                {{ __('Izveidot') }}
            </x-btn>
        </div>
    </form>
</x-layout.admin>
