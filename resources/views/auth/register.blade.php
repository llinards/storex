<x-layout.admin>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="bg-white shadow-md rounded-lg">
                    <div class="bg-gray-200 px-6 py-4 font-semibold text-lg">{{ __('Register') }}</div>

                    <div class="px-6 py-4">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                                    {{ __('Name') }}
                                </label>

                                <div>
                                    <input
                                        id="name"
                                        type="text"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                                        name="name"
                                        value="{{ old('name') }}"
                                        required
                                        autocomplete="name"
                                        autofocus
                                    />

                                    @error('name')
                                    <span class="text-red-500 text-xs italic mt-2">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                                    {{ __('Email Address') }}
                                </label>

                                <div>
                                    <input
                                        id="email"
                                        type="email"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        autocomplete="email"
                                    />

                                    @error('email')
                                    <span class="text-red-500 text-xs italic mt-2">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                                    {{ __('Password') }}
                                </label>

                                <div>
                                    <input
                                        id="password"
                                        type="password"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror"
                                        name="password"
                                        required
                                        autocomplete="new-password"
                                    />

                                    @error('password')
                                    <span class="text-red-500 text-xs italic mt-2">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">
                                    {{ __('Confirm Password') }}
                                </label>

                                <div>
                                    <input
                                        id="password-confirm"
                                        type="password"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        name="password_confirmation"
                                        required
                                        autocomplete="new-password"
                                    />
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="flex items-center justify-between">
                                    <button type="submit"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.admin>
