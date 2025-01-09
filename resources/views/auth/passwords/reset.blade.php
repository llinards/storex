<x-layout.admin>
    <x-slot name="title">{{ __('Reset Password') }}</x-slot>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="rounded-lg bg-white shadow-md">
                    <div class="flex justify-center bg-gray-200 px-6 py-4 text-lg font-semibold">
                        <img src="{{ asset('images/storex-logo.png') }}" alt="Logo" class="h-8"/>
                    </div>

                    <div class="px-6 py-4">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}"/>

                            <div class="mb-4">
                                <label for="email" class="mb-2 block text-sm font-bold text-gray-700">
                                    {{ __('Email Address') }}
                                </label>

                                <div>
                                    <input
                                        id="email"
                                        type="email"
                                        class="focus:shadow-outline @error('email') @enderror w-full appearance-none rounded border border-red-500 px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                                        name="email"
                                        value="{{ $email ?? old('email') }}"
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
                                <label for="password" class="mb-2 block text-sm font-bold text-gray-700">
                                    {{ __('Password') }}
                                </label>

                                <div>
                                    <input
                                        id="password"
                                        type="password"
                                        class="focus:shadow-outline @error('password') @enderror w-full appearance-none rounded border border-red-500 px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                                        name="password"
                                        required
                                        autocomplete="new-password"
                                    />

                                    @error('password')
                                    <span class="mt-2 text-xs italic text-red-500">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="password-confirm" class="mb-2 block text-sm font-bold text-gray-700">
                                    {{ __('Confirm Password') }}
                                </label>

                                <div>
                                    <input
                                        id="password-confirm"
                                        type="password"
                                        class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                                        name="password_confirmation"
                                        required
                                        autocomplete="new-password"
                                    />
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="flex items-center justify-between">
                                    <x-btn :type="'button'">
                                        {{ __('Reset Password') }}
                                    </x-btn>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.admin>
