<x-layout.admin>
    <x-slot name="title">Sākums</x-slot>
    <x-admin.status-message />
    <div class="container mx-auto mt-8">
        @if ($categories->isEmpty())
            <x-info-status-message />
        @else
            <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Nosaukums</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Izveidots</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Rediģēts</th>
                        <th />
                        <th />
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($categories as $category)
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $category->title }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $category->created_at }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $category->updated_at }}</td>
                            <td class="px-6 py-4 text-center">
                                <a
                                    href="{{ route('admin.category.show', ['category' => $category->id]) }}"
                                    class="text-blue-600 hover:text-blue-800"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="inline h-5 w-5"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536M9 11l-4 4v4h4l4-4m1.768-6.768L9 11m6 6l-2 2m-3-7l6-6"
                                        />
                                    </svg>
                                </a>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <a href="#" class="text-red-600 hover:text-red-800">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="inline h-5 w-5"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M1 7h22"
                                        />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-layout.admin>
