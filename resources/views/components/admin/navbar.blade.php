<div class="my-4 bg-gray-200 text-white">
    <div class="container mx-auto flex items-center justify-between px-6 py-4">
        <!-- Logo -->
        <div class="flex items-center">
            <div class="text-lg font-bold">
                <a href="{{ route('admin.index') }}">
                    <img src="{{ asset('images/storex-logo.png') }}" alt="Logo" class="h-8" />
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
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1"
                        />
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>
