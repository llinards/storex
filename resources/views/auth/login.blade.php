<x-layout.admin>
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-full max-w-md">
                <div class="rounded-lg bg-white shadow-md">
                    <div class="bg-gray-200 px-6 py-4 text-lg font-semibold">{{ __('Login') }}</div>

                    <div class="px-6 py-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

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
                                        autocomplete="current-password"
                                    />

                                    @error('password')
                                        <span class="mt-2 text-xs italic text-red-500">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="flex items-center">
                                    <input
                                        class="form-check-input mr-2 leading-tight"
                                        type="checkbox"
                                        name="remember"
                                        id="remember"
                                        {{ old('remember') ? 'checked' : '' }}
                                    />

                                    <label class="text-sm text-gray-700" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="flex items-center justify-between">
                                    <button
                                        type="submit"
                                        class="focus:shadow-outline rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700 focus:outline-none"
                                    >
                                        {{ __('Login') }}
                                    </button>

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
</x-layout.admin>
