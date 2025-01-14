<x-layout.guest>
    <x-slot name="title">{{ __('Login') }}</x-slot>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="rounded-lg bg-white shadow-md">
                    <div class="flex justify-center bg-gray-200 px-6 py-4 text-lg font-semibold">
                        <img src="{{ asset('images/storex-logo.png') }}" alt="Logo" class="h-8" />
                    </div>

                    <div class="px-6 py-4">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="mb-2 block text-sm font-bold text-gray-700">
                                    {{ __('Name') }}
                                </label>

                                <div>
                                    <input
                                        id="name"
                                        type="text"
                                        class="focus:shadow-outline @error('name') @enderror w-full appearance-none rounded border border-gray-200 px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                                        name="name"
                                        value="{{ old('name') }}"
                                        required
                                        autocomplete="name"
                                        autofocus
                                    />

                                    @error('name')
                                        <span class="text-small mt-2 text-red-500">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

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
                                    />

                                    @error('email')
                                        <span class="text-small mt-2 text-red-500">
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
                                        class="focus:shadow-outline @error('password') @enderror w-full appearance-none rounded border border-gray-200 px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                                        name="password"
                                        required
                                        autocomplete="new-password"
                                    />

                                    @error('password')
                                        <span class="text-small mt-2 text-red-500">
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
                                        {{ __('Register') }}
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
