<x-layout.admin>
    <x-slot name="title">Atjaunot kategoriju</x-slot>
    <x-admin.status-message/>
    <form class="w-full max-w-4xl rounded bg-white p-6 shadow-md" action="#"
          method="POST">
        @method('PUT')
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
        <div class="mb-4">
            <label for="category_image" class="mb-2 block font-medium text-gray-700">@lang('Titulbilde')</label>
            <x-admin.file-upload :id="'category_image'" :name="'category_image'" :required="true"/>
        </div>
        <x-btn :type="'button'">
            {{ __('Izveidot') }}
        </x-btn>
    </form>
</x-layout.admin>
