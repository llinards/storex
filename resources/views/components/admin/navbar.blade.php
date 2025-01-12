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
            <a href="{{ route('admin.index') }}" class="text-black">@lang('Sākums')</a>
            @if (Route::currentRouteName() !== 'category.create')
                <span class="text-black">|</span>
                <a href="{{ route('admin.category.create') }}" class="text-black">@lang('Jauna kategorija')</a>
            @endif
        </div>

        <div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="rounded px-4 py-2 text-black">
                    <i class="bi bi-box-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>
</div>
