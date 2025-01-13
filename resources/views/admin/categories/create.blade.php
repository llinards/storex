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
                class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
        </div>
        <div class="mb-4">
            <label for="category_description" class="mb-2 block font-medium text-gray-700">
                @lang('Apraksts')
            </label>
            <x-admin.description-text-area :name="'category_description'"/>
        </div>
        <div class="w-1/5">
            <label for="category_title" class="mb-2 block font-medium text-gray-700">@lang('Platība')</label>
            <input
                type="text"
                id="category_area"
                name="category_area"
                class="w-full rounded-lg border px-3 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            />
        </div>
        <p class="mb-4 text-small text-gray-500">@lang('Platība nav obligāti jāievada').</p>
        <div class="mb-4">
            <label for="category_image" class="mb-2 block font-medium text-gray-700">@lang('Titulbilde')</label>
            <x-admin.file-upload :id="'category_image'" :name="'category_image'" :required="true"/>
        </div>
        <x-btn :type="'button'">
            {{ __('Izveidot') }}
        </x-btn>
    </form>
</x-layout.admin>
