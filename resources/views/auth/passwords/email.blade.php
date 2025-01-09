<x-layout.guest>
    <x-slot name="title">{{ __('Reset Password') }}</x-slot>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="rounded-lg bg-white shadow-md">
                    <div class="flex justify-center bg-gray-200 px-6 py-4 text-lg font-semibold">
                        <img src="{{ asset('images/storex-logo.png') }}" alt="Logo" class="h-8"/>
                    </div>

                    <div class="px-6 py-4">
                        @if (session('status'))
                            <div
                                class="relative rounded border border-green-400 bg-green-100 px-4 py-3 text-green-700"
                                role="alert"
                            >
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="email" class="mb-2 block text-sm font-bold text-gray-700">
                                    {{ __('Email Address') }}
                                </label>

                                <div>
                                    <input
                                        id="email"
                                        type="email"
                                        class="focus:shadow-outline @error('email') @enderror w-full appearance-none rounded border border-gray-200 px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        autocomplete="email"
                                        autofocus
                                    />

                                    @error('email')
                                    <span class="mt-2 text-xs italic text-red-500">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="flex items-center justify-between">
                                    <x-btn :type="'button'">
                                        {{ __('Send Password Reset Link') }}
                                    </x-btn>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.guest>
