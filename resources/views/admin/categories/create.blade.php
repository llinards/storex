<x-layout.admin>
    <x-slot name="title">Izveidot jaunu kategoriju</x-slot>
    <x-admin.status-message/>
    <form class="bg-white p-6 rounded shadow-md w-full max-w-xl" action="{{route('category.store')}}" method="POST">
        @method('POST')
        @csrf
        <div class="mb-4">
            <label for="category_title" class="block text-gray-700 font-medium mb-2">@lang('Nosaukums')</label>
            <input
                type="text"
                id="category_title"
                name="category_title"
                class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
        </div>
        <div class="mb-4">
            <label for="category_description" class="block text-gray-700 font-medium mb-2">@lang('Apraksts')</label>
            <textarea
                id="category_description"
                name="category_description"
                rows="4"
                class="w-full px-3 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
            ></textarea>
        </div>
        <div class="mb-4">
            <label for="category_image" class="block text-gray-700 font-medium mb-2">@lang('Titulbilde')</label>
            <x-admin.file-upload :id="'category_image'" :name="'category_image'" :required="true"/>
        </div>
        <x-btn>
            {{ __('Izveidot') }}
        </x-btn>
    </form>
</x-layout.admin>
