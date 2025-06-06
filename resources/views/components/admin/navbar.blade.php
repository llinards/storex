<div class="my-4 bg-gray-200 text-white">
    <div class="container mx-auto flex items-center justify-between px-6 py-4">
        <!-- Logo -->
        <div class="flex items-center">
            <div class="text-lg font-bold">
                <a href="{{ route('admin.index') }}">
                    <img src="{{ asset('images/storex-logo.png') }}" alt="Logo" class="h-8"/>
                </a>
            </div>
        </div>

        <div class="pace-x-6 hidden gap-3 md:flex">
            <a
                href="{{ route('admin.index') }}"
                class="{{ request()->routeIs('admin.index') ? 'border-b-2 border-black' : '' }} text-black"
            >
                @lang('Sākums')
            </a>
            <span class="text-black">|</span>
            <a
                href="{{ route('admin.category.create') }}"
                class="{{ request()->routeIs('admin.category.create') ? 'border-b-2 border-black' : '' }} text-black"
            >
                @lang('Jauna kategorija')
            </a>
            <span class="text-black">|</span>
            <a
                href="{{ route('admin.product.create') }}"
                class="{{ request()->routeIs('admin.product.create') ? 'border-b-2 border-black' : '' }} text-black"
            >
                @lang('Jauns produkts')
            </a>
            <span class="text-black">|</span>
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <a
                    class="{{ app()->getLocale() === $localeCode ? 'border-b-2 border-red-600' : '' }} text-black"
                    hreflang="{{ $localeCode }}"
                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                >
                    {{ $properties['native'] }}
                </a>
            @endforeach
        </div>

        <div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="rounded px-4 py-2 text-black">Beigt darbu</button>
            </form>
        </div>
    </div>
</div>
