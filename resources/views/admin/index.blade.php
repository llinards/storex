<x-layout.admin>
    <x-slot name="title">Sākums</x-slot>
    <x-admin.status-message/>
    <div class="container mx-auto mt-8">
        <h2 class="mb-4 text-center">@lang('Visas kategorijas')</h2>
        @if ($categories->isEmpty())
            <x-info-status-message :text="__('Kategorijas nav atrastas')"/>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Statuss</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Nosaukums</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Izveidots</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Rediģēts</th>
                        <th colspan="2"/>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    @foreach ($categories as $category)
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-700">
                                @if ($category->is_available)
                                    <span class="rounded-full bg-green-100 px-2 py-1 text-green-800">
                                            @lang('Aktīvs')
                                        </span>
                                @else
                                    <span class="rounded-full bg-red-100 px-2 py-1 text-red-800">
                                            @lang('Neaktīvs')
                                        </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $category->title }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $category->created_at }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $category->updated_at }}</td>
                            <td colspan="2" class="flex gap-4 px-6 py-4">
                                <a
                                    href="{{ route('admin.category.show', ['category' => $category->id]) }}"
                                    class="text-blue-600 hover:text-blue-800"
                                    title="Rediģēt"
                                >
                                    <i class="bi bi-pencil"></i>
                                </a>
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
            </div>
        @endif
    </div>
    <div class="container mx-auto mt-8">
        <h2 class="mb-4 text-center">@lang('Visi produkti')</h2>
        @if ($products->isEmpty())
            <x-info-status-message :text="__('Produkti nav atrasti')"/>
        @else
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Statuss</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Nosaukums</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Kategorija</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Izveidots</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-600">Rediģēts</th>
                        <th colspan="2"/>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                    @foreach ($products as $product)
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-700">
                                @if ($product->is_available)
                                    <span class="rounded-full bg-green-100 px-2 py-1 text-green-800">
                                            @lang('Aktīvs')
                                        </span>
                                @else
                                    <span class="rounded-full bg-red-100 px-2 py-1 text-red-800">
                                            @lang('Neaktīvs')
                                        </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $product->title }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $product->category->title }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $product->created_at }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500">{{ $product->updated_at }}</td>
                            <td colspan="2" class="flex gap-4 px-6 py-4">
                                <a href="{{route('admin.product.show', $product->id)}}"
                                   class="text-blue-600 hover:text-blue-800">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{route('admin.product.destroy', $product->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        type="submit"
                                        title="Dzēst"
                                        onclick="return confirm('Vai tiešām vēlies dzēst produktu?')"
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
            </div>
        @endif
    </div>
</x-layout.admin>
