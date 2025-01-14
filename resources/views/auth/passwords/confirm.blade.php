<x-layout.guest>
    <x-slot name="title">{{ __('Confirm Password') }}</x-slot>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="rounded-lg bg-white shadow-md">
                    <div class="flex justify-center bg-gray-200 px-6 py-4 text-lg font-semibold">
                        <img src="{{ asset('images/storex-logo.png') }}" alt="Logo" class="h-8" />
                    </div>

                    <div class="px-6 py-4">
                        {{ __('Please confirm your password before continuing.') }}

                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="password" class="mb-2 block text-sm font-bold text-gray-700">
                                    {{ __('Password') }}
                                </label>

                                <div>
                                    <input
                                        id="password"
                                        type="password"
                                        class="focus:shadow-outline @error('password') @enderror w-full appearance-none rounded border border-gray-200 px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                                        name="password"
                                        required
                                        autocomplete="current-password"
                                    />

                                    @error('password')
                                        <span class="text-small mt-2 text-red-500">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="flex items-center justify-between">
                                    <x-btn :type="'button'">
                                        {{ __('Confirm Password') }}
                                    </x-btn>
                                    @if (Route::has('password.request'))
                                        <a
                                            class="inline-block align-baseline text-sm font-bold text-blue-500 hover:text-blue-800"
                                            href="{{ route('password.request') }}"
                                        >
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.guest>
