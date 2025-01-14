<x-layout.admin>
    <x-slot name="title">Sākums</x-slot>
    <x-admin.status-message/>
    <div class="container mx-auto mt-8">
        <h2 class="text-center mb-4">@lang('Visas kategorijas')</h2>
        @if ($categories->isEmpty())
            <x-info-status-message :text="__('Kategorijas nav atrastas')"/>
        @else
            <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Nosaukums</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Izveidots</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Rediģēts</th>
                    <th colspan="2"/>
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
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <form
                                action="{{ route('admin.category.destroy', ['category' => $category->id]) }}"
                                method="POST"
                            >
                                @csrf
                                @method('DELETE')
                                <button
                                    type="submit"
                                    title="Dzēst"
                                    onclick="return confirm('Vai tiešām vēlies dzēst kategoriju?')"
                                    class="text-red-600 hover:text-red-800"
                                >
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <div class="container mx-auto mt-8">
        <h2 class="text-center mb-4">@lang('Visi produkti')</h2>
        @if (!$categories->isEmpty())
            <x-info-status-message :text="__('Produkti nav atrasti')"/>
        @else
            <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                <thead class="bg-gray-100">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Nosaukums</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Izveidots</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Rediģēts</th>
                    <th colspan="2"/>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                @foreach ($categories as $category)
                    <p>Produkti lopā</p>
                    {{--                    <tr>--}}
                    {{--                        <td class="px-6 py-4 text-sm text-gray-700">{{ $category->title }}</td>--}}
                    {{--                        <td class="px-6 py-4 text-sm text-gray-500">{{ $category->created_at }}</td>--}}
                    {{--                        <td class="px-6 py-4 text-sm text-gray-500">{{ $category->updated_at }}</td>--}}
                    {{--                        <td class="px-6 py-4 text-center">--}}
                    {{--                            <a--}}
                    {{--                                href="{{ route('admin.category.show', ['category' => $category->id]) }}"--}}
                    {{--                                class="text-blue-600 hover:text-blue-800"--}}
                    {{--                            >--}}
                    {{--                                <i class="bi bi-pencil"></i>--}}
                    {{--                            </a>--}}
                    {{--                        </td>--}}
                    {{--                        <td class="px-6 py-4 text-center">--}}
                    {{--                            <form--}}
                    {{--                                action="{{ route('admin.category.destroy', ['category' => $category->id]) }}"--}}
                    {{--                                method="POST"--}}
                    {{--                            >--}}
                    {{--                                @csrf--}}
                    {{--                                @method('DELETE')--}}
                    {{--                                <button--}}
                    {{--                                    type="submit"--}}
                    {{--                                    title="Dzēst"--}}
                    {{--                                    onclick="return confirm('Vai tiešām vēlies dzēst kategoriju?')"--}}
                    {{--                                    class="text-red-600 hover:text-red-800"--}}
                    {{--                                >--}}
                    {{--                                    <i class="bi bi-trash"></i>--}}
                    {{--                                </button>--}}
                    {{--                            </form>--}}
                    {{--                        </td>--}}
                    {{--                    </tr>--}}
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-layout.admin>
